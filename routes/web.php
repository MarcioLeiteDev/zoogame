<?php

use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(TesteController::class)->prefix('/')->as('.')->group(function(){
    Route::get('/' , 'index')->name('index');
    Route::get('/sair' , 'sair')->name('sair');
    Route::post('/store' , 'store')->name('store');
});


