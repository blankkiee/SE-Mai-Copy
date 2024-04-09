@extends('agent.agent_landingpage')
@section('agent')

    
        <div class>
            <section class="container mx-auto px-7">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <!-- insert table -->
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
      

@endsection
