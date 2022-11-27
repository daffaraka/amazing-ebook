<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'address',
        'phone',
        'email',
        'image',
    ];


    public function Book()
    {
        return $this->hasMany(Books::class,'publisher_id');
    }
    public function getPublisherImage()
    {
        return $this->image ? asset('Publisher Image/' . $this->image) : asset('upload/default.jpg');

    }

}
