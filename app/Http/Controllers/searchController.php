<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class searchController extends Controller
{
    //
    public function index(Request $request)
    {
        
        $request->request->all(); //Get all post requests
        
        $txtsearch = $request->request->get('txtsearch'); //Get a post parameter
        $tasks = Task::all();
        return view('tasks.index',compact('tasks',$tasks));
    }
}
