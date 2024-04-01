@extends('agent.agent_dashboard')
@section('agent')

<!-- // not working properly-> this 
//Its working perfectly fine without this but we may need this  -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="col  max-h-screen mx-auto my-auto">
    <div class=" w-3/4 rounded-md  bg-white text-blue-800  font-semibold h-20 mx-auto mt-2 flex items-center justify-center text-5xl">
        <h1>STUDENT INFORMATION</h1>
    </div>

    <div class="page-content  w-3/4  mx-auto  ">

            
            <div class="row profile-body ">
                <!-- left wrapper start -->
              
                <!-- middle wrapper start -->
                <div class=" col-xl-8  p-2  rounded-lg">          
                    <div class=" bg-white rounded-lg">

                        <div class="card-body text-black p-4">

                            <h6 class="card-title font-medium text-2xl">DOCUMENTS TO BE SUBMITTED</h6>
                            <ol class=" space-y-3 text-lg">
                                <li>1. Fill up PLM Scholarship Application Form with 2x2 recent Photo Pictures</li>
                                <li>2. Copy of downloaded grades from PLM CRS colleges (for old students only) and Form 137/138 (Photocopy) for first year students.</li>
                                <li>3. Parents Income Tax Return, Cert. For Non-Filing of Income Tax from BIR, and Certificate of Indigence from their respective barangay. 
                                    Student may choose any of the two(2) requirements.</li>
                                <li>4. Photocopy of Single Parent ID if she/he no present companion or copy of Death Certificate if parent is deceased.</li>
                                <li>5. Barangay Certificate of Residency for student applicant.</li>
                                <li>6. Certificate of Good Moral Character issued by the Office of Student Development and Services (old students) and SHS for first year level.</li>
                                <li>7. An open letter stating the reason why the student needs to avail a scholarship program.</li>
                                <li>8. Photocopy of PLM University ID and current students registration for validation.'</li>
                            </ol>
                            <div class="flex justify-end mx-5 my-5">
                                <a href="{{ route('student.apply') }}">
                                    <button class=" bg-blue-600 rounded-lg p-3 px-5 font-bold text-lg text-white">
                                        APPLY NOW
                                    </button>
                                </a>
                            </div>
                            

                        </div>

                    </div> 
                </div>
                <!-- middle wrapper end -->
               
        
            </div>

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

