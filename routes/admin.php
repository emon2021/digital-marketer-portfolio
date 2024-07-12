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

   //___ resume.controller ___
   Route::controller(\App\Http\Controllers\Admin\ResumeController::class)->group(function () {
      Route::get('/resume/create', 'create')->name('resume.create'); 
      Route::post('/resume/update/{id}','update')->name('resume.update');
   });
   //___ experience.controller ___
   Route::controller(\App\Http\Controllers\Admin\ExperienceController::class)->group(function () {
      Route::get('/experience/index', 'index')->name('experience.index');
      Route::post('/experience/store','store')->name('experience.store');
      Route::get('/experience/edit','edit')->name('experience.edit'); 
      Route::post('/experience/update/{id}','update')->name('experience.update');
      Route::delete('/experience/destroy/{id}','destroy')->name('experience.destroy');
      Route::get('/experience/status','status')->name('experience.status');
      Route::get('/experience/create','create')->name('experience.create');
      Route::post('/experience/ex-update/{id}','ex_update')->name('experience.ex_update');
   });
   //___ education.controller ___
   Route::controller(\App\Http\Controllers\Admin\EducationController::class)->group(function () {
      Route::get('/education/index', 'index')->name('education.index');
      Route::post('/education/store','store')->name('education.store');
      Route::get('/education/edit','edit')->name('education.edit'); 
      Route::post('/education/update/{id}','update')->name('education.update');
      Route::delete('/education/destroy/{id}','destroy')->name('education.destroy');
      Route::get('/education/status','status')->name('education.status');
      Route::get('/education/create','create')->name('education.create');
      Route::post('/education/ex-update/{id}','ex_update')->name('education.ex_update');
   });
   //___ about.controller ___
   Route::controller(\App\Http\Controllers\Admin\AboutController::class)->group(function () {
      Route::get('/about/title-create','title_create')->name('about.title_create');
      Route::post('/about/about-update/{id}','about_update')->name('about.about_update');
      Route::get('/about/create','create')->name('about.create');
      Route::post('/about/update/{id}','update')->name('about.update');
   });
   //___ testimonial.controller ___
   Route::controller(\App\Http\Controllers\Admin\TestimonialController::class)->group(function () {
      Route::get('/testimonial/create','create')->name('testimonial.create');
      Route::post('/testimonial/ex-update/{id}','ex_update')->name('testimonial.ex_update');
      Route::get('/testimonial/index','index')->name('testimonial.index');
      Route::post('/testimonial/store','store')->name('testimonial.store');
      Route::get('/testimonial/edit','edit')->name('testimonial.edit');
      Route::post('/testimonial/update/{id}','update')->name('testimonial.update');
      Route::delete('/testimonial/destroy/{id}','destroy')->name('testimonial.destroy');
      Route::get('/testimonial/status','status')->name('testimonial.status');
   });
   //___ blog.controller ___
   Route::controller(\App\Http\Controllers\Admin\BlogController::class)->group(function () {
      Route::get('/blog/create','create')->name('blog.create');
      Route::post('/blog/ex-update/{id}','ex_update')->name('blog.ex_update');
      Route::get('/index/blog','index')->name('blog.index');
      Route::post('/blog/store','store')->name('blog.store');
      Route::get('/blog/edit','edit')->name('blog.edit');
      Route::post('/blog/update/{id}','update')->name('blog.update');
      Route::delete('/blog/destroy/{id}','destroy')->name('blog.destroy');
      Route::get('/blog/status','status')->name('blog.status');
   });
   //____ settings.controller ___
   Route::controller(\App\Http\Controllers\Admin\SettingsController::class)->group(function () {
      Route::get('/settings','create')->name('settings.create');
      Route::post('/settings/update/{id}','update')->name('settings.update');
   });
});