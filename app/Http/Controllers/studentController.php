<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\File;
use PhpParser\Node\Stmt\Echo_;

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
            $file->move(public_path('upload/student_images'),$filename);
             $data->photo = $filename;
            // $data['photo']->$filename;
        }
        $data->save();
        
        return redirect()->back();
    }

    
    
    public function uploadFile(Request $request){
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('upload/file_upload'), $filename); //lalagay sa upload na folder

        $fileModel = new File();
        $fileModel->filename = $filename;
        $fileModel->path = 'upload/file_upload/' . $filename;  // save sa db
        $fileModel->save();

        
        return redirect()->route('student.dashboard');
        
    }  
    return redirect()->back()->with('message', 'No file uploaded.'); 
}

}
