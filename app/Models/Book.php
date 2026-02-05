<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
    protected $failable=[
     "name",
     "bio",
     "nationality"
    ];
    public function author(){
        return $this->belongsTo(Author::class,'autor_id');
    }
}
