<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Work extends Model
{
    protected $table = 'works';

    protected $fillable = [
        'link_title', 'title_short', 'title_long', 'year', 'materials_used', 'description', 'cover_image', 'slug', 'front_page'
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
