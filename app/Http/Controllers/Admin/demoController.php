<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class demoController extends Controller
{
    public function addOutlet(){
        
        return view('frontend.addOutlet');
    }

    public function outletList(){
        return view('frontend.outletList');
    }

    public function kioskRebrandinglist(){
       
        return view('frontend.kioskRebrandinglist');
    }

    public function rebrandingList(){
        return view('frontend.rebrandingList');
    }

    public function maintenanceList(){
        return view('frontend.maintenanceList');
    }

    public function deploymentList(){

        return view('frontend.deploymentList');
    }

    public function dashboard(){
        return view('frontend.dashboard');
    }


}
