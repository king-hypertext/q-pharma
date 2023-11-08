<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Random;

class AppController extends Controller
{
    public function getAllDrugs(Request $drugs)
    {
        // dd($drugs);
        if ($drugs === 'paracetamol') {
            return 2;
        } else {
            return 5;
        }
    }
    public function getAllInvoices(Request $invoice){
        return DB::table('invoices')->select('*')->get();
    }
    public function Invoice()
    {
        return view('pages.invoice');
    }
    public function AddInvoice(Request $drugs)
    {
        // dd($drugs);
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
        $token = Random::generate(100);
        for ($i = 0; $i < count($medicine); $i++) {
            $invoice = [
                'customerName' => $drugs->customerName,
                'customerPhone' => $drugs->customerPhone,
                'invoiceDate' => $drugs->invoiceDate,
                'paymentType' => $drugs->paymentType,
                'medicine' => $medicine[$i],
                'price' => $price[$i],
                'quantity' => $quantity[$i],
                'total' => $total[$i],
                'InvoiceToken' => $token,
            ];
            Invoice::create($invoice);
        }
        return redirect()->back()->with('invoice', 'Invoice has been saved!')->with('print', $token);
    }
    public function PrintInvoice($token)
    {
        $query = Invoice::where('InvoiceToken', '=', $token)->get();
        $name = DB::table('invoices')->select('customerName')->where('InvoiceToken', '=', $token)->first();
        $phone = DB::table('invoices')->select('customerPhone')->where('InvoiceToken', '=', $token)->first();
        $date = DB::table('invoices')->select('updated_at')->where('InvoiceToken', '=', $token)->first();
        $paid_with = DB::table('invoices')->select('paymentType')->where('InvoiceToken', '=', $token)->first();
        // dd($name->customerName,$phone,$date,$paid_with);
        return view('pages.print', ['data' => $query, 'name' => $name, 'phone' => $phone, 'paid_with' => $paid_with, 'date' => $date]);
    }
    public function ManageInvoice(Invoice $invoice)
    {
        $data = $invoice->paginate(20);
        return view('pages.manage-invoice', ['data' => $data, 'title'=> 'MANAGE INVOICE']);
    }
}
