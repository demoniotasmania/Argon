<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State_case extends Model
{
    protected $fillable = [


    "name","state","creation_date","description",
    ];


    public function Case_table()
    {
        return $this->hasMany(Case_table::class);
    }
}

