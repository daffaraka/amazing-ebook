<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
    ];

    public function Book()
    {
        return $this->belongsToMany(Books::class,'book_category','category_id','book_id');
    }
}
