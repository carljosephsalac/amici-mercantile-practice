<?php

use App\Http\Controllers\AmiciController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('amicis.index');
});

Route::controller(AmiciController::class)->group(function() {
    Route::get('/amicis', 'index')->name('amicis.index');
    Route::get('/amicis/create', 'create')->name('amicis.create');
    Route::post('/amicis', 'store')->name('amicis.store');
    Route::get('/amicis/show/{amici}', 'show')->name('amicis.show');
    Route::get('/amicis/edit/{amici}', 'edit')->name('amicis.edit');
    Route::patch('/amicis/{amici}', 'update')->name('amicis.update');
    Route::delete('/amicis/{amici}', 'destroy')->name('amicis.destroy');
});
