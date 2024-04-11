<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\File;
use App\Models\Pending;

class AgentController extends Controller
{
     public function AgentDashboard(){
        $userData = User::all(); 

        return view('agent.index', compact('userData'));
    }// End Method

    

  public function AgentViewFiles(Request $request) {
    $id = $request->input('selected_users');
    $userData = Pending::find($id);
    
    return view('agent.agent_pending', compact('userData'));
}


public function viewFiles($id)
{
    $user = User::find($id);
    $files = File::where('user_id', $id)->get();

    return view('agent.view_files')->with(compact('user', 'files'));
}

public function moveSelectedRows(Request $request)
{
    // kukuha ng ID
    $selectedIds = $request->input('selected_users');

    // punta sa "pending" table
    foreach ($selectedIds as $id) {
        $user = User::find($id);

        if ($user) {
            // dadalhin mo yung existing row sa "pending" table
            Pending::updateOrCreate(
                ['id' => $id],
                [
                    'name' => $user->name,
                    'year' => $user->year,
                    'course' => $user->course,
                    'phone' => $user->phone,
                    'gwa' => $user->gwa,
                    'parents_income' => $user->parents_income,
                ]
            );

            // uncomment mo pag gusto mo idelete sa pinanggalingan na table
            // $user->delete();
        }
    }

    return redirect()->back()->with('success', 'Selected rows moved successfully.');
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
 
       $userData = Pending::all(); 

        return view('agent.agent_pending', compact('userData'));
        
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
