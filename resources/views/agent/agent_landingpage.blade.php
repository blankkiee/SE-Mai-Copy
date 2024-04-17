<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

         <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr.min.css') }}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css') }}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

        @vite('resources/css/app.css')
    </head>
  
<body style="background-image: url('../upload/bg.png'); background-size: cover; background-repeat: no-repeat; background-position: center center;" class="lg:min-h-screen">

<div class="lg:flex lg:flex-col lg:h-screen">
    <!-- Top Navbar -->
        @include('agent.body.header')

        <!-- Sidebar and Content for lg screens and above -->
        <div class="lg:flex lg:flex-row lg:h-full lg:w-full">
        <!-- Sidebar -->
        @include('agent.body.sidebar')

        
        <div class="bg-white mx-11 my-2 lg:mx-auto lg:my-auto h-5/6 lg:w-3/4 rounded-md shadow-2xl">
    <div class="p-5 grid grid-cols-5 gap-1 justify-center">
        <a href="{{ route('agent.dashboard') }}" button id="btnListofStuds" class="col-span-1 bg-yellow-100 p-2 rounded-md shadow-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('List of Students', this)">List of Students</a>
        <a href="{{ route('agent.pending') }}" button id="btnPending" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Pending', this)">Pending</a>
        <a href="{{ route('agent.completedreq') }}" button id="btnCompletedReqs" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Completed Requirements', this)">Completed Requirements</a>
        <a href="{{ route('agent.candidatestdnt') }}" button id="btnCandidateStuds" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Candidate Students', this)">Candidate Students</a>
        <a href="{{ route('agent.scholars') }}" button id="btnScholar" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Scholars', this)">Scholars</a>
    </div> 

    
    <div id="contentContainer">
        <div id="studentListContent">
            <div class="grid grid-cols-3 gap-4 pl-7 pr-5">
                <!-- Search student -->
                <div class="col-span-1 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-400 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-5.2-5.2"></path>
                        <circle cx="10" cy="10" r="8"></circle>
                    </svg>
                    <input type="text" placeholder="Search student..." class="border p-2 rounded-md sm:text-xs">
                    <button class="bg-blue-900 text-white py-2 px-3 rounded-md sm:text-xs">SEARCH</button>
                </div>
                <!-- search filter -->
                <div class="col-span-1 flex items-center">
                    <label class="mr-2 sm:text-xs">Search filter:</label>
                    <select class="border p-1 rounded-md h-8 w-60 sm:text-xs">
                        <option value="1"> </option>
                        <option value="2">Pending</option>
                        <option value="3">Approved</option>
                        <option value="4">Disapproved</option>
                        <option value="5">Resubmission</option>
                        <option value="6">Scholar</option>
                    </select>
                </div>
                
            </div>
       @yield('agent')

</div>

  </div>
                
            </div>
         
    </div>
</div>

<!-- script for dropdown -->
<script>
        function toggleDropdown(dropdownId, dropdownContentId) {
            var dropdownContent = document.getElementById(dropdownContentId);
            dropdownContent.classList.toggle('hidden');
        }

        document.getElementById('candidateDropdown').addEventListener('click', function() {
            toggleDropdown('candidateDropdown', 'candidateDropdownContent');
        });
        document.getElementById('profileDropdown').addEventListener('click', function() {
            toggleDropdown('profileDropdown', 'profileDropdownContent');
        });
    </script>

<!-- core:js -->
	<script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('backend/assets/js/template.js') }}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{ asset('backend/assets/js/dashboard-dark.js') }}"></script>
	<!-- End custom js for this page -->


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  @if(Session::has('message'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        });
    </script>
@endif
</body>
</html>


<script>
    function changeContentbyDropdown(content, buttonId) {
        var studentListContent = document.getElementById('studentListContent');
        var pendingContent = document.getElementById('pendingContent');
        var completedRequirementsContent = document.getElementById('completedRequirementsContent');
        var candidateStudentsContent = document.getElementById('candidateStudentsContent');
        var scholarsContent = document.getElementById('scholarsContent');

        studentListContent.style.display = 'none';
        pendingContent.style.display = 'none';
        completedRequirementsContent.style.display = 'none';
        candidateStudentsContent.style.display = 'none';
        scholarsContent.style.display = 'none';

        var buttons = document.querySelectorAll('.grid button');
        buttons.forEach(btn => {
            btn.classList.remove('bg-yellow-100', 'shadow-md');
        });

        var specificButton = document.getElementById(buttonId);
        specificButton.classList.add('bg-yellow-100', 'shadow-md');

        switch (content) {
            case 'List of Students':
                studentListContent.style.display = 'block';
                break;
            case 'Pending':
                pendingContent.style.display = 'block';
                break;
            case 'Completed Requirements':
                completedRequirementsContent.style.display = 'block';
                break;
            case 'Candidate Students':
                candidateStudentsContent.style.display = 'block';
                break;
            case 'Scholars':
                scholarsContent.style.display = 'block';
                break;
            default:
                break;
        }

    }
