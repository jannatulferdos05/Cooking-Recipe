<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware('api')->group(function () {
    Route::get('/cse', function (Request $request) {
        return response()->json(['message' => 'Welcome to the CSE API']);
    });
});
