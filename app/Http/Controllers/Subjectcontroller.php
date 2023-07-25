<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjectm;

class Subjectcontroller extends Controller
{
    public function subject()
    { 
        $Sdata['Alldata']= Subjectm::all();
        return view('subject.subject',$Sdata);
    }
    public function subjectsave(Request  $Req)
    { 
       $Sdata = New Subjectm();
       $Sdata->Subject = $Req->Subject;

       $Sdata -> save();

       return redirect(route('subject'));

    }
    public function subjectupdate($id)
    {
        $Sdata['Alldata'] = Subjectm::find($id);
        return view('subject.editsubject',$Sdata);
    }
    public function subjectupdatesave(Request  $Req,$id)
    { 
       $Sdata= Subjectm::find($id);
       
       $Sdata->Subject = $Req->Subject;

       $Sdata -> save();

       return redirect(route('subject'));

    }
    public function subjectdelete($id)
    { 
       $Sdata= Subjectm::find($id);
       $Sdata -> delete();

       return redirect(route('subject'));

    }
}
