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

//Route::prefix('task')->group(function (){
//    Route::get('/create',
//        [\App\Http\Controllers\Task\TaskController::class, 'create'])
//    ->name('task.create');
//    Route::get('/edit',
//        [\App\Http\Controllers\Task\TaskController::class, 'edit'])
//        ->name('task.edit');
//    Route::get('/index', [\App\Http\Controllers\Task\TaskController::class, 'index'])
//        ->name('task.list');
//});

Route::resource( 'frontend/task', \Frontend\TaskController::class);
Route::get('/',
    [\App\Http\Controllers\HomeController::class,'index']
);
