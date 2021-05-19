<?php

namespace App\Http\Controllers;
use App\Models\Payroll;
use App\Models\Employee;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function index()
    {
        $payrolls = Payroll::all();

        return view('hrm.payroll.read', ['payrolls' => $payrolls]);
    }

    public function store(Request $request)
    {
        $request->validate([
<<<<<<< HEAD
            'empName' =>'required|max:100|min:3',
=======
           
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
            'monthYear'=>'required',
            'totalWorkDur'=>'required',
            'amtPerDur'=>'required',
            'allow'=>'required',
            'deduct'=>'required'
            
        ]);

        $payroll = new Payroll([
            'empName' => $request->get('empName'),
            'monthYear' => $request->get('monthYear'),
            'totalWorkDur' => $request->get('totalWorkDur'),
            'amtPerDur' => $request->get('amtPerDur'),
            'allow' => $request->get('allow'),
            'deduct' => $request->get('deduct'),
        ]);
        $payroll->grossPay();
        $payroll->save();

        return redirect('/Payroll')->with('success', 'Payroll created successfully!!!');
    }

    public function create()
    {
<<<<<<< HEAD
        return view('hrm.payroll.create');
=======
        $employees = Employee:: all(['id','name']);
        return view('hrm.payroll.create',compact('employees'));
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
    }

    public function edit($id)
    {
        $payroll = Payroll::find($id);
<<<<<<< HEAD
        return view('hrm.payroll.edit', ['payroll' => $payroll]);        
=======
        $employees = Employee:: all(['id','name']);
        return view('hrm.payroll.edit', ['payroll' => $payroll],compact('employees'));        
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
    }

    public function update(Request $request, $id)
    {
        $request->validate([
<<<<<<< HEAD
            'empName' =>'required|max:100|min:3',
=======
            
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
            'monthYear'=>'required',
            'totalWorkDur'=>'required',
            'amtPerDur'=>'required',
            'allow'=>'required',
            'deduct'=>'required'
            
        ]);

        $payroll = Payroll::find($id);
        $payroll->empName =  $request->get('empName');
        $payroll->monthYear=  $request->get('monthYear');
        $payroll->totalWorkDur=  $request->get('totalWorkDur');
        $payroll->amtPerDur=  $request->get('amtPerDur');
        $payroll->allow=  $request->get('allow');
        $payroll->deduct=  $request->get('deduct');

        $payroll->grossPay();
        
        $payroll->save();

        return redirect('/Payroll')->with('success', 'Payroll updated successfully!');
    }

    public function destroy($id)
    {
        $payroll = Payroll::find($id);
        $payroll->delete();

        return redirect('/Payroll')->with('success', 'Payroll deleted successfully!');
    }
<<<<<<< HEAD
=======

    public function searchPayroll(){

        $search_text = $_GET['queryPayroll'];
        $payrolls = Payroll::where('empName','LIKE','%'.$search_text.'%') -> get();

        return view('hrm.payroll.searchPayroll', compact('payrolls'));

    }
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
}
