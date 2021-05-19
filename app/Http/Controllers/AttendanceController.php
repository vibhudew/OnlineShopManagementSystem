<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Employee;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances =Attendance::all();

        return view('hrm.attendance.read', ['attendances' => $attendances]);
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'startTime'=>'required',
            'endTime'=>'required' 
            
        ]);

        $attendance = new Attendance([
            'empNameAttend' => $request->get('empNameAttend'),
            'startTime' => $request->get('startTime'),
            'endTime' => $request->get('endTime')
        ]);

        $attendance->save();

        return redirect('/Attendance')->with('success', 'Attendance added successfully!!!');
    }

    public function create()
    {
        $employees = Employee:: all(['id','name']);
        return view('hrm.attendance.create', compact('employees'));
    }

    public function edit($id)
    {

        $attendance = Attendance::find($id);
        $employees = Employee:: all(['id','name']);
        return view('hrm.attendance.edit', ['attendance' => $attendance],compact('employees'));        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           
            'startTime'=>'required',
            'endTime'=>'required'      
            
        ]);

        $attendance = Attendance::find($id);
        $attendance->empNameAttend =  $request->get('empNameAttend');
        $attendance->startTime = $request->get('startTime');
        $attendance->endTime = $request->get('endTime');
       
       
        $attendance->save();

        return redirect('/Attendance')->with('success', 'Attendance updated successfully!');
    }

    public function destroy($id)
    {
        $attendance = Attendance::find($id);
        $attendance->delete();

        return redirect('/Attendance')->with('success', 'Attendance deleted successfully!');
    }

    public function searchAttend(){

        $search_text = $_GET['queryAttend'];
        $attendances = Attendance::where('empNameAttend','LIKE','%'.$search_text.'%') -> get();

        return view('hrm.attendance.searchAttend', compact('attendances'));

    }
}


