<?php

namespace App\Repositories;

use App\Models\vehicle;
use App\Repositories\BaseRepository;

/**
 * Class vehicleRepository
 * @package App\Repositories
 * @version May 11, 2020, 12:53 pm UTC
*/

class vehicleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'manufacturer',
        'model',
        'class',
        'registration'
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
        return vehicle::class;
    }
}
