<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datosHackers;

class HackersController extends Controller
{
    public function hack()
    {
        $hack=datosHackers::all();
    }
    
}
