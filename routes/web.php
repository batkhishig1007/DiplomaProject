<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\CustomAuthController;
use App\Http\Controllers\CustomNewsCategoryController;
use App\Http\Controllers\CustomNewsController;
use App\Http\Controllers\ApplicationController;
// use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    Route::resource('posts', 'PostController');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('applications', 'ApplicationController');
});

\
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 

Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Route::get('/image-upload', [PostController::class, 'createForm']);
// Route::post('/image-upload', [PostController::class, 'create'])->name('imageUpload');



// customer
Route::resource('user_applications', 'CustomerApplicationController');


Route::get('/heltes', 'HomeController@heltes')->name('heltes');
Route::get('/taniltsuulga', 'HomeController@taniltsuulga')->name('taniltsuulga');

Route::resource('news', 'CustomerNewsController');
Route::resource('news_categories', 'CustomerNewsCategoryController');