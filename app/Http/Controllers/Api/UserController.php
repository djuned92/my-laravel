<?php 

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Api\BaseController as BaseController;
use App\User;

use Carbon\Carbon;
use Validator;

class UserController extends BaseController
{
	public function register(Request $request) 
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required',
			'confirm_password' => 'required|same:password'
		]);

		if($validator->fails()) {
			return $this->_400('Validation Error', $validator->errors());
		}

		$data = [
			'name' 		=> $request->name,
			'email'		=> $request->email,
			'password' 	=> bcrypt($request->password)
		];

		$count_user = User::where('email',$request->email)->count();

		if($count_user > 0) {
			return $this->_409('Your email already exist.!');
		} else {
			$user = User::create($data);

			return $this->_200('User Register Successfuly.!');
		}

	}

	public function login(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'email' 	=> 'required|email',
			'password' 	=> 'required|'
		]);

		if($validator->fails()) {
			return $this->_400('Validation Error', $validator->errors());
		} else {
			if(!Auth::attempt($request->only(['email','password']))) {
				return $this->_401('Unauthorized');
			} else {
				$user = $request->user();
				$tokenResult = $user->createToken('Personal Access Token');
				$token = $tokenResult->token;

				$token->save();

				$response = [
					'access_token' 	=> $tokenResult->accessToken,
					'token_type' 	=> 'Bearer',
					'expires_at' 	=>  Carbon::parse($token->expires_at)->toDateTimeString()
				];

				return $this->_200('Success Login!.',$response);
			}
		}
	}

	public function logout()
	{
	 	if (Auth::check()) {
        	Auth::user()->token()->revoke(); 
			return $this->_200('Success Logout!.');
	    } else {
	        return $this->_500('Woops Something Went Wrong..!');
	    }

	}

	public function user(Request $request)
    {
        return response()->json($request->user());
    }
}