<?php

use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ListUserController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Router List User
Route::get('/listUsers', [ListUserController::class, 'index'])->name('listUsers');
Route::post('/listUsers/update', [ListUserController::class, 'update'])->name('listUsers.update');
// Route::resource('listUsers', ListUserController::class)->except(['update']);
Route::post('/listUsers/destroy', [ListUserController::class, 'destroy'])->name('listUsers.destroy');


Route::get('/mensagem', [MensagemController::class, 'index'])->name('listMsg');
//Route::get('/mensagem', [MensagemController::class, 'index']);

Route::get('/mensagem/create', [MensagemController::class, 'create']);

//Route::post('/mensagem/update', [MensagemController::class, 'update'])->name('listUsers.update');

// Route::resource('listUsers', ListUserController::class)->except(['update']);
//Route::post('/mensagem/destroy', [MensagemController::class, 'destroy'])->name('listUsers.destroy');