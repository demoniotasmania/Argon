<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Urser extends Model
{
    protected $fillable = [


    "name","pasword","mail","state","creation_date",
    ];

    public function Role()
    {
        return $this->hasMany(Role::class);
    }

    public function Bitacorra()
    {
        return $this->belongsTo(Bitacorra::class);
    }
}
