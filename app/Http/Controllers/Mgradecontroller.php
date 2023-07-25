<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Markgrade;

class Mgradecontroller extends Controller
{
    public function marksgrade()
    {
        $Msave['Alldata']= Markgrade::all();
        return view('mark.marksgrade',$Msave);
    }
    public function gradesave(Request $Req)
    {
      
        $Msave = New Markgrade();
        $Msave->Grade =  $Req->Grade;
        $Msave->Star_Mark =  $Req->Star_Mark;
        $Msave->End_Mark =  $Req->End_Mark;
        $Msave->Remark =  $Req->Remark;
      
        $Msave->save();
        return   redirect('marksgrade');
    }
    public function editgrade($id)
    {
       
        $Mgrade['Mgrade'] = Markgrade::find($id);
       
        return   view('mark.editgrade',$Mgrade);

        
    }
    public function gradeupdatesave(Request $Req , $id)
    {
   
        $Mgrade =  Markgrade::find($id);
        $Mgrade->Grade = $Req->Grade;
        $Mgrade->Star_Mark = $Req->Star_Mark;
        $Mgrade->End_Mark = $Req->End_Mark;
        $Mgrade->Remark = $Req->Remark;
        
        $Mgrade->save();
        return redirect('marksgrade');
    }
    public function deletegrade($id)
    {
        $Mgrade = Markgrade::find($id);
        $Mgrade->delete();

        return redirect(route('marksgrade'));
    }
}
