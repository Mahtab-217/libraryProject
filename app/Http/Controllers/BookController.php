<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookUpdateRequest;
use App\Http\Requests\BookInsertRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Exception;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $book = Book::create($request->validated());
        $book->load("author");
        return new BookResource($book);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookInsertRequest $request)
    {
        //
        $book = Book::create($request->validated());
        return new BookResource($book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
        $book->load("author");
        return new BookResource($book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookUpdateRequest $request, Book $book)
    {
        //
        $book->update($request->validated());
        $book->load('author');
        return new BookResource($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{
            $book = Book::findOrFail($id);
            $book->delete();
            return response()->json([
                "message"=> $book->title. " deleted successfully",
            ]);
        }
        catch(Exception $error){
            return response()->json([
                "error"=> "something went wrong",
            ]);
        }
    }
}
