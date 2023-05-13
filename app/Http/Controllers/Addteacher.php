<?php

 namespace App\Http\Controllers;


use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\cr;

class Addteacher extends Controller
{
    //
    public function add_teacher()

    {

       
        return view('AddTeacher');
    }
    public function teacherinfo(Request $request)

    {
        $t = new Teacher();
       
        $t->name= $request->name;
        $t->email	= $request->email;
        $t->password= $request->password1;
        
      
        $t->save();
        // return $request->all();
        return redirect()->back();
       

    }
    public function teacher_list()
    {
        $t2 = Teacher::all();
        return view('Teacher_list',compact('t2'));

    }
    public function Student_list()

    {


     

        $student_list =cr::all();
        return view('student_list',compact('student_list'));
        

       
    }

    
    
}
