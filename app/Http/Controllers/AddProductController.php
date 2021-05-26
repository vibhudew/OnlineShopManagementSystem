<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetails;

class AddProductController extends Controller
{
    public function store(Request $request){

        $ProductDetails = new ProductDetails;

        $this->validate($request,[
            'productName'=>'required|max:50|min:2'
            
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
    public function deleteProduct($id){
        $ProductDetails = ProductDetails::find($id);
        $ProductDetails->delete();
        return redirect()->back();

    }
    
    public function updateProductView($id){
        $ProductDetails = ProductDetails::find($id);
        
        return view('Product/updateproduct')->with('ProductDetails', $ProductDetails);

    }

    public function search()
    {
        $search_text = $_GET['query'];
        $ProductDetails = ProductDetails::where('ProductName', 'LIKE', '%' .$search_text. '%')->get();

        return view('Product/search' , compact('ProductDetails'));
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
        return view('Product/viewproduct')->with('Product1',$ProductDetails);



    }
    

}
