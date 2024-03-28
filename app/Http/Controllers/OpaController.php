<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class OpaController extends Controller
{
     public function OpaDashboard(){

        return view('opa.opa_dashboard');
    }// End Method

    public function opalogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/opa/login');
    }// End Method

     public function OpaLogin(){
        return view('opa.opa_login');
    }
}
