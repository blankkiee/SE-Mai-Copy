@extends('agent.agent_landingpage')
@section('agent')



<!-- Student Dialog -->
<div id="studentDialog" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
    <div class="flex items-center justify-center h-screen ">
        <div class="bg-white shadow-md rounded-md p-8 relative">
            <span class="cursor-pointer absolute top-2 right-5 text-gray-500" onclick="closeStudentDialog()">x</span>

            <div class="grid grid-cols-2 gap-4">
                <!-- Left Grid - Student Requirements -->
                <div class="grid grid-cols-1 rounded-md shadow-md">
                    <p class="text-yellow-400 font-bold text-md mx-3 mt-3">Student Requirements:</p>
                    <!-- sample table -->
                    <table class="table-auto mx-5 mt-2 mb-5">
                        <tr>
                            <td class="pr-4 font-semibold">FORM 137/138</td>
                            <td></td>
                            <td><target="_blank" button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md">View</button></td>
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
</script>

@endsection