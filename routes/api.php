<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/hello', function () {
    $data = [        'message' => 'Hello, World!'    ];
    return response()->json($data);
});
Route::get('/example', function () {
    return response()->json([        'message' => 'This is an example API response',        'data' => [            'name' => 'John Doe',            'email' => 'johndoe@example.com',            'age' => 30,        ],
    ]);
});
Route::get('/db-check', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['message' => 'Database connection established.']);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Database connection failed.']);
    }
});


