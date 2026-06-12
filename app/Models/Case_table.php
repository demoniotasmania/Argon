<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Case_table extends Model
{
    protected $fillable = [


    "title_case","file_number","apeture_case","state_case","priority","descripicion","date_cierre",
    ];

    public function Type_case()
    {
        return $this->belongsTo(Type_case::class);
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }



    public function Abogado()
    {
        return $this->belongsTo(Abogado::class);
    }

    public function State_case()
    {
        return $this->belongsTo(State_case::class);
    }

    public function evidencia()
    {
        return $this->belongsTo(evidencia::class);
    }

    public function Audincia()
    {
        return $this->belongsTo(Audincia::class);
    }

    public function Juzgado()
    {
        return $this->belongsTo(Juzgado::class);
    }

    public function Informe()
    {
        return $this->belongsTo(Informe::class);
    }

    public function pago()
    {
        return $this->belongsTo(pago::class);
    }

    public function Test()
    {
        return $this->hasMany(Test::class);
    }

    public function Resolucionjudicial()
    {
        return $this->belongsTo(Resolucionjudicial::class);
    }

    public function Activite()
    {
        return $this->hasMany(Activite::class);
    }

    public function Reunion()
    {
        return $this->hasMany(Reunion::class);
    }

    public function Documento()
    {
        return $this->hasMany(Documento::class);
    }


    public function Notificacion()
    {
        return $this->hasMany(Notificacion::class);
    }

    public function Archivodigital()
    {
        return $this->hasMany(Archivodigital::class);
    }

    public function Calendariolegal()
    {
        return $this->hasMany(Calendariolegal::class);
    }

    public function Terminolegal()
    {
        return $this->hasMany(Terminolegal::class);
    }
    public function Historialcaso()
    {
        return $this->belongsTo(Historialcaso::class);
    }

    public function Testigo()
{
    return $this->belongsToMany(Testigo::class);
}
}
