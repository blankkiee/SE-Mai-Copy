
<nav class="bg-white flex flex-col items-center justify-around py-0 lg:flex lg:flex-row lg:items-center lg:justify-around lg:py-4">
        <div class="flex items-center max-w-lg">
            <img src="../upload/plmlogo-header.png" alt="" class="mr-4 max-h-20">
        </div>
         <!-- Search Bar -->
        <div class="relative py-2 w-full sm:w-96 lg:ml-32">
            <div class="relative">
                <svg
                    xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                    class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-500">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                    </svg>

                <input type="text" placeholder="Search"
                    class="bg-gray-200 pl-10 w-full lg:w-96 h-11 px-5 rounded-md text-sm focus:outline-none"/>
            </div>
            <button type="s ubmit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                <i class="fas fa-search"></i>
            </button>
        </div>

            

        <div class="flex flex-row justify-center items-center space-x-4"> 
            <svg xmlns="http://www.w3.org/2000/svg" height="4em" viewBox="0 0 448 512">
                
                <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                <span> <a href="{{ route('student.profile') }}">PROFILE</a></span>
           <button type="button" id="profileDropdown" class="flex justify-between items-center w-full px-4 py-2"> 
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
            </button>
        </div>
        <!-- Content -->
        <div id="profileDropdownContent" class="hidden lg:absolute lg:mr-11 lg:right-0 lg:top-20 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
            <div class="py-1">
                <a href="{{ route('student.change.password') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><li>Change Password</li></a>
                <a href="{{ route('student.logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><li>Log out</li></a>
            </div>
        </div>
    </nav>