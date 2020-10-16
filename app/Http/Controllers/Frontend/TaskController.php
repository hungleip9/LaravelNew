<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(){
        $tasks  = Task::where('status',1)
            ->orderBy('name', 'desc')
            ->take(5)
            ->get();
        return view('task.list',[
            'tasks'=> $tasks
        ]);
    }


    public function create()
    {
        return view('task.create');
    }


    public function store(Request $request)
    {
//        $name = $request->except(['_token']);
        $name = $request->only(['name','deadline']);
//        $name = $request->get('name','bien defone');


        dd($name);

    }


    public function show($id)
    {
        $task = Task::find($id);
        $task = Task::where('id', $id)->first();
        dd($task->name);
    }


    public function edit($id)
    {
        $name = "Hoc lap trinh";
        return view('task.edit')->with(['name' => $name]);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    public function complete($id){
        return 'Ban da hoan thanh';
    }
    public function reComplete($id){
        return 'Lam Lai';
    }
}
