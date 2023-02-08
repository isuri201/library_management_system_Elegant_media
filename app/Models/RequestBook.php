<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'book_id'
    ];

    public function book(){
        return $this->belongsTo(\App\Models\Book::class,'book_id');
    }
}
