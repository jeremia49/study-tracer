@php
    $activeMenu = 'QUESTION';
@endphp

@extends('admin.template')

@section('title')
    Questions | Study Tracer
@endsection


@section('content')
    <main>
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
            <div class="mb-4 col-span-full xl:mb-2">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    List Questions
                </h1>
            </div>
            <!-- Right Content -->
            <div class="col-span-full">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white px-4 dark:bg-gray-900 dark:shadow-slate-800 pb-8">
                    <button type="button" data-modal-target="newSurveyModal" data-modal-toggle="newSurveyModal"
                        class="float-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 my-4 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Buat
                            Survey Baru                        
                    </button>
                    <table class="w-full text-sm  text-left text-gray-500 dark:text-gray-400 rounded-xl ">
                        <thead class="text-xs  text-gray-900 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="rounded-tl-lg  px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class=" px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class=" px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="rounded-tr-lg px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Question With Option
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 flex justify-start gap-x-2">
                                    <div>
                                        <a href="#" data-tooltip-target="hp1" data-tooltip-trigger="hover"   class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-red-600 dark:text-red-500 hover:underline">
                                            <span >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div id="hp1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            delete
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" data-tooltip-target="hp2"  data-tooltip-trigger="hover"   class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-blue-600 dark:text-blue-500 hover:underline">
                                            <span >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div id="hp2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Edit
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" data-tooltip-target="hp3" data-tooltip-trigger="hover"  data-modal-target="optionModal" data-modal-toggle="optionModal"  class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-emerald-600 dark:text-emerald-500 ">
                                            <span >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                </svg>

                                            </span>
                                        </a>
                                        <div id="hp3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Edit Option
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                    
                                    
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4 flex justify-start gap-x-2">
                                    <div>
                                        <a href="#" data-tooltip-target="hp1" data-tooltip-trigger="hover"   class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-red-600 dark:text-red-500 hover:underline">
                                            <span >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div id="hp1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            delete
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" data-tooltip-target="hp2"  data-tooltip-trigger="hover"   class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-blue-600 dark:text-blue-500 hover:underline">
                                            <span >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div id="hp2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Edit
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                   
                                    
                                    
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class=" rounded-bl-lg px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4 flex justify-start gap-x-2">
                                    <div>
                                        <a href="#" data-tooltip-target="hp1" data-tooltip-trigger="hover"   class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-red-600 dark:text-red-500 hover:underline">
                                            <span >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div id="hp1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            delete
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" data-tooltip-target="hp2"  data-tooltip-trigger="hover"   class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-blue-600 dark:text-blue-500 hover:underline">
                                            <span >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div id="hp2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Edit
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Modal Buat Survey Baru --}}
        <div id="newSurveyModal" tabindex="-1" aria-hidden="true"
            class="fixed  top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative animate-fadeUp w-full max-w-6xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Buat Survey Baru
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="newSurveyModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Tutup</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                    <form>
                        <div class="mb-6">
                            <label for="question" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Question</label>
                            <input type="text" id="question" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500" placeholder="Your question" required>
                        </div>
                        <div class="mb-6">
                            <label for="options" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">Option</label>
                            <input type="text" id="options" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500" placeholder="Your option" required>
                        </div>
                        <div class="mb-6">
                            <label for="options_order" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">Option Order</label>
                            <input type="text" id="options_order" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500" placeholder="Your option order" required>
                        </div>
                        <div class="mb-6">
                            <label for="Type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                            <select name="type" id="Type"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500">
                                <option value="option" class="capitalize text-sm">Options</option>
                                <option value="text" class="capitalize text-sm">text</option>
                                <option value="rate" class="capitalize text-sm">rate</option>
                            </select>
                        </div>
                        <div class="flex flex-wrap">
                            <label class="w-full mb-5">Pertanyaan Ini Penting </label>
                            <div class="flex flex-wrap items-center mr-4">
                                <input id="red-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="red-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Required</label>
                            </div>
                            <div class="flex items-center mr-4">
                                <input id="not-required" type="radio" value="" name="colored-radio" class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="not-required" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Not Required</label>
                            </div>
                        </div>
                     
                    </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="newSurveyModal" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                            accept</button>
                        <button data-modal-hide="newSurveyModal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                    </div>
                </div>
                
            </div>
        </div>
        {{-- Modal Option --}}
        <div id="optionModal" tabindex="-1" aria-hidden="true"
            class="fixed  top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative animate-fadeUp w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Edit Option
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="optionModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Tutup</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">     
                        <form>
                        <div class="mb-6">
                            <label for="option1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Option</label>
                            <input type="text" id="option1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500" placeholder="Your Options" required>
                        </div>
                        <div class="mb-6">
                            <label for="option2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Second Option</label>
                            <input type="text" id="option2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500" placeholder="Your Options" required>
                        </div>
                        <div class="mb-6">
                            <label for="option3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Third Option</label>
                            <input type="text" id="option3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500" placeholder="Your Options" required>
                        </div>
                        <div class="mb-6">
                            <label for="option4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fourth Option</label>
                            <input type="text" id="option4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500" placeholder="Your Options" required>
                        </div>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="optionModal" type="button"
                            class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Kirim</button>
                        <button data-modal-hide="optionModal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                    </div>
                </div>
                
            </div>
        </div>

    </main>
@endsection


@push('scripts')
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="/js/sidebar.js"></script>
    <script src="/js/dark-mode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
@endpush
