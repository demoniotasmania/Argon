<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audincia extends Model
{
    protected $fillable = [


    "hearing_date","audience_type","hearing time","place","observations","state","result",
    ];

    public function Case_table()
    {
        return $this->hasMany(Case_table::class);
    }

    public function Juzgado()
    {
        return $this->belongsTo(Juzgado::class);
    }
}
