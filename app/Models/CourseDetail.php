<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CourseDetail extends Model
{
    use SoftDeletes;

    public $table = 'course_details';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'course_id',
        'details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'course_id' => 'integer',
        'details'   => 'string'
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
        'course_id' => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'course_id' => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'course_id' => 'required'
    ];

    /**
     * Validation api update rules
     *
     * @var array
     */
    public static $api_update_rules = [
        'course_id' => 'required'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function getImageUrlAttribute()
    {
        return ($this->cover && storage_path(url('storage/app/' . $this->cover))) ? route('api.resize', ['img' => $this->cover]) : route('api.resize', ['img' => 'users/book.png', 'w=100', 'h=100']);
    }
}
