<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe;


class InsurancesController extends Controller
{
  public function create(Request $request)
  {
    $request->session()->forget('insurance_data');
    return view('insurances.create');
  }

  public function back(Request $request)
  {
    return view('insurances.create');
  }

  public function basicDetails(Request $request){

    $validatedData  = $this->validate($request, [
      'full_name' => 'required|string|max:255',
      'car_number' => 'required|string|max:255|exists:car_details,car_number',
      'ic_number' => 'required|string|max:255',
      'postcode' => 'required|string|max:5',
      'mobile' => 'required|string|max:255',
      'email' => 'required|string|email|max:255',
      'maritial_status' => 'required',
      'data_policy' => 'required',
    ]);

    $car_details = DB::table('car_details')->whereIn('car_number', [request()->car_number])->get();
    $insurance_providers = DB::table('insurance_providers')->orderBy('amount')->get();

    $request->session()->forget('insurance_data');
    $insurance_data = new \App\Insurances();
    $insurance_data->fill($validatedData);
    $request->session()->put('insurance_data', $validatedData);

    return view('insurances.providers', [
      'car_details' => $car_details,
      'insurance_providers' => $insurance_providers,
    ]);
  }

  public function details(Request $request){
    $insurance_providers = DB::table('insurance_providers')->whereIn('id', [request()->insurance_provider_id])->get();
    $addons = DB::table('add_ons')->whereIn('provider_id', [request()->insurance_provider_id])->get();
    $car_details = DB::table('car_details')->whereIn('car_number', [session()->get('insurance_data.car_number')])->get();

    return view('insurances.details', [
      'car_details' => $car_details,
      'insurance_providers' => $insurance_providers,
      'addons' => $addons,
    ]);
  }


  public function payment(Request $request){

    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    $intent = \Stripe\PaymentIntent::create([
      'amount' => $request->final_amount * 100,
      'currency' => env('STRIPE_PAYMENT_CURRENCY_CODE'),
      'shipping' => [
        'name' => $request->full_name,
        'address' => [
          'line1' => $request->address1,
          'postal_code' => $request->postcode,
          'city' => $request->city,
          'state' => $request->state,
          'country' => env('STRIPE_PAYMENT_COUNTRY_CODE'),
          'phone' => $request->phone,
        ],
      ],
      'receipt_email' => $request->email,
      'description' => 'Stillwaters: Insurance Payment, Ref ID - '.$request->ref_id,
      'metadata' => ['integration_check' => 'accept_a_payment'],
      'payment_method_types' => ['card'],
    ]);


    $validatedData  = $this->validate($request, [
      'ref_id' => '',
      'car_id' => '',
      'ic_number' => '',
      'full_name' => '',
      'mobile' => '',
      'email' => '',
      'maritial_status' => '',
      'accidents' => '',
      'start_date' => '',
      'end_date' => '',
      'addon_id' => '',
      'provider_id' => '',
      'address1' => '',
      'address2' => '',
      'address3' => '',
      'city' => '',
      'state' => '',
      'postcode' => '',
      'hire_purchase' => '',
      'final_amount' => '',
    ]);

    $request->session()->forget('insurance_data');
    $insurance_data = new \App\Insurances();
    $insurance_data->fill($validatedData);
    $request->session()->put('insurance_data', $validatedData);

    return view('insurances.payment', [
      'stripe_intent' => $intent,
      'amount' => $request->final_amount,
      'data' => session()->get('insurance_data'),
    ]);
  }

  public function store(Request $request)
  {
    session()->put('insurance_data.payment_id', $request->payment_id);
    \App\Insurances::create(session()->get('insurance_data'));
    return "success";
  }

  public function success(Request $request)
  {

    if(!session()->get('insurance_data')){
      abort(403, 'Unauthorized action.');
    }

    return view('insurances.success', [
      'ref_id' => session()->get('insurance_data.ref_id'),
      'email' => session()->get('insurance_data.email'),
      'mobile' => session()->get('insurance_data.mobile'),
      'amount' => session()->get('insurance_data.final_amount'),
    ]);
  }

}
