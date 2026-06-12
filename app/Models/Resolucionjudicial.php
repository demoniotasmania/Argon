<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resolucionjudicial extends Model
{
    protected $fillable = [


    "resolution_number","resolution_date","description","result","observation","state",
    ];

    public function Case_table()
    {
        return $this->hasMany(Case_table::class);
    }
}
