<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\selectedlist;


class SelectedStudent extends Controller
{
    //
    public function SlectedStudent(Request $request)

    {
        $select= new selectedlist;
       
         $select->StudentName	= json_encode($request->name);
         $select->TeacherName	= $request->teachername;
        
        
      
        $select->save();
        // return $request->all();
        return redirect()->back();
       

    }
    public function show_data()
    {
      $at1 = selectedlist::all();

      return view('assign_teacher',compact('at1'));

    }

}
