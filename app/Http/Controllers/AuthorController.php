<?php

namespace App\Http\Controllers;
use App\Http\Requests\AuthorInsertRequest;
use Illuminate\Http\Request;
use App\Models\Author;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $author = Author::paginate(8);
        return new AuthorResource($authors);

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
        return response()->json([
            "author"=>$author
        ]);
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
