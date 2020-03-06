<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Productos
 * @package App\Models
 * @version March 6, 2020, 12:33 am UTC
 *
 * @property \App\Models\Productos productos
 * @property \App\Models\Productos productos1
 * @property string descripcion
 * @property integer precio
 */
class Productos extends Model
{

    public $table = 'productos';
    



    public $fillable = [
        'descripcion',
        'precio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id-producto' => 'integer',
        'descripcion' => 'string',
        'precio' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function productos()
    {
        return $this->hasOne(\App\Models\Productos::class, 'id-producto', 'id-categorias');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function productos1()
    {
        return $this->hasOne(\App\Models\Productos::class, 'id-producto', 'id-proveedor');
    }
}
