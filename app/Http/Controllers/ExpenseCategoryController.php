p<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Illuminate\Http\Request;


class ExpenseCategoryController extends Controller
{
    public function index(){

        $expensecategory= new ExpenseCategory;

        $data = ExpenseCategory::All();
        //dd($data);
        return view('expense_category.index')->with('expensecategory',$data);
    }



    public function create()
    {
        return view('expense_category.create');
    }

    public function store(Request $request){

        $expensecategory= new ExpenseCategory;

        $this->validate($request,[

            'name'=>'required|max:100|min:3',
            'amount'=>'required',
            'timeline'=>'required',
            'period'=>'required',
        ]);

        $expensecategory->name=$request->name;
        $expensecategory->amount=$request->amount;
        $expensecategory->timeline=$request->timeline;
        $expensecategory->period=$request->period;
        $expensecategory->description=$request->description;
        $expensecategory->save();

        
        return redirect()->back();
        //return view('/Expense/add')->with('Ex_Category',$data);

        //dd($data);
        //return redirect()->back();
       // dd($request ->all());

    }

    public function edit($id)
    {
         $expensecategory= ExpenseCategory::find($id);
            return view('expense_category.edit')->with('editcategory',$expensecategory);
    }

    public function update(Request $request)
    {
        $id=$request->id;
        $expensecategory=ExpenseCategory::find($id);
        $expensecategory->name=$request->name;
        $expensecategory->amount=$request->amount;
        $expensecategory->timeline=$request->timeline;
        $expensecategory->period=$request->period;
        $expensecategory->description=$request->description;
        $expensecategory->save();
        $expensecategory=ExpenseCategory::All();
        return view('expense_category.index')->with('expensecategory',$expensecategory);
        
    }

    public function destroy($id)
    {
        $expensecategory=ExpenseCategory::find($id);
        $expensecategory->delete();
        return redirect()->back();
    }
}
