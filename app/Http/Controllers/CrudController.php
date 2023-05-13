<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    // 
    public function Show_data()
    {
        return view('Show_data');
    }
     public function registration()
     {

         return view('registration');
     }
    public function Store_data(Request $request)
    {
        return $request->all();
    }
}
