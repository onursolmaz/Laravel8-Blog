<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Utils;

class UserController extends Controller
{

    public function index()
    {
        $datalist=User::all();
        return view("admin.user",["datalist"=>$datalist]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(User $user)
    {
        //
    }


    public function edit($id)
    {
        $data=User::find($id);
        return view("admin.user_edit",["data"=>$data]);
    }


    public function update(Request $request, User $user,$id)
    {
        $data=User::find($id);
        $data->name=$request->input("name");
        $data->email=$request->input("email");
        if($request->file("image")!=null)
            $data->profile_photo_path=Storage::putFile("profile-photos",$request->file("image"));
        $data->save();
        return redirect()->route("admin_users")->with("success","User Information Updated");
    }
    public function user_roles(User $user,$id)
    {
        $data=User::find($id);
        $datalist=Role::all()->sortBy("name");
        return view("admin.user_roles",["data"=>$data,"datalist"=>$datalist]);
    }
    public function user_role_store(User $user,Request $request,$id)
    {
        $user=User::find($id);
        $roleid=$request->input("roleid");
        $user->roles()->attach($roleid);
        return redirect()->back()->with("success","Role added for user");

    }
    public function user_role_delete(User $user,Request $request,$userid,$roleid)
    {
        $user=User::find($userid);
        $user->roles()->detach($roleid);
        return redirect()->back()->with("success","Role deleted for user");
    }


    public function destroy(User $user)
    {
        //
    }
}
