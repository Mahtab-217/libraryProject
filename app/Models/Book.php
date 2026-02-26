<?php

namespace App\Models;
<<<<<<< HEAD
use App\Models\Author;
use App\Models\Borrowing;
=======
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        "title",
        "isbn",
        "description",
        "published_at",
        "total_copies",
        "available_copies",
        "cover_image",
        "status",
        "price",
        "author_id",
        "genera"
    ];
    public function author(){
        return $this->belongsTo(Author::class,'author_id');
    }
    public function borrowing(){
        return $this->hasMany(Borrowing::class);
    }
    public function isAvailable(){
        return $this->available_copies>0;
    }
=======
    protected $fillable=[
     "title",
     "isbn",
     "description",
     "published_at",
     "total_copies",
     "available_copies",
     "genra",
     "price",
     "cover_image",
     "status",
     "author_id",

    ];

    public function author(){
        return $this->belongsTo(Author::class,'autor_id');
    }

    public function borrowing(){
        return $this->hasMany(Borrowing::class);
    }

    public function isAvailable(){
        return $this->available_copies>0;
    }

>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
    public function borrow(){
        if($this->available_copies>0){
            $this->decrement('available_copies');
        }
    }
<<<<<<< HEAD
    public function returnBook(){
        if($this->available_copies < $this->total_copies){
=======

    public function returnBook(){
        if($this->available_copies< $this->total_copies){
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
            $this->increment('available_copies');
        }
    }
}
