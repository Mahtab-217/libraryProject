<?php

namespace App\Models;
<<<<<<< HEAD
use App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;
    protected $fillable = [
        "name",
        "bio",
        "nationality"
=======

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Author extends Model
{

    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;
      protected $fillable=[
     "name",
     "bio",
     "nationality"
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
    ];
    public function book(){
        return $this->hasMany(Book::class,'author_id');
    }
}
