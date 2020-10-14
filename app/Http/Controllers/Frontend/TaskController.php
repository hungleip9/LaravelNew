<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        return view('task.list',[
            'records' => [
                1,2,3
            ],
            'i' => 2
        ]);
    }


    public function create()
    {
        return view('task.create');
    }


    public function store(Request $request)
    {
        $name = $request->except(['_token']);
//        $name = $request->only(['email','name','phone']);
//        $name = $request->get('name','bien defone');


        dd($name);

    }


    public function show($id)
    {
        //
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
}
