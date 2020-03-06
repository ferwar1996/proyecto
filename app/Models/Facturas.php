<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Facturas
 * @package App\Models
 * @version March 6, 2020, 12:25 am UTC
 *
 * @property \App\Models\CreateUsersTable createUsersTable
 * @property string fecha
 */
class Facturas extends Model
{

    public $table = 'facturas';
    



    public $fillable = [
        'fecha'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id-facturas' => 'integer',
        'fecha' => 'date'
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
    public function createUsersTable()
    {
        return $this->hasOne(\App\Models\CreateUsersTable::class, 'id', 'id-cliente');
    }
}
