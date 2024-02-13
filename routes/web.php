<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('front');
// });
Route::get('/ ', [App\Http\Controllers\Front::class, 'depan']);
Route::get('/front ', [App\Http\Controllers\Gap::class, 'index']);

Route::get('/hasil ', [App\Http\Controllers\HasilKepentingan::class, 'index']);
Route::get('/lapor', [App\Http\Controllers\HasilKepentingan::class, 'laporan']);
Route::get('/ try', function () {
    return view('coba');
});
// Route::get('/try ', [App\Http\Controllers\Kepentingan::class, 'index']);
Route::get('/next ', [App\Http\Controllers\Kepentingan::class, 'index']);
Route::get('/next2', [App\Http\Controllers\Kepuasan::class, 'index']);
Route::get('/empat', [App\Http\Controllers\HasilKepentingan::class, 'empat']);
// Route::get('/ next', function () {
//     return view('kepentingan');
// });

// Route::get('/empat', function () {
//     return view('soalkeempat');
// });