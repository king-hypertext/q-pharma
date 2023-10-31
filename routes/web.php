<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
Route::controller(AppController::class)->group(function () {
    Route::get("/drug-price","getAllDrugs");
    Route::post("/add-invoice","AddInvoice")->name("invoice.add");
});

Route::get('/', function () {
    return view('layout.layout');
});
Route::get('/drugs', function () {
    return [
        'paracetamol', 'citro c', 'amoxacilin'
    ];
});
