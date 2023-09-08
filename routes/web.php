<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyinfoController;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {

Route::post('/company_information',[CompanyinfoController::class, 'store']);
Route::get('/company-information',[CompanyinfoController::class, 'index']);
Route::get('/index',[CompanyinfoController::class, 'dashboard_data']);

Route::post('/Social_media',[CompanyinfoController::class, 'Social_update']);
Route::get('/social-media',[CompanyinfoController::class, 'Social_data']);

Route::post('/slider_data',[IndexController::class, 'slider_update']);
Route::get('/slider',[IndexController::class, 'slider_data']);

Route::post('/services_data',[IndexController::class, 'services_update']);
Route::get('/services',[IndexController::class, 'services_data']);

Route::post('/about_data',[IndexController::class, 'about_update']);
Route::get('/about',[IndexController::class, 'about_data']);

Route::post('/testimonial_data',[IndexController::class, 'testimonial_update']);
Route::get('/testimonial',[IndexController::class, 'testimonial_data']);

Route::post('/client_data',[IndexController::class, 'client_update']);
Route::get('/client',[IndexController::class, 'client_data']);


Route::post('/gallery_video',[IndexController::class, 'gallery_store']);
Route::get('/gallery-video',[IndexController::class, 'videogallery_data']);

Route::post('/gallery_data',[IndexController::class, 'gallery_image']);
Route::get('/gallery-image',[IndexController::class, 'gallery_data']);

Route::post('/change_password',[CompanyinfoController::class, 'password']);
// Admin Dashboard Pages =====>

Route::get('/company-image', function () {
    return view('admin_page.company-image');
});

Route::get('/pages-faq', function () {
    return view('admin_page.pages-faq');
});

Route::get('/users-profile', function () {
    return view('admin_page.users-profile');
});
Route::get('/add-gallery', function () {
    return view('admin_page.add-gallery');
});
Route::get('/add-video', function () {
    return view('admin_page.add-video');
});
Route::get('/admin_password', function () {
    return view('admin_page.admin_password');
});
});
// End Admin Dashboard Pages ==============!



// web_pages=======================>

Route::get('/', function () {
    return view('web_page.index');
});
Route::get('/about-us', function () {
    return view('web_page.about-us');
});
Route::get('/blog', function () {
    return view('web_page.blog');
});
Route::get('/blog2', function () {
    return view('web_page.blog2');
});
Route::get('/blog_details', function () {
    return view('web_page.blog_details');
});
Route::get('/commingsoon', function () {
    return view('web_page.commingsoon');
});
Route::get('/contact', function () {
    return view('web_page.contact');
});
Route::get('/error', function () {
    return view('web_page.error');
});
Route::get('/index2', function () {
    return view('web_page.index2');
});
Route::get('/index3', function () {
    return view('web_page.index3');
});
Route::get('/project', function () {
    return view('web_page.project');
});
Route::get('/project-details', function () {
    return view('web_page.project-details');
});
Route::get('/project2', function () {
    return view('web_page.project2');
});
Route::get('/web_services', function () {
    return view('web_page.web_services');
});
Route::get('/service-details', function () {
    return view('web_page.service-details');
});
// End web_page Pages ==============!
