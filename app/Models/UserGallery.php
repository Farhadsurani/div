<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id
 * @property string name
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @SWG\Definition(
 *      definition="Gallery",
 *      required={"image"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="image",
 *          description="image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class UserGallery extends Model
{
    use SoftDeletes;

    public $table = 'user_gallery';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'gallery_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'gallery_id' => 'integer'
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
        'user_id' => 'required',
        'gallery_id' => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'user_id' => 'required',
        'gallery_id' => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'user_id' => 'required',
        'gallery_id' => 'required'
    ];
	
	/**
     * Validation api update rules
     *
     * @var array
     */
    public static $api_update_rules = [
        'user_id' => 'required',
        'gallery_id' => 'required'
    ];

    public function gallery(){
        return $this->belongsTo(Gallery::class, 'gallery_id');
    }

    public function getImageUrlAttribute()
    {
        return ($this->image && storage_path(url('storage/app/' . $this->image))) ? route('api.resize', ['img' => $this->image]) : route('api.resize', ['img' => 'users/book.png', 'w=100', 'h=100']);
    }
}
