<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ex_category;

class Budgetcontroller extends Controller
{
    public function addexcategory(Request $request){

        $ex_category=new Ex_category;

        $this->validate($request,[

            'name'=>'required|max:100|min:5',
            'amount'=>'required',
            'timeline'=>'required',
            'period'=>'required',
        ]);

        $ex_category->name=$request->name;
        $ex_category->amount=$request->amount;
        $ex_category->timeline=$request->timeline;
        $ex_category->period=$request->period;
        $ex_category->description=$request->description;
        $ex_category->save();

        
        return redirect()->back();
        //return view('/Expense/add')->with('Ex_Category',$data);

        //dd($data);
        //return redirect()->back();
       // dd($request ->all());

    }

    public function deleteexcategory($id){
    
        $ex_category=Ex_category::find($id);
        $ex_category->delete();
        return redirect()->back();
    }

    public function editexcategoryview($id){

        $ex_category=Ex_category::find($id);
        return view('/Expense/budgetedit')->with('editEx_Category',$ex_category);
    }

    public function editexcategory(Request $request){

        $id=$request->id;
        $ex_category=Ex_category::find($id);
        $ex_category->name=$request->name;
        $ex_category->amount=$request->amount;
        $ex_category->timeline=$request->timeline;
        $ex_category->period=$request->period;
        $ex_category->description=$request->description;
        $ex_category->save();
        $ex_category=Ex_category::All();
        return view('/Expense/budget')->with('Ex_category',$ex_category);;
    }
}
