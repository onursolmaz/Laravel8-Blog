<?php

namespace App\Http\Controllers;

use App\Http\Controllers\admin\CategoryController;
use App\Models\Category;
use App\Models\Message;
use App\Models\Post;
use App\Models\Review;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class HomeController extends Controller
{
    protected $appends = [
        "getCategoryCount"
    ];

    public static function getCategoryCount($id)
    {
        return Post::where("category_id",$id)->count();
    }




    public static function categoryList()
    {
        return Category::where("parent_id", "=", 0)->with("children")->get();
    }

    public static function getSettings()
    {
        return Setting::first();
    }
    public static function countReview($id){
        return Review::where("post_id",$id)->get()->count();
    }


    public function index()
    {
        $setting = Setting::first();
        $slider=Post::where("id",1)->orWhere("id",3)->orWhere("id",16)->select("title","image","id","keywords","user_id","status")->get();
        $lastBlogs=Post::select("title","image","content","created_at","id","user_id","status","keywords")->limit(20)->orderByDesc("id")->get();
        $categoryList=Category::where("parent_id",0)->get();
        $data=[
            "setting"=>$setting,
            "slider"=>$slider,
            "lastBlogs"=>$lastBlogs,
            "categoryList"=>$categoryList,
            "page"=>"home"
        ];
        return view("home.index", $data);
    }
    public function post($id,$user_id)
    {
        $data= Post::find($id);
        $user=User::find($user_id);
        $reviews=Review::where("post_id",$id)->get();
        $categoryList=Category::where("parent_id",0)->get();
        return view("home.blog_details", ["data"=>$data,"user"=>$user,"reviews"=>$reviews,"categoryList"=>$categoryList]);

    }

    public function categoryposts($id)
    {

        $datalist= Post::where("category_id",$id)->get();
        $data=Category::find($id);
        return view("home.posts",["data" => $data,"datalist"=>$datalist]);
    }

    public function getBlog(Request $request)
    {
        $search=$request->input("search");

        $count=Post::where("title","like","%".$search."%")->count();
        if($count==1){
            $data=Post::where("title","like","%".$search."%")->first();
            return redirect()->route("post",["id" => $data->id,"user_id"=>$data->user_id]);
        }else{
            return redirect()->route("blogList",["search"=>$search]);
        }
    }

    public function blogList($search)
    {
        $datalist=Post::where("title","like","%".$search."%")->get();
//        print_r($datalist);
        return view("home.search_posts",["search"=>$search,"datalist"=>$datalist]);
    }


    public function about()
    {
        $setting = Setting::first();
        return view("home.aboutus", ["setting" => $setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view("home.contact", ["setting" => $setting]);
    }

    public function sendmessage(Request $request)
    {
        $data=new Message();
        $data->name=$request->input("name");
        $data->email=$request->input("email");
        $data->phone=$request->input("phone");
        $data->message=$request->input("message");
        $data->save();
        return redirect()->route("contact")->with("success","Your message has been sent. Thank you");
    }

    public function login()
    {
        return view("admin.login");
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod("post")) {
            $credentials = $request->only("email", "password");
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended("admin");
            }
            return back()->withErrors([
                "email" => "The provided credentials do not match our record",
            ]);
        } else {
            return view("admin.login");
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }


}
