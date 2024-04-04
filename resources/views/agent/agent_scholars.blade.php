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
        <div id="scholarsContent" style="display: none;">
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
                <div class="grid grid-cols-3 px-2 py-1 mx-7 bg-gray-200 h-8 w-auto rounded-md">
                    <div class="cols-span-1">
                        <p class="text-gray-500 sm:text-xs pt-1">
                            1 - 9 of 2
                        </p>
                    </div>
                    <div class="cols-span-1 flex items-center justify-center">
                        <button class="relative bg-red-500 text-white font-bold py-1 px-5 sm:text-xs hover:bg-red-600 transition flex items-center">
                            DELETE RECORDS
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
</div>

@endsection