<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
   /*
   |--------------------------------------------------------------------------
   | Login Controller
   |--------------------------------------------------------------------------
   |
   | This controller handles authenticating users for the application and
   | redirecting them to your home screen. The controller uses a trait
   | to conveniently provide its functionality to your applications.
   |
   */

   use AuthenticatesUsers;

   /**
   * Where to redirect users after login.
   *
   * @var string
   */
   protected $redirectTo = 'exodus/material_requisition_tool/home';

   /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function __construct()
   {
      $this->middleware('guest')->except('logout');
   }

   public function authenticated($request, $user)
   {
      Session::flash('loginMsg', 'You have successfully logged in. Welcome to Material Requisition Form.');
   }

   public function showLoginForm()
   {
      return view('auth.login');
   }
}
