<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'description', 'email', 'image', 'post_id', 'user_id', 'is_closed', 'birthday', 'created_at', 'updated_at', 'deleted_at', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}