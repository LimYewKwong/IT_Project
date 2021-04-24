<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsuranceProvidersController extends Controller
{
    public function index()
    {
        return view('insuranceproviders');
    }
}