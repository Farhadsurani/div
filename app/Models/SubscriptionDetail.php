<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SubscriptionDetail extends Model
{
    use SoftDeletes;

    public $table = 'subscription_details';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'details',
        'subscription_id',
        'price',
        'duration',
        'fee',
        'featured',
        'listing',
        'availability'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'details' => 'string',
        'price' => 'integer',
        'duration' => 'integer',
        'fee' => 'integer',
        'featured' => 'boolean',
        'listing' => 'integer',
        'availability' => 'integer'
    ];

    /**
     * The objects that should be append to toArray.
     *
     * @var array
     */
     protected $with = [];

    /**
     * The attributes that should be append to toArray.
     *
     * @var array
     */
    protected $appends = [];

    /**
     * The attributes that should be visible in toArray.
     *
     * @var array
     */
    protected $visible = [];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'details' => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'id' => 'required',
        'details' => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'id' => 'required',
        'details' => 'required'
    ];
	
	/**
     * Validation api update rules
     *
     * @var array
     */
    public static $api_update_rules = [
        'id' => 'required',
        'details' => 'required'
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    
}
