<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historialcaso extends Model
{
    protected $fillable = [


    "change_date","change_description","comments","responsible_user","previous_status","new_status",
    ];
    public function Case_table()
    {
        return $this->hasMany(Case_table::class);
    }
}

