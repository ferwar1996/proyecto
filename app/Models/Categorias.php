<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Categorias
 * @package App\Models
 * @version March 6, 2020, 12:15 am UTC
 *
 * @property string descripcion
 */
class Categorias extends Model
{

    public $table = 'categorias';
    



    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id-categorias' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
