<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfilhacker extends Model
{
    use HasFactory;
    protected $tabla='perfilhackers';
    
    public function datosHackers()
    {
        return $this->belongsto('App\Models\datosHackers');

    }

    public function grupohacker()
    {
        return $this->belongsto('App\Models\grupohacker');
    }

    
}
