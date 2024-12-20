<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index']);

Route::get('create', [TodoController::class, 'create']);

Route::get('details/{todo}', [TodoController::class, 'details']);

Route::get('edit/{todo}', [TodoController::class, 'edit'])->name('todos.edit');

Route::post('update/{todo}', [TodoController::class, 'update'])->name('todos.update');

Route::get('delete/{todo}', [TodoController::class, 'delete'])->name('delete.todo');

Route::post('todos/update/{todo}', [TodoController::class, 'updateTodoCheck'])->name('todos.update');

Route::post('store-data', [TodoController::class, 'store']);
