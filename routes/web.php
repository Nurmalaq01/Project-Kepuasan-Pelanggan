<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemporaryDataController;

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



// Route::get('/', [App\Http\Controllers\FormOneController::class, 'index']);
// Route::post('/', [App\Http\Controllers\FormOneController::class, 'store'])->name('form1.store');
// Route::get('/form2/{id?} ', [App\Http\Controllers\FormTwoController::class, 'index'])->name('form2');
// Route::post('/form2/{id?}', [App\Http\Controllers\FormTwoController::class, 'store'])->name('form2.store');
// Route::get('/form3/{id?}', [App\Http\Controllers\FormThreeController::class, 'index'])->name('form3');
// Route::post('/form3/{id?}', [App\Http\Controllers\FormThreeController::class, 'store'])->name('form3.store');
// Route::get('/form4/{id?} ', [App\Http\Controllers\FormFourController::class, 'index'])->name('form4');
// Route::post('/form4/{id?}', [App\Http\Controllers\FormFourController::class, 'store'])->name('form4.store');

Route::get('/sip', function () {
    return view('success');
})->name('sip');

Route::get('/', [TemporaryDataController::class, 'indexone'])->name('one');
Route::post('/', [TemporaryDataController::class, 'stepOne'])->name('post.one');
Route::get('/form2', [TemporaryDataController::class, 'indextwo'])->name('two');
Route::post('/form2', [TemporaryDataController::class, 'stepTwo'])->name('post.two');
Route::get('/form3', [TemporaryDataController::class, 'indexthree'])->name('three');
Route::post('/form3', [TemporaryDataController::class, 'stepThree'])->name('post.three');
Route::get('/form4', [TemporaryDataController::class, 'indexfour'])->name('four');
Route::post('/form4', [TemporaryDataController::class, 'stepFour'])->name('post.four');