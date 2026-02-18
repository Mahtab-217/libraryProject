<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorResource;
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
        $authors = Author::whit('book')->paginate(10);
        return AuthorResource::collection($authors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorInsertRequest $request)
    {
        //
        $author = Author::create($request->validated());
        return new AuthorResource($author);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $author = Author::findOrFail($id);
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
            "updateAuthor"=> $author,
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
            "message"=> "One author deleted successfully",
        ]);

    }
}
