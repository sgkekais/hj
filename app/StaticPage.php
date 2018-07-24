<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class StaticPage extends Model
{
    protected $table = 'static_pages';

    protected $fillable = [
        'title_short', 'title_long', 'body'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'title_short';
    }
}
