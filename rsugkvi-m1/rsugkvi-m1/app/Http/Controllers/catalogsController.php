<?php

namespace App\Http\Controllers;

use App\Models\catalog;
use Illuminate\Http\Request;

class catalogsController extends Controller
{
    public function catalog(){
        return view ('catalog');
    }

    public function mesto(){
        return view ('mesto');
    }

    public function Onas(){
        return view ('Onas');
    }

    public function console(){
        return view ('console');
    }

    public function console1(){
        return view ('console1');
    }

    public function console2(){
        return view ('console2');
    }

    public function console3(){
        return view ('console3');
    }

    public function games(){
        return view ('games');
    }

    public function games1(){
        return view ('games1');
    }

    public function games2(){
        return view ('games2');
    }

    public function games3(){
        return view ('games3');
    }

    public function acces(){
        return view ('acces');
    }

    public function acces1(){
        return view ('acces1');
    }

    public function acces2(){
        return view ('acces2');
    }
    public function acces3(){
        return view ('acces3');
    }
}
