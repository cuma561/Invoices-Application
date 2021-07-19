<?php

namespace App\Http\Controllers;

use App\Models\Invoice;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){

        $invoices = Invoice::with('customer')->get();
        return view('invoices.index',['invoices' => $invoices]);
    }

    public function create(){
        return view('invoices.create');
    }

    public function store(Request $request){

        $request->validate([
            'number'=> 'required|string',
            'date' => 'required|date',
            'total' => 'required|min:2',
            'description' => 'required|min:50'
        ]);


        $invoice = new Invoice();

        $invoice->number = $request->number;
        $invoice->date = $request->date;
        $invoice->total = $request->total;
        $invoice->description = $request->description;
        $invoice->customer_id = $request->customer_name;

        $invoice->save();

        return redirect()->route('invoices.index')->with('message','Dodano fakture poprawnie');
    }

    public function show($id){
        $invoice = Invoice::find($id);
        return view('invoices.show',['invoice' => $invoice]);
    }

    public function edit($id){

        $invoice = Invoice::find($id);
        return view('invoices.edit',['invoice' => $invoice]);
    }

    public function update($id,Request $request){
        
        $invoice = Invoice::find($id);

        $invoice->number = $request->number;
        $invoice->date = $request->date;
        $invoice->total = $request->total;
        $invoice->description = $request->description;

        $invoice->save();

        return redirect()->route('invoices.index')->with('message','Zmieniono fakture poprawnie');
    }

    public function delete($id){

        Invoice::destroy($id);

        return redirect()->route('invoices.index')->with('message','Usunięto fakture');
    }
}
