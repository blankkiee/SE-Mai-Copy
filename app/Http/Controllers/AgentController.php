<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AgentController extends Controller
{
     public function AgentDashboard(){

        return view('agent.agent_dashboard');
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
