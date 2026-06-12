<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Juzgado extends Model
{
    protected $fillable = [


    "name","drection","phone","email","city","departament",
    ];


    public function Case_table()
    {
        return $this->hasMany(Case_table::class);
    }
    public function Corte(): HasOne
    {
        return $this->hasOne(Corte::class);
    }

    public function Audincia()
    {
        return $this->hasMany(Audincia::class);
    }
}
