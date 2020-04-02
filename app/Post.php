<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'category_id', 'post_img', 'details',
    ];

    // A post can belongs to a auther
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A post belongs to has a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}