<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddSalesPayments;

class AddsalespaymentsController extends Controller
{
    public function store(Request $request){
        $addsalespayments=new AddSalesPayments;
        $addsalespayments->salespaymentid=$request->salespayid;
        $addsalespayments->invoiceid=$request->Invoiceid;
        $addsalespayments->invoicedate=$request->Invoicedate;
        $addsalespayments->totalamount=$request->totamount;
        $addsalespayments->paymentmethod=$request->paymentmethod;
        $addsalespayments->paymentstatus=$request->paymentstatus;
        $addsalespayments->save();
        return redirect()->back();
        //dd($request->all());
    }
}
