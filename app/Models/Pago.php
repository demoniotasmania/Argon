<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [


    "payment_date","payment_method","amount","description","reference","status",
    ];


    public function Case_table()
    {
        return $this->hasMany(Case_table::class);
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function Bill()
    {
        return $this->belongsTo(Bill::class);
    }
}

