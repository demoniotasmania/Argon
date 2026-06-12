<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [


    "name","lastname","phone","description","gmail","date_register",
    ];

    public function Case_table()
    {
        return $this->hasMany(Case_table::class);
    }

    public function Date()
    {
        return $this->hasMany(Date::class);
    }
    public function Pago()
    {
        return $this->hasMany(Pago::class);
    }

}
