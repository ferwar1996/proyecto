<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Proveedores
 * @package App\Models
 * @version March 6, 2020, 12:11 am UTC
 *
 * @property string nombre
 * @property string direccion
 * @property integer telefono
 */
class Proveedores extends Model
{

    public $table = 'proveedores';
    



    public $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id-proveedor' => 'integer',
        'nombre' => 'string',
        'direccion' => 'string',
        'telefono' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
