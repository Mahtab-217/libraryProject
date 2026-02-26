<?php

namespace App\Http\Controllers;

use App\Http\Requests\bookInsertion;
use App\Http\Requests\BookUpdateRequest;
use App\Http\Resources\bookResource;
use App\Models\Book;
use Exception;
use Illuminate\Http\Request;
use Pest\Mutate\Options\ExceptOption;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpCache\ResponseCacheStrategy;

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
    public function show(Book $book)
    {
        $book->load("author");
         return new bookResource(($book));


        //
        // try{
        // $book=Book::findOrFail($id);
        // $book->load("author");
        // return new bookResource($book);
        // }catch(Exception $error){
        //     return Response()->json([
        //        "error"=>"book not found"
        //     ]);
        // }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookUpdateRequest $request, Book $book)
    {
        $book->update($request->validated());
        // $book = Book::findOrFail($id);
        // $book->update([
        //     "title"=>$request->title,
        //     "isbn"=>$request->isbn,
        //     "description"=>$request->description,
        //     "published_at"=>$request->published_at,
        //     "total_copies"=>$request->total_copies,
        //     "cover_image"=>$request->cover_image,
        //     "price"=>$request->price,
        //     "genra"=>$request->genra,
        //     "author_id"=>$request->author_id,
        // ]);
        $book->load("Author");
        return new bookResource($book);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{
            $book=Book::findOrFail($id);
            $book->delete();
            return Response()->json([
                "message"=> $book->title." deleted successfully"
            ]);
        }
        catch(Exception $error){
            return Response()->json([
                "error"=>"something went wrong"
            ]
            );
        }
    }
}
