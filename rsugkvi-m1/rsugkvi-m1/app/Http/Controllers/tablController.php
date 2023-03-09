<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tablController extends Controller
{
    public function show(){
        $t=Alucards::all();
        return view('img',['prod'=>$t]);
    }
}
