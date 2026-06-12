<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $fillable = [


    "Appointment date","Appointment time","Description","Status","Observations","Location",
    ];


    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function Abogado()
    {
        return $this->belongsTo(Abogado::class);
    }
}
