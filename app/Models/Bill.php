<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [


    "name_facture","type_facture","issue_date","invoice_number","subtotal","tax","total","status",
    ];

    public function Pago()
    {
        return $this->hasMany(Pago::class);
    }
}
