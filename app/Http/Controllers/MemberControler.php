<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberInsertRequest;
use App\Http\Resources\memberResource;
use App\Models\Book;
use App\Models\Member;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpCache\ResponseCacheStrategy;

class MemberControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
       $members= Member::paginate(8);
       return memberResource::collection($members);
    }catch(Exception $error){
        return Response()->json([
           "error"=>$error->getMessage()
        ]);
    }
    } 

    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberInsertRequest $request)
    {
        $member=Member::create($request->validated());
        return new memberResource($member);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
        $member=Member::findOrFail($id);
        return new memberResource($member);
        }catch(Exception $error){
         return Response()->json([
         "message"=>"user with id ".$id. " not found"
         ],
         407
         );
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
       $member=  Member::findOrFail($id);
       $member->update($request->validated());
       return new memberResource($member);
        }catch(Exception $error){
            return response()->json([
                 "error"=>"could not update"
            ]);
           
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $book=Book::findOrFail($id);
            $book->delete($id);
            return Response()->json([
                "message"=>" The member with the id ".$id." has been deleted successfully"
            ]);

        }
        catch(Exception $error){
             return response()->json([
                "error"=>$error->getMessage()
             ]);
        }
    }
}
