<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addsales;

class AddsalesController extends Controller
{
    public function store(Request $request){
        $addsales=new addsales;

        $this->validate($request,[
            'Invoiceid'=>'required|numeric|max:10|min:5',
            'customer'=>'required|max:10|min:5',
            ]);

        $addsales->invoiceid=$request->Invoiceid;
        $addsales->customer=$request->customer;
	    $addsales->totalamount=$request->totamount;
        $addsales->paymentmethod=$request->paymentmethod;
        $addsales->payterm=$request->payterm;
	    $addsales->paymentstatus=$request->paymentstatus;
        $addsales->sellstatus=$request->sellstatus;
        $addsales->save();
        $addsales=addsales::all();//getting all data from addsales table to data variable to display
        //dd($request->all()); 
        return view('sales/viewsales')->with('viewsales1', $addsales );  //return addsales view with data to display
    }
    public function deleteviewsales($id){

        $addsales=addsales::find($id);
        $addsales->delete();
        return redirect()->back();
    }

    public function updateviewsales($id){

        $addsales=addsales::find($id);
        return view('Sales/updatesales')-> with('upsale' , $addsales);
    }

    public function editviewsales(Request $request){

        $id = $request->id;
       
        $addsales=addsales::find($id);
        $addsales->invoiceid=$request->Invoiceid;
        $addsales->customer=$request->customer;
	    $addsales->totalamount=$request->totamount;
        $addsales->paymentmethod=$request->paymentmethod;
        $addsales->payterm=$request->payterm;
	    $addsales->paymentstatus=$request->paymentstatus;
        $addsales->sellstatus=$request->sellstatus;
        $addsales->save();
        $addsales=addsales::all();
        return view('Sales/viewsales')->with('viewsales1', $addsales );

    }

}

