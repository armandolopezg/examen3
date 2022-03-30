<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupohacker;

class GrupoController extends Controller
{
    public function hack()
    {
        $hackgrupos=grupohacker::all();
        return view('grupos',['grupos'=>$hackgrupos]);
    }
}
