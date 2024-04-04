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
        <div id="candidateStudentsContent" style="display: none;">
            <div class="grid grid-cols-3 gap-4 pl-7 pr-5">
                <div class="col-span-1 px-2">
                    <select class="border p-2 sm:text-xs w-full">
                        <option disabled selected class="text-gray-400">Select Scholarship</option>
                        <!-- Add other options here -->
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                </div>
                <!-- Date of Becoming a Scholar -->
                <div class="relative col-span-1 flex items-center">
                    <label class="mr-2 sm:text-xs">Date of Becoming a Scholar:</label>
                    <div class="relative">
                        <input type="text" placeholder="mm/dd/yyyy" class="border p-2 sm:text-xs w-32">
                        <button class="absolute top-0 right-0 m-2 bg-white p-1">
                            <img width="20" height="20" style="margin-top: -5px;" src="https://img.icons8.com/ios/50/calendar--v1.png" alt="calendar--v1" />
                        </button>
                    </div>
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
                            1 - 5 of 2
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
                <div class="mt-8 grid grid-cols-4 gap-4 pl-7 pr-7">
                    <!-- Column 1 -->
                    <div class="col-span-1 flex items-center justify-start">
                        <button class="bg-yellow-400 text-white py-1 px-4  hover:bg-yellow-600 transition sm:text-md">GENERATE REPORT</button>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-span-1 flex items-center justify-start">
                        <button class="bg-yellow-400 text-white py-1 px-4  hover:bg-yellow-600 transition sm:text-md">CREATE COMMITTEES FORM</button>
                    </div>

                    <!-- Column 3 -->
                    <div class="col-span-1 flex items-center justify-end">
                        <button class="bg-yellow-400 text-white py-1 px-4  hover:bg-yellow-600 transition sm:text-md">SEND TO COMMITTEE</button>
                    </div>

                    <!-- Column 4 -->
                    <div class="col-span-1 flex items-center justify-end">
                        <button class="bg-yellow-400 text-white py-1 px-4  hover:bg-yellow-600 transition sm:text-md">VIEW COMMITTEE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection