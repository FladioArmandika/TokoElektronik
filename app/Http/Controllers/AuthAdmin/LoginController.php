<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm() {
      return view('authadmin.login');
    }

    /*
      Handle a login request to the application
    */
    public function login(Request $request) {
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);

      $credential = [
        'email' => $request->email,
        'password' => $request->password
      ];

      // Attempt to log the user in
      if (Auth::guard('admin')->attempt($credential,$request->member)) {
        return redirect()->intended(route('admin.home'));
      }

      // If Unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email','remember'));

    }

    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }



}
