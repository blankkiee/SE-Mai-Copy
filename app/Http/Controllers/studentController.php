<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class studentController extends Controller
{
    public function studentDashboard(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('student.index', compact('profileData'));

        
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
    }// End Method

    public function StudentProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('student.student_profile_view', compact('profileData'));

    }// End Method   

     public function StudentApply(){
        return view('student.student_apply');
    }// End Method 

    public function StudentWho_may_apply(){
        return view('student.who_may_apply');
    }// End Method 

    public function StudentAdditional_req(){

        return view('student.additional_req');
    }

    public function StudentProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
             $data->photo = $filename;
            // $data['photo']->$filename;
        }
        $data->save();
        
        return redirect()->back();
    }

    public function studentApplyStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
             $data->photo = $filename;
            // $data['photo']->$filename;
        }
        $data->save();
        
        return redirect()->back();
    }

}
