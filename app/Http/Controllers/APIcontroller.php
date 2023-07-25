<?php

namespace App\Http\Controllers;

use App\Models\Classm;
use App\Models\StudentRS;
use App\Models\Yearm;
use App\Models\Subjectm;
use App\Models\MarksE;
use App\Models\Markgrade;
use App\Models\AdminS;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;









use Illuminate\Http\Request;

class APIcontroller extends Controller
{
    // class view
    public function Demo()
    {
        return "successfully";
    }
    public function APIclasstable()
    {
        $APIdata = Classm::all();


        if (!(count($APIdata) >= 1)) {

            $APICdata['status'] = 0;
            $APICdata['message'] = "No recored found";
            return $APICdata;
        } else {
            $APICdata['status'] = 1;
            $APICdata['message'] = "data featched successfully";
            $APICdata['data'] = Classm::all();
            return $APICdata;
        }
    }

    // class insert 

    public function APIclasssave(Request  $Req)
    {
        $Rules =array(
            'Class' =>'required|regex:/(^([a-zA-z]+)(\d+)?$)/u',
        );
        $validator =Validator::make($Req->all(),$Rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else

            $APICdata = new Classm();
        $APICdata->Class = $Req->Class;

        $APICdata->save();

        return "Data Fatched Successfully";
    }

    // class delete 
    public function APIDclassdelete(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Not ID for Delete";
        } else {
            $del = ClassM::find($id);
            if ($del) {
                $del->delete();
                return "Data Deleted Succefully";
            } else {
                return "No record Found of this id";
            }
        }
    }

    // class update 

