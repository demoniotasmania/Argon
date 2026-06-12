<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $fillable = [


    "name_activite","description","observation","state","date_activity","start_time","final_time",
    ];

    public function Case_table()
    {
        return $this->belongsTo(Case_table::class);
    }
}
