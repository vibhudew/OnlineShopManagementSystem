<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseDetails;
use PDF;

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
        return redirect('/Purchases')->with('viewpurchases1', $purchasedetails )->with('success', 'Purchase added successfully!');;  //return addsales view with data to display
    
    }
    public function deleteviewpurchases($id){

        $purchasedetails=PurchaseDetails::find($id);
        $purchasedetails->delete();
        
        return redirect('/Purchases')->with('success', 'Purchase deleted successfully!');
    }
    public function updateviewpurchases($id){

        $purchasedetails=PurchaseDetails::find($id);
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
        $purchasedetails=PurchaseDetails::all();
        return redirect('/Purchases')->with('viewpurchases1',  $purchasedetails )->with('success', 'Purchase updated successfully!');;

    }

    public function searchPurchase(){
        $search_text = $_GET['queryPurchase'];
        $viewpurchases1 = PurchaseDetails::where('transactionreferencenumber','LIKE','%'.$search_text.'%') -> get();

        return view('Purchases.searchPurchase', compact('viewpurchases1'));

    }

    public function reportPurchase(){
        $viewpurchases1 = PurchaseDetails::all();
        $pdf = PDF::loadView('Purchases.reportPurchase',compact('viewpurchases1'));
        return $pdf-> download('purchasesList.pdf');
    } 
}
