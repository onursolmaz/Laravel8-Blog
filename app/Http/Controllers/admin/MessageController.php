<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        $datalist=Message::all();
        return view("admin.messages",["datalist"=>$datalist]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function newMessageshow(Message $message)
    {
        $datalist=Message::where("status","New")->get();
        return view("admin.messages",["datalist"=>$datalist]);

    }


    public function edit(Message $message,$id)
    {
        $data=Message::find($id);
        $data->status="Read";
        $data->save();
        return view("admin.message_edit",["data"=>$data]);;
    }


    public function update(Request $request, $id)
    {
        $data=Message::find($id);
        $data->note=$request->input("note");
        $data->save();
        return back()->with("success","Answer has been send");


    }


    public function destroy(Message $message,$id)
    {
        $data=Message::find($id);
        $data->delete();
        return redirect()->route("admin_message")->with("success","Message deleted");

    }
}
