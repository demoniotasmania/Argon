<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archivodigital extends Model
{
    protected $fillable = [


    "name","extncion","description","size","file_path","file_type","upload_date",
    ];

    public function Case_table()
    {
        return $this->belongsTo(Case_table::class);
    }
}
