@extends('student.student_dashboard')
@section('student')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Content -->
        <div class="flex bg-gray-200 mx-11 my-2 lg:mx-auto lg:my-auto h-fit lg:w-3/4 rounded-md shadow-2xl shadow-white">
           




               <div class="max-w-full bg-gray-100 p-6 rounded-md">
                    <h2 class="text-4xl font-semibold mb-4 text-blue-500 flex justify-center">APPLICATION FORM</h2>
                    <p class="text-blue-500 text-xl pb-3">Please ensure that all required documents are submitted in PDF format. This will help us efficiently process your application. If you need to convert physical documents, make sure to save them as PDFs before uploading.</p>

                    @if(session('message'))
                    <!-- <script>alert('{{ session('message') }}')</script> -->
@endif
                    <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
                      @csrf

                      <div class="mb-3">
                          
                          <input type="file" class="form-control" id="file" name="file">
                      </div>

                      <button type="submit" class="btn btn-primary">Upload File</button>
                  </form>
                </div>

     
        </div>

 
@endsection