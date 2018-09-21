<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Traits\ApiTrait;
use Models\Role;
use Models\Menu;
use Models\Privilege;
use Validator;

class RoleController extends Controller
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
        return view('backoffice.role.f_role');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $role_id = Role::create($request->all())->id;

            $menus = Menu::all();
            $data_app_priv = [];        
            foreach ($menus as $key => $value) {
                $rows['role_id']        = $role_id;
                $rows['menu_id']        = $value->id;
                $rows['can_create']     = ($role_id == 1) ? 1 : 0;
                $rows['can_read']       = ($role_id == 1) ? 1 : 0;
                $rows['can_update']     = ($role_id == 1) ? 1 : 0;
                $rows['can_delete']     = ($role_id == 1) ? 1 : 0;
                $rows['created_at']     = \Carbon::now();

                $data_app_priv[] = $rows;
            }

            Privilege::create($data_app_priv);
            DB::commit();
            return $this->_200('Role success to be created.!');
        } catch (Exception $e) {
            DB::rollback();
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
        $data['role'] = Role::find($id);
        return view('backoffice.role.f_role', $data);
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
            'name' => 'required|string'
        ]);

        if($validator->fails()) {
            return $this->_400('Validator Error', $validator->errors());
        } else {
            Role::find($id)->update($request->all());
            return $this->_201('Role success to updated.!');
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
        //
    }
}
