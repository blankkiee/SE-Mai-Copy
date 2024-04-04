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
    <div id="completedRequirementsContent" style="display: none;">
        <div class="grid grid-cols-7 gap-6">
            <!-- Dropdown - First Name -->
            <div class="col-span-1 pl-12">
                <select class="border p-2 sm:text-xs w-full">
                    <option disabled selected class="text-gray-400">First Name</option>
                    <!-- Add other options here -->
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                </select>
            </div>
            <!-- Dropdown - Course Program -->
            <div class="col-span-1 px-2">
                <select class="border p-2 sm:text-xs w-full">
                    <option disabled selected class="text-gray-400">Course Program</option>
                    <!-- Add other options here -->
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                </select>
            </div>
            <!-- Scholarship Provider -->
            <div class="col-span-1">
                <input type="text" placeholder="Scholarship Provider" class="border p-2 sm:text-xs w-full">
            </div>
            <!-- Slot Opening Date -->
            <div class="relative col-span-1 ">
                <input type="text" placeholder="Slot Opening Date" class="border p-2 sm:text-xs w-full">
                <button class="absolute top-0 right-0 m-2 bg-white p-1">
                    <img width="20" height="20" style="margin-top: -5px;" src="https://img.icons8.com/ios/50/calendar--v1.png" alt="calendar--v1" />
                </button>
            </div>
            <!-- Show -->
            <div class="col-span-1">
                <label class="mr-2 sm:text-xs">Show</label>
                <input type="text" class="border p-2 sm:text-xs w-12">
            </div>
            <!-- Move -->
            <div class="col-span-1 pl-20">
                <button class="bg-gray-400 text-gray-700 py-2 px-8 rounded-md hover:bg-yellow-100 hover:text-yellow-400 transition sm:text-xs">MOVE</button>
            </div>
            <div class="relative col-span-1 pl-4">
                <button class="absolute top-0 bg-white">
                    <img width="18" height="18" src="https://img.icons8.com/fluency-systems-regular/48/help--v1.png" alt="help--v1" />
                </button>
            </div>
        </div>
        <div class>
            <section class="container mx-auto px-7">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    </div>
                </div>
            </section>
            <div class="grid grid-cols-3 px-2 py-1 mx-7 bg-gray-200 h-8 w-auto rounded-md">
                <div class="cols-span-1">
                    <p class="text-gray-500 sm:text-xs pt-1">
                        1 - 11 of 2
                    </p>
                </div>
                <div class="cols-span-1 flex items-center justify-center">
                    <button class="relative bg-yellow-400 text-white font-bold py-1 px-5 sm:text-xs hover:bg-yellow-600 transition flex items-center">
                        ADD APPLICANT
                    </button>
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

@endsection
