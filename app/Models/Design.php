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

    
}
