<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetails;

class AddProductController extends Controller
{
    public function store(Request $request){

        $ProductDetails = new ProductDetails;

        $this->validate($request,[
            'productName'=>'required|max:50|min:2',
            'purchasePrice'=>'required|numeric',
            'sellingPrice'=>'required|numeric',
            
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
           
        return redirect('/Product')->with('Product1', $data)->with('success', 'product added successfully!');//return product view with data to display
        //dd($request->all());
    }
    public function deleteProduct($id){
        $ProductDetails = ProductDetails::find($id);
        $ProductDetails->delete();
        return redirect()->back()->with('success', 'product deleted successfully!');

    }
    
    public function updateProductView($id){
        $ProductDetails = ProductDetails::find($id);
        
        return view('Product/updateproduct')->with('ProductDetails', $ProductDetails);

    }

    public function pSearch()
    {
        $search_text = $_GET['query'];
        $ProductDetails = ProductDetails::where('ProductName', 'LIKE', '%' .$search_text. '%')->get();

        return view('Product/productsearch' , compact('ProductDetails'));
    }

    public function updateProduct(Request $request){
        

        // dd($request);
        $id=$request->id;
        $ProductDetails=ProductDetails::find($id);
        $ProductDetails->ProductName=$request->productName;
        $ProductDetails->Unit=$request->Unit;
        $ProductDetails->Brand=$request->brand;
        $ProductDetails->Category=$request->category;
        $ProductDetails->SubCategory=$request->subCategory;
        $ProductDetails->DefaultPurchasePrice=$request->purchasePrice;
        $ProductDetails->DefaultSellingPrice=$request->sellingPrice;
        $ProductDetails->ProductDescription=$request->description;
        $ProductDetails->save();
        $ProductDetails=ProductDetails::All();
        return redirect('/Product')->with('Product1',$ProductDetails)->with('success', 'product updated successfully!');



    }
    

}
