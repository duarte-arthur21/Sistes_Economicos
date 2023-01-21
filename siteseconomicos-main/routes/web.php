<?php

use App\Http\Controllers\MensagemController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Router List User
Route::get('/mensagem', [MensagemController::class, 'index'])->name('listUsers');

Route::get('/mensagem/create', [MensagemController::class, 'create']);

Route::post('/mensagem/update', [MensagemController::class, 'update'])->name('listUsers.update');

// Route::resource('listUsers', ListUserController::class)->except(['update']);
Route::post('/mensagem/destroy', [MensagemController::class, 'destroy'])->name('listUsers.destroy');