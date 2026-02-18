<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books =  Book::with('author')->all();
        return BookResource::collection($books);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $book = Book::create($request->validated());
        return new BookResource($book);
        // $book = Book::create([
        //     "title" => $request-> title,
        //     "isbn" => $request-> isbn,
        //     "description" =>$request-> description,
        //     "published_at" => $request-> published_at,
        //     "total_copies" => $request-> total_copies,
        //     "available_copies" => $request-> available_copies,
        //     "cover_image" => $request->cover_image,
        //     "status" => $request-> status,
        //     "price" => $request-> price,
        //     "author_id" => $request-> author_id,
        //     "genera" => $request-> genera,
        // ]);
        // return response()->json([
        //     "book" => $book,
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $book = Book::findOrFail($id);
        return new BookResource($book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $book->update($request->validated());
        return response()->json([
            "book"=> $book,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $book->delete();
        return response()->json([
            "message"=> "One author deleted successfully",
        ]);
    }
}
