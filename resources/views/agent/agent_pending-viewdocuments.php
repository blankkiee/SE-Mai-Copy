
@extends('agent.agent_landingpage')
@section('agent')

  
          
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
                            1 - 7 of 2
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
            <!-- Student Dialog -->
            <div id="studentDialog" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
                <div class="flex items-center justify-center h-screen">
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
       



