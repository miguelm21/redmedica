<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\permission;
use App\administrator;
use App\user;
use App\Role;


class permissionSetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function listPermissionSet($id)
     {
       $permissions = permission::orderBy('name','asc')->paginate(10);
       $admin = administrator::find($id);
         return view('administrators.permission')->with('permissions', $permissions)->with('admin', $admin);
     }

     public function PermissionSetStore($id,$permission)
     {
       $user = user::where('administrator_id',$admin_id)->first();

       $permission = permission::where('display_name', 'Administrador');

       $role = role::where('name', 'admin');
       $role->attachPermissions($permission);

       return back()->with('success', 'Se a Habilitado el permiso');

     }


}
