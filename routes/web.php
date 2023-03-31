<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('db-test');
});
Route::get('/test', function () {
    $users = DB::table('users')->get();
    return $users;
});
Route::post('/db-test/check', function (Illuminate\Http\Request $request) {
    $params = [
        'driver' => $request->input('driver'),
        'host' => $request->input('host'),
        'port' => $request->input('port'),
        'database' => $request->input('database'),
        'username' => $request->input('username'),
        'password' => $request->input('password'),
    ];
    try {
        DB::connection($params)->getPdo();
        return view('db-test')->with('status', 'Database connection successful.');
    } catch (\Exception $e) {
        return view('db-test')->with('status', 'Database connection failed: ' . $e->getMessage());
    }
})->name('db-test.check');
Route::get('/db-test', function () {
    return view('db-test');
});
