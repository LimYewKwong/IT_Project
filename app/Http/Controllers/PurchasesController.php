<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;

class PurchasesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $insurances = DB::table('insurances')->whereIn('email', [Auth::user()->email])->join('insurance_providers', 'insurance_providers.id', '=', 'insurances.provider_id')->get();
    return view('purchases', [
      'insurances' => $insurances,
      'name' => Auth::user()->name,
    ]);
  }

  public function getAddons(Request $request){
    $addOns = DB::table('add_ons')->whereIn('id', explode("," , $request->addon_id))->get();
    return $addOns;
  }
}
