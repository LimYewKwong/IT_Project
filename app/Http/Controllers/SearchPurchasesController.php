<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Auth;
use App\User;
use App\Insurances;

class SearchPurchasesController extends Controller
{
    public function searchingFunction(){
      $search = Input::get('search');
      $name = Auth::user()->name;
      $insurances = DB::table('insurances')
                      ->whereIn('email', [Auth::user()->email])
                      ->join('insurance_providers', 'insurance_providers.id', '=', 'insurances.provider_id')
                      ->where(function($query){
                        $search = Input::get('search');
                        $query->where('insurance_providers.name', 'LIKE', '%'. $search . '%')
                              ->orWhere('ref_id', 'LIKE', '%'. $search . '%');
                      })
                      ->get();
                      
      return view('searchpurchases', ['insurances' => $insurances, 'name' => $name, 'search' => $search]);
    }
}
