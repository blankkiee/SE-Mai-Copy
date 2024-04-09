@extends('agent.agent_landingpage')
@section('agent')


     
            <div class>
                <section class="container mx-auto px-7">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <!-- insert table -->
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
      


@endsection