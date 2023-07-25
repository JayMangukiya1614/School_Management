<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SSreg;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\StudentRS;
use App\Models\Admins;



class Frontedcontroller extends Controller
{
  public function  Slogin()
  {
    return view('fronted.Slogin');
  }
  // log in 
  public function  Sloginuser(Request $Req)
  {
    $Req->validate([
      'Student_ID' => 'required',
      'Password' => 'required',

    ]);
    $login = DB::table('s_sregs')->where([['Student_ID', '=', $Req->Student_ID]])->get()->first();
    if ($login) {
      if (Hash::check($Req->Password, $login->Password)) {
        $Req->session()->put('Slogin', $login->id);
        return view('fronted.Sindex');
      } else {
        return back()->with('Password', 'Password not matched');
      }
    } else {

      return back()->with('Student_ID', 'Student_ID not matched');
    }
  }
  public function Slogout()
  {
    if (Session()->has('Slogin')) {
      Session()->pull('Slogin');
      return redirect(route('Sindex'));
    } else {
      return "Please log-in account";
    }
  }
  public function  Sindex()
  {
    return view('fronted.Sindex');
  }
  public function  Sabout()
  {
    return view('fronted.Sabout');
  }
  public function  Scourse()
  {
    return view('fronted.Scourse');
  }
  public function  Strainer()
  {
    return view('fronted.Strainer');
  }
  public function  Sevent()
  {
    return view('fronted.Sevent');
  }
  // id card 
  public function  Sid()
  {
    // return 'work';
    return view('fronted.Sid');
  }
  public function  ScheckId(Request $Req)
  {
    $Req->validate([
      'Student_ID' => 'required',
      'E_mail' => 'required',
      'Mobile_No' => 'required | regex:/^[0-9]{10}/|min:10|max:10',
      'Password' => 'required|min:6|max:8',
    ]);
    $ScheckId = DB::table('s_sregs')->where('Student_ID', '=', $Req->Student_ID)->get()->first();
    if ($ScheckId) {
      if ($ScheckId->E_mail == $Req->E_mail) {
        if (Hash::check($Req->Password, $ScheckId->Password)) {
          if ($ScheckId->Mobile_No == $Req->Mobile_No) {
            return redirect('Sidcard');
          } else {
            return back()->with('MobileNo', 'MobileNo are not matched...');
          }
        } else {
          return back()->with('MobileNo.', 'MobileNo. is not matched...');
        }
      } else {
        return back()->with('Password', 'Password is not matched.....');
      }
    } else {
      return back()->with('Student_ID', 'Student_ID are not matched...');
    }
  }
  public function  Scontact()
  {
    return view('fronted.Scontact');
  }
  // session to data pass 
  public function  Sidcard()
  {

    $id = session()->get('Slogin');
    $icard = StudentRS::find($id);


    return view('fronted.Sidcard', compact('icard'));
  }

  public function  Sreg()
  {
    return view('fronted.Sreg');
  }

  public function  regsave(Request $Req)
  {

    $Req->validate([
      'Student_ID' => 'required|unique:s_sregs,Student_ID',
      'First_Name' => 'required|regex:/(^[A-Za-z ]+$)+/',
      'E_mail' =>  'required|regex:/(.+)@(.+)\.(.+)/i|unique:s_sregs,E_mail',
      'Mobile_No' => 'required | regex:/^[0-9]{10}/|min:10|max:10',
      'Password' => 'required|min:6|max:8',
    ]);
    $ID = DB::table('student_r_s')->where('ST_ID', '=', $Req->Student_ID)->get()->first();

    if ($ID) {
      $Rsave = new SSreg();
      $Rsave->Student_ID = $Req->Student_ID;
      $Rsave->First_Name = $Req->First_Name;
      $Rsave->E_mail = $Req->E_mail;
      $Rsave->Mobile_No = $Req->Mobile_No;
      $Rsave->Password = Hash::make($Req->Password);
      $Rsave->save();
      return view('fronted.Sindex');
    } else {
      return back()->with('ID', 'Studen_ID Is Not Matched');
    }
  }
  public function Sprofile()
  {
    $id = Session()->get('Slogin');
    $profile = SSreg::find($id);
    return view('fronted.Sprofile', compact('profile'));
  }
  public function SCpassword()
  {
    return view('fronted.SCpassword');
  }
  public function SupdateP(Request $Req)
  {
    $Req->validate([
      'Old_Password' => 'required|min:6|max:8',
      'New_Password' => 'required|min:6|max:8',
      'Confirm_Password' => 'required|min:6|max:8'
    ]);
    $password = session()->get('Slogin');
    $Pass = SSreg::find($password);
    if (Hash::check($Req->Old_Password, $Pass->Password)) {
      if ($Req->New_Password == $Req->Confirm_Password) {
        $Pass->Password = Hash::make($Req->Confirm_Password);
        $Pass->save();
        return redirect('Sprofile');
      } else {
        return back()->with('New_Password', 'New_Password  & Confirm_Password Is Not Matched');
      }
    } else {

      return back()->with('Old_Password', 'Old_Password Is Not Matched');
    }
  }
  public function Seditprofile(Request $Req, $id)
  {

    $EP = SSreg::find($id);

    $EP->First_Name = $Req->First_Name;
    $EP->E_mail = $Req->E_mail;
    $EP->Mobile_No = $Req->Mobile_No;
    $EP->save();
    return redirect('Sprofile');
  }
  public function Fpassword()
  {
    return view('fronted.Fpassword');
  }

  public function Upassword(Request $Req)
  {

    $id = session()->get('Slogin');
    $Upassword = SSreg::find($id);
    $studentid = DB::table('s_sregs')->where('Student_ID', '=', $Req->Student_id)->get()->first();
    if ($studentid) {
      if ($studentid->E_mail == $Req->E_mail) {
        if ($Req->New_Password == $Req->Confirm_Password) {
                    DB::table('s_sregs') 
                    ->where('id', $studentid->id)
                    ->update(['Password' => Hash::make($Req->New_Password)]);
                    return 'save';
        } else {
          return back()->with('Password','New And Confirm Password  is not matched');
        }
      } else {
        return back()->with('E_mail', 'E_mail  is not matched');
      }
    } else {
      return back()->with('Student_id', 'Student id is not matched');
    }
    return view('fronted.Fpassword');
  }
  public function Sresult()
  {
      $id = session()->get('Slogin');  
      $result = SSreg::find($id);
      $mark = DB::table('marks_e_s')->where( [['Student_Id' , '=', $result->Student_ID ]] )->get();
      $Syear = DB::table('marks_e_s')->where([[ 'Student_Id' , '=', $result->Student_ID  ]])->get()->first();
      $Sname = DB::table('student_r_s')->where([['ST_ID', '=', $result->Student_ID]])->get()->first();



    return view('fronted.Sresult',compact('mark','result','Syear','Sname'));
  }
}
