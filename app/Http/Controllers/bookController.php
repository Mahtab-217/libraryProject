<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $book=Book::with('author')->paginate(10);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create([
            "title"=>$request->title,
            "isbn"=>$request->isbn,
            "description"=>$request->description,
            "published_at"=>$request->published_at,
            "total"=>$request->total,
            "available"=>$request->available_copies,
            "cover_image"=>$request->cover_image,
            "status"=>$request->status,
            "price"=>$request->price,
            "author_id"=>$request->author_id,
            "genra"=>$request->genra,
        ]);
        return response()->json([
      "book"=>$book,
        ]);
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
