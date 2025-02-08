<?php

use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::get('/test', function () {
    return [
        'msg' => 'Api Working fine'
    ];
});

Route::get('/noteGet', NoteController::class  . '@index');
Route::post('/noteAdd', NoteController::class  . '@store');

