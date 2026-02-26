<?php

<<<<<<< HEAD
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\AuthorController;
use App\Http\controllers\BookController;
use App\Http\Controllers\MemberControler;
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

<<<<<<< HEAD
// Author
Route::apiResource('author',AuthorController::class);
// Book
Route::apiResource('book',BookController::class);
// Member
Route::apiResource('member',MemberController::class);
=======
 Route::apiResource("author", AuthorController::class);
// Rout::apiResource("book",bookController::class);
Route::apiResource("book", BookController::class);
Route::apiResource("member",MemberControler::class);
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
