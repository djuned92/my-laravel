<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\ApiTrait;
use Validator;
use JWTAuth;
use App\User;
use JWTFactory;
use Tymon\JWTAuth\PayloadFactory;

class UserController extends Controller
{
	use ApiTrait;

    public function login(Request $request)
    {
    	$validator = Validator::make($request->all(), [
			'email' 	=> 'required|email',
			'password' 	=> 'required'
		]);

		if($validator->fails()) {
			return $this->_400('Validation Error', $validator->errors());
		} else {
			
			$credentials = $request->only('email','password');
			try {
				if($request->email != 'admin@admin.com') {
					return response()->json(['hint' => 'Email must be admin@admin.com'], 401);
				} else {

					// $user = User::first();

					// $token = JWTAuth::fromUser($user);
					
					$customClaims = ['foo' => 'bar', 'baz' => 'bob'];

					$payload = JWTFactory::make($customClaims);

					$token = JWTAuth::encode($payload);

					// $token = JWTAuth::getToken();

					return response()->json(compact('token'));
				}
			} catch (JWTAuthException $e) {
				return response()->json(['error' => 'could_not_create_token'], 500);
			}
		}
    }

    public function getUser(Request $request)
    {
    	$user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }
}
