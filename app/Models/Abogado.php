<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abogado extends Model
{
    protected $fillable = [


    "name","last_name","email","phone","especiality","date_activity",
    ];


    public function Case_table()
    {
        return $this->hasMany(Case_table::class);
    }
    public function Date()
    {
        return $this->hasMany(Date::class);
    }

    public function Informe()
    {
        return $this->hasMany(Informe::class);
    }
}
