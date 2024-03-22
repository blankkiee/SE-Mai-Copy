<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class studentController extends Controller
{
    public function studentDashboard(){

        return view('student.student_dashboard');
    }// End Method

    public function studentlogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/student/login');
    }// End Method

     public function StudentLogin(){
        return view('student.student_login');
    }

    public function StudentProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('student.student_profile_view', compact('profileData'));

    }// End Method

     public function StudentApply(){
        return view('student.index');

        
    }
}
