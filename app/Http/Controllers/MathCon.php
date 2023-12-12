<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathCon extends Controller
{
    public function perkalian(){
        $data {'name'} = 'Mycalculator';
        return view ('page_math',$data);

    }

}