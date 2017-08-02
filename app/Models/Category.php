<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 * @version June 27, 2017, 10:36 pm UTC
 */
class Category extends Model
{
    use SoftDeletes;

    public $table = 'categories';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'meta_description',
        'banner',
        'slug',
        'lang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'meta_description' => 'string',
        'banner' => 'string',
        'slug' => 'string',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function designs()
    {
        return $this->hasMany(Design::class);
    }

    public function getUrlAttribute()
    {
        return 'category/'.$this->attributes['slug'];
    }


}
