<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $appends = [
        "getParentsTree"
    ];

    public static function getParentsTree($category, $title)
    {
        if ($category->parent_id == 0){
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title . '>' . $title;

        return CategoryController::getParentsTree($parent, $title);
    }

    public function index()
    {
        $categories = Category::with('children')->get();
//        print_r($categories);
        return view("admin.category", ["categories" => $categories]);
    }


    public function add()
    {
        $categories = Category::with('children')->get();
        return view("admin.category_add", ["categories" => $categories]);
    }


    public function create(Request $request)
    {
        DB::table("categories")->insert([
            "parent_id" => $request->input("parent_id"),
            "title" => $request->input("title"),
            "slug" => $request->input("slug"),
            "keywords" => $request->input("keywords"),
            "status" => $request->input("status")
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
        $data = Category::find($id);
        $categories = Category::with('children')->get();
        return view("admin.category_edit", ["data" => $data, "categories" => $categories]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->parent_id = $request->input("parent_id");
        $category->title = $request->input("title");
        $category->keywords = $request->input("keywords");
        $category->slug = $request->input("slug");
        $category->status = $request->input("status");
        $category->save();
        return redirect()->route("admin_category");
    }


    public function destroy(Category $category, $id)
    {
        DB::table("categories")->where("id", "=", $id)->delete();
        return redirect()->route("admin_category");
    }
}
