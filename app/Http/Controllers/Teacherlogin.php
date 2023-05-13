<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\teacherinfo;
use Auth;
use Session;
 use App\Models\teacherinfo;
class Teacherlogin extends Controller
{
    //
    public function teacherLoginForm()
    {
        return view('teacherlogin');
    }
 
    public function teacherdashboard()
    {
        return view('Teacher_dashboard');
    }
    public function teacherLogin(Request $request)
    {

        $request->validate([
            'email' =>'required',
            'password' => 'required',
        ]);
        if(Auth::guard('teacher')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('/teacher/dashboard');
        }
        else
        {
            session::flash('error-msg', 'Invalid Email or Pssword');
            return redirect()->back();
        }
    
    
    }



}
