@extends('agent.agent_landingpage')
@section('agent')

<!-- Content -->
<div class="bg-white mx-11 my-2 lg:mx-auto lg:my-auto h-5/6 lg:w-3/4 rounded-md shadow-2xl">
    <div class="p-5 grid grid-cols-5 gap-1 justify-center">
        <a href="{{ route('agent.lstofstdnts') }}" button id="btnListofStuds" class="col-span-1 bg-yellow-100 p-2 rounded-md shadow-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('List of Students', this)">List of Students</button>
        <a href="{{ route('agent.pending') }}" button id="btnPending" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Pending', this)">Pending</button>
        <a href="{{ route('agent.completedreq') }}" button id="btnCompletedReqs" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Completed Requirements', this)">Completed Requirements</button>
        <a href="{{ route('agent.candidatestdnt) }}" button id="btnCandidateStuds" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Candidate Students', this)">Candidate Students</button>
        <a href="{{ route('agent.scholars') }}" button id="btnScholar" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Scholars', this)">Scholars</button>
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
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
                <!-- Reset button -->
                <div class="col-span-1 flex items-center justify-end pr-12">
                    <button id="resetButton" class="bg-red-500 text-white py-2 px-3 rounded-md sm:text-xs hover:bg-red-600 transition">RESET</button>
                </div>

                <div id="confirmationDialog" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
                    <div class="flex items-center justify-center h-screen">
                        <div class="bg-white shadow-md rounded-md p-10 relative">
                            <span class="cursor-pointer absolute top-2 right-5 text-gray-500" onclick="closeDialog()">x</span>
                            <p class="sm:text-sm font-semibold ml-6 mR-5">Are you sure you want to delete the entire</p>
                            <p class="sm:text-sm ml-6 mb-2 mr-5 font-semibold">student list? Type <span class="text-yellow-400 font-bold">"CONFIRM"</span> to continue.</p>
                            <input type="text" id="confirmationInput" class="border border-gray-900 py-1.5 px-1 w-64 sm:text-xs mb-2 ml-6 mr-5">
                            <div class="flex justify-center">
                                <button class="bg-red-500 text-white py-2 px-9 shadow-sm rounded-lg font-semibold sm:text-sm hover:bg-red-600 transition" onclick="confirmAction()">DONE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class>
                <section class="container mx-auto px-7">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <!--insert table-->
                        </div>
                    </div>
                </section>
                <div class="grid grid-cols-2 px-2 py-1 mx-7 bg-gray-200 h-8 w-auto rounded-md">
                    <div class="cols-span-1">
                        <p class="text-gray-500 sm:text-xs pt-1">
                            1 - 9 of 2
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

<!-- script for deleting the entire student list -->
<script>
    // Function to show the dialog box
    function showDialog() {
        var confirmationInput = document.getElementById('confirmationInput');
        confirmationInput.value = ''; // Clear the text box
        document.getElementById('confirmationDialog').classList.remove('hidden');
    }

    // Function to close the dialog box
    function closeDialog() {
        document.getElementById('confirmationDialog').classList.add('hidden');
    }

    // Function to confirm the action
    function confirmAction() {
        var inputText = document.getElementById('confirmationInput').value.trim();
        if (inputText === 'CONFIRM') {
            // Perform the reset or delete action here
            alert('Student list deleted.'); // Replace with your actual action
            closeDialog();
        } else {
            alert('Invalid confirmation. Please type "CONFIRM" to proceed.');
        }
    }

    // Event listener for the reset button
    document.getElementById('resetButton').addEventListener('click', showDialog);
</script>

@endsection