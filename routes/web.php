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
Route::get("/admin",[App\Http\Controllers\admin\HomeController::class,"index"])->name("adminHome")->middleware("auth");
Route::get("/admin/login",[HomeController::class,"login"])->name("admin_login");
Route::post("/admin/logincheck",[HomeController::class,"logincheck"])->name("admin_logincheck");
//Route::get("/admin/logout",[HomeController::class,"logout"])->name("admin_logout");
Route::get("/admin/logout",[HomeController::class,"logout"])->name("admin_logout");



