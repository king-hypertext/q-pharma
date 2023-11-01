<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::controller(AppController::class)->group(function () {
    Route::get("/drug-price","getAllDrugs")->name('price');
    Route::post("/add-invoice","AddInvoice")->name("invoice.add");
    Route::get("/print-invoice?{invoiceId}","PrintInvoice")->name("invoice.print");
});

Route::get('/', function () {
    return view('layout.layout');
});
Route::get('/drugs', function () {
    return response([
        'paracetamol', 'citro c', 'amoxacilin'
    ]);
});
