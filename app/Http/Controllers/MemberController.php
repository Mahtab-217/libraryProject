<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberUpdateRequest;
use App\Http\Requests\MemberInsertRequest;
use App\Http\Resources\MemberResource;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
        $members = Member::paginate(10);
        return MemberResource::collection($members);
        }
        catch(Exception $error){
            return response()->json([
                "error"=> $error->getMessage(),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberInsertRequest $request)
    {
        //
        try{
        $member = Member::create($request->validated());
        return new MemberResource($member);
        }
        catch(Exception $error){
            return response()->json([
                "message"=> ""
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
        try{
        $member = Member::findOrFail($id);
        return new MemberResource($member);
        }
        catch(Exception $error){
            return response()->json([
                "message"=> "User with the id". $id . " not found, please try again",
            ],400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MemberUpdateRequest $request, Member $member)
    {
        //
        try{
        $member->update($request->validated());
        return new MemberResource($member);
        }
        catch(Exception $error){
            return response()->json([
                "message"=> "can't update this member",
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{
        $member = Member::findOrFail($id);
        $member->delete();
        return response()->json([
            "message"=> "Member with". $member->id ." has been deleted successfully",
        ],202);
        }
        catch(Exception $error){
        return response()->json([
            "error"=> $error->getMessage(),
        ],404);
    }
    }
}
