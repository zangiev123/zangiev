<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Alucard;


class tablController extends Controller
{
    public function show(){
        $t=Alucard::all();
        return view('user',['prod'=>$t]);
    }
}