    public function APIDclassupdate(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id Is Not Found...";
        } else {
            $APICupdate = ClassM::find($id);
            if ($APICupdate) {
                $APICupdate->Class = $req->Class;
                $APICupdate->save();
                return "Data Update Successfully...";
            } else {
                return "ID Is not Valid..";
            }
        }
    }
    // year view 

    public function APIyear()
    {

        $APIydata = Yearm::all();
        if (!(count($APIydata) >= 1)) {
            $APIYear['status'] = 0;
            $APIYear['message'] = "No Record Found";
            return $APIYear;
        } else {

            $APIYdata['data'] = Yearm::all();
            return "Data Fatched Successfully";
        }
    }
    // Year  Insert 
    public function APIyearsave(Request  $Req)
    {
        if ($Req->Year == NULL) {
            return "Data Not Found....";
        } else {

            $APIydata = new Yearm();
            $APIydata->Year = $Req->Year;

            $APIydata->save();

            return "Data Fatched Successfully";
        }
    }
    // year delete 

    public function APIyeardelete(Request $req)
    {


        $id = $req->id;
        if ($id == NULL) {
            return "Not ID for Delete";
        } else {
            $APIYdel = Yearm::find($id);
            if ($APIYdel) {
                $APIYdel->delete();
                return "Data Deleted Succefully";
            } else {
                return "No record Found of this id";
            }
        }
    }
    // year update 
    public function APIDyearupdate(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id Is Not Found...";
        } else {
            $APIYupdate = Yearm::find($id);
            if ($APIYupdate) {
                $APIYupdate->Year = $req->Year;

                $APIYupdate->save();
                return "Data Update Successfully...";
            } else {
                return "ID Is not Valid..";
            }
        }
    }
    // subject view 
    public function APIsubject()

    {

        $APIsdata = Subjectm::all();
        if (!(count($APIsdata) >= 1)) {
            $APISubject['status'] = 0;
            $APISubject['message'] = "No Record Found";
            return $APISubject;
        } else {
            $APISubject['status'] = 1;
            $APISubject['message'] = "data featched successfully";
            $APISubject['data'] = Subjectm::all();
            return $APISubject;
        }
    }

    // subject insert 

    public function APIsubjectsave(Request  $Req)
    {
        if ($Req->Subject == NULL) {
            return "Data Not Found....";
        } else {

            $APIsubjectdata = new Subjectm();
            $APIsubjectdata->Subject = $Req->Subject;

            $APIsubjectdata->save();

            return "Data Fatched Successfully";
        }
    }

    // subject delete 


    public function APIsubjectdelete(Request $req)
    {


        $id = $req->id;
        if ($id == NULL) {
            return "Not ID for Delete";
        } else {
            $APISdel = Subjectm::find($id);
            if ($APISdel) {
                $APISdel->delete();
                return "Data Deleted Succefully";
            } else {
                return "No record Found of this id";
            }
        }
    }
    // subject update 
    public function APIsubjectupdate(Request $req)
    {
        $id = $req->id;
        if ($id == NULL) {
            return "Id Is Not Found...";
        } else {
            $APIsubjectupdate = Subjectm::find($id);
            if ($APIsubjectupdate) {
                $APIsubjectupdate->Subject = $req->Subject;

                $APIsubjectupdate->save();
                return "Data Update Successfully...";
            } else {
                return "ID Is not Valid..";
            }
        }
    }
    // student details 
    public function APIstudent_details()
    {


        $APIsrdata = StudentRS::all();
        if (!(count($APIsrdata) >= 1)) {
            $APISR['status'] = 0;
            $APISR['message'] = "No Record Found";
            return $APISR;
        } else {
            $APISR['status'] = 1;
            $APISR['message'] = "data featched successfully";
            $APISR['data'] = StudentRS::all();
            return $APISR;
        }
    }


    // Student insert 
    public function APIstudent_registration_save(Request $Req)
    {
        $rules = array(
            'ST_ID' => 'required|unique:s_sregs,Student_ID',
           'First_Name' =>  "required|",
            'Middle_Name' =>  "required|",
            'Last_Name' =>  "required|",
            'MobileNo' =>  "required|",
            'Gender' =>  "required|",
            'Address' =>  "required|",
            'Class' =>  'required|',
           'Year' =>  "required|",
            'E_mail' =>  "required|",
           'Religion' =>  "required|",
           'Date_Of_Birth' =>  "required|",
        );
        $validator = Validator::make($Req->all(),$rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $APIsdata = new StudentRS();
            $APIsdata->ST_ID = $Req->ST_ID;
            $APIsdata->First_Name = $Req->First_Name;
            $APIsdata->Middle_Name = $Req->Middle_Name;
            $APIsdata->Last_Name = $Req->Last_Name;
            $APIsdata->MobileNo = $Req->MobileNo;
            $APIsdata->Gender = $Req->Gender;
            $APIsdata->Address = $Req->Address;
            $APIsdata->Class = $Req->Class;
            $APIsdata->Year = $Req->Year;
            $APIsdata->E_mail = $Req->E_mail;
            $APIsdata->Religion = $Req->Religion;
            $APIsdata->Date_Of_Birth = $Req->Date_Of_Birth;

            $APIsdata->save();


            return "Data Fatched Successfully";
        }
    }

    // student delete 

    public function APIstudentdelete(Request $req)
    {


        $id = $req->id;
        if ($id == NULL) {
            return "Not ID for Delete";
        } else {
            $APISDdel = StudentRS::find($id);
            if ($APISDdel) {
                $APISDdel->delete();
                return "Data Deleted Succefully";
            } else {
                return "No record Found of this id";
            }
        }
    }

    // student update 
    public function APIDstudentupdate(Request $Req)
    {
        $id = $Req->id;
        if ($id == NULL) {
            return "Id Is Not Matched...";
        } else {
            $APIstudentupdate = StudentRS::find($id);
            if ($APIstudentupdate) {
                $APIstudentupdate->ST_ID = $Req->ST_ID;
                $APIstudentupdate->First_Name = $Req->First_Name;
                $APIstudentupdate->Middle_Name = $Req->Middle_Name;
                $APIstudentupdate->Last_Name = $Req->Last_Name;
                $APIstudentupdate->MobileNo = $Req->MobileNo;
                $APIstudentupdate->Gender = $Req->Gender;
                $APIstudentupdate->Address = $Req->Address;
                $APIstudentupdate->Class = $Req->Class;
                $APIstudentupdate->Year = $Req->Year;
                $APIstudentupdate->E_mail = $Req->E_mail;
                $APIstudentupdate->Religion = $Req->Religion;
                $APIstudentupdate->Date_Of_Birth = $Req->Date_Of_Birth;

                $APIstudentupdate->save();
                return "Data Update Successfully...";
            } else {
                return "ID Is not Valid..";
            }
        }
    }

    // marks entry view 

    public function APImarkse()
    {

        $APImarkse = MarksE::all();
        if (!(count($APImarkse) >= 1)) {
            $APIME['status'] = 0;
            $APIME['message'] = "No Record Found";
            return $APIME;
        } else {
            $APIME['status'] = 1;
            $APIME['message'] = "data featched successfully";
            $APIME['data'] = MarksE::all();
            return $APIME;
        }
    }

    // marks entry insert 

    public function APImarkssave(Request $Req)
    {
        if (($Req->Student_id == NULL) && ($Req->Student_Name == NULL) && ($Req->Student_Class == NULL) && ($Req->Student_Year == NULL) && ($Req->Student_Subject == NULL) && ($Req->Total_Marks == NULL) && ($Req->Obtain_Marks == NULL) && ($Req->Student_Grade == NULL)) {
            return "  Data Not Found....";
        } else {
            $APImarkE = new MarksE();
            $APImarkE->Student_id = $Req->ST_ID;
            $APImarkE->Student_Name = $Req->Student_Name;
            $APImarkE->Student_Class = $Req->Student_Class;
            $APImarkE->Student_Year = $Req->Student_Year;
            $APImarkE->Student_Subject = $Req->Student_Subject;
            $APImarkE->Total_Marks = $Req->Total_Marks;
            $APImarkE->Obtain_Marks = $Req->Obtain_Marks;
            $APImarkE->Student_Grade = $Req->Student_Grade;


            $APImarkE->save();
            return "Data Fatched Successfully";
        }
    }

    // marks delete 
    public function APIstmarksedelete(Request $req)
    {


        $id = $req->id;
        if ($id == NULL) {
            return "Not ID for Delete";
        } else {
            $APImedel = MarksE::find($id);
            if ($APImedel) {
                $APImedel->delete();
                return "Data Deleted Succefully";
            } else {
                return "No record Found of this id";
            }
        }
    }
    // marks update 
    public function APIDmarkeupdate(Request $Req)
    {
        $id = $Req->id;
        if ($id == NULL) {
            return "Id Is Not Matched...";
        } else {
            $APImarkeupdate = MarksE::find($id);
            if ($APImarkeupdate) {
                $APImarkeupdate->Student_id = $Req->ST_ID;
                $APImarkeupdate->Student_Name = $Req->Student_Name;
                $APImarkeupdate->Student_Class = $Req->Student_Class;
                $APImarkeupdate->Student_Year = $Req->Student_Year;
                $APImarkeupdate->Student_Subject = $Req->Student_Subject;
                $APImarkeupdate->Total_Marks = $Req->Total_Marks;
                $APImarkeupdate->Obtain_Marks = $Req->Obtain_Marks;
                $APImarkeupdate->Student_Grade = $Req->Student_Grade;


                $APImarkeupdate->save();
                return "Data Update Successfully...";
            } else {
                return "ID Is not Valid..";
            }
        }
    }
    // grade view 
    public function APIgrade()
    {

        $APIGrade = Markgrade::all();
        if (!(count($APIGrade) >= 1)) {
            $APIG['status'] = 0;
            $APIG['message'] = "No Record Found";
            return $APIG;
        } else {
            $APIG['status'] = 1;
            $APIG['message'] = "data featched successfully";
            $APIG['data'] = Markgrade::all();
            return $APIG;
        }
    }

    // grade insert 
    public function APIgradesave(Request $Req)
    {
        if (($Req->Grade == NULL) && ($Req->Star_Mark == NULL) && ($Req->End_Mark == NULL) && ($Req->Remark == NULL)) {
            return "  Data Not Found....";
        } else {

            $APImsave = new Markgrade();
            $APImsave->Grade =  $Req->Grade;
            $APImsave->Star_Mark =  $Req->Star_Mark;
            $APImsave->End_Mark =  $Req->End_Mark;
            $APImsave->Remark =  $Req->Remark;

            $APImsave->save();
            return "Data Fatched Successfully";
        }
    }
    // grade delete 

    public function APIstgradedelete(Request $req)
    {


        $id = $req->id;
        if ($id == NULL) {
            return "Not ID for Delete";
        } else {
            $APIgradedel = Markgrade::find($id);
            if ($APIgradedel) {
                $APIgradedel->delete();
                return "Data Deleted Succefully";
            } else {
                return "No record Found of this id";
            }
        }
    }
    // grade update 
    public function APIDgradeupdate(Request $Req)
    {
        $id = $Req->id;
        if ($id == NULL) {
            return "Id Is Not Matched...";
        } else {
            $APIgradeupdate = Markgrade::find($id);
            if ($APIgradeupdate) {

                $APIgradeupdate->Grade =  $Req->Grade;
                $APIgradeupdate->Star_Mark =  $Req->Star_Mark;
                $APIgradeupdate->End_Mark =  $Req->End_Mark;
                $APIgradeupdate->Remark =  $Req->Remark;
                $APIgradeupdate->save();
                return "Data Update Successfully...";
            } else {
                return "ID Is not Valid..";
            }
        }
    }
    // admin view 
    public function APIadmin()
    {

        $APIGrade = AdminS::all();
        if (!(count($APIGrade) >= 1)) {
            $APIA['status'] = 0;
            $APIA['message'] = "No Record Found";
            return $APIA;
        } else {
            $APIA['status'] = 1;
            $APIA['message'] = "data featched successfully";
            $APIA['data'] = AdminS::all();
            return $APIA;
        }
    }

    // admin insert 
    public function APIadmininsert(Request $Req)
    {
        if (($Req->First_Name == NULL) && ($Req->Last_Name == NULL) && ($Req->Mobile_Nomber == NULL) && ($Req->Education == NULL) && ($Req->Address == NULL) && ($Req->Gender == NULL) && ($Req->City == NULL)) {
            return "  Data Not Found....";
        } else {
            $APIA = new AdminS();
            $APIA->First_Name =  $Req->First_Name;
            $APIA->Last_Name =  $Req->Last_Name;
            $APIA->Mobile_Nomber =  $Req->Mobile_Nomber;
            $APIA->Education =  $Req->Education;
            $APIA->Address =  $Req->Address;
            $APIA->Gender =  $Req->Gender;
            $APIA->City =  $Req->City;
            $APIA->E_mail =  $Req->E_mail;
            $APIA->Password =  Hash::make($Req->Password);
            $APIA->save();


            return "Data Fatched Successfully";
        }
    }

    // admin delete 
    public function APIstadmindelete(Request $req)
    {


        $id = $req->id;
        if ($id == NULL) {
            return "Not ID for Delete";
        } else {
            $APIadmindel = AdminS::find($id);
            if ($APIadmindel) {
                $APIadmindel->delete();
                return "Data Deleted Succefully";
            } else {
                return "No record Found of this id";
            }
        }
    }
    // admin update 

    public function APIDadminupdate(Request $Req)
    {
        $id = $Req->id;
        if ($id == NULL) {
            return "Id Is Not Matched...";
        } else {
            $APIadminupdate = AdminS::find($id);
            if ($APIadminupdate) {
                $APIadminupdate->First_Name =  $Req->First_Name;
                $APIadminupdate->Last_Name =  $Req->Last_Name;
                $APIadminupdate->Mobile_Nomber =  $Req->Mobile_Nomber;
                $APIadminupdate->Education =  $Req->Education;
                $APIadminupdate->Address =  $Req->Address;
                $APIadminupdate->Gender =  $Req->Gender;
                $APIadminupdate->City =  $Req->City;
                $APIadminupdate->E_mail =  $Req->E_mail;
                $APIadminupdate->Password =  Hash::make($Req->Password);
                $APIadminupdate->save();
                return "Data Update Successfully...";
            } else {
                return "ID Is not Valid..";
            }
        }
    }

    public function APIlogin(Request $Req)
    {

        $APIadmin_login = DB::table('admin_s')->where([['E_mail', '=', $Req->E_mail]])->get()->first();


        if ($APIadmin_login) {

            if (Hash::check($Req->Password, $APIadmin_login->Password)) {


                $admin_login['status'] = 1;
                $admin_login['message'] = "Login Successfully....";
                return $admin_login;
            } else {
                $admin_login['status'] = 0;
                $admin_login['message'] = "Password Not Matched....";
                return $admin_login;
            }
        } else {
            $admin_login['status'] = 0;
            $admin_login['message'] = "Email Not Matched....";
            return $admin_login;
        }
    }
}
