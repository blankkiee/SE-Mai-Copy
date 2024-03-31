<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
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
    } // End Method 

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
            @unlink(public_path('upload/student_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/student_images'),$filename);
            $data->photo = $filename;
            // $data['photo']->$filename;
        }
        $data->save();
        
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method 

    
    
    public function uploadFile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        
        $fields = ['grade_file' => 'grade_file', 'gmc_cert' => 'gmc_cert', 'tax' => 'tax', 
        'reason_letter'=>'reason_letter', 'id_reg_form'=>'id_reg_form', 
        'form_with_pic' => 'form_with_pic', 'single_parent_id'=>'single_parent_id', 'brg_cert'=>'brg_cert'];

        foreach ($fields as $field => $fileKey) {
            if($request->hasFile($fileKey)){
                $file = $request->file($fileKey);
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/student_File_Uploads'),$filename);
                $data->{$field} = $filename;
            }
        }
        
        $data->save();
        
        $notification = array(
            'message' => 'Files Uploaded Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method 


    public function StudentStatus(Request $request){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        
        return view('student.status',compact('profileData'));
    }// End Method 
    

    public function StudentChangePassword(){
        
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('student.student_change_password', compact('profileData'));
    }


    public function StudentUpdatePassword(Request $request){

        //validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed' 
        ]);

        /// Match the old Password

        if (!Hash::check($request->old_password, auth::user()->password)) {
            
            $notification = array(
            'message' => 'Old Password Does not Match!',
            'alert-type' => 'error' 
        );

        return back()->with($notification);
        }

        /// Update The New Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully!',
            'alert-type' => 'success' 
        );

        return back()->with($notification);
        
      

    }//End Method
    
}

