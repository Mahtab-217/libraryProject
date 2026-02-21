<?php

namespace App\Http\Controllers;

use App\Http\Requests\bookInsertion;
use App\Http\Resources\bookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $books=Book::with('author')->paginate(10);
      return bookResource::collection($books);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(bookInsertion $request)
    {
        $books=Book::create($request->validated());
          $books->load("author");
        return new bookResource($books);
            // [

            // "title"=>$request->title,
            // "isbn"=>$request->isbn,
            // "description"=>$request->description,
            // "published_at"=>$request->published_at,
            // "total"=>$request->total_copies,
            // "available"=>$request->available_copies,
            // "cover_image"=>$request->cover_image,
            // "status"=>$request->status,
            // "price"=>$request->price,
            // "author_id"=>$request->author_id,
            // "genra"=>$request->genra,
        // ]
        // );
      
    //     return response()->json([
    //   "book"=>$books,
    //     ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
