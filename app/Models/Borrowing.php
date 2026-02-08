<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    /** @use HasFactory<\Database\Factories\BorrowingFactory> */
    use HasFactory;
    protected $fillable =[
        "book_id",
        "member_id",
        "borrowed_date",
        "due_date",
        "status"
    ];

    protected $casts =[
        "borrowed"=>"date",
        "due_date"=>"date",
        "returned_date"=>"date",
    ];

    
}
