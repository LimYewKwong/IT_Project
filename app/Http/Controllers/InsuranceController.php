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

    public function validation(Request $request){
        $this -> validate($request, [
            'CarOwnerName' => 'required|min:5|max:35',
            'CarPlateNumber' => 'required',
            'CarOwnerICNumber' => 'required|numeric',
            'ResidentialPostcode' => 'required|numeric',
            'MobilePhoneNo' => 'required|numeric',
            'Email' => 'required|email',
            'MaritalStatus' => 'required|in:Single,Married'
        ], [
            'CarOwnerName.required' => '*The Car Owner Name field is required.',
            'CarOwnerName.min' => '*The Car Owner Name must be at least 5 characters.',
            'CarOwnerName.max' => '*The Car Owner Name must not be greater than 35 characters.',
            'CarPlateNumber.required' => '*The Car Plate Number field is required.',
            'CarOwnerICNumber.required' => '*The Car Owner IC Number field is required.',
            'ResidentialPostcode.required' => '*The Residential Postcode field is required.',
            'ResidentialPostcode.numeric' => '*The Residential Postcode must be numeric.',
            'MobilePhoneNo.required' => '*The Mobile Phone No field is required.',
            'MobilePhoneNo.numeric' => '*The Mobile Phone No must be numeric.',
            'Email.required' => '*The Email field is required.',
            'Email.email' => '*The Email field must be a valid email address.',
            'MaritalStatus.required' => '*The Marital Status must be selected.',
        ]);

        return redirect('/insuranceproviders');
    }
}