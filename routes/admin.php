<?php 
use Illuminate\Support\Facades\Route;



Route::controller(\App\Http\Controllers\Auth\LoginController::class)->group(function () {
   Route::post('/admin/login', 'login')->name('admin.login'); 
});

//___ ADMIN ROUTES ___
Route::controller(\App\Http\Controllers\Admin\AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('admin.index')->middleware(['auth','is_admin']);
    Route::get('/admin/login/create', 'login_create')->name('admin.login.create');
});