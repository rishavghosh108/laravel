<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role_name', 'slug' ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role');
    }

    public function paths()
    {
        return $this->belongsToMany(Path::class, 'path_role');
    }

}
