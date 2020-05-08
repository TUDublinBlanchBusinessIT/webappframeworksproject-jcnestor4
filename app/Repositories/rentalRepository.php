<?php

namespace App\Repositories;

use App\Models\rental;
use App\Repositories\BaseRepository;

/**
 * Class rentalRepository
 * @package App\Repositories
 * @version May 8, 2020, 3:44 pm UTC
*/

class rentalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rentaldate',
        'start_date',
        'end_date',
        'customerid',
        'vehicleid',
        'insurancecompany',
        'cost'
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
        return rental::class;
    }
}
