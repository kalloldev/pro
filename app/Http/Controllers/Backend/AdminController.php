<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\cr;
use Auth;
use Symfony\Contracts\Service\Attribute\Required;

class AdminController extends Controller
{
    //
    public function adminLoginForm()
    {
        return view('backend.admin.admin_login');
    }
    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' =>'required',
            'password' => 'required',
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('/admin/dashboard');
        }
        else
        {
            session::flash('error-msg', 'Invalid Email or Pssword');
            return redirect()->back();
        }
    }
    
    public function actionform($id){
        $data = cr::find($id);
        return view('backend.admin.dashboard.actionform',['data'=>$data]);

    }
  

}
