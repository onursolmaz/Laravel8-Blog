<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get("/home",[HomeController::class,"index"]);


## ADMİN
Route::get("/admin",[App\Http\Controllers\admin\HomeController::class,"index"])->name("admin_home")->middleware("auth");
Route::get("/admin/login",[HomeController::class,"login"])->name("admin_login");
Route::post("/admin/logincheck",[HomeController::class,"logincheck"])->name("admin_logincheck");
Route::get("/admin/logout",[HomeController::class,"logout"])->name("admin_logout");

Route::middleware("auth")->prefix("admin")->group(function (){
    //admin/category, admin/add şeklinde oluştur

    Route::get("/",[\App\Http\Controllers\admin\HomeController::class,"index"])->name("admin_home");

    Route::get("category",[\App\Http\Controllers\admin\CategoryController::class,"index"])->name("admin_category");
    Route::get("category/add",[\App\Http\Controllers\admin\CategoryController::class,"add"])->name("admin_category_add");
    Route::post("category/create",[\App\Http\Controllers\admin\CategoryController::class,"create"])->name("admin_category_create");
    Route::post("category/update",[\App\Http\Controllers\admin\CategoryController::class,"update"])->name("admin_category_update");
    Route::get("category/delete{id}",[\App\Http\Controllers\admin\CategoryController::class,"destroy"])->name("admin_category_delete");
    Route::get("category/show",[\App\Http\Controllers\admin\CategoryController::class,"show"])->name("admin_category_show");

});



