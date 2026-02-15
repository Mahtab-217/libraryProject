<?php

namespace App\Http\Controllers;
use App\Http\Requests\AuthorInsertRequest;
use Illuminate\Http\Request;
use App\Http\Resources\Authorresource;
use App\Models\Author;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
   

    /**
     * Store a newly created resource in storage.
     */
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $author=Author::findOrFail($id);
        return new AuthorResource($author);
            }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorInsertRequest $request, Author $author)
    {
        //
       $author->update($request->validated());
       return response()->json([
         "author"=>$author
       ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();
        return response()->json([
          "message"=>"one author has been deleted",
        ]);
    }
}
