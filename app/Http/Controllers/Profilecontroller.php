<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminS;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Profilecontroller extends Controller
{
    public function profile()
    { 
        $id=Session()->get('loginid');
         $Profile['All']=AdminS::find($id);
        return view('profile.profile',$Profile);
    }
    // delete profile 
    public function delete($id)
    {
        $Profile=AdminS::find($id);
        $Profile->delete();
        return view('admin.admin_login');
   }
    public function edit_profile($id)
    { 
        $Profile['Edit']=AdminS::find($id);
      return view('profile.edit_profile',$Profile);
    }
    public function profileupdatesave(Request $Req, $id)
    {
        $Asave=AdminS::find($id);
        $Asave->First_Name =  $Req->First_Name;
        $Asave->Last_Name =  $Req->Last_Name;
        $Asave->Mobile_Nomber =  $Req->Mobile_Nomber;
        $Asave->Address =  $Req->Address;
        $Asave->Education =  $Req->Education;
        $Asave->Gender =  $Req->Gender;
        $Asave->E_mail =  $Req->E_mail;

        $Asave -> save();
        return redirect(route('Adprofile'))->with('Uprofile','Profile Update Successfully.....');

    }
    public function editpassword()
    {
     
        return view ('profile.editpassword');
    }
    public function updatepassword(Request $Req)
    {
          
    $Req->validate([
        'Old_Password' => 'required',
        'New_Password' => 'required',
        'Confirm_Password' => 'required',

       
    ]);
      
        $id=Session()->get('loginid');

        $Profile=AdminS::find($id);
        
        if (Hash::check($Req->Old_Password , $Profile->Password))
        
        {
            
            if($Req->New_Password == $Req->Confirm_Password)
            {
                // new password save 
                $Profile->Password = Hash::make($Req->Confirm_Password);
                $Profile ->save();
                return redirect('Adprofile')->with('Upassword','Password Update Successfully.....');
            }
            else
            {
                return back()->with('NC','New And Confirm  Password not matched');
            }
        }
        else
        {
           
           return back()->with('Old','Old Password not matched');
        }
        
    }
}
