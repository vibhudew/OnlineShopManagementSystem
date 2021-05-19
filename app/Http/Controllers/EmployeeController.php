<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('hrm.employees.read', ['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required |max:100|min:3',
            'lname'=>'required|max:100|min:3',
            'address'=>'required|max:100|min:5',
            'nic'=>'required|max:12|min:10',
            'mobile'=>'required|min:10',
            'email'=>'required|min:5|max:50'    
            
        ]);

        $employee = new Employee([
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'address' => $request->get('address'),
            'nic' => $request->get('nic'),
            'mobile' => $request->get('mobile'),
            'email' => $request->get('email'),
        ]);

        $employee->save();

        return redirect('/HRM')->with('success', 'Employee created successfully!!!');
    }

    public function create()
    {
        return view('hrm.employees.create');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('hrm.employees.edit', ['employee' => $employee]);        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fname'=>'required |max:100|min:3',
            'lname'=>'required|max:100|min:3',
            'address'=>'required|max:100|min:5',
            'nic'=>'required|max:12|min:10',
            'mobile'=>'required|min:10',
            'email'=>'required|min:5|max:50'     
            
        ]);

        $employee = Employee::find($id);
        $employee->fname =  $request->get('fname');
        $employee->lname = $request->get('lname');
        $employee->address = $request->get('address');
        $employee->nic = $request->get('nic');
        $employee->mobile =$request->get('mobile');
        $employee->email = $request->get('email');
       
        $employee->save();

        return redirect('/HRM')->with('success', 'Employee updated successfully!');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/HRM')->with('success', 'Employee deleted successfully!');
    }
}
