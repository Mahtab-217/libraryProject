<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\AuthorController;
use App\Http\controllers\BookController;
use App\Http\Controllers\MemberControler;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

 Route::apiResource("author", AuthorController::class);
// Rout::apiResource("book",bookController::class);
Route::apiResource("book", BookController::class);
Route::apiResource("member",MemberControler::class);