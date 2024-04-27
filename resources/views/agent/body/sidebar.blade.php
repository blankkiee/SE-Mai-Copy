<!-- Sidebar and Content for lg screens and above -->

<div class="lg:flex lg:flex-row lg:h-full lg:w-full">
            <!-- Sidebar -->
            <div class="lg:w-1/5 flex flex-col w-full bg-black">
                <div class="flex flex-col justify-between bg-blue-800 h-full items-center space-y-4">
                    <div class="bg-blue-800 flex flex-col justify-around items-center h-full w-full space-y-3">
                        <h1 class="text-3xl font-bold pt-5 lg:p-0 text-white">PLM ADMIN</h1>
                  

                        <div class="lg:w-full sm:w-1/3 w-full">
                            <button type="button" id="candidateDropdown" class="flex justify-between items-center w-full px-4 py-2">
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512" class="sm:mr-4">
                                        <path fill="white" d="M64 480H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H288c-10.1 0-19.6-4.7-25.6-12.8L243.2 57.6C231.1 41.5 212.1 32 192 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64z" />
                                    </svg>
                                    <span class="text-white text-xl font-thin ml-2">Applicant Status</span>
                                </span>
                                <svg class="w-4 h-4" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div id="candidateDropdownContent" class="hidden origin-top-right ml-10 right-0 mt-2 w-60 rounded-md shadow-lg bg-blue-800 ring-1 ring-black ring-opacity-5">
                                <div class="py-1">
                                    <a href="{{ route('agent.lstofstdnts') }}" class="block px-4 py-2 text-sm text-white hover:bg-blue-700" onclick="changeContentbyDropdown('List of Students', 'btnListofStuds')">
                                        <li>List of Applicant</li>
                                    </a>
                                    <a href="{{ route('agent.pending') }}" class="block px-4 py-2 text-sm text-white hover:bg-blue-700" onclick="changeContentbyDropdown('Pending', 'btnPending')">
                                        <li>Pending</li>
                                    </a>
                                    <a href="{{ route('agent.completedreq') }}" class="block px-4 py-2 text-sm text-white hover:bg-blue-700" onclick="changeContentbyDropdown('Completed Requirements', 'btnCompletedReqs')">
                                        <li>Completed Requirements</li>
                                    </a>
                                    <a href="{{ route('agent.candidatestdnt') }}" class="block px-4 py-2 text-sm text-white hover:bg-blue-700" onclick="changeContentbyDropdown('Candidate Students', 'btnCandidateStuds')">
                                        <li>Applicants</li>
                                    </a>
                                    <a href="{{ route('agent.scholars') }}" class="block px-4 py-2 text-sm text-white hover:bg-blue-700" onclick="changeContentbyDropdown('Scholars', 'btnScholar')">
                                        <li>Scholars</li>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    </div>
                    <div class="flex items-end justify-center h-full lg:pb-20 bg-blue-800">
                        <a href="{{ route('agent.logout') }}" class="font-semibold flex items-center text-white mb-4 lg:mb:11 space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <path fill="white" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/>
                        </svg>
                        <span>(logout)</span>
                    </a>
                    </div>
                </div>
        
      