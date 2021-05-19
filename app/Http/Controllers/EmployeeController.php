<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
class EmployeeController extends Controller
{
    public function index()
=======


class EmployeeController extends Controller
{
    public function index(Request $request)
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
    {
        $employees = Employee::all();

        return view('hrm.employees.read', ['employees' => $employees]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
       
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
        
       
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
    }

    public function store(Request $request)
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
      
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
        $request->validate([
            'name'=>'required|max:100|min:3',
            'address'=>'required|max:100|min:5',
            'nic'=>'required|max:12|min:10',
            'mobile'=>'required|min:10',
            'email'=>'required|min:5|max:50|email'    
            
        ]);


        $employee = new Employee([
<<<<<<< HEAD
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
=======
      
        $request->validate([
            'name'=>'required|max:100|min:3',
            'address'=>'required|max:100|min:5',
            'nic'=>'required|max:12|min:10',
            'mobile'=>'required|min:10',
            'email'=>'required|min:5|max:50|email'    
            
        ]);


        $employee = new Employee([

            'name' => $request->get('name'),
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======

            'name' => $request->get('name'),
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
            'address' => $request->get('address'),
            'nic' => $request->get('nic'),
            'mobile' => $request->get('mobile'),
            'email' => $request->get('email'),
        ]);

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======

>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
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
<<<<<<< HEAD
<<<<<<< HEAD
            'fname'=>'required |max:100|min:3',
            'lname'=>'required|max:100|min:3',
            'address'=>'required|max:100|min:5',
            'nic'=>'required|max:12|min:10',
            'mobile'=>'required|min:10',
            'email'=>'required|min:5|max:50'     
=======
           
            'name'=>'required|max:100|min:3',
            'address'=>'required|max:100|min:5',
            'nic'=>'required|max:12|min:10',
            'mobile'=>'required|min:10',
            'email'=>'required|min:5|max:50|email'     
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
           
            'name'=>'required|max:100|min:3',
            'address'=>'required|max:100|min:5',
            'nic'=>'required|max:12|min:10',
            'mobile'=>'required|min:10',
            'email'=>'required|min:5|max:50|email'     
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
            
        ]);

        $employee = Employee::find($id);
<<<<<<< HEAD
<<<<<<< HEAD
        $employee->fname =  $request->get('fname');
        $employee->lname = $request->get('lname');
=======
       
        $employee->name = $request->get('name');
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
       
        $employee->name = $request->get('name');
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
        $employee->address = $request->get('address');
        $employee->nic = $request->get('nic');
        $employee->mobile =$request->get('mobile');
        $employee->email = $request->get('email');
<<<<<<< HEAD
<<<<<<< HEAD
       
=======
          
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
          
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
        $employee->save();

        return redirect('/HRM')->with('success', 'Employee updated successfully!');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/HRM')->with('success', 'Employee deleted successfully!');
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1

    public function searchEmployee(){

        $search_text = $_GET['queryEmp'];
        $employees = Employee::where('name','LIKE','%'.$search_text.'%') -> get();

        return view('hrm.employees.searchEmployee', compact('employees'));

    }
/*
    public function reportEmp(){

        $employees = Employee::all();
        $pdf = PDF::loadView('hrm.employees.read',compact('employees'));
        return $pdf-> download('employees.pdf');
    } */

<<<<<<< HEAD
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
}
