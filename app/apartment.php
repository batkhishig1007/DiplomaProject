<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'apartment_name', 'apartment_number', 'created_at', 'updated_at', 'deleted_at', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}