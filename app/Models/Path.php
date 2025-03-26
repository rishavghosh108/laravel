<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    protected $fillable = ['path_name', 'path' ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'path_role');
    }
}
