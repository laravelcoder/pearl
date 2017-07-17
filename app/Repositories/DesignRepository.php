<?php

namespace App\Repositories;

use App\Models\Design;
use InfyOm\Generator\Common\BaseRepository;

class DesignRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'image',
        'short_details',
        'details',
        'price',
        'availability'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Design::class;
    }
}
