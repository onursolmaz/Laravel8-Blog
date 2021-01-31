<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        return view("home.user_profile");
    }

    public function myComment()
    {
        $datalist=Review::where("user_id","=",Auth::user()->id)->get();
        return view("home.user_comments",["datalist"=>$datalist]);

    }
    public function destroyMyComment(Review $review,$id)
    {
        $data=Review::find($id);
        $data->delete();
        return redirect()->back()->with("success","Comment deleted");

    }
    public function show(User $user)
    {

    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
