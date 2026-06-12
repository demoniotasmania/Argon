<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    protected $fillable = [


    "observaciones","name_report","user_generator","report_type","format","generation_date",
    ];


    public function Case_table()
    {
        return $this->hasMany(Case_table::class);
    }
    public function Abogado()
    {
        return $this->belongsTo(Abogado::class);
    }
}
