<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    protected $fillable = [


    "meeting_date","meeting_time","place","reason","agreements","observation",
    ];

    public function Case_table()
    {
        return $this->belongsTo(Case_table::class);
    }
}
