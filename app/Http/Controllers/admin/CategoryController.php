<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $categories=DB::select("select * from categories");
        $categories=DB::table("categories")->get();

       return view("admin.category",["categories"=>$categories]);
    }


    public function add()
    {
        $categories=DB::table("categories")->get();
        return view("admin.category_add",["categories"=>$categories]);
    }


    public function create(Request $request)
    {
        DB::table("categories")->insert([
            "parent_id"=>$request->input("parent_id"),
            "title"=>$request->input("title"),
            "keywords"=>$request->input("keywords"),
            "status"=>$request->input("status")
    ]);

        return redirect()->route("admin_category");
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Category $category,$id)
    {
        DB::table("categories")->where("id","=",$id)->delete();
        return redirect()->route("admin_category");
    }
}
