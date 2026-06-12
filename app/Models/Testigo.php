<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testigo extends Model
{
    protected $fillable = [


    "name","Surname","ID number","Telephone number","Address","Email address","Declaration",
    ];

    public function Case_table()
{
    return $this->belongsToMany(Case_table::class);
}
}
