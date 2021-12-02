<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'category_name', 'created_at', 'updated_at', 'deleted_at', 
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}