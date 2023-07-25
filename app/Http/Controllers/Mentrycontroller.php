<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentRS;
use App\Models\MarksE;
use App\Models\Classm;
use App\Models\Yearm;
use App\Models\Subjectm;
use App\Models\Markgrade;



class Mentrycontroller extends Controller
{
    // mark entry read 
    public function marksentry()
    {
        
        $Sname = StudentRS::all();
        $MarkE = MarksE::all();
        $Class = Classm::all();
        $Subject = Subjectm::all();
        $Year = Yearm::all();
        $Mgrade = Markgrade::all();


        return view('mark.marksentry', compact('Class', 'Year', 'Subject', 'MarkE', 'Sname','Mgrade'));
    }
    // mark Entry save 
    public function markssave(Request $Req)
    {
        $MarkE = new MarksE();
        $MarkE->Student_id = $Req->ST_ID;
        $MarkE->Student_Name = $Req->Student_Name;
        $MarkE->Student_Class = $Req->Student_Class;
        $MarkE->Student_Year = $Req->Student_Year;
        $MarkE->Student_Subject = $Req->Student_Subject;
        $MarkE->Total_Marks = $Req->Total_Marks;
        $MarkE->Obtain_Marks = $Req->Obtain_Marks;
        $MarkE->Student_Grade = $Req->Student_Grade;


        $MarkE->save();
        return redirect('marksentry');
    }
    public function markupdate($id)
    {
        $Sname = StudentRS::all();
        $Class = Classm::all();
        $Year = Yearm::all();
        $Subject = Subjectm::all();
        $MarkE =  MarksE::find($id);
        $Mgrade = Markgrade::all();


        return view('mark.editmark', compact('Class', 'Year', 'Subject', 'MarkE', 'Sname','Mgrade'));
    }
    public function markupdatesave(Request $Req, $id)
    {

        $MarkE =  MarksE::find($id);
        $MarkE->Student_ID = $Req->Student_Id;
        $MarkE->Student_Name = $Req->Student_Name;
        $MarkE->Student_Class = $Req->Class;
        $MarkE->Student_Year = $Req->Year;
        $MarkE->Student_Subject = $Req->Subject;
        $MarkE->Total_Marks = $Req->Total_Marks;
        $MarkE->Obtain_Marks = $Req->Obtain_Marks;
        $MarkE->Student_Grade = $Req->Student_Grade;

        $MarkE->save();
        return redirect('marksentry');
    }
    public function markdelete($id)
    {
        $MarkE = MarksE::find($id);
        $MarkE->delete();

        return redirect(route('marksentry'));
    }
}
