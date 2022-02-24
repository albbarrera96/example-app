<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\TestController;

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


Route::get('/', [TodosController::class, 'index'])->name('todos');

Route::post('/', [TodosController::class, 'store'])->name('todos');

Route::get('/{id}', [TodosController::class, 'store'])->name('todos-show');

Route::patch('/', [TodosController::class, 'store'])->name('todos-edit');

Route::delete('/{id}', [TodosController::class, 'delete'])->name('todos-delete');

