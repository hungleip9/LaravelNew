<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('task.list',[
            'records' => [
                1,2,3
            ],
            'i' => 2
        ]);

    }
    public function  edit(){
        $name = "Hoc lap trinh";
        return view('task.edit')->with(['name' => $name]);
    }
    public function create(){
        return view('task.create');
    }
}
