<?php

use App\Http\Controllers\admin\ImageController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get("/",[HomeController::class,"index"])->name("home");
Route::get("/about",[HomeController::class,"about"])->name("about");
Route::get("/contact",[HomeController::class,"contact"])->name("contact");
Route::post("/sendmessage",[HomeController::class,"sendmessage"])->name("sendmessage");
Route::get("/post/{id}/{user_id}",[HomeController::class,"post"])->name("post");
Route::get("/categoryposts/{id}",[HomeController::class,"categoryposts"])->name("categoryposts");

Route::post("/getBlog",[HomeController::class,"getBlog"])->name("getBlog");

Route::get("/blogList/{search}",[HomeController::class,"blogList"])->name("blogList");



## ADMİN
Route::get("/admin",[App\Http\Controllers\admin\HomeController::class,"index"])->name("admin_home")->middleware("auth");
Route::get("/admin/login",[HomeController::class,"login"])->name("admin_login");
Route::post("/admin/logincheck",[HomeController::class,"logincheck"])->name("admin_logincheck");
Route::get("/admin/logout",[HomeController::class,"logout"])->name("admin_logout");

Route::middleware("auth")->prefix("admin")->group(function (){
    //admin/category, admin/add şeklinde oluşturur
    #Admin
    Route::middleware('admin')->group(function (){

    Route::get("/",[\App\Http\Controllers\admin\HomeController::class,"index"])->name("admin_home");

    #Category
    Route::get("category",[\App\Http\Controllers\admin\CategoryController::class,"index"])->name("admin_category");
    Route::get("category/add",[\App\Http\Controllers\admin\CategoryController::class,"add"])->name("admin_category_add");
    Route::post("category/create",[\App\Http\Controllers\admin\CategoryController::class,"create"])->name("admin_category_create");
    Route::get("category/edit/{id}",[\App\Http\Controllers\admin\CategoryController::class,"edit"])->name("admin_category_edit");
    Route::post("category/update/{id}",[\App\Http\Controllers\admin\CategoryController::class,"update"])->name("admin_category_update");
    Route::get("category/delete{id}",[\App\Http\Controllers\admin\CategoryController::class,"destroy"])->name("admin_category_delete");
    Route::get("category/show",[\App\Http\Controllers\admin\CategoryController::class,"show"])->name("admin_category_show");

    #Post(blog)
    Route::prefix("post")->group(function (){
        Route::get("/",[PostController::class,"index"])->name("admin_post");
        Route::get("/create",[PostController::class,"create"])->name("admin_post_add");
        Route::post("/store",[PostController::class,"store"])->name("admin_post_store");
        Route::get("/edit/{id}",[PostController::class,"edit"])->name("admin_post_edit");
        Route::post("/update/{id}",[PostController::class,"update"])->name("admin_post_update");
        Route::get("/delete/{id}",[PostController::class,"destroy"])->name("admin_post_delete");
        Route::get("show",[PostController::class,"show"])->name("admin_post_show");
    });

    #Messages
    Route::prefix("messages")->group(function (){
        Route::get("/",[MessageController::class,"index"])->name("admin_message");
        Route::get("/edit/{id}",[MessageController::class,"edit"])->name("admin_message_edit");
        Route::post("/update/{id}",[MessageController::class,"update"])->name("admin_message_update");
        Route::get("/delete/{id}",[MessageController::class,"destroy"])->name("admin_message_delete");
        Route::get("show",[MessageController::class,"show"])->name("admin_message_show");
    });



   #Post İmage galery
    Route::prefix("image")->group(function (){
        Route::get("/create/{post_id}",[ImageController::class,"create"])->name("admin_image_add");
        Route::post("/store/{post_id}",[ImageController::class,"store"])->name("admin_image_store");
        Route::get("/delete/{id}",[ImageController::class,"destroy"])->name("admin_image_delete");
        Route::get("show",[ImageController::class,"show"])->name("admin_image_show");
    });

    ## Comments
    Route::prefix("comments")->group(function (){
        Route::get("/",[ReviewController::class,"index"])->name("admin_comment");
        Route::post("/update/{id}",[ReviewController::class,"update"])->name("admin_comment_update");
        Route::get("/delete/{id}",[ReviewController::class,"destroy"])->name("admin_comment_delete");
        Route::get("show/{id}",[ReviewController::class,"show"])->name("admin_comment_show");
    });

    #Setting
    Route::get("setting",[SettingController::class,"index"])->name("admin_setting");
    Route::post("setting/update",[SettingController::class,"update"])->name("admin_setting_update");

    });

});

Route::middleware("auth")->prefix("myaccount")->namespace("myaccount")->group(function (){
    Route::get("/",[UserController::class,"index"])->name("myaccount");
    Route::get("/mycomments",[UserController::class,"myComment"])->name("mycomments");
    Route::get("/deleteComment/{id}",[UserController::class,"destroyMyComment"])->name("user_comment_delete");
});

Route::middleware("auth")->prefix("user")->namespace("user")->group(function (){
    Route::get("/profile",[UserController::class,"index"])->name("userprofile");

    # For user blog add
    Route::prefix("post")->group(function (){
        Route::get("/",[BlogController::class,"index"])->name("user_post");
        Route::get("/create",[BlogController::class,"create"])->name("user_post_add");
        Route::post("/store",[BlogController::class,"store"])->name("user_post_store");
        Route::get("/edit/{id}",[BlogController::class,"edit"])->name("user_post_edit");
        Route::post("/update/{id}",[BlogController::class,"update"])->name("user_post_update");
        Route::get("/delete/{id}",[BlogController::class,"destroy"])->name("user_post_delete");
        Route::get("show",[BlogController::class,"show"])->name("user_post_show");
    });

});



