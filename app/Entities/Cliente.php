<?php

namespace App\Entities;
use App\Entities\Entity;
use App\Http\Filters\QueryFilter;

class Cliente extends Entity
{
    use QueryFilter;
    protected $table = 'customers';
    protected $fillable = [
        'placa', 'marca', 'modelo', 'fecha_fabricacion', 'nombre', 'apellido', 'nro_doc', 'correo', 'telefono'
    ];
	protected $dates = ['created_at', 'updated_at'];
	
    protected static function boot()
    {
        parent::boot();
    }
}
