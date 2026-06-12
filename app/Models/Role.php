<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [


    "name","descption","last_level","state",
    ];
    public function Urser()
    {
        return $this->belongsTo(Urser::class);
    }
}

