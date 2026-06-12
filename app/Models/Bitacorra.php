<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bitacorra extends Model
{
    protected $fillable = [


    "action_performed","date","time","access_ip","description","module",
    ];

    public function Urser()
    {
        return $this->hasMany(Urser::class);
    }
}
