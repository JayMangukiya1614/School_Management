<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentRS;
use App\Models\Classm;
use App\Models\Yearm;
use App\Models\Subjectm;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\PaginationServiceProvider;




class StudentMcontroller extends Controller
{
    public function Student_login()
    {
        return view('StudentM.Student_login');
    }
    public function student_registration()
    {
        $Class = Classm::all();
        $Subject = Subjectm::all();
        $Year = Yearm::all();
        return view('StudentM.student_registration', compact('Class', 'Year', 'Subject'));
    }
    public function student_details(Request $Req)
    {

        $search = $Req['search'] ?? "";
        if ($search != "") {
            $SRdata = StudentRS::where([['ST_ID', 'LIKE', "%$search%"]])->orwhere([['First_Name', 'LIKE', "%$search%"]])->orwhere([['Year', 'LIKE', "%$search%"]])->orwhere([['Class', 'LIKE', "%$search%"]])->paginate(5);
        } else {
            $SRdata = StudentRS::paginate(5);
        }
        $data = compact('SRdata', 'search');
        return view('StudentM.studentdetails')->with($data);

        // $search_text = $_GET['search'];
        // $Search = StudentRS::where([['ST_ID','LIKE','%'.$search_text.'%']])->
        // orwhere([['First_Name','LIKE','%'.$search_text.'%']])->
        // orwhere([['Year','LIKE','%'.$search_text.'%']])->
        // orwhere([['Class','LIKE','%'.$search_text.'%']])->get();


        // $SRdata= StudentRS::all();
        // return view('StudentM.studentdetails',compact('Search','search_text','SRdata'));
    }
    // public function searchstudent(Request $Req)
    // {

    //     $search_text = $_GET['search'];
    //     $Search = StudentRS::where([['ST_ID','LIKE','%'.$search_text.'%']])->
    //     orwhere([['First_Name','LIKE','%'.$search_text.'%']])->
    //     orwhere([['Year','LIKE','%'.$search_text.'%']])->
    //     orwhere([['Class','LIKE','%'.$search_text.'%']])->paginate(2);
    //     return view('StudentM.student_search',compact('Search','search_text'));
    // }
    public function student_registration_save(Request $Req)
    {
        $SRdata = new StudentRS();
        $ST_Id = "ST" . (rand(1000, 9999));


        $ST = DB::table('student_r_s')->select('ST_ID')->where([['ST_ID', '=', $ST_Id]])->get()->first();

        if ($ST) {
            do {
                $ST_Id = "ST" . (rand(1000, 9999));
            } while ($ST_Id == $ST);

            $SRdata->ST_ID = $ST_Id;
        } else {
            $SRdata->ST_ID = $ST_Id;
        }
        $SRdata->First_Name = $Req->First_Name;
        $SRdata->Middle_Name = $Req->Middle_Name;
        $SRdata->Last_Name = $Req->Last_Name;
        $SRdata->MobileNo = $Req->MobileNo;
        $SRdata->Gender = $Req->Gender;
        $SRdata->Address = $Req->Address;
        $SRdata->Class = $Req->Class;
        $SRdata->Year = $Req->Year;
        $SRdata->E_mail = $Req->E_mail;
        $SRdata->Religion = $Req->Religion;
        $SRdata->Date_Of_Birth = $Req->Date_Of_Birth;


        $file = $Req->file('Student_image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('profile/'), $filename);
        $SRdata['Student_image'] = $filename;

        $SRdata->save();


        return redirect(route('studentdetails'));
    }
    public function SRupdate($id)
    {
        $Class = Classm::all();
        $Year = Yearm::all();
        $SRupdate = StudentRS::find($id);
        return view('StudentM.studentdetailsupdate', compact('Class', 'Year', 'SRupdate'));
    }
    public function updatesave(Request $Req, $id)
    {
        $SRdata = StudentRS::find($id);
        $SRdata->First_Name = $Req->First_Name;
        $SRdata->Middle_Name = $Req->Middle_Name;
        $SRdata->Last_Name = $Req->Last_Name;
        $SRdata->MobileNo = $Req->MobileNo;
        $SRdata->Gender = $Req->Gender;
        $SRdata->Address = $Req->Address;
        $SRdata->Class = $Req->Class;
        $SRdata->Year = $Req->Year;
        $SRdata->E_mail = $Req->E_mail;
        $SRdata->Religion = $Req->Religion;
        $SRdata->Date_Of_Birth = $Req->Date_Of_Birth;

        $SRdata->save();
        return redirect(route('studentdetails'));
    }
    public function SRdelete($id)
    {
        $SRdelete = StudentRS::find($id);
        $SRdelete->delete();

        return redirect(route('studentdetails'));
    }
}
