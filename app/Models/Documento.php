<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [


    "date_activity","file_path","file_size","state",
    ];

    public function Case_table()
    {
        return $this->belongsTo(Case_table::class);
    }
}
