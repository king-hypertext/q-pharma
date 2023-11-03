<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;

Route::controller(AppController::class)->group(function () {
    Route::get("/drug-price", "getAllDrugs")->name('price');
    Route::post("/add-invoice", "AddInvoice")->name("invoice.add");
    Route::get("/print-invoice?{invoiceId}", "PrintInvoice")->name("invoice.print");
});

Route::get('/', function () {
    return view('layout.layout');
});
Route::get('/drugs', function (Request $req) {
    return[
        "paracetamol", "citro c", "amoxacilin"
    ];
})->name('drugs.list');
