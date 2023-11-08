<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::controller(AppController::class)->group(function () {
    Route::get("/drug-price", "getAllDrugs")->name('price');
    Route::view("/new-invoice", "pages.invoice", ['title' => 'NEW INVOICE'])->name('invoice');
    Route::post("/add-invoice", "AddInvoice")->name("invoice.add");
    Route::get("/print-invoice/{token}", "PrintInvoice");
    Route::get("/manage-invoice", "ManageInvoice")->name("manage.invoice");
    Route::get("/invoices","getAllInvoices");
});

Route::get('/', function () {
    return view('layout.layout');
});
Route::get('/drugs', function () {
    $arr = [
        "paracetamol", "citro c", "amoxacilin", "apc", "qwick action", "lumether", "pro-cold", "ryhzen", "dyzekin", "cipro",
    ];
    return response()->json($arr);
})->name('drugs.list');
