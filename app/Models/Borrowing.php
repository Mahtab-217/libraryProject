<?php

namespace App\Models;
<<<<<<< HEAD
use App\Models\Book;
use App\Models\Member;
use Carbon\Carbon;
=======

>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    /** @use HasFactory<\Database\Factories\BorrowingFactory> */
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
=======
    protected $fillable =[
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
        "book_id",
        "member_id",
        "borrowed_date",
        "due_date",
<<<<<<< HEAD
        "returned_date",
        "status"
    ];
    protected $casts = [
        "borrowed_date"=> "date",
        "due_date"=> "date",
        "returned_date"=> "date",
    ];
    public function book(){
        return $this->belongsTo(Book::class);
    }
    public function member(){
        return $this->belongsTo(Member::class);
    }
    public function isOverdue(){
        return $this->due_date < Carbon::today() && $this->status === "borrowed";
=======
        "status"
    ];

    protected $casts =[
        "borrowed"=>"date",
        "due_date"=>"date",
        "returned_date"=>"date",
    ];

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function member(){
        return $this->belongsTo(Member::class);
    }

    public function isOverDue(){
        return $this->due_date < Carbon::today() && $this->status ==="borrowed";
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
    }
}
