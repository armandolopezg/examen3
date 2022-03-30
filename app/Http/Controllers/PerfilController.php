<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perfilhacker;
use App\Models\grupohacker;


class PerfilController extends Controller
{
    public function hack()
    {
        $hack=perfilhacker::all();
        return view('index',['perfiles'=>$hack]);

    }

    
}
