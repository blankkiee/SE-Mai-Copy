@extends('student.student_dashboard')
@section('student')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content w-full p-10 mt-10">

        
        <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card bg-white  rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                                                  <!-- src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" -->

                  <div>
                    <img class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/student_images/'.$profileData->photo) : url('upload/no_image.jpg/') }}" alt="profile">
                    <span class="h4 ms-3 ">{{ $profileData->username }}</span>
                  </div>

                  
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase text-black">Name:</</label>
                  <p class="text-muted">{{ $profileData->name }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase text-black">Email:</label>
                  <p class="text-muted">{{ $profileData->email }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase text-black">Phone:</label>
                  <p class="text-muted">{{ $profileData->phone }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase text-black">Address:</label>
                  <p class="text-muted">{{ $profileData->address }}</p>
                </div>
                
              </div>
            </div>
          </div>
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
              <div class="card  bg-white ">
                <div class="card-body">

                    <h6 class="card-title">Update Student Profile</h6>

                    <form method="POST" action="{{ route('student.profile.store') }}" enctype="multipart/form-data" class="forms-sample">
                      @csrf
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label text-black">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputUsername1" 
                            autocomplete="off" value="{{ $profileData->username }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-black">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputUsername1" 
                            autocomplete="off" value="{{ $profileData->name }}">                        
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-black">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputUsername1" 
                            autocomplete="off" value="{{ $profileData->email }}">                        
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-black">phone</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputUsername1" 
                            autocomplete="off" value="{{ $profileData->phone }}">                        
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-black">Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputUsername1" 
                            autocomplete="off" value="{{ $profileData->address }}">                        
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-black">Photo</label>
                            <input class="form-control bg-slate-600" name="photo" type="file" id="image">   
                                                 
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-black"></label>
                            <img id="showImage" class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile">
                        </div>
                       


                        <button type="submit" class="btn btn-primary bg-slate-700 me-2">Save Changes</button>
                        
                    </form>

              </div>
            </div>
              
            </div>
          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
          
          <!-- right wrapper end -->
        </div>

			</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection