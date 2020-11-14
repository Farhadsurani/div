<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/index2', 'Web\Index2Controller@index');
Route::get('/index3', 'Web\Index3Controller@index');
Route::get('/about', 'Web\AboutController@index')->name('about');
Route::get('/contact', 'Web\ContactController@index')->name('contact');
Route::get('/blog', 'Web\BlogController@index')->name('blog');
Route::get('/courses', 'Web\CourseController@index')->name('courses');
Route::get('/faq', 'Web\FaqController@index')->name('faq');
Route::get('/service', 'Web\ServiceController@index')->name('service');
Route::get('/membership', 'Web\MembershipController@index')->name('membership');
Route::get('/portfolio', 'Web\PortfolioController@index')->name('portfolio');

Route::get('/chapters-list/{id}', 'Web\CourseController@chaptersList')->name('chapters-list');
Route::get('/watch-video/{id}', 'Web\CourseController@watchVideo')->name('watch-video');
Route::get('/course-details/{id}', 'Web\CourseController@courseDetails')->name('course-details');
Route::get('/web-course-details/{id}', 'Web\EventDetailsController@courseDetails')->name('web-course-details');

Route::get('/loginuser', 'Web\LoginUserController@index')->name('loginuser');
Route::get('/logout', 'Web\LoginUserController@logout')->name('logout');
Route::get('/registeruser/{type}/{var}', 'HomeController@register')->name('registeruser');
Route::post('/check', 'Web\PaymentController@check')->name('check');
Route::get('/event', 'Web\EventController@index')->name('event');
Route::get('/content/{id}', 'Web\CourseController@content')->name('content');
Route::get('/event-details', 'Web\EventDetailsController@index')->name('event-details');

Route::get('/payment', 'Web\PaymentController@index');

// route for processing payment
Route::post('/paypal', 'Web\PaymentController@payWithpaypal')->name('paypal');

// route for check status of the payment
Route::get('/status', 'Web\PaymentController@getPaymentStatus');

Route::post('/edit-profile', 'Web\ProfileController@updateProfile')->name('edit-profile');
Route::post('/news', 'Web\ContactController@news')->name('news');
Route::post('/contact-us','Web\ContactController@store')->name('contact-us');
Route::get('/gallery', 'Web\GalleryController@index')->name('gallery');

//composer.bat
//@echo OFF
//:: in case DelayedExpansion is on and a path contains !
//setlocal DISABLEDELAYEDEXPANSION
//php "%~dp0composer.phar" %*


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirectgoogle', 'GoogleLoginController@redirectToProvider')->name('redirectgoogle');
Route::get('/callbackgoogle', 'GoogleLoginController@handleProviderCallback')->name('callbackgoogle');
Route::get('/redirect', 'SocialAuthFacebookController@redirect')->name('redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
Route::get('/profile', 'Web\ProfileController@index')->name('profile');