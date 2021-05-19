<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

use PdfReport;

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
            'name'=>'required|max:100|min:3',
            'address'=>'required|max:100|min:5',
            'nic'=>'required|max:12|min:10',
            'mobile'=>'required|min:10',
            'email'=>'required|min:5|max:50|email'    
            
        ]);


        $employee = new Employee([

            'name' => $request->get('name'),
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
           
            'name'=>'required|max:100|min:3',
            'address'=>'required|max:100|min:5',
            'nic'=>'required|max:12|min:10',
            'mobile'=>'required|min:10',
            'email'=>'required|min:5|max:50|email'     
            
        ]);

        $employee = Employee::find($id);
       
        $employee->name = $request->get('name');
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

    public function displayReport(Request $request)
{
    //$fromDate = $request->input('from_date');
    //$toDate = $request->input('to_date');
    //$sortBy = $request->input('sort_by');

    $title = 'Employee Report'; // Report title

    $meta = [ // For displaying filters description on header
        //'Registered on' => $fromDate . ' To ' . $toDate,
        //'Sort By' => $sortBy
    ]; 

    $queryBuilder = Employee::select(['name', 'address', 'nic','mobile','email']); // Do some querying..

    $columns = [ // Set Column to be displayed
        'Full Name' => 'name',
        'Address' => 'address',
        'NIC' => 'nic',
        'Mobile' => 'mobile',
        'Email' => 'email',
        
    ];

    // Generate Report with flexibility to manipulate column class even manipulate column value (using Carbon, etc).
    return PdfReport::of($title, $meta,$queryBuilder, $columns)
                    
                    ->stream(); // other available method: download('filename') to download pdf / make() that will producing DomPDF / SnappyPdf instance so you could do any other DomPDF / snappyPdf method such as stream() or download()
}
}