</script>

<!-- script for changing the tabs -->
<script>
    function changeContent(content, button) {
        var studentListContent = document.getElementById('studentListContent');
        var pendingContent = document.getElementById('pendingContent');
        var completedRequirementsContent = document.getElementById('completedRequirementsContent');
        var candidateStudentsContent = document.getElementById('candidateStudentsContent');
        var scholarsContent = document.getElementById('scholarsContent');

        studentListContent.style.display = 'none';
        pendingContent.style.display = 'none';
        completedRequirementsContent.style.display = 'none';
        candidateStudentsContent.style.display = 'none';
        scholarsContent.style.display = 'none';

        var buttons = document.querySelectorAll('.grid button');
        buttons.forEach(btn => {
            btn.classList.remove('bg-yellow-100', 'shadow-md');
        });

        button.classList.add('bg-yellow-100', 'shadow-md');

        switch (content) {
            case 'List of Students':
                studentListContent.style.display = 'block';
                break;
            case 'Pending':
                pendingContent.style.display = 'block';
                break;
            case 'Completed Requirements':
                completedRequirementsContent.style.display = 'block';
                break;
            case 'Candidate Students':
                candidateStudentsContent.style.display = 'block';
                break;
            case 'Scholars':
                scholarsContent.style.display = 'block';
                break;
            default:
                document.title = 'Scholarship | PLM';
                break;
        }
    }
</script>

<!-- script for viewing student info -->
<script>
    // Function to show the student dialog
    function showStudentDialog() {
        document.getElementById('studentDialog').classList.remove('hidden');
    }

    // Function to close the student dialog
    function closeStudentDialog() {
        var studentDialog = document.getElementById('studentDialog');
        studentDialog.classList.add('hidden');

        // Deselect all radio buttons
        var options = document.querySelectorAll('#approvalOptions input[type="radio"]');
        options.forEach(option => {
            option.checked = false;
        });

        // Clear highlighting from all option divs
        var optionDivs = document.querySelectorAll('#approvalOptions div');
        optionDivs.forEach(optionDiv => {
            optionDiv.classList.remove('bg-yellow-100', 'hover:bg-yellow-100');
        });

        // Hide specific content for each option
        var approveContent = document.getElementById('approveContent');
        var resubmitContent = document.getElementById('resubmitContent');
        var disapproveContent = document.getElementById('disapproveContent');

        approveContent.style.display = 'none';
        resubmitContent.style.display = 'none';
        disapproveContent.style.display = 'none';

        // Display the default content
        var defaultContent = document.getElementById('defaultContent');
        defaultContent.style.display = 'block';

        // Disable the submit button
        var submitButton = document.getElementById('submitButton');
        submitButton.disabled = true;
    }
</script>

<!--script for the remarks radio buttons in Pending section - Viewing student info feature -->
<script>
    function handleOptionChange(radioButton) {
        var contentContainer = document.getElementById('contentContainer');
        var approveContent = document.getElementById('approveContent');
        var resubmitContent = document.getElementById('resubmitContent');
        var disapproveContent = document.getElementById('disapproveContent');
        var defaultContent = document.getElementById('defaultContent');
        var submitButton = document.getElementById('submitButton');

        approveContent.style.display = 'none';
        resubmitContent.style.display = 'none';
        disapproveContent.style.display = 'none';
        defaultContent.style.display = 'none';

        var options = document.querySelectorAll('#approvalOptions div');
        options.forEach(optionDiv => {
            optionDiv.classList.remove('bg-yellow-100', 'hover:bg-yellow-100');
        });

        var optionDiv = radioButton.parentNode;
        optionDiv.classList.add('bg-yellow-100');

        var optionValue = radioButton.value;
        switch (optionValue) {
            case 'approve':
                approveContent.style.display = 'block';
                break;
            case 'resubmit':
                resubmitContent.style.display = 'block';
                break;
            case 'disapprove':
                disapproveContent.style.display = 'block';
                break;
            default:
                defaultContent.style.display = 'block';
                break;
        }

        // Enable submit button when an option is selected
        submitButton.disabled = false;
        submitButton.classList.remove('cursor-not-allowed');
    }
</script>