<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ 'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file' ];

    public function user()
    {
        return $this->belongsTo(User::Class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::Class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
