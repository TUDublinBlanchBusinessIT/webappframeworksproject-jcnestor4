<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class vehicle
 * @package App\Models
 * @version May 11, 2020, 12:53 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $rentals
 * @property string $manufacturer
 * @property string $model
 * @property string $class
 * @property string $registration
 */
class vehicle extends Model
{

    public $table = 'vehicle';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'manufacturer',
        'model',
        'class',
        'registration'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'manufacturer' => 'string',
        'model' => 'string',
        'class' => 'string',
        'registration' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function rentals()
    {
        return $this->hasMany(\App\Models\Rental::class, 'vehicleid');
    }
}
