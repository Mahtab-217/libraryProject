<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Author
Route::apiResource('author',AuthorController::class);
// Book
Route::apiResource('book',BookController::class);
// Member
Route::apiResource('member',MemberController::class);
