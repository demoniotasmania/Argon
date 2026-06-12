<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corte extends Model
{
    protected $fillable = [


    "name","address","phone","email","city","state","court_type",
    ];

    public function Juzgado()
    {
        return $this->belongsTo(Juzgado::class);
    }
}
