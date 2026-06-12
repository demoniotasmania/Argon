<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terminolegal extends Model
{
    protected $fillable = [


    "start_date","expiration_date","state","obsrvation","descrition",
    ];

    public function Case_table()
    {
        return $this->belongsTo(Case_table::class);
    }
}
