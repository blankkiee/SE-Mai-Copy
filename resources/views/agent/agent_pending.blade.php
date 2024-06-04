@extends('agent.agent_landingpage')
@section('agent')


<div class>
    <section class="container mx-auto px-7">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">

                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                #
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                Student Name
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                Student Number
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-cengter sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                Status
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider  whitespace-nowrap">

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userData as $user)
                        <tr>

                            <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $loop->iteration }}
                                </p>
                            </td>
                            <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $user->name }}
                                </p>
                            </td>
                            <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $user->student_no }}
                                </p>
                            </td>
                            <td class="border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                <span class="relative inline-block px-3 py-1 font-semibold text-yellow-400 leading-tight">
                                    <span aria-hidden class="absolute inset-0 bg-yellow-200 opacity-50 rounded-full"></span>
                                    <span class="relative">RESUBMISSION</span>
                                </span>
                            </td>
                            <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                <button onclick="showStudentDialog('{{ $user->name }}')" class="bg-yellow-400 text-white py-1 px-7 sm:text-xs hover:bg-yellow-600 transition flex items-center mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256" style="fill:#000000;" class="pr-1">
                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <g transform="scale(10.66667,10.66667)">
                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    View Files
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class=" flex justify-center items-center">
                    <button type="submit" class="bg-blue-400 btn my-3">Move Selected Rows</button>
                </div>
                </form>
            </div>
        </div>
    </section>
    <div class="grid grid-cols-2 mt-5 px-2 py-1 mx-7 bg-gray-200 h-8 w-auto rounded-md">
        <div class="cols-span-1">
            <p class="text-gray-500 sm:text-xs pt-1">
                1 - 7 of 2
            </p>
        </div>
        <div class="cols-span-1 flex items-center justify-end">
            <button class="mr-2">
                <img width="18" height="18" src="https://img.icons8.com/material-outlined/24/circled-left--v1.png" alt="circled-left--v1" />
            </button>
            <p class="text-gray-500 sm:text-xs">
                1/2
            </p>
            <button class="ml-2">
                <img width="18" height="18" src="https://img.icons8.com/material-outlined/24/circled-right.png" alt="circled-right" />
            </button>
        </div>
    </div>
    <!-- Student Dialog -->
    <div id="studentDialog" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
        <div class="flex items-center justify-center h-screen">
            <div class="bg-white shadow-md rounded-md p-8 relative">
                <span class="cursor-pointer absolute top-2 right-5 text-gray-500" onclick="closeStudentDialog()">x</span>

                <div class="grid grid-cols-2 gap-4">

                    <!-- Left Grid - Student Requirements -->
                    <div class="grid grid-cols-1 rounded-md shadow-md">
                        <p class="text-yellow-400 font-bold text-md mx-3 mt-3">Student Requirements:</p>
                        <table class="table-auto mx-5 mt-2 mb-5">

                            <tr>
                                <td class="pr-4 font-semibold">FORM 137/138</td>
                                <td>{{ $user->gwa }}</td>

                                <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                            </tr>
                            <tr>
                                <td class="pr-4 font-semibold">PARENT'S INCOME TAX RETURN</td>

                                <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                            </tr>
                            <tr>
                                <td class="pr-4 font-semibold">CERTIFICATE OF RESIDENCY</td>

                                <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                            </tr>
                            <tr>
                                <td class="pr-4 font-semibold">CERTIFICATE OF GOOD MORAL</td>

                                <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                            </tr>
                            <tr>
                                <td class="pr-4 font-semibold">SCHOLARSHIP LETTER</td>

                                <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                            </tr>
                            <tr>
                                <td class="pr-4 font-semibold">PLM ID</td>

                                <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                            </tr>
                            <tr>
                                <td class="pr-4 font-semibold">APPLICATION FORM</td>

                                <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                            </tr>

                        </table>
                    </div>

                    <!-- Right Grid - Student Information -->
                    <div>
                        <div class="grid grid-cols-2 rounded-md shadow-md">
                            <p class="col-span-2 text-yellow-400 font-bold text-md">Student Information:</p>
                            <table class="col-span-2 table-auto">
                                <tr>
                                    <td class="pr-4 font-semibold">Student Number:</td>
                                    <td>{{ $user->student_no }}</td>
                                </tr>
                                <tr>
                                    <td class="pr-4 font-semibold">Name:</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td class="pr-4 font-semibold">Degree Program:</td>
                                    <td>{{ $user->course }}</td>
                                </tr>
                                <tr>
                                    <td class="pr-4 font-semibold">GWA:</td>
                                    <td>{{ $user->current_gwa }}</td>
                                </tr>
                                <tr>
                                    <td class="pr-4 font-semibold">Contact Number:</td>
                                    <td>{{ $user->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="pr-4 font-semibold">PLM E-mail Account:</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td class="pr-4 font-semibold">Household Income:</td>
                                    <td>{{ $user->household_income }}</td>
                                </tr>
                            </table>
                        </div>

                        <!-- Additional Grid for Approval Options -->
                        <div class="grid grid-cols-3 gap-4">
                            <p id="remarksTitle" class="col-span-3 text-yellow-400 font-bold text-md">Remarks:</p>
                            <div id="approvalOptions" class="col-span-3 grid grid-cols-3 gap-2">
                                <!-- Radio buttons for Approve, Resubmit, Disapprove -->
                                <div class="col-span-1">
                                    <input type="radio" id="approveOption" name="approvalOptions" value="approve" onclick="handleOptionChange(this)">
                                    <label>Approve</label>
                                </div>
                                <div class="col-span-1">
                                    <input type="radio" id="resubmitOption" name="approvalOptions" value="resubmit" onclick="handleOptionChange(this)">
                                    <label for="resubmitOption">Resubmit</label>
                                </div>
                                <div class="col-span-1">
                                    <input type="radio" id="disapproveOption" name="approvalOptions" value="disapprove" onclick="handleOptionChange(this)">
                                    <label for="disapproveOption">Disapprove</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-3 bg-white p-4 rounded-md">
                            <!-- Submit Button -->
                            <button id="submitButton" class="bg-gray-300 text-gray-500 py-1 px-3 rounded-md cursor-not-allowed" disabled>Submit</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
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
    function showStudentDialog(name) {
        // AJAX request to fetch user details
        fetch(`/get-user-details/${name}`)
        .then(response => response.json())
        .then(data => {
            // Handle the received data, e.g., update UI with user details
            console.log(data); // Assuming data contains user details
        })
        .catch(error => {
            console.error('Error fetching user details:', error);
        });
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

@endsection