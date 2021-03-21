<?php

use Illuminate\Support\Facades\Route;
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
/*+970 567 052 451*/
Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', function () {
    return view('contact');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/Inbox', function () {
    return view('Inbox');
});

Route::get('/tasks', function () {
    return view('tasks');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return  ("test dashboard");
});

Route::get('users/{id}', function ($id) {

});
Route::get('admin', function () {
    return view("admin.auth.login");
})->name('admin.login');

/// start admin route

// Route::resource('admins', 'AdminController')->except('show', 'destroy');
// Route::get('/admins/{admin}/edit_password', 'AdminController@edit_password')->name('admins.edit_password');
// Route::post('/admins/{admin}/edit_password', 'AdminController@update_password')->name('admins.edit_password');

/// end admin route
