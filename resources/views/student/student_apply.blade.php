@extends('student.student_dashboard')
@section('student')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Content -->
        <div class="flex bg-gray-200 mx-auto my-auto h-fit lg:w-3/4 rounded-md shadow-2xl shadow-white">
           




               <div class="max-w-full bg-gray-100 p-6 rounded-md">
                    <h2 class="text-4xl font-semibold mb-4 text-blue-500 flex justify-center">APPLICATION FORM</h2>
                    <p class="text-blue-500 text-xl pb-3">Please ensure that all required documents are submitted in PDF format. This will help us efficiently process your application. If you need to convert physical documents, make sure to save them as PDFs before uploading.</p>
      <!-- Start -->
                    
                    
        
        

        <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <div class="border-solid border-2  border-yellow-500 bg-yellow-200 p-2">
                    <label for="file1" class="block text-gray-700"> This is for download form</label>
                    <input type="file" id="file1" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div class="border-solid border-2  border-yellow-500 bg-yellow-200 p-2">
                    <label for="file2" class="block text-gray-700">SCHOLARSHIP FORM WITH 2X2 PICTURE</label>
                    <input type="file" id="file2" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div class="border-solid border   bg-blue-50 rounded-lg p-2">
                    <label for="file3" class="block text-gray-700">PLM DOWNLOADED GRADES FOR OLD STUDENTS OR FORM 137/138 FOR FIRST FIRST STUDENTS </label>
                    <input type="file" id="file3" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div class="border-solid border   bg-blue-50 rounded-lg p-2">
                    <label for="file4" class="block text-gray-700">CCERTIFICATE OF GOOD MORAL CHARACTER FOR STUDENTS & SHS FOR FIRST YEAR LEVELS</label>
                    <input type="file" id="file4" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div class="border-solid border   bg-blue-50 rounded-lg p-2">
                    <label for="file3" class="block text-gray-700">PARENTS INCOME TAX RETURN, CERT FOR FILLING OF INCOME TAX FROM BIR</label>
                    <input type="file" id="file3" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div class="border-solid border   bg-blue-50 rounded-lg p-2">
                    <label for="file4" class="block text-gray-700">OPEN LETTER STATING THE REASON WHY STUDENT NEED TO AVAIL A SCHOLARSHIP PROGRAM</label>
                    <input type="file" id="file4" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div class="border-solid border   bg-blue-50 rounded-lg p-2">
                    <label for="file4" class="block text-gray-700">PLM ID PHOTOCOPY,ENROLLMENT REGISTRATION FORM</label>
                    <input type="file" id="file4" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div class="border-solid border   bg-blue-50 rounded-lg p-2">
                    <label for="file3" class="block text-gray-700">BARANGAY CERTIFICATE OF RESIDENCY FOR STUDENT</label>
                    <input type="file" id="file3" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div class="border-solid border   bg-blue-50 rounded-lg p-2">
                    <label for="file4" class="block text-gray-700">PHOTOCOPY OF SINGLE PARENT ID OR COPY OF DEATH CERTIFICATE</label>
                    <input type="file" id="file4" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
            <div class="grid grid-cols-2 gap-4">
                <button type="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4 w-full">Back</button>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4 w-full">Upload</button>

            </div>

            </div>

        </form>
    

    <!-- end  -->
            </div>

     
        </div>

        <script>
    function onSubmit() {
        // Display a JavaScript alert
        alert('File uploaded successfully');

        // Return true to submit the form
        return true;
    }
</script>
 
@endsection