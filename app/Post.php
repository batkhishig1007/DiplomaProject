<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'short_description', 'description', 'image', 'user_id', 'category_id', 'count_see', 'created_at', 'updated_at', 'deleted_at', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function application()
    {
        return $this->hasMany(User::class);
    }
}