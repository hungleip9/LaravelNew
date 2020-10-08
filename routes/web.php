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
Route::get('hello1', function () {
    return view('hello1');
});
Route::prefix('task')->group(function (){
    Route::get('/create', function () {
        return view('task.create');
    })->name('task.create');
    Route::get('/edit', function () {
        $name = "Hoc lap trinh";
//        return view('task.edit',[
//            'name' => $name
//        ]);
//      return view('task.edit')->with('name', $name); cach 1
        return view('task.edit')->with(['name' => $name]); // cach 2


    })->name('task.edit');
    Route::get('/list', function () {
        return view('task.list',[
            'records' => [
                1,2,3
            ],
            'i' => 2
        ]);
    })->name('task.list');
});




Route::get('hello2', function () {
    return view('hello2');
});
////xoa
//Route::delete('/task/delete', function () {
//    dd('delete');
//});
//// xoa xong chuyen huong
//Route::delete('/task/delete', function () {
//    return redirect('/');
//});

// cach chuyen tham so id
Route::get('user/{id?}', function($id = null) {
    echo route('trump');
    return 'User ' . $id;
});

Route::get('u/{id?}', function($id = null) {
    echo route('trump');
    return ' User ' . $id;
});

Route::get('/user/{id}/post/{post}', function($id, $idPost) {
    return "This is post $idPost of user $id";
});


Route::view('/welcome', 'welcome');
Route::get('foo', function () {
    return 'hello world';
});
Route::get('task/list/hung/hung/hung/hung', function () {
    return 'hello world';
});
//class-room/LARAVEL2020004/units
Route::get('class-room/LARAVEL2020004/units', function () {
    return 'hello world';
});
//nobel-y-sinh-cho-ba-nha-khoa-hoc-phat-hien-virus-viem-gan-c-4171906.html
Route::get('2020-nobel-y-sinh-cho-ba-nha-khoa-hoc-phat-hien-virus-viem-gan-c-4171906.html', function () {
    return 'nobel-y-sinh-cho-ba-nha-khoa-hoc-phat-hien-virus-viem-gan-c-4171906.html';
})->name('trump');
Route::post('save',function (){
   echo 'post';
})->name('save');
//Route::get('save',function (){
//   echo 'post';
//});
//Route::match(['get','post'], 'save',function (){
//    echo route('trump');
//});
Route::prefix('admin')->group(function (){
    Route::prefix('user')->group(function (){
        Route::get('edit',function (){
            echo 'admin/user/edit';
        });
        Route::get('delete',function (){
            echo 'admin/user/delete';
        });
        Route::get('detail',function (){
            echo 'admin/user/detail';
        });
    });
    Route::get('edit',function (){
        echo 'admin/edit';
    });
    Route::get('post',function (){
        echo 'admin/post';
    });
    Route::get('delete',function (){
        echo 'admin/delete';
    });
});
// cach 2
//Route::group(
//    [
//        'prefix' => 'user'
//    ]
//    ,function (){
//    Route::get('edit',function (){
//        echo 'admin/user/edit';
//    });
//    Route::get('delete',function (){
//        echo 'admin/user/delete';
//    });
//    Route::get('detail',function (){
//        echo 'admin/user/detail';
//    });
//});
