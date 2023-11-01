<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function getAllDrugs(Request $drugs)
    {
        if ($drugs->medicine === 'paracetamol') {
            return 2;
        } else {
            return 5;
        }
    }
    public function AddInvoice(Request $drugs)
    {
        // $drugs->validate([
        //     'customerName' => 'string|max:150',
        //     'customerPhone' => 'required|numeric|max_digits:15',
        //     'invoiceDate' => 'required',
        //     'paymentType' => 'required|string',
        //     'medicine' => 'required|string|exists:drugs',
        //     'price' => 'required|numeric',
        //     'quantity' => 'required|numeric',
        //     'total' => 'required|numeric'
        // ]);
        $medicine = $drugs->medicine;
        $price = $drugs->price;
        $quantity = $drugs->quantity;
        $total = $drugs->total;
        for ($i = 0; $i < count($medicine); $i++) {
            $invoice = [
                'customerName' => $drugs->customerName,
                'customerPhone' => $drugs->customerPhone,
                'invoiceDate' => $drugs->invoiceDate,
                'paymentType' => $drugs->paymentType,
                'medicine' => $medicine[$i],
                'price' => $price[$i],
                'quantity' => $quantity[$i],
                'total' => $total[$i]
            ];
            Invoice::create($invoice);
        }
        return redirect()->back()->with('invoice', 'Invoice has been saved!');
    }
    public function PrintInvoice($invoiceId)
    {
        $query = Invoice::where('id', '=', $invoiceId)->get();
    }
}
