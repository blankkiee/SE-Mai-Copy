@extends('student.student_dashboard')
@section('student')

        <!-- Content -->
        <div class="flex bg-gray-200 mx-11 my-2 lg:mx-auto lg:my-auto h-fit lg:w-3/4 rounded-md shadow-2xl shadow-white">
            <!-- <div class="text-blue-900"> -->
              
              <!-- <div class="bg-green-500"> -->
                

               <div class="max-w-full bg-gray-100 p-6 rounded-md">
                    <h2 class="text-4xl font-semibold mb-4 text-blue-500 flex justify-center">APPLICATION FORM</h2>
                    <p class="text-blue-500 text-xl pb-3">Please ensure that all required documents are submitted in PDF format. This will help us efficiently process your application. If you need to convert physical documents, make sure to save them as PDFs before uploading.</p>

                    <form action="{{ route('student.apply.store') }}" enctype="multipart/form-data" method="POST" >
                        @csrf
                        <!-- enctype="multipart/form-data" -->
                      
                       <div class="mb-3 flex flex-col lg:flex-row space-y-3 lg:space-y-0">
                            <!-- Row 1 -->
                            <!-- Download Scholarship -->
                            <div class="mr-4 lg:flex-1 bg-yellow-100 h-fit ">
                                <div class="h-full w-full flex justify-around shadow-lg px-5 py-3 items-center border border-sky-700 rounded-md space-x-5">
                                    <a href="link_to_download_form" target="_blank" class=" w-11/12 h-fit py-2.5 border cursor-pointer bg-yellow-600   text-white hover:bg-yellow-500">
                                        <span class="text-sm flex justify-center">DOWNLOAD FORM</span>
                                    </a>
                                </div>
                            </div>

                            <div class="mr-4 lg:flex-1 bg-yellow-100 h-fit">
                                <div class="h-full w-full flex justify-around shadow-lg px-5 py-3 items-center border border-sky-700 rounded-md space-x-5">
                                    <label for="file1" class="text-red-500 text-sm font-bold "> REQUIRED
                                        <h1 class="text-blue-500 font-light">PLM DOWNLOADED GRADES FOR OLD STUDENTS OR </h1>                                       
                                    </label>

                                   
                                    <input type="file" name="file1" id="file1" class="hidden">

                                    <label for="file1" class=" w-1/3 h-fit py-2 border  cursor-pointer bg-yellow-600 text-white hover:bg-yellow-500">
                                        <span class="text-sm flex justify-center ">ADD FILE </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3 flex flex-col lg:flex-row space-y-3 lg:space-y-0">
                            <!-- Row 1 -->
                            <div class="mr-4 lg:flex-1 bg-white h-fit ">
                                <div class="h-full w-full flex justify-around shadow-lg px-5 py-3 items-center border border-sky-700 rounded-md space-x-5">
                                    <label for="file1" class=" text-red-500 text-sm font-bold mb-2"> REQUIRED
                                        <h1 class="text-blue-500 font-light">PLM DOWNLOADED GRADES FOR OLD STUDENTS OR </h1>
                                        <h1 class="text-blue-500 font-light">FORM 137/138 FOR FIRST YEAR STUDENTS STUDENTS</h1>
                                    </label>
                                    <input type="file" name="file1" id="file1" class="hidden">

                                    <label for="file1" class=" w-1/3 h-fit py-2 border  cursor-pointer bg-blue-900 text-white hover:bg-blue-600">
                                        <span class="text-sm flex justify-center ">ADD FILE </span>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="mr-4 lg:flex-1 bg-white h-fit  ">
                                <div class="h-full w-full flex justify-around shadow-lg px-5 py-3 items-center border border-sky-700 rounded-md space-x-5">
                                    <label for="file1" class=" text-red-500 text-sm font-bold mb-2"> REQUIRED
                                        <h1 class="text-blue-500 font-light">PLM DOWNLOADED GRADES FOR OLD STUDENTS OR </h1>
                                        <h1 class="text-blue-500 font-light">FORM 137/138 FOR FIRST YEAR STUDENTS STUDENTS</h1>
                                    </label>
                                    
                                    <input type="file" name="file2" id="file2" class="hidden">
                                    <label for="file2" class=" w-1/3 h-fit py-2 border  cursor-pointer bg-blue-900 text-white hover:bg-blue-600">
                                        <span class="text-sm flex justify-center ">ADD FILE </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 flex lg:flex-row flex-col space-y-3 lg:space-y-0">
                            <!-- Row 1 -->
                            <div class="mr-4 lg:flex-1 bg-white h-fit ">
                                <div class="h-full w-full flex justify-around shadow-lg px-5 py-3 items-center border border-sky-700 rounded-md space-x-5">
                                    <label for="file1" class=" text-red-500 text-sm font-bold mb-2"> REQUIRED
                                        <h1 class="text-blue-500 font-light">PLM DOWNLOADED GRADES FOR OLD STUDENTS OR </h1>
                                        <h1 class="text-blue-500 font-light">FORM 137/138 FOR FIRST YEAR STUDENTS STUDENTS</h1>
                                    </label>
                                    <input type="file" name="file1" id="file1" class="hidden">

                                    <label for="file1" class=" w-1/3 h-fit py-2 border  cursor-pointer bg-blue-900 text-white hover:bg-blue-600">
                                        <span class="text-sm flex justify-center ">ADD FILE </span>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="mr-4 lg:flex-1 bg-white h-fit">
                                <div class="h-full w-full flex justify-around shadow-lg px-5 py-3 items-center border border-sky-700 rounded-md space-x-5">
                                    <label for="file1" class=" text-red-500 text-sm font-bold mb-2"> REQUIRED
                                        <h1 class="text-blue-500 font-light">PLM DOWNLOADED GRADES FOR OLD STUDENTS OR </h1>
                                        <h1 class="text-blue-500 font-light">FORM 137/138 FOR FIRST YEAR STUDENTS STUDENTS</h1>
                                    </label>
                                    
                                    <input type="file" name="file2" id="fileupload" class="hidden">
                                    
                                    <label for="file2" class=" w-1/3 h-fit py-2 border  cursor-pointer bg-blue-900 text-white hover:bg-blue-600">
                                        <span class="text-sm flex justify-center ">ADD FILE </span>
                                    </label>
                                                          
                            </label>
                                </div>
                            </div>
