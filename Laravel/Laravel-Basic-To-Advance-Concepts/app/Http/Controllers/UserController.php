<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(){
        return view('greeting')->with('name', 'Karm')->with('id', 5);
    }

    public function show($name, $id){
        return view('greeting')->with('name', $name)->with('id', $id);
    }
    
}
