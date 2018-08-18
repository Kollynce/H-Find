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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator', 'web')->group(function (){
   Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
   Route::resource('/users', 'UserController');
   Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/property', 'DynamicPagesController@property')->name('property');
Route::get('/contact', 'StaticPageController@contact')->name('contact');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'StaticPageController@profile')->name('profile');
    Route::get('/posts', 'DynamicPagesController@posts')->name('posts');
    Route::post('/profile', 'StaticPageController@avatar')->name('update');
    Route::get('/submit', 'StaticPageController@submit')->name('submit');
    Route::get('/edit_property', 'DynamicPagesController@editproperty');
    Route::post('/my_property/submission', 'DynamicPagesController@submit_property');
    Route::get('/my_property', 'DynamicPagesController@getProperty');
});

