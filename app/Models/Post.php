<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version July 17, 2017, 1:42 am UTC
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'is_published',
        'category_id',
        'user_id',
        'title',
        'subtitle',
        'content',
        'notes',
        'slug',
        'meta_title',
        'fb_title',
        'gp_title',
        'tw_title',
        'meta_keywords',
        'meta_description',
        'image',
        'banner',
        'view_count'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'is_published' => 'boolean',
        'category_id' => 'integer',
        'user_id' => 'integer',
        'title' => 'string',
        'subtitle' => 'string',
        'content' => 'string',
        'notes' => 'string',
        'slug' => 'string',
        'meta_title' => 'string',
        'fb_title' => 'string',
        'gp_title' => 'string',
        'tw_title' => 'string',
        'meta_keywords' => 'string',
        'meta_description' => 'string',
        'image' => 'string',
        'banner' => 'string',
        'view_count' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return 'blog/'.$this->attributes['slug'];
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'posts_tags');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }


        public function syncTags(array $tags)
    {
        Tag::addNeededTags($tags);

        if (count($tags)) {
            $this->tags()->sync(
          Tag::whereIn('tag', $tags)->lists('id')->all()
        );

            return;
        }

        $this->tags()->detach();
    }

    // public function scopeActive($query)
    // {
    //     return $query->where('status', 1);
    // }


}
