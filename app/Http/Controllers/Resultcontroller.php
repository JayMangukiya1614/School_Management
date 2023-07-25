<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classm;
use App\Models\Yearm;
use App\Models\StudentRS;
use App\Models\MarksE;
use Illuminate\Support\Facades\DB;



class Resultcontroller extends Controller
{
    public function result()
    {
        $Sname = StudentRS::all();
        $Class = Classm::all();
        $Year = Yearm::all();
        return view('result.result', compact('Class', 'Year', 'Sname'));
    }
    public function saveresult(Request $Req)
    {
        $Req->validate([

            'ST_ID' =>  'required',
            'Student_Class' =>  'required',
            'Student_Year' =>  'required',

        ]);
        // $total = NULL;
        $Result = DB::table('marks_e_s')->where([['Student_Id', '=', $Req->ST_ID], ['Student_Class', '=', $Req->Student_Class], ['Student_Year', '=', $Req->Student_Year]])->get();
        //  return $Mark;

        if (count($Result) > 0) {
            $yearclass = DB::table('marks_e_s')->where([['Student_Id', '=', $Req->ST_ID], ['Student_Class', '=', $Req->Student_Class], ['Student_Year', '=', $Req->Student_Year]])->get()->first();

            $Student = DB::table('student_r_s')->where([['ST_ID', '=', $Req->ST_ID]])->get()->first();

            return view('result.checkresult', compact('Result', 'Student', 'yearclass'));
        } else {
            return back()->with('Value', 'Some Details  Are   Not Matched....');
        }
    }
}
