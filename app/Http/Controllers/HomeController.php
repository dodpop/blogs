<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('test');
    }
    public function product($pid){
        echo 'product id:' .$pid;
        // return view('test');
    }
}
