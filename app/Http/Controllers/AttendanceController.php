<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
<<<<<<< HEAD
=======
use App\Models\Employee;
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03

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
<<<<<<< HEAD
            'empNameAttend'=>'required|max:100|min:5',
=======
            
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
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
<<<<<<< HEAD
        return view('hrm.attendance.create');
=======
        $employees = Employee:: all(['id','name']);
        return view('hrm.attendance.create', compact('employees'));
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
    }

    public function edit($id)
    {
<<<<<<< HEAD
        $attendance = Attendance::find($id);
        return view('hrm.attendance.edit', ['attendance' => $attendance]);        
=======

        $attendance = Attendance::find($id);
        $employees = Employee:: all(['id','name']);
        return view('hrm.attendance.edit', ['attendance' => $attendance],compact('employees'));        
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
    }

    public function update(Request $request, $id)
    {
        $request->validate([
<<<<<<< HEAD
            'empNameAttend'=>'required|max:100|min:5',
=======
           
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
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
<<<<<<< HEAD
}

=======

    public function searchAttend(){

        $search_text = $_GET['queryAttend'];
        $attendances = Attendance::where('empNameAttend','LIKE','%'.$search_text.'%') -> get();

        return view('hrm.attendance.searchAttend', compact('attendances'));

    }
}


>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
