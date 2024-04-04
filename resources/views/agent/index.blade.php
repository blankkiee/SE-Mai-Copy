@extends('agent.agent_dashboard')
@section('agent')

<!-- // not working properly-> this 
//Its working perfectly fine without this but we may need this  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="bg-white mx-11 my-2 lg:mx-auto lg:my-auto h-5/6 lg:w-3/4 rounded-md shadow-2xl">
                <div class="p-5 grid grid-cols-5 gap-1 justify-center">
                    <button id="btnListofStuds" class="col-span-1 bg-yellow-100 p-2 rounded-md shadow-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('List of Students', this)">List of Students</button>
                    <button id="btnPending" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Pending', this)">Pending</button>
                    <button id="btnCompletedReqs" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Completed Requirements', this)">Completed Requirements</button>
                    <button id="btnCandidateStuds" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Candidate Students', this)">Candidate Students</button>
                    <button id="btnScholar" class="col-span-1 bg-white p-2 rounded-md text-yellow-400 text-center font-bold hover:bg-yellow-100 transition" onclick="changeContent('Scholars', this)">Scholars</button>
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
                                        <table class="min-w-full leading-normal">
                                            <thead>
                                                <tr>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        #
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Student Name
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Student No.
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Year
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider  whitespace-nowrap">
                                                        Degree Program
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Contact Number
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        G.W.A
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Parents' Income
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    Calinao, Mara
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-yellow-400 whitespace-no-wrap">
                                                                    2021-23456
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                                    THIRD
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                                    BSN
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    09181234567
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    1.5
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    60,000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">APPROVED</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">APPROVED</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">APPROVED</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">APPROVED</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">APPROVED</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">APPROVED</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">APPROVED</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">APPROVED</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">APPROVED</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            
                        </div>
                    </div>
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
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                                        <button onclick="showStudentDialog()" class="bg-yellow-400 text-white py-1 px-7 sm:text-xs hover:bg-yellow-600 transition flex items-center mx-auto">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                    <g transform="scale(10.66667,10.66667)">
                                                                        <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            View Files
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <button class="relative bg-yellow-400 text-white py-1 px-5 sm:text-xs hover:bg-yellow-600 transition flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                </g></g>
                                                            </svg>
                                                             View Files
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <button class="relative bg-yellow-400 text-white py-1 px-5 sm:text-xs hover:bg-yellow-600 transition flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                </g></g>
                                                            </svg>
                                                             View Files
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <button class="relative bg-yellow-400 text-white py-1 px-5 sm:text-xs hover:bg-yellow-600 transition flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                </g></g>
                                                            </svg>
                                                             View Files
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <button class="relative bg-yellow-400 text-white py-1 px-5 sm:text-xs hover:bg-yellow-600 transition flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                </g></g>
                                                            </svg>
                                                             View Files
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <button class="relative bg-yellow-400 text-white py-1 px-5 sm:text-xs hover:bg-yellow-600 transition flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                </g></g>
                                                            </svg>
                                                             View Files
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <button class="relative bg-yellow-400 text-white py-1 px-5 sm:text-xs hover:bg-yellow-600 transition flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                </g></g>
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
                            <div class = "grid grid-cols-2 mt-5 px-2 py-1 mx-7 bg-gray-200 h-8 w-auto rounded-md">
                                <div class = "cols-span-1">
                                    <p class="text-gray-500 sm:text-xs pt-1">
                                        1 - 7 of 2
                                    </p>
                                </div>
                                <div class="cols-span-1 flex items-center justify-end">
                                    <button class="mr-2">
                                        <img width="18" height="18" src="https://img.icons8.com/material-outlined/24/circled-left--v1.png" alt="circled-left--v1"/>
                                    </button>
                                    <p class="text-gray-500 sm:text-xs">
                                        1/2
                                    </p>
                                    <button class="ml-2">
                                        <img width="18" height="18" src="https://img.icons8.com/material-outlined/24/circled-right.png" alt="circled-right"/>
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
                                        <table class="min-w-full leading-normal">
                                            <thead>
                                                <tr>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        #
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Student Name
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Year
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider  whitespace-nowrap">
                                                        Degree Program
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Contact Number
                                                    </th>
                                                    <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        G.W.A
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Equivalent
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Parents' Income
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Equivalent
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Rank
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs whitespace-no-wrap">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs whitespace-no-wrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900">
                                                                    Calinao, Mara
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>                                                 
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs whitespace-no-wrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 uppercase">
                                                                    THIRD
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs whitespace-no-wrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 uppercase">
                                                                    BSN
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs whitespace-no-wrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900">
                                                                    09181234567
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs whitespace-no-wrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900p">
                                                                    1.5
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs whitespace-no-wrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900">
                                                                    2
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs whitespace-no-wrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900">
                                                                    60,000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs whitespace-no-wrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900">
                                                                    3
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs whitespace-no-wrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900">
                                                                    1.0
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="mx-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    1
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            <div class = "grid grid-cols-3 px-2 py-1 mx-7 bg-gray-200 h-8 w-auto rounded-md">
                                <div class = "cols-span-1">
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
                                        <img width="18" height="18" src="https://img.icons8.com/material-outlined/24/circled-left--v1.png" alt="circled-left--v1"/>
                                    </button>
                                    <p class="text-gray-500 sm:text-xs">
                                        1/2
                                    </p>
                                    <button class="ml-2">
                                        <img width="18" height="18" src="https://img.icons8.com/material-outlined/24/circled-right.png" alt="circled-right"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                                <span class="relative">APPROVED</span>
                                                            </span>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                                        <button class="bg-yellow-400 text-white py-1 px-7 sm:text-xs hover:bg-yellow-600 transition flex items-center mx-auto">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                </g></g>
                                                            </svg>
                                                             View Files
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <button class="relative bg-yellow-400 text-white py-1 px-5 sm:text-xs hover:bg-yellow-600 transition flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                </g></g>
                                                            </svg>
                                                             View Files
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <button class="relative bg-yellow-400 text-white py-1 px-5 sm:text-xs hover:bg-yellow-600 transition flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                </g></g>
                                                            </svg>
                                                             View Files
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <button class="relative bg-yellow-400 text-white py-1 px-5 sm:text-xs hover:bg-yellow-600 transition flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                </g></g>
                                                            </svg>
                                                             View Files
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <button class="relative bg-yellow-400 text-white py-1 px-5 sm:text-xs hover:bg-yellow-600 transition flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                                                style="fill:#000000;" class="pr-1">
                                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" 
                                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
                                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                <path d="M4,4c-1.09425,0 -2,0.90575 -2,2v12c0,1.09426 0.90575,2 2,2h16c1.09426,0 2,-0.90574 2,-2v-10c0,-1.09425 -0.90574,-2 -2,-2h-8l-2,-2zM4,6h5.17188l2,2h8.82813v10h-16z"></path>
                                                                </g></g>
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
                            <div class = "grid grid-cols-2 mt-5 px-2 py-1 mx-7 bg-gray-200 h-8 w-auto rounded-md">
                                <div class = "cols-span-1">
                                    <p class="text-gray-500 sm:text-xs pt-1">
                                        1 - 5 of 2
                                    </p>
                                </div>
                                <div class="cols-span-1 flex items-center justify-end">
                                    <button class="mr-2">
                                        <img width="18" height="18" src="https://img.icons8.com/material-outlined/24/circled-left--v1.png" alt="circled-left--v1"/>
                                    </button>
                                    <p class="text-gray-500 sm:text-xs">
                                        1/2
                                    </p>
                                    <button class="ml-2">
                                        <img width="18" height="18" src="https://img.icons8.com/material-outlined/24/circled-right.png" alt="circled-right"/>
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
                                        <table class="min-w-full leading-normal">
                                            <thead>
                                                <tr>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        #
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Student Name
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Student No.
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Year
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider  whitespace-nowrap">
                                                        Degree Program
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        G.W.A
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        Status
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
                                                        <p class="text-yellow-400 whitespace-no-wrap">
                                                            2021-23456
                                                        </p>                                                            
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            THIRD
                                                            </p>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                                        <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                            BSN
                                                        </p>        
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs text-center">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            1.5
                                                        </p>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">SCHOLAR</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">SCHOLAR</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">SCHOLAR</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">SCHOLAR</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">SCHOLAR</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">SCHOLAR</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">SCHOLAR</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">SCHOLAR</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <tr>
                                                <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">SCHOLAR</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            
                        </div>
                    </div>
                </div>
            </div>


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

    <!-- script for when clicking an option from dropdown menu -->
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
            confirmationInput.value = '';  // Clear the text box
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

        // Add hover effect to the divs
        document.addEventListener('DOMContentLoaded', function() {
            var options = document.querySelectorAll('#approvalOptions div');
            options.forEach(optionDiv => {
                optionDiv.addEventListener('mouseover', function() {
                    optionDiv.classList.add('hover:bg-yellow-100');
                });

                optionDiv.addEventListener('mouseout', function() {
                    optionDiv.classList.remove('hover:bg-yellow-100');
                });
            });
        });
    </script>
 @endsection

