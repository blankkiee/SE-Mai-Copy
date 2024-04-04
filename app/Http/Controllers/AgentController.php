<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
     public function AgentDashboard(){

        return view('agent.index');
    }// End Method

    public function agentlogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/agent/login');
    }// End Method

     public function AgentLogin(){
        return view('agent.agent_login');
    }


   

 
}
