<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

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
            'empNameAttend'=>'required|max:100|min:5',
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
        return view('hrm.attendance.create');
    }

    public function edit($id)
    {
        $attendance = Attendance::find($id);
        return view('hrm.attendance.edit', ['attendance' => $attendance]);        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'empNameAttend'=>'required|max:100|min:5',
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
}

