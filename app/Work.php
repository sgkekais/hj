<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Work extends Model
{
    protected $table = 'works';

    protected $fillable = [
        'link_title',
        'slug',
        'title_short', 'title_long',
        'year',
        'work_type',
        'materials_used',
        'description',
        'cover_image',
        'front_page',
        'work_images',
        'work_video'
    ];

    protected $casts = [
        'front_page' => 'boolean'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
