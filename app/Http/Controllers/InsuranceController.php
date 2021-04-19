<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function index()
    {
        return view('insurance');
    }
}
