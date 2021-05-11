<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index()
  {
    return view('profile', [
      'user_email' => Auth::user()->email,
    ]);
  }
}
