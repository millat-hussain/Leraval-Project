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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('ShowAll','UserComment@Showuser');
// Route::get('ShowWithid/{id}','UserComment@Showbyoneuser');
// Route::get('DeleteUser/{id}','UserComment@deleteuser');
// Route::get('Update/{id}','UserComment@updateuser');
// Route::get('CreateUser','UserComment@Createuser');

// Leraval Routing All Method 
Route::get('Create','UserCreate@CreateUser');

// Route::post('Userlist','UserCreate@Userlist');
Route::put('Update','UserCreate@Update');


