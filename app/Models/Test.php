<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [


    "name","Description","status","description","comments","submission_date","test_type",
    ];

    public function Case_table()
    {
        return $this->belongsTo(Case_table::class);
    }
}
