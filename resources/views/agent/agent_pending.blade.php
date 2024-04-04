@extends('agent.agent_landingpage')
@section('agent')

<div class="bg-white mx-11 my-2 lg:mx-auto lg:my-auto h-5/6 lg:w-3/4 rounded-md shadow-2xl">
    <div class="p-5 grid grid-cols-5 gap-1 justify-center">
        <a href="{{ route('agent.lstofstdnts') }}" button id="btnListofStuds" class="col-span-1 bg-yellow-100 p-2 rounded-md shadow-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('List of Students', this)">List of Students</button>
        <a href="{{ route('agent.pending') }}" button id="btnPending" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Pending', this)">Pending</button>
        <a href="{{ route('agent.completedreq') }}" button id="btnCompletedReqs" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Completed Requirements', this)">Completed Requirements</button>
        <a href="{{ route('agent.candidatestdnt') }}" button id="btnCandidateStuds" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Candidate Students', this)">Candidate Students</button>
        <a href="{{ route('agent.scholars') }}" button id="btnScholar" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Scholars', this)">Scholars</button>
    </div>
    <div id="contentContainer">
        <div id="pendingContent" style="display: none;">
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
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                        <option value="5">Option 5</option>
                        <option value="6">Option 6</option>
                        <option value="7">Option 7</option>
                    </select>
                </div>
            </div>
            <div class>
                <section class="container mx-auto px-7">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <!--insert table-->
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
                                    <tr>
                                        <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                1
                                            </p>
                                        </td>
                                        <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                Calinao, Mara
                                            </p>
                                        </td>
                                        <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                2021-23456
                                            </p>
                                        </td>
                                        <td class="border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-yellow-400 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-yellow-200 opacity-50 rounded-full"></span>
                                                <span class="relative">RESUBMISSION</span>
                                            </span>
                                        </td>
                                        <!-- This is agent_pending-viewdocuments.blade.php should be. -->
                                        <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                            <button onclick="showStudentDialog()" class="bg-yellow-400 text-white py-1 px-7 sm:text-xs hover:bg-yellow-600 transition flex items-center mx-auto">
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
                                </tbody>
                            </table>
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
            </div>
        </div>
    </div>
</div>

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

@endsection