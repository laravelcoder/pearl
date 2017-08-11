<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Design
 * @package App\Models
 * @version July 31, 2017, 8:58 pm UTC
 */
class Design extends Model
{
    use SoftDeletes;

    public $table = 'designs';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'published',
        'name',
        'slug',
        'order_id',
        'image',
        'short_details',
        'details',
        'price',
        'availability',
        'button_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'published' => 'boolean',
        'name' => 'string',
        'slug' => 'string',
        'order_id' => 'string',
        'image' => 'string',
        'short_details' => 'string',
        'details' => 'string',
        'availability' => 'string',
        'button_code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function getImageAttribute($image) {
        return array_values(unserialize($image));
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->slug = str_slug($model->name);

            $latestSlug =
                static::whereRaw("slug = '$model->slug' or slug LIKE '$model->slug-%'")
                    ->latest('id')
                    ->value('slug');
            if ($latestSlug) {
                $pieces = explode('-', $latestSlug);

                $number = intval(end($pieces));

                $model->slug .= '-' . ($number + 1);
            }
        });
    }

}
