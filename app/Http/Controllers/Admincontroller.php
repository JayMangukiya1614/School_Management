<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminS;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;




class Admincontroller extends Controller
{
    public function admin_registration()
    {
        return view('admin.admin_registration');
    }

    // admin save 
    public function admin_save(Request $Req)
    {
        $Asave = new AdminS();
        $Asave->First_Name =  $Req->First_Name;
        $Asave->Last_Name =  $Req->Last_Name;
        $Asave->Mobile_Nomber =  $Req->Mobile_Nomber;
        $Asave->Education =  $Req->Education;
        $Asave->Address =  $Req->Address;
        $Asave->Gender =  $Req->Gender;
        $Asave->City =  $Req->City;
        $Asave->E_mail =  $Req->E_mail;
        $Asave->Password =  Hash::make($Req->Password);
        $Asave->save();

        // $admin_login =  DB::table('admin_s')->where('E_mail', '=', $Req->E_mail)->get()->first();
        // $Req->session()->put('loginid', $admin_login->id);



        return redirect(route('index'));
    }
    // admin logout 
    public function admin_login()
    {
        return view('admin.admin_login');
    }

    public function admin_loginuser(Request $Req)
    {

        $admin_login = DB::table('admin_s')->where([['E_mail', '=', $Req->E_mail]])->get()->first();


        if ($admin_login) {
            if (Hash::check($Req->Password, $admin_login->Password)) {
                $Req->Session()->put('loginid', $admin_login->id);
                return redirect(route('index'));
            } else {
                return back()->with('Password', 'Password not matched');
            }
        } else {
            return back()->with('E_mail', 'Email not matched');
        }
    }


    // admin logout 
    public function admin_logout()
    {
        if (Session()->has('loginid')) {
            Session()->pull('loginid');
            return redirect(route('admin_login'))->with('Logout' , 'Logout Successfullhy.....');
        } else {
            return "Please log-in account";
        }
    }
    public function forgot_password()
    {

        return view('admin.forgotpassword');
    }
    public function forget_success(Request $Req)
    {
        $Req->validate([

            'E_mail' =>  'required',
            'Mobile_Nomber' =>  'required',
            'New_Password' =>  'required',
            'Confirm_Password' =>  'required',


        ]);
        // $admin_login = DB::table('admin_s')->select(['*'])->get();
        $LogInAdmin = DB::table('admin_s')->where([['E_mail', '=', $Req->E_mail], ["Mobile_Nomber", "=", $Req->Mobile_Nomber]])->get()->first();




        if ($LogInAdmin) {

            if ($Req->New_Password == $Req->Confirm_Password) {

                DB::table('admin_s')
                    ->where('id', $LogInAdmin->id)
                    ->update(['Password' => Hash::make($Req->Confirm_Password)]);

                return redirect(route('admin_login'));
            } else {
                return back()->with('Password', 'New And Confirm Password Are not matched');
            }
        } else {
            return back()->with('E_mail', 'Email OR Mobile Nomber Are   not matched');
        }
    }
}
