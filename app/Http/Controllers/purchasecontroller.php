<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseDetails;

class purchasecontroller extends Controller
{
    public function store(Request $request){
        $purchasedetails=new PurchaseDetails;

        $this->validate($request,[
            'transactionreferencenumber1'=>'required|max:10|min:5',
            'supllierid1'=>'required|max:10|min:5',
            ]);

        $purchasedetails->transactionreferencenumber=$request->transactionreferencenumber1;
        $purchasedetails->supllierid=$request->supllierid1;
	    $purchasedetails->discountedprice=$request->discountedprice1;
        $purchasedetails->totalamount=$request->totalamount1;
        $purchasedetails->paymentdueamount=$request->paymentdueamount1;
	    $purchasedetails->purchasestatus=$request->purchasestatus1;
        $purchasedetails->paymentstatus=$request->paymentstatus1;
        $purchasedetails->save();
        $purchasedetails=PurchaseDetails::all();//getting all data from addsales table to data variable to display
        //dd($request->all()); 
        return view('Purchases/viewpurchases')->with('viewpurchases1', $purchasedetails );  //return addsales view with data to display
    
    }
    public function deleteviewpurchases($id){

        $purchasedetails=PurchaseDetails::find($id);
        $purchasedetails->delete();
        return redirect()->back();
    }
    public function updateviewpurchases($id){

        $purchasedetails=purchaseDetails::find($id);
        return view('Purchases/updatepurchases')-> with('uppurchase' , $purchasedetails);
    }
    public function editviewpurchases(Request $request){

        $id = $request->id;
       
        $purchasedetails=purchaseDetails::find($id);
        $purchasedetails->transactionreferencenumber=$request->transactionreferencenumber1;
        $purchasedetails->supllierid=$request->supllierid1;
	    $purchasedetails->discountedprice=$request->discountedprice1;
        $purchasedetails->totalamount=$request->totalamount1;
        $purchasedetails->paymentdueamount=$request->paymentdueamount1;
        $purchasedetails->purchasestatus=$request->purchasestatus1;
        $purchasedetails->paymentstatus=$request->paymentstatus1;
        $purchasedetails->save();
        $purchasedetails=purchaseDetails::all();
        return view('Purchases/viewpurchases')->with('viewpurchases1',  $purchasedetails );

    }

    public function getAllEmployees(){
        $purchasedetails =purchaseDetails::all();
        return view('Purchases/viewpurchases');
        //->with('viewpurchases1', $purchasedetails ); 
        //compact('Purchases1'));


    }
    public function downloadPDF(){
        $purchasedetails  =purchaseDetails::all();
        $pdf = PDF::loadView('Purchases/viewpurchases');
        //,compact('Purchases1'));
        return $pdf ->download(employee.pdf);
    }
    public function searchPurchase(){

        $search_text = $_GET['queryPurchase'];
        $purchasedetails = purchaseDetails::where('transactionreferencenumber','LIKE','%'.$search_text.'%') -> get();

        return view('Purchase.searchPurchase', compact('purchasedetails'));

    }
}
