<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarAndUserDetailsController extends Controller
{
    public function index(){
        return view('caranduserdetails');
    }
    
}
