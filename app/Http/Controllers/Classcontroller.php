<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Classm;


class Classcontroller extends Controller
{
  

    public function classtable()
    { 
        $Cdata['Alldata']= Classm::all();
        return view('class.class',$Cdata);
    }
    public function classsave(Request  $Req)
    { 
       $Cdata = New Classm();
       $Cdata->Class = $Req->Class;

       $Cdata -> save();

       return redirect(route('classtable'));

    }
    public function classupdate($id)
    {
        $Cdata['Alldata'] = Classm::find($id);
        return view('class.editclass',$Cdata);
    } 
    public function classupdatesave(Request  $Req,$id)
  {
       $Cdata= Classm::find($id);
       
       $Cdata->Class = $Req->Class;

       $Cdata -> save();

       return redirect(route('classtable'));

    }
    public function classdelete($id)
    { 
       $Cdata= Classm::find($id);
       $Cdata -> delete();

       return redirect(route('classtable'));

    }


}
