<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductStock;
use App\Models\ProductDetails;

class ProductStocksController extends Controller
{
    public function stockstore(Request $request){

        $ProductStock = new ProductStock;

        $ProductStock->StockName=$request->stockname;
        $ProductStock->UnitPrice=$request->unitprice;
        $ProductStock->CurrentStock=$request->currentstock;
        $ProductStock->TotalStockValue=($request->unitprice) * ($request->currentstock);
        $ProductStock->save();

        $data= ProductStock::all();
           
        return view('Product_Stock/viewstock')->with('ProductStock', $data);
        // dd($request->all());
    }

    public function create(){
        $products = ProductDetails::all(['ProductName','DefaultSellingPrice']);
        return view('Product_Stock/addstock',compact('products'));

    }
   

    public function deleteStock($id){
        $ProductStock = ProductStock::find($id);
        $ProductStock->delete();
        return redirect()->back();

    }
    
    public function updateStockView($id){
        $ProductStock = ProductStock::find($id);
        $products = ProductDetails::all(['ProductName','DefaultSellingPrice']);
        return view('Product_Stock/updatestock')->with('ProductStock', $ProductStock)->with('products',$products);

    }

    public function updateStock(Request $request){
        

        // dd($request);
        $id=$request->id;
        $ProductStock=ProductStock::find($id);
        $ProductStock->StockName=$request->stockname;
        $ProductStock->UnitPrice=$request->unitprice;
        $ProductStock->CurrentStock=$request->currentstock;
        $ProductStock->TotalStockValue=($request->unitprice) * ($request->currentstock);
        
 
        $ProductStock->save();
        $ProductStock=ProductStock::All();
        return view('Product_Stock/viewstock')->with('ProductStock',$ProductStock);



    }

    


}
