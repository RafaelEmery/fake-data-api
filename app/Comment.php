<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'author',
        'content'
    ];

    public function post()
    {
        return $this->belogsTo('App\Post', 'post_id');
    }
}
