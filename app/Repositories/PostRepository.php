<?php

namespace App\Repositories;

use App\Models\Post;
use InfyOm\Generator\Common\BaseRepository;

class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Post::class;
    }
}
