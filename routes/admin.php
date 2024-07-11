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

//_____routes.which.is.protected.by.middleware.auth.is_admin_____
Route::middleware(['auth','is_admin'])->group(function () {
   //___ header.controller ___
   Route::controller(\App\Http\Controllers\Admin\HeaderController::class)->group(function () {
      Route::get('/header/create', 'create')->name('header.create'); 
      Route::post('/header/update/{id}','update')->name('header.update');
   });
   //___ services.controller ___
   Route::controller(\App\Http\Controllers\Admin\ServiceController::class)->group(function () {
      Route::get('/services/create', 'create')->name('services.create');
      Route::post('/services/update/{id}','update')->name('services.update');
      Route::get('/index','index')->name('services.index');
      Route::post('/services/store','store')->name('services.store');
      Route::get('/services/edit','edit')->name('services.edit');
      Route::post('/services/service-update/{id}','service_update')->name('service_update.update');
      Route::delete('/services/destroy/{id}','destroy')->name('services.destroy');
      Route::get('/services/status','status')->name('services.status');
   });
});