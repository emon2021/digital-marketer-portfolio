<?php 
use Illuminate\Support\Facades\Route;



Route::controller(\App\Http\Controllers\Auth\LoginController::class)->group(function () {
   Route::post('/admin/login', 'login')->name('admin.login'); 
   Route::post('/admin/logout', 'logout')->name('admin.logout');
});

//___ ADMIN ROUTES ___
Route::controller(\App\Http\Controllers\Admin\AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('admin.index')->middleware(['auth','is_admin']);
    Route::get('/admin', 'login_create')->name('admin.login.create')->middleware('to_admin');
});

//___ header.controller ___
Route::controller(\App\Http\Controllers\Admin\HeaderController::class)->middleware(['auth','is_admin'])->group(function () {
   Route::get('/header/create', 'create')->name('header.create'); 
   Route::post('/header/update/{id}','update')->name('header.update');
});