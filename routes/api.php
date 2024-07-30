<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->get('/your-endpoint', function (Request $request) {
    return response()->json(['message' => 'Hello from Laravel!!!']);
});
