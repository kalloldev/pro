<?php

namespace App\Http\Controllers;

use App\Models\TeacherWo;
use Illuminate\Http\Request;

class WorkUpdate extends Controller
{
    //
    // public function work_update()
    // {

    //     return view('work_update');
    // }
    public function work_update()
    {
        
        return view('work_update');
    }
    public function update_show()
    {
        
        $ow1 = TeacherWo::all();
        return view('teacherworkup',compact('ow1'));
     }
    
    public function work_action(Request $request)
    {
        $ud = new TeacherWo;
        $ud->Meeting_No = $request->NO;
        $ud->Meeting_title = $request->TIL;
        $ud->Meeting_Description= $request->text;
        $ud->Meeting_DateTime= $request->DAT;
        $ud->UpMeeting_Date_Time = $request->UP;
      
        $ud->save();
        // dd($ud->save());



      
         return redirect()->back();



        // return $request->all();
         
    }

}
