<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type_case extends Model
{ protected $fillable = [


    "name","descripicion","state","code",
    ];
    public function Case_table()
    {
        return $this->hasMany(Case_table::class);
    }

}
