<?php

use App\Http\Controllers\UdetailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\MockObject\Stub\ReturnCallback;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [UserController::class, 'create'])->name('user.create');
// Route::post('/store', [UserController::class,'store'])->name('user.store');



Route::get('/', [UdetailController::class, 'index'])->name('form.index');
Route::get('/create', [UdetailController::class, 'create'])->name('form.create');
Route::post('/store', [UdetailController::class,'store'])->name('form.store');
Route::get('/show/{id}', [UdetailController::class,'show'])->name('form.show');
Route::put('/update/{id}', [UdetailController::class, 'update'])->name('form.updte');
Route::get('/edit/{id}', [UdetailController::class, 'edit'])->name('form.edit');
Route::delete('/destroy/{id}', [UdetailController::class, 'destroy'])->name('form.destroy');
// Route::get('/form', function () {
//     return view('form.form');
// });
