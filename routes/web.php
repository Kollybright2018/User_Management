<?php

use App\Http\Controllers\UserController;
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
//     return view('welcome');
// });
Route::post('/create', [UserController::class, 'createUser'])->name('createUser');
Route::post('/edituser', [UserController::class, 'editUser'])->name('editUser');
Route::get('/adduser', [UserController::class, 'index'])->name('/');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::get('/', [UserController::class, 'getUsers'])->name('users');
Route::get('/delete/{id}', [UserController::class, 'delete']);
