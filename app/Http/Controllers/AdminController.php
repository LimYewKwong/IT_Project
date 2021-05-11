<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

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
    $insurances = DB::table('insurances')->join('insurance_providers', 'insurance_providers.id', '=', 'insurances.provider_id')->get();
    return view('admin.dashboard', [
      'insurances' => $insurances,
      'name' => 'Administrator',
    ]);
  }

  public function getAddons(Request $request){
    $addOns = DB::table('add_ons')->whereIn('id', explode("," , $request->addon_id))->get();
    return $addOns;
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
