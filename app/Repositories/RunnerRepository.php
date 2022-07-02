<?php

namespace App\Repositories;

use App\Models\Runner;
use App\Repositories\BaseRepository;

/**
 * Class RunnerRepository
 * @package App\Repositories
 * @version July 1, 2022, 11:07 pm UTC
*/

class RunnerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'name',
        'apellido',
        'telefono',
        'foto',
        'antecedentes'
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
        return Runner::class;
    }
}
