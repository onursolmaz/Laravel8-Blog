<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
//        $posts=DB::table("posts")->get();
        return view("admin.post", ["posts" => $posts]);
    }


    public function create()
    {
        $categories = Category::with('children')->get();
        return view("admin.post_add", ["categories" => $categories]);

    }


    public function store(Request $request)
    {
        $data = new Post;
        $data->user_id = Auth::id();
        $data->title = $request->input("title");
        $data->content = $request->input("content");
        $data->category_id = $request->input("category_id");
        $data->keywords = $request->input("keywords");
        $data->status = $request->input("status");
        $data->slug = $request->input("slug");
        if($request->file("image")!=null)
            $data->image=Storage::putFile("images",$request->file("image"));
        $data->save();

        return redirect()->route("admin_post")->with("success","Blog Added");
    }


    public function show(Post $post)
    {
        //
    }


    public function edit(Post $post, $id)
    {
        $data = Post::find($id);
        $categories = Category::with('children')->get();
        return view("admin.post_edit", ["data" => $data, "categories" => $categories]);


    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->input("title");
        $post->category_id = $request->input("category_id");
        $post->content = $request->input("content");
        $post->keywords = $request->input("keywords");
        $post->slug = $request->input("slug");
        $post->status = $request->input("status");
        if($request->file("image")!=null)
            $post->image=Storage::putFile("images",$request->file("image"));
        $post->save();
        return redirect()->route("admin_post");
    }


    public function destroy($id)
    {
        $post = Post::find($id);
        $comment = Review::where("post_id", $id)->get();
        $images=Image::where("post_id",$id);
        foreach ($images as $image)
            $image->delete();
        foreach ($comment as $com)
            $com->delete();
        $post->delete();
        return redirect()->route("admin_post")->with("success","Blog Deleted");
    }
}
