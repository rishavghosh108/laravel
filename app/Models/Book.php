<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'catagory', 'rating' ];

    public static function totalBooks(){
        return Book::count();
    }
}
