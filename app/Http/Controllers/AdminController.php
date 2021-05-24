<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $insurances = DB::table('insurances')->join('insurance_providers', 'insurance_providers.id', '=', 'insurances.provider_id')->orderBy('insurances.created_at','DESC')->get();
    return view ('admin.dashboard', [
      'insurances' => $insurances,
      'name' => 'Administrator',
    ]);
  }

  public function getAddons(Request $request){
    $addOns = DB::table('add_ons')->whereIn('id', explode("," , $request->addon_id))->get();
    return $addOns;
  }
    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required|string',
            'email' => 'required|string|email',
            'insurance_name' => 'required|string',
            'expiry_date' => 'required|string',
        ]);

        Mail::send('emails/insurance-renew',
            array(
                'full_name' => $request->get('full_name'),
                'email' => $request->get('email'),
                'insurance_name' => $request->get('insurance_name'),
                'expiry_date' => $request->get('expiry_date'),
            ), function($message) use ($request){
                $message->from(env('CONTACT_EMAIL'));
                $message->to($request->email);
                $message->subject(config('app.name').' - Insurance Renewal Reminder');
            });

        return back()->with('success', 'Renewal reminder sent!');
    }
  public function adminDashboardSearch(){
    $adminsearch = Input::get('adminsearch');
    $name = 'Administrator';
    $insurances = DB::table('insurances')
                    ->join('insurance_providers', 'insurance_providers.id', '=', 'insurances.provider_id')
                    ->where('insurances.full_name', 'LIKE', '%'. $adminsearch . '%')
                    ->orWhere('ref_id', 'LIKE', '%'. $adminsearch . '%')
                    ->get();

    return view('admin/dashboardsearch', ['insurances' => $insurances, 'name' => $name, 'adminsearch' => $adminsearch]);
  }
}


