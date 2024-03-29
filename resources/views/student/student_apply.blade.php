@extends('student.student_dashboard')
@section('student')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Content -->
        <div class="flex bg-gray-200 mx-11 my-2 lg:mx-auto lg:my-auto h-fit lg:w-3/4 rounded-md shadow-2xl shadow-white">
           




               <div class="max-w-full bg-gray-100 p-6 rounded-md">
                    <h2 class="text-4xl font-semibold mb-4 text-blue-500 flex justify-center">APPLICATION FORM</h2>
                    <p class="text-blue-500 text-xl pb-3">Please ensure that all required documents are submitted in PDF format. This will help us efficiently process your application. If you need to convert physical documents, make sure to save them as PDFs before uploading.</p>
      <!-- Start -->
                    
                    
        
        

        <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="file1" class="block text-gray-700">Choose File 1</label>
                    <input type="file" id="file1" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div>
                    <label for="file2" class="block text-gray-700">Choose File 2</label>
                    <input type="file" id="file2" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div>
                    <label for="file3" class="block text-gray-700">Choose File 3</label>
                    <input type="file" id="file3" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div>
                    <label for="file4" class="block text-gray-700">Choose File 4</label>
                    <input type="file" id="file4" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div>
                    <label for="file3" class="block text-gray-700">Choose File 5</label>
                    <input type="file" id="file3" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div>
                    <label for="file4" class="block text-gray-700">Choose File 6</label>
                    <input type="file" id="file4" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="file4" class="block text-gray-700">Choose File 4</label>
                    <input type="file" id="file4" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div>
                    <label for="file3" class="block text-gray-700">Choose File 5</label>
                    <input type="file" id="file3" name="files[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div>
                    <label for="file4" class="block text-gray-700">Choose File 6</label>
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