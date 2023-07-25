<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yearm;

class Yearcontroller extends Controller
{
    public function year()
    { 
        $Ydata['Alldata']= Yearm::all();
        return view('year.year',$Ydata);
    }
    public function yearsave(Request  $Req)
    { 
       $Ydata = New Yearm();
       $Ydata->Year = $Req->Year;

       $Ydata -> save();

       return redirect(route('year'));

    }
    public function yearupdate($id)
    {
        $Ydata['Alldata'] = Yearm::find($id);
        return view('year.edityear',$Ydata);
    }
    public function yearupdatesave(Request  $Req,$id)
    { 
       $Ydata= Yearm::find($id);
       
       $Ydata->Year = $Req->Year;

       $Ydata -> save();

       return redirect(route('year'));

    }
    public function yeardelete($id)
    { 
       $Ydata= Yearm::find($id);
       $Ydata -> delete();

       return redirect(route('year'));

    }
}
