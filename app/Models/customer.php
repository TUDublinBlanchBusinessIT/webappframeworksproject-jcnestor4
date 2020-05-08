<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class customer
 * @package App\Models
 * @version May 8, 2020, 3:40 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $rentals
 * @property string $firstname
 * @property string $surname
 * @property string $customertype
 * @property string $dateofbirth
 * @property string $phone
 * @property string $email_address
 */
class customer extends Model
{

    public $table = 'customer';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'customertype',
        'dateofbirth',
        'phone',
        'email_address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'customertype' => 'string',
        'dateofbirth' => 'date',
        'phone' => 'string',
        'email_address' => 'string'
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
        return $this->hasMany(\App\Models\Rental::class, 'customerid');
    }
}
