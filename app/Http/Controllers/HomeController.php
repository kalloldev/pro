<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\cr;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function registration()
    {

        return view('registration');
    }
   


    public function Store_data(Request $request)
    {
        //  $rules = [
        //      'FullName' =>'required',
        //     'Stu_id'=>'required',
        //     'choose option'=>'required'

        // ];
        //  $this->validate($request, $rules);
        $crud = new cr();
        $crud->FullName = $request->name;
        $crud->Stu_id = $request->password;
        $crud->choose_option = $request->choose_option;
        Session::flash('msg', 'registration done');
        $crud->save();



        // return $request->all();
        return redirect()->back();
    }
    // public function admin_login()
    //  {

    //      return view('backend.admin.admin_login');
    // }
    


}