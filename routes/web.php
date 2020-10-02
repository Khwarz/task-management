<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Http\Request;
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

# GET: Lister, afficher une page,
# POST: Creer des choses
# PATCH/PUT: Modifier des choses
# DELETE: Supprimer des choses

Route::get("/", [TaskController::class, 'index'])->name("welcome");

Route::get("/create", [TaskController::class, 'create'])->name("taches.create");
Route::post("/", [TaskController::class, 'store'])->name("taches.store");

Route::get("/{task}/edit", [TaskController::class, 'edit'])->name('taches.edit');
Route::put("/{task}", [TaskController::class, 'update'])->name("taches.update");

Route::delete("/{task}", [TaskController::class, 'destroy'])->name("taches.destroy");
