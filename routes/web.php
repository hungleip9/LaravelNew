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


//Route::resource( 'frontend/task', \Frontend\TaskController::class);


//Route::group(["prefix" => "task", "as" => "task.", "namespace" => "Frontend"], function(){
//    Route::get("/", "TaskController@index")->name('index');
//    Route::get("create", "TaskController@create");
//    Route::get("destroy/{id?}", "TaskController@destroy");
//    Route::get("edit/{id?}", "TaskController@edit");
//    Route::get("show/{id?}", "TaskController@show");
//    Route::get("store", "TaskController@store")->name("store");
//    Route::get("update/{id?}", "TaskController@update");
//    Route::get("complete/{id?}", "TaskController@complete");
//    Route::get("reComplete/{id?}", "TaskController@reComplete");
//});
Route::get('task',
    [\App\Http\Controllers\Task\TaskController::class,'index'])
    ->name('task.index');
Route::get('task/create',
    [\App\Http\Controllers\Task\TaskController::class,'create'])
    ->name('task.create');
Route::post('task',
    [\App\Http\Controllers\Task\TaskController::class,'store'])->name('task.store');
Route::get('task/{id}/edit',
    [\App\Http\Controllers\Task\TaskController::class,'edit'])->name('task.edit');
Route::put('task/update/{id}',
    [\App\Http\Controllers\Task\TaskController::class,'update'])->name('task.update');
Route::delete('task/destroy/{id}',
    [\App\Http\Controllers\Task\TaskController::class,'destroy'])->name('task.destroy');
Route::get('task/complete/{id}',
    [\App\Http\Controllers\Task\TaskController::class,'complete'])->name('task.complete');
Route::get('task/reComplete/{id}',
    [\App\Http\Controllers\Task\TaskController::class,'reComplete'])->name('task.reComplete');
