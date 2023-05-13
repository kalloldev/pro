<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cr;
use App\Models\selectedlist;

class DashboardController extends Controller
{
    
     public function adminDashboard()

     {
    $Show_data = cr::all();
       
     return view('backend.admin.dashboard.admin_dashboard',compact('Show_data'));
     }
     
     

   
  
     
}
