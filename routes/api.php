<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;

//Livros
Route::get('/books',[BookController::class, 'index']);
Route::post('/books',[LoanController::class, 'store']); //admin
Route::get('/books{id}',[BookController::class,'show']);
Route::put('/books{id}',[BookController::class,'update']);//admin
Route::delete('/books{id}',[BookController::class,'destroy']);//admin

// Empréstimos
Route::post('/loans',[LoanController::class,'store']); //aluno/aluguel
Route::get('/loans',[LoanController::class,'index']); //admin
Route::patch('/loans/{id}/return',[LoanController::class,'returnBook']); //devolução