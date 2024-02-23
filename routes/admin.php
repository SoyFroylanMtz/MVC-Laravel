<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route ::get('/users',[UserController::class,'index'])->name('admin.users.index');;
Route ::get('/users/{user}/edit',[UserController::class,'edit'])->name('admin.users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
Route ::get('/users/{user}',[UserController::class,'show'])->name('admin.users.show');