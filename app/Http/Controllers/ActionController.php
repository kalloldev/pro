<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actionform;
use Session;

class ActionController extends Controller
{
    //
    public function Action_data()
    {
        $show = Actionform::all();
        return view('Action_data', compact('show'));
    }
    public function Store_action(Request $request)
    {
        $cd = new Actionform();
        $cd->Name = $request->name;
        $cd->_id = $request->password;
        $cd->Choose_option = $request->opt;
        $cd->Supervisor = $request->choose_option;

        Session::flash('msg', 'Selection Process is done');
        $cd->save();
        // return $request->all();
        return redirect()->back();
    }
    public function cont()
    {

        return view('contract');
    }
     public function info()
    {

        return view('teacherinformation');
    }


}