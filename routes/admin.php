<?php 
use Illuminate\Support\Facades\Route;



Route::controller(\App\Http\Controllers\Auth\LoginController::class)->group(function () {
//    Route::post('/login', 'login')->name('admin.login'); 
});

//___ ADMIN ROUTES ___
Route::controller(\App\Http\Controllers\Admin\AdminController::class)->group(function () {
    // Route::get('/admin', 'index')->name('admin.index');
    Route::get('/admin/login', 'login_create')->name('admin.login.create');
});