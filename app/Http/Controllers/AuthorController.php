<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $author =Author::create([
          "name"=>$reauest->name,
          "bio"=>$reauest->biography,
          "nationality"=>$request->nationality,
        ]);
        return response()->json([
            "createdAuthor"=> $author
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
