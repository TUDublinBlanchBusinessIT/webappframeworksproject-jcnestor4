<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class rental
 * @package App\Models
 * @version May 8, 2020, 3:44 pm UTC
 *
 * @property \App\Models\Customer $customerid
 * @property \App\Models\Vehicle $vehicleid
 * @property string $rentaldate
 * @property string $start_date
 * @property string $end_date
 * @property integer $customerid
 * @property integer $vehicleid
 * @property string $insurancecompany
 * @property number $cost
 */
class rental extends Model
{

    public $table = 'rental';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'rentaldate',
        'start_date',
        'end_date',
        'customerid',
        'vehicleid',
        'insurancecompany',
        'cost'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rentaldate' => 'date',
        'start_date' => 'date',
        'end_date' => 'date',
        'customerid' => 'integer',
        'vehicleid' => 'integer',
        'insurancecompany' => 'string',
        'cost' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customerid()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customerid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function vehicleid()
    {
        return $this->belongsTo(\App\Models\Vehicle::class, 'vehicleid');
    }
}
