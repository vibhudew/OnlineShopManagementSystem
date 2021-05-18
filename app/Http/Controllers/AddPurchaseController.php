<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addpurchase;

class AddPurchaseController extends Controller
{
    public function store(Request $request){
        $addpurchase=new addpurchase;

        $this->validate($request,[
            'Invoiceid'=>'required|max:10|min:5',
            'customer'=>'required|max:10|min:5',
            'totamount'=>'required|numeric',
            ]);

            $addpurchase->invoiceid=$request->Invoiceid;
            $addpurchase->customer=$request->customer;
            $addpurchase->totalamount=$request->totamount;
            $addpurchase->paymentmethod=$request->paymentmethod;
            $addpurchase->payterm=$request->payterm;
            $addpurchase->paymentstatus=$request->paymentstatus;
            $addpurchase->sellstatus=$request->sellstatus;
            $addpurchase->save();
            $addpurchase=AddPurchase::all();//getting all data from addsales table to data variable to display
        //dd($request->all()); 
        return view('Purchase/viewpurchase')->with('viewpurchase1', $addpurchase );  //return addsales view with data to display
    }
    public function deleteviewpurchase($id){

        $addpurchase=addpurchase::find($id);
        $addpurchase->delete();
        return redirect()->back();
    }

    public function updateviewpurchase($id){

        $addpurchase=addpurchase::find($id);
        return view('Sales/updatepurchase')-> with('uppurchase' , $addpurchase);
    }

    public function editviewpurchase(Request $request){

        $id = $request->id;
       
        $addpurchase=addpurchase::find($id);
        $addpurchase->invoiceid=$request->Invoiceid;
        $addpurchase->customer=$request->customer;
	    $addpurchase->totalamount=$request->totamount;
        $addpurchase->paymentmethod=$request->paymentmethod;
        $addpurchase->payterm=$request->payterm;
        $addpurchase->paymentstatus=$request->paymentstatus;
        $addpurchase->sellstatus=$request->sellstatus;
        $addpurchase->save();
        $addpurchase=addpurchase::all();
        return view('Purchase/viewpurchase')-> with('viewpurchase1', $addpurchase );

    }

}

