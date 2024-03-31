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
        @include('student.body.header')

        <!-- Sidebar and Content for lg screens and above -->
        <div class="lg:flex lg:flex-row lg:h-full lg:w-full">
        <!-- Sidebar -->
        @include('student.body.sidebar')

        <!-- Content -->
                <!-- YIELD IS NOT WORKING!! 
                ALTERNATIVE SI INCLUDE 
              CONTENT SHOULD BE INSIDE THE index.blade.php!!!!  
            -->
          
       @yield('student')


         
    </div>
</div>

<!-- script for dropdown -->
<script>
        function toggleDropdown(dropdownId, dropdownContentId) {
            var dropdownContent = document.getElementById(dropdownContentId);
            dropdownContent.classList.toggle('hidden');
        }

        document.getElementById('dashboardDropdown').addEventListener('click', function() {
            toggleDropdown('dashboardDropdown', 'dashboardDropdownContent');
        });

        document.getElementById('scholarshipDropdown').addEventListener('click', function() {
            toggleDropdown('scholarshipDropdown', 'scholarshipDropdownContent');
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
