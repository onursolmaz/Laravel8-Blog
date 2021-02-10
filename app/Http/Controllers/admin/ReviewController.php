<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {
        $datalist=Review::all();
//        print_r($datalist);
//        exit();
        return view("admin.comments",["datalist"=>$datalist]);
    }


    public function create()
    {
        //
    }


    public function newComment(Request $request)
    {
        $data=Review::where("status","new")->get();
        return view("admin.comments",["datalist"=>$data]);
    }

    public function show(Review $review,$id)
     {
        $data=Review::find($id);
        return view("admin.comment_edit",["data"=>$data]);

    }

    public function edit(Review $review)
    {
        //
    }


    public function update(Request $request, Review $review,$id)
    {
        $data=Review::find($id);
        $data->status=$request->input("status");
        $data->save();
        return back()->with("success","Comment updated");

    }


    public function destroy(Review $review,$id)
    {
        $data=Review::find($id);
        $data->delete();
        return back()->with("success","Comment Deleted");
    }
}
