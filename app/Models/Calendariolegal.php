<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendariolegal extends Model
{
    protected $fillable = [


    "date_event","hour_event","title_event","descripion","location","state",
    ];

    public function Case_table()
    {
        return $this->belongsTo(Case_table::class);
    }
}
