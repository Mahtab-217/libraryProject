<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use App\Http\Resources\AuthorResource;
use App\Http\Requests\AuthorInsertRequest;
use Illuminate\Http\Request;
use App\Models\Author;

=======
use App\Http\Requests\AuthorInsertRequest;
use Illuminate\Http\Request;
use App\Http\Resources\Authorresource;
use App\Models\Author;
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD
    public function index(Request $request)
    {
        //
        $authors = Author::whit('book');
        
       
        return AuthorResource::collection($authors);
    }
=======
    public function index()
    {
        //
       $authors = Author::with('book')->paginate(8);
        return AuthorResource::collection($authors);
         
        // $author = Author::all();
        // return response()->json([
        //     "data"=>$author,
        // ]);
    }
   
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(AuthorInsertRequest $request)
    {
        //
        $author = Author::create($request->validated());
        return new AuthorResource($author);
=======
    public function store(Request $request)
    {
        //
       $author = Author::create( $request->validated() );
    //     [
    //      "name"=>$request->name,
    //      "bio"=>$request->bio,
    //      "nationality"=>$request->nationality
    //    ]
      
  
        return new authorResource($author);
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
<<<<<<< HEAD
        $author = Author::findOrFail($id);
        return new AuthorResource($author);
    }
=======
        $author=Author::findOrFail($id);
        return new AuthorResource($author);
            }
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorInsertRequest $request, Author $author)
    {
        //
<<<<<<< HEAD
        $author->update($request->validated());
        return response()->json([
            "updateAuthor"=> $author,
        ]);
=======
       $author->update($request->validated());
       return response()->json([
         "author"=>$author
       ]);
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();
        return response()->json([
<<<<<<< HEAD
            "message"=> "One author deleted successfully",
        ]);

=======
          "message"=>"one author has been deleted",
        ]);
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
    }
}
