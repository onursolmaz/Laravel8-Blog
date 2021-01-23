<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\isEmpty;

class SettingController extends Controller
{

    public function index()
    {
        $data=Setting::first();
        if(!isEmpty($data)){
            $data=new Setting();
            $data->title="Blog title";
            $data->save();
            $data=Setting::first();
        }
        return view("admin.setting_edit",["data"=>$data]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Setting $setting)
    {

    }
    public function edit(Setting $setting)
    {

    }

    public function update(Request $request)
    {
        $id=$request->input("id");
        $setting = Setting::find($id);
        $setting->title = $request->input("title");
        $setting->keywords = $request->input("keywords");
        $setting->description = $request->input("description");
        $setting->email = $request->input("email");
        $setting->phone = $request->input("phone");
        $setting->facebook = $request->input("facebook");
        $setting->twitter = $request->input("twitter");
        $setting->instagram = $request->input("instagram");
        $setting->smtpserver = $request->input("smtpserver");
        $setting->smtpemail = $request->input("smtpemail");
        $setting->smtppassword = $request->input("smtppassword");
        $setting->smtpport = $request->input("smtpport");
        $setting->aboutus = $request->input("aboutus");
        $setting->contact = $request->input("contact");
        $setting->save();
        return redirect()->route("admin_home");

    }

    public function destroy(Setting $setting)
    {

    }
}
