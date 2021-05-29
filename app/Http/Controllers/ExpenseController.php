<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use App\DataTables\ExpenseDataTable;
use App\Models\ExpenseCategory;
use App\Models\Contact;
use Toastr;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ExpenseDataTable $dataTable)
    {

        $extotale = Expense::sum('amount');
        
        return $dataTable->render('expense.index',compact('extotale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contcats= Contact::all(['id','First_name']);
        $categories = ExpenseCategory::all(['id','name']);
        return view('expense.create',compact('categories','contcats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $expense= new Expense;

        $this->validate($request,[

            'name'=>'required|max:100|min:3',

        ]);

        $expense->name=$request->name;
        $expense->category=$request->category;
        $expense->date=$request->date;
        $expense->amount=$request->amount;
        $expense->contact=$request->contact;
        $expense->description=$request->description;
        $expense->save();

        Toastr::success('added successfully :)','Success');
        return redirect('/expense');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contcats= Contact::all(['id','First_name']);
        $categories = ExpenseCategory::all(['id','name']);
        $expenses= Expense::find($id);
        return view('expense.edit',compact('expenses','categories','contcats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $expense=Expense::find($id);
        $expense->name=$request->name;
        $expense->category=$request->category;
        $expense->date=$request->date;
        $expense->amount=$request->amount;
        $expense->contact=$request->contact;
        $expense->description=$request->description;
        $expense->save();
        $expense=Expense::All();
        Toastr::success('Updated successfully :)','Success');
        return redirect('/expense');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::find($id)->delete($id);
        Toastr::error('Deleted successfully :)','Delete');
        return redirect()->back();
    }
}
