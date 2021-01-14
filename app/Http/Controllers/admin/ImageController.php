<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function index()
    {

    }

    public function create($post_id)
    {
        $data=Post::find($post_id);
        $images=DB::table("images")->where("post_id","=",$post_id)->get();
        return view("admin.image_add",["data"=>$data,"images"=>$images]);

    }


    public function store(Request $request,$post_id)
    {
        $data=new Image();
        $data->title = $request->input("title");
        $data->post_id= $post_id;
        $data->image=Storage::putFile("images",$request->file("image"));
        $data->save();
        return redirect()->route("admin_image_add",["post_id"=>$post_id]);

    }


    public function show(Image $image)
    {

    }

    public function edit(Image $image)
    {

    }

    public function update(Request $request, Image $image)
    {

    }

    public function destroy($id)
    {

        $post = Image::find($id);
        $post_id=$post->post_id;
        $post->delete();
        return redirect()->route("admin_image_add",["post_id"=>$post_id]);

    }
}
