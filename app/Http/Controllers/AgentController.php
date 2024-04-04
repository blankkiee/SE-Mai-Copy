<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AgentController extends Controller
{
     public function AgentDashboard(){

        return view('agent.agent_landingpage');
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
    }// End Method

    public function AgentLstOfStdnts(){
        return view('agent.index');
    }// End Method

    public function AgentPending(){
        return view('agent.agent_pending');
    }// End Method 

    public function AgentCompletedReq(){
        return view('agent.agent_completedreq');
    }// End Method 

    public function AgentCandidateStdnt(){
        return view('agent.agent_candidatestudent');
    }// End Method 

    public function AgentScholars(){
        return view('agent.agent_scholars');
    }// End Method 
}
