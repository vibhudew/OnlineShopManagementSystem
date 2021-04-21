<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetails;

class AddProductController extends Controller
{
    public function store(Request $request){

        $ProductDetails = new ProductDetails;

        $this->validate($request,[
            'pId'=>'required|max:4|min:1',
            'productName'=>'required|max:10|min:1'
        ]);
        
        $ProductDetails->Productid=$request->pId;
        $ProductDetails->ProductName=$request->productName;
        $ProductDetails->Unit=$request->Unit;
        $ProductDetails->Brand=$request->brand;
        $ProductDetails->Category=$request->category;
        $ProductDetails->SubCategory=$request->subCategory;
        $ProductDetails->DefaultPurchasePrice=$request->purchasePrice;
        $ProductDetails->DefaultSellingPrice=$request->sellingPrice;
        $ProductDetails->ProductDescription=$request->description;
        $ProductDetails->save();

        $data= ProductDetails::all();
           
        return view('Product/viewproduct')->with('Product1', $data);//return product view with data to display
        //dd($request->all());
    }
    public function deleteProduct($Productid){
        $ProductDetails = ProductDetails::find($Productid);
        $ProductDetails->delete();
        return redirect()->back();

    }
    


}
