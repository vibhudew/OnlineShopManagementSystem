<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use App\DataTables\ExpenseDataTable;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ExpenseDataTable $dataTable)
    {
        return $dataTable->render('expense.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        return view('expense.create');
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
       
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

        
        return redirect()->back();
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
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
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy(Expense $expense)
    {
        //
=======
    public function destroy($id)
    {
        Expense::find($id)->delete($id);
  
        return redirect()->back();
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
    }
}
