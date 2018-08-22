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

Route::get('property.admin', [
    'as' => 'property.admin', 'uses' => 'SubmitController@admin'
]);
Route::resource('/profile','ProfileController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'StaticPageController@contact')->name('contact');
Route::get('/property/posted','SubmitController@posted');
Route::resource('/property','SubmitController');
Route::get('profile.index', [
    'as' => 'profile.index', 'uses' => 'ProfileController@index'
]);
Route::post('update/{id}', [
    'as' => 'profile.update', 'uses' => 'StaticPageController@update'
]);
Route::resource('/profile','ProfileController');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'StaticPageController@profile')->name('profile');
    Route::post('/profile', 'StaticPageController@avatar')->name('update');

});