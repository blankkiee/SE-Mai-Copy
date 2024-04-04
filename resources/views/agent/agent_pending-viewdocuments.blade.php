@extends('agent.agent_dashboard')
@section('agent')

<div class="bg-white mx-11 my-2 lg:mx-auto lg:my-auto h-5/6 lg:w-3/4 rounded-md shadow-2xl">
    <div class="p-5 grid grid-cols-5 gap-1 justify-center">
        <button id="btnListofStuds" class="col-span-1 bg-yellow-100 p-2 rounded-md shadow-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('List of Students', this)">List of Students</button>
        <button id="btnPending" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Pending', this)">Pending</button>
        <button id="btnCompletedReqs" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Completed Requirements', this)">Completed Requirements</button>
        <button id="btnCandidateStuds" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Candidate Students', this)">Candidate Students</button>
        <button id="btnScholar" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Scholars', this)">Scholars</button>
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
                                        <td></td>
                                        <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                                    </tr>
                                    <tr>
                                        <td class="pr-4 font-semibold">PARENT'S INCOME TAX RETURN</td>
                                        <td></td>
                                        <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                                    </tr>
                                    <tr>
                                        <td class="pr-4 font-semibold">CERTIFICATE OF RESIDENCY</td>
                                        <td></td>
                                        <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                                    </tr>
                                    <tr>
                                        <td class="pr-4 font-semibold">CERTIFICATE OF GOOD MORAL</td>
                                        <td></td>
                                        <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                                    </tr>
                                    <tr>
                                        <td class="pr-4 font-semibold">SCHOLARSHIP LETTER</td>
                                        <td></td>
                                        <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                                    </tr>
                                    <tr>
                                        <td class="pr-4 font-semibold">PLM ID</td>
                                        <td></td>
                                        <td><button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
                                    </tr>
                                    <tr>
                                        <td class="pr-4 font-semibold">APPLICATION FORM</td>
                                        <td></td>
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
                                            <td class="pr-4 font-semibold">Student Number</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="pr-4 font-semibold">Name</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="pr-4 font-semibold">Degree Program</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="pr-4 font-semibold">GWA</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="pr-4 font-semibold">Contact Number</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="pr-4 font-semibold">PLM E-mail Account</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="pr-4 font-semibold">Household Income</td>
                                            <td></td>
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
                                    <div id="defaultContent" class="content-section">
                                        <p>This content has not been established by the buttons.</p>
                                    </div>

                                    <div id="approveContent" class="content-section" style="display: none;">
                                        <!-- Content for the 'Approve' option -->
                                        ----approve content here-----
                                    </div>

                                    <div id="resubmitContent" class="content-section" style="display: none;">
                                        <!-- Content for the 'Resubmit' option -->
                                        ----resubmit content here-----
                                    </div>

                                    <div id="disapproveContent" class="content-section" style="display: none;">
                                        <!-- Content for the 'Disapprove' option -->
                                        ----disapprove content here-----
                                    </div>

                                    <!-- Submit Button -->
                                    <button id="submitButton" class="bg-gray-300 text-gray-500 py-1 px-3 rounded-md cursor-not-allowed" disabled>Submit</button>
                                </div>
                            </div>
                        </div>
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