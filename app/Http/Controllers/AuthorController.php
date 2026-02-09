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


        $author = Author::all();
        return response()->json([
            "data"=>$author,
        ]);
    }
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $author = Author::create([
         "name"=>$request->name,
         "bio"=>$request->bio,
         "nationality"=>$request->nationality
       ]);

        return response()->json([
            "createdAuthor"=> $author,
            // "error"=>"something went wrong"
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