<!-- not  -->
                       
    <!--end not  -->
                        </div>
                        <div class="mb-3 flex lg:flex-row flex-col space-y-3 lg:space-y-0">
                            <!-- Row 1 -->
                            <div class="mr-4 lg:flex-1 bg-white h-fit ">
                                <div class="h-full w-full flex justify-around shadow-lg px-5 py-3 items-center border border-sky-700 rounded-md space-x-5">
                                    <label for="file1" class=" text-red-500 text-sm font-bold mb-2"> REQUIRED
                                        <h1 class="text-blue-500 font-light">PLM DOWNLOADED GRADES FOR OLD STUDENTS OR </h1>
                                        <h1 class="text-blue-500 font-light">FORM 137/138 FOR FIRST YEAR STUDENTS STUDENTS</h1>
                                    </label>
                                    <input type="file" name="file1" id="file1" class="hidden">

                                    <label for="file1" class=" w-1/3 h-fit py-2 border  cursor-pointer bg-blue-900 text-white hover:bg-blue-600">
                                        <span class="text-sm flex justify-center ">ADD FILE </span>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="mr-4 lg:flex-1 bg-white h-fit ">
                                <div class="h-full w-full flex justify-around shadow-lg px-5 py-3 items-center border border-sky-700 rounded-md space-x-5">
                                    <label for="file1" class=" text-red-500 text-sm font-bold mb-2"> REQUIRED
                                        <h1 class="text-blue-500 font-light">PLM DOWNLOADED GRADES FOR OLD STUDENTS OR </h1>
                                        <h1 class="text-blue-500 font-light">FORM 137/138 FOR FIRST YEAR STUDENTS STUDENTS</h1>
                                    </label>
                                    
                                    <input type="file" name="file2" id="file2" class="hidden">
                                    <label for="file2" class=" w-1/3 h-fit py-2 border  cursor-pointer bg-blue-900 text-white hover:bg-blue-600">
                                        <span class="text-sm flex justify-center ">ADD FILE </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                         <div class="mb-3 flex lg:flex-row flex-col space-y-3 lg:space-y-0">
                            <!-- Row 1 -->
                            <div class="mr-4 lg:flex-1 bg-white h-fit">
                                <div class="h-full w-full flex justify-around shadow-lg px-5 py-3 items-center border border-sky-700 rounded-md space-x-5">
                                    <label for="file1" class=" text-red-500 text-sm font-bold mb-2"> REQUIRED
                                        <h1 class="text-blue-500 font-light">PLM DOWNLOADED GRADES FOR OLD STUDENTS OR </h1>
                                        <h1 class="text-blue-500 font-light">FORM 137/138 FOR FIRST YEAR STUDENTS STUDENTS</h1>
                                    </label>
                                    <input type="file" name="file1" id="file1" class="hidden">

                                    <label for="file1" class=" w-1/3 h-fit py-2 border  cursor-pointer bg-blue-900 text-white hover:bg-blue-600">
                                        <span class="text-sm flex justify-center ">ADD FILE </span>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="mr-4 lg:flex-1 bg-white h-fit">
                                <div class="h-full w-full flex justify-end shadow-lg px-5 py-3 items-center border border-sky-700 rounded-md space-x-5">
                                     <!-- Submit Button -->

                                   

                                        

                                    <div class="mt-6 flex flex-row">
                                        <a href="./stud-applicationForm.php" class="w-full bg-gray-300 text-red-500 py-2 px-4 rounded-md hover:bg-gray-500">PREV</a>
                                        <button type="submit" class="w-full bg-gray-300 text-red-500 py-2 px-4 rounded-md hover:bg-gray-500">NEXT</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                      


                    </form>
                </div>






              <!-- </div> -->
            <!-- </div> -->
        </div>

        <script type="text/javascript">
    $(document).ready(function(){
        $('#fileupload').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>
@endsection