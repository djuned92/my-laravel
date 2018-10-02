<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Traits\ApiTrait;
use App\User;
use App\Models\Role;
use App\Models\Profile;
use Validator;
use Carbon\Carbon;

class UserController extends Controller
{
    use ApiTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.user.f_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username'          => 'required|unique:users,username',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required',
            'confirm_password'  => 'required|same:password',
            'fullname'          => 'required|string', 
            'address'           => 'required', 
            'gender'            => 'required', 
        ]);

        if($validator->fails()) {
            return $this->_400('Validator errors ', $validator->errors());
        } else {
            try {
                $data_user = [
                    'username'  => $request->username,
                    'email'     => $request->email,
                    'password'  => bcrypt($request->password),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ];

                $data_user['role_id'] = ($request->role_id == 1) ? 2 : 2;

                $user_id = User::create($data_user)->id;

                $data_profile = [
                    'user_id'   => $user_id,
                    'fullname'  => $request->fullname,
                    'address'   => $request->address,
                    'gender'    => $request->gender,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ];

                Profile::create($data_profile);

                DB::commit();

                return $this->_200('User success to be created.!'); 
            } catch (\Exception $e) {
                DB::rollback();
                return $this->_500('Internal Server Error', $e->getMessage(), $e->getTrace());
                
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = Role::with([
            'user' => function($q) {
                $q->select('*');
            },
            'user.profile' => function($q) {
                $q->select(['user_id','fullname','address','gender']);
            }
        ])->select(['id','name'])->find($id);
        dd($data);
        return view('backoffice.user.f_user', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'fullname'          => 'required|string', 
            'address'           => 'required', 
            'gender'            => 'required', 
        ]);

        if($validator->fails()) {
            return $this->_400('Validator errors', $validator->errors());
        } else {
            // dd($request->all());
            Profile::where('user_id',$id)->update($request->all());
            return $this->_201('User success to be updated.!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return $this->_200('User success to deleted.!');
    }
}
