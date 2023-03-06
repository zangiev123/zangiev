<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catalogcontroller extends Controller
{
    public function catalog(){
        $t=\App\Models\User::all();
        return view('homepage',['g'=>$t]);
    }
}
