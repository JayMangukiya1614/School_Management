<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classm;
use App\Models\Yearm;
use App\Models\StudentRS;
use App\Models\MarksE;
use Illuminate\Support\Facades\DB;

class Attendancecontroller extends Controller
{
 public function Sattendance()
 {
   
     
      $Class = Classm::all();
      $Year = Yearm::all();
      return view('attendance.Attendance', compact('Class', 'Year' ));
  
   //  return view('attendance.Attendance');
 }
 public function atten(Request $Req)
 {
   $Req->validate([

     
      'Student_Class' =>  'required',
      'Student_Year' =>  'required',

  ]);
    $class = DB::table('student_r_s')->where([['Class', '=', $Req->Student_Class],['Year', '=', $Req->Student_Year]])->get();
    if(count($class) > 0)
    {
       $YEARCLASS =  DB::table('student_r_s')->where([['Class', '=', $Req->Student_Class],['Year', '=', $Req->Student_Year]])->get()->first();
      return view('attendance.attendancesheet',compact('class','YEARCLASS'));

      // $Year = DB::table('student_r_s')->where([['Year', '=', $Req->Student_Year]])->get();


      //    if(count($Year)>0)
      //    {
      //       return $Year;
      //       return redirect('index');
      //    }
      //    else

      //    {
      //     return back()->with('Year' , ' currently Year are not matched..!!');

      //    }
    }
    else
    {
      return back()->with('Class' , ' Cureently Value is not matched..!!');
    }
 }
 public function attendancesheet()
 {
   return view('attendance.attendancesheet');
 }
}
