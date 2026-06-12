<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class evidencia extends Model
{
    protected $fillable = [


    "name","state","type_evidence","description","obseravtion","presentation_date",
    ];


    public function Case_table()
    {
        return $this->hasMany(Case_table::class);
    }
}

