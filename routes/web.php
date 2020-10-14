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
Route::get('home', function () {
    return view('home');
});
Route::get('hello1', function () {
    return view('hello1');
});

Route::resource( 'frontend/task', \Frontend\TaskController::class);


Route::group(["prefix" => "task", "as" => "task.", "namespace" => "Frontend"], function(){
    Route::get("/", "TaskController@index");
    Route::get("create", "TaskController@create");
    Route::get("destroy/{id?}", "TaskController@destroy");
    Route::get("edit/{id?}", "TaskController@edit");
    Route::get("show/{id?}", "TaskController@show");
    Route::get("store", "TaskController@store")->name("store");
    Route::get("update/{id?}", "TaskController@update");
    Route::get("complete/{id?}", "TaskController@complete");
    Route::get("reComplete/{id?}", "TaskController@reComplete");
});
