@extends('agent.agent_landingpage')
@section('agent')

<!-- Content -->

            <div class>
                <section class="container mx-auto px-7">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <!--insert table-->

                            <form method="POST" action="{{ route('agent.move-selected') }}">
                                @csrf
                             <table class="min-w-full leading-normal">
                                            <thead>
                                                <tr>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        check box
                                                    </th>
                                                    
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        #
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                       Student Name
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        <!-- Student No. --> Year
                                                    </th>
                                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left sm:text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                                                        <!-- Year --> Degree Program
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
                                                 @foreach($userData as $user)
                                                <tr>
                                                    <th class="flex items-center justify-center">
                                                        <input type="checkbox" id="select-{{ $loop->index }}" name="selected_users[]" value="{{ $user->id }}">
                                                    </th>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center justify-center">
                                                            <div class="mx-4 ">
                                                                <p class="text-gray-900 whitespace-no-wrap ">
                                                                   
                                                                {{ $loop->iteration }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                   {{ $user->name }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center justify-center">
                                                            <div class="ml-4 ">
                                                                <p class="text-yellow-400 whitespace-no-wrap">
                                                                    {{ $user->year_level }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center justify-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                                    {{ $user->course }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                     <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center justify-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap uppercase">
                                                                    {{ $user->phone }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center justify-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    {{ $user->current_gwa }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center justify-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                {{ $user->household_income }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <p class="text-gray-900 whitespace-no-wrap">
                                                                    
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
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
                                                </tr> -->
                                                <!-- <tr>
                                                    <td class="p-1 border-b border-gray-200 bg-white sm:text-xs uppercase text-center">
                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                            <span class="relative">APPROVED</span>
                                                        </span>
                                                    </td>
                                                </tr>  -->
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class=" flex justify-center items-center"> 
                                        <button type="submit" class="bg-blue-400 btn my-3">Move Selected Rows</button>
</div>
</form>

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