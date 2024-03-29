<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'book_type_id'
    ];

    public function bookType(){
        return $this->belongsTo(\App\Models\BookType::class,'book_type_id');
    }
}
