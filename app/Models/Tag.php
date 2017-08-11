<?php

namespace App\Models;

use Eloquent as Model;
use App\Models\Post;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tag
 * @package App\Models
 * @version June 27, 2017, 10:42 pm UTC
 */
class Tag extends Model
{
    use SoftDeletes;

    public $table = 'tags';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'slug',
        'lang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function posts()
    {
       return $this->belongsToMany(Post::class, 'posts_tags');
    }

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return '/tag/'.$this->attributes['slug'];
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
