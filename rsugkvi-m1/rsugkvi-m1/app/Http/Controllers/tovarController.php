<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tovarController extends Controller
{
    public function show(){
        $e = \App\Models\tovars::all();
        return view('img', ['tovars'=>$e]);
    }
}
