<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'author',
        'year',
        'synopsis',
        'publisher_id',
        'image'
    ];

    public function Publisher()
    {
        return $this->belongsTo(Publishers::class,'publisher_id');
    }

    public function Categories()
    {
        return $this->belongsToMany(Categories::class,'book_category','book_id','category_id');
    }
}
