<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $appends = [
        "getCount",
    ];

    public static function getCount()
    {
        $count_comment= Review::where("status","new")->get()->count();
        $count_blog= Post::where("status","waiting")->get()->count();
        $count_message= Message::where("status","New")->get()->count();
        return [
            "count_comment"=>$count_comment,
            "count_blog"=>$count_blog,
            "count_message"=>$count_message
        ];
    }


    public function index(){
       $count_comment= Review::where("status","new")->get()->count();
       $count_blog= Post::where("status","waiting")->get()->count();
       $count_message= Message::where("status","New")->get()->count();
        return view("admin.index",["count_comment"=>$count_comment,"count_blog"=>$count_blog,"count_message"=>$count_message]);
    }

}
