<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        //  $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
        //  $this->middleware('permission:role-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $roles = Role::orderBy('id','ASC')->paginate(5);
        return view('admin.role.view-role',compact('roles'));
    }

    public function create()
    {
         $permission = Permission::get();
        return view('admin.role.role-create',compact('permission'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            // 'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')
                ->with(['message'=>'Role created successfully','type'=>'success']);
    }

    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();

        return view('admin.role.role-show',compact('role','rolePermissions'));
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        return view('admin.role.role-edit',compact('role','permission','rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        // return  $request->all();
        $permission = [];
        $permission = $request->input('permission');

        $role_id =  Role::where('name',$request->name)->first()->id;
        $this->validate($request, [
            'name' => 'required',
            // 'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
        if($permission != null)
        {
            $role->syncPermissions($request->input('permission'));
        }else{
           $role = DB::table('role_has_permissions')->where('role_id', $role_id)->delete();
        }

        return redirect()->back()
                ->with(['message'=>'Role Update successfully','type'=>'success']);
    }

    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')
            ->with(['message'=>'Role deleted successfully','type'=>'success']);
    }

    public function roleChangeStatus(Request $request)
    {
        $statusChange = Role::where('id',$request->id)->update(['status'=>$request->status]);
        if($statusChange)
        {
            return array('message'=>'Role status  has been changed successfully','type'=>'success');
        }else{
            return array('message'=>'Role status has not changed please try again','type'=>'error');
        }
    }


}
