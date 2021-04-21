<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddSales;

class AddsalesController extends Controller
{
    public function store(Request $request){
        $addsales=new AddSales;
        $addsales->invoiceid=$request->Invoiceid;
        $addsales->invoicedate=$request->Invoicedate;
        $addsales->customer=$request->customer;
        $addsales->sellstatus=$request->sellstatus;
        $addsales->payterm=$request->payterm;
        $addsales->save();
        return redirect()->back();
        //dd($request->all());
    }
}
