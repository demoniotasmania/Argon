<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $fillable = [


    "title","message","state","shipping_type","shipping_date","shipping_time",
    ];

    public function Case_table()
    {
        return $this->belongsTo(Case_table::class);
    }
}
