<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'title', 'slug', 'content', 'image', 'status', 'published_at'
    ];

    protected $dates = ['published_at'];

    /**
     * The author of this post
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function author() {
        return $this->belongsTo('App\User');
    }

}
