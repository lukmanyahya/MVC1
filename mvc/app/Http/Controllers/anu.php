<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\orang;

class anu extends Controller
{
    //
public function welcome(){
    $a['modelorang']=orang::all();
    return view('welcome',$a);
}
}
