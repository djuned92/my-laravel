<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Traits\ApiTrait;
use App\Models\Menu;
use App\Models\Role;
use App\Models\Privilege;
use Carbon\Carbon;
use Validator;

class MenuController extends Controller
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
        return view('backoffice.menu.f_menu');
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
            'menu'          => 'required|string',
            'parent_id'     => 'required|integer',
            'link'          => 'required',
            'menu_order'    => 'required|integer'
        ]);
        if($validator->fails()) {
            return $this->_400('Validator Error', $validator->errors());
        } else {
            DB::beginTransaction();
            try {
                $data_menu = [
                    'menu'  => $request->menu,
                    'parent_id' => $request->parent_id,
                    'link' => $request->link,
                    'is_published' => 1,
                    'menu_order' => $request->menu_order,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ];

                if($request->parent_id == 0) {
                    $data_menu['level'] = 0;
                    $data_menu['icon']  = $request->icon;
                } else {
                    $menu = Menu::find($request->parent_id);
                    $data_menu['level'] = $menu->level + 1;
                    $data_menu['icon']  = null;
                }

                // dd($data_menu);
                $menu_id = Menu::create($data_menu)->id;

                $roles = Role::all();
                $data_app_priv = [];
                foreach ($roles as $key => $value) {
                    $rows['role_id']    = $value->id;
                    $rows['menu_id']    = $menu_id;
                    $rows['can_create'] = ($value->id == 1) ? 1:0;
                    $rows['can_read']   = ($value->id == 1) ? 1:0;
                    $rows['can_update'] = ($value->id == 1) ? 1:0;
                    $rows['can_delete'] = ($value->id == 1) ? 1:0;
                    $rows['created_at'] = Carbon::now()->format('Y-m-d H:i:s');

                    $data_app_priv[] = $rows;
                }
                // dd($data_app_priv);
                Privilege::insert($data_app_priv);
                
                DB::commit();
        
                return $this->_200('Menu success to be created.!');
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
        // $data['menu'] = Menu::find($id);
        $data = Menu::with('parent')->get();
        dd($data);
        return view('backoffice.menu.f_menu', $data);
    }

    /**
     * Update the specified resource in storage.
     * NOTICE method put, with postman send with x-www-form-urlencode
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'menu'          => 'required|string',
            'parent_id'     => 'required|integer',
            'link'          => 'required',
            'menu_order'    => 'required|integer'
        ]);

        if($validator->fails()) {
            return $this->_400('Validator Error', $validator->errors());
        } else {
            DB::beginTransaction();
            try {
                $data_menu = [
                    'menu'  => $request->menu,
                    'parent_id' => $request->parent_id,
                    'link' => $request->link,
                    'is_published' => 1,
                    'menu_order' => $request->menu_order
                ];

                if($request->parent_id == 0) {
                    $data_menu['level'] = 0;
                    $data_menu['icon']  = $request->icon;
                } else {
                    $menu = Menu::find($request->parent_id);
                    $data_menu['level'] = $menu->level + 1;
                    $data_menu['icon']  = null;
                }

                $menu_id = Menu::find($id)->update($data_menu);
                
                DB::commit();
        
                return $this->_201('Menu success to be updated.!');
            } catch (\Exception $e) {        
                DB::rollback();
                return $this->_500('Internal Server Error', $e->getMessage(), $e->getTrace());
            }
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
        Menu::destroy($id);
        return $this->_200('Menu success to deleted.!');
    }
}
