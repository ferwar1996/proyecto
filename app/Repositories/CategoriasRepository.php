<?php

namespace App\Repositories;

use App\Models\Categorias;
use App\Repositories\BaseRepository;

/**
 * Class CategoriasRepository
 * @package App\Repositories
 * @version March 6, 2020, 12:15 am UTC
*/

class CategoriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Categorias::class;
    }
}
