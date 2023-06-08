@php
    $activeMenu = 'SURVEY';
@endphp

@extends('user.template')

@section('title')
    Surveys | Study Tracer
@endsection



@section('content')
    <main>
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
            <div class="mb-4 col-span-full xl:mb-2">
                <h1 class="text-xl font-bold text-gray-900 sm:text-2xl lg:text-3xl dark:text-white text-center capitalize">
                    {{ $survey->nama }}
                </h1>
            </div>
            <!-- Right Content -->
            <div class="col-span-full">
                @if (session('success'))
                    <div class="p-4 mb-4 text-sm lg:text-md text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                @if (session('error'))
                    <div class="p-4 mb-4 text-sm lg:text-md text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-medium">{{ session('error') }}</span>
                    </div>
                @endif

                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">

                    <form action="{{ route('user.submitSurvey', ['id' => $survey->id]) }}" autocomplete="off" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 gap-6">

                            @forelse ($questions as $question)
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="{{ $question->id }}"
                                        class="block mb-2 text-sm lg:text-md md:text-md lg:text-lg font-medium text-gray-900 dark:text-white">{{ $question->question }}
                                        @if ($question->is_mandatory)
                                            <span class="text-rose-600">*</span>
                                        @endif
                                    </label>

                                    @if ($question->type == 'text')
                                        <div class="@if($question->is_mandatory) text-required @endif ">
                                            <input type="text" name="ans{{ $question->id }}" id="{{ $question->id }}"
                                                class="style-input bg-gray-50" placeholder=""
                                                @if ($question->is_mandatory) required @endif
                                                value="{{old($question->id)}}"
                                                />
                                        </div>
                                    @elseif($question->type == 'radio')
                                        <div class="@if($question->is_mandatory) radio-required @endif ">
                                            @forelse (json_decode($question->options) as $option)
                                                <div class="flex items-center mr-4">
                                                    <input id="{{ $question->id }}-{{$option}}" type="radio" value="{{$option}}" name="ans{{ $question->id }}"
                                                        class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                                                        @checked(old($question->id)==$option) @if($question->is_mandatory) required @endif >
                                                    <label for="{{ $question->id }}-{{$option}}"
                                                        class="ml-2 text-sm lg:text-md font-medium text-gray-900 dark:text-gray-300" >{{$option}}</label>
                                                </div>
                                            @empty
                                                <div class="flex items-center mr-4">
                                                    <div class="ml-2 text-sm lg:text-md mb-2 lg:text-md font-medium text-gray-900 dark:text-gray-300">
                                                        Tidak ada opsi tersedia
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                    @elseif($question->type == 'radioOthers')
                                        <div class="@if($question->is_mandatory) radioothers-required @endif ">
                                            @forelse (json_decode($question->options) as $option)
                                                <div class="flex items-center mr-4">
                                                    <input id="{{ $question->id }}-{{$option}}" type="radio" value="{{$option}}" name="ans{{ $question->id }}"
                                                        class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                                                        @checked(old($question->id)==$option) @if($question->is_mandatory) required @endif >
                                                    <label for="{{ $question->id }}-{{$option}}"
                                                        class="ml-2 text-sm lg:text-md font-medium text-gray-900 dark:text-gray-300" >{{$option}}</label>
                                                </div>
                                            @empty
                                                <div class="flex items-center mr-4">
                                                    <div class="ml-2 text-sm lg:text-md mb-2 font-medium text-gray-900 dark:text-gray-300">
                                                        Tidak ada opsi tersedia
                                                    </div>
                                                </div>
                                            @endforelse
                                            <div class="flex items-center ">
                                                <input id="{{ $question->id }}-extra" type="radio" value="" name="ans{{ $question->id }}"
                                                        class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                                                        @checked(old($question->id)==$option) @if($question->is_mandatory) required @endif >
                                                <label for="{{ $question->id }}-extra"
                                                    class="mx-2 text-sm lg:text-md font-medium text-gray-900 dark:text-gray-300">Lainnya :  </label>
                                                <input type="text"  id="{{ $question->id }}-extra"
                                                class="ml-2 style-input bg-gray-50 h-8 w-[90%]  md:w-[25%]" placeholder="" 
                                                value="{{old($question->id)}}"/>
                                            </div>
                                        </div>
                                    @elseif($question->type == 'checkbox')
                                        <div class="@if($question->is_mandatory) checkbox-required @endif ">
                                        @forelse (json_decode($question->options) as $option)
                                            <div class="flex items-center mr-4">
                                                <input id="{{ $question->id }}-{{$option}}" type="checkbox" value="{{$option}}" name="ans{{ $question->id }}[]"
                                                    class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                                                    @checked(old($question->id)==$option) 
                                                    >
                                                <label for="{{ $question->id }}-{{$option}}"
                                                    class="ml-2 text-sm lg:text-md font-medium text-gray-900 dark:text-gray-300" >{{$option}}</label>
                                            </div>
                                        @empty
                                            <div class="flex items-center mr-4">
                                                <div class="ml-2 text-sm lg:text-md mb-2 font-medium text-gray-900 dark:text-gray-300">
                                                    Tidak ada opsi tersedia
                                                </div>
                                            </div>
                                        @endforelse

                                        </div>
                                    @elseif($question->type == 'rate')
                                        <div class="flex flex-row @if($question->is_mandatory) rate-required @endif">
                                            @forelse (json_decode($question->options) as $option)
                                                <div class="flex items-center mr-4">
                                                    <input id="{{ $question->id }}-{{$option}}" type="radio" value="{{$option}}" name="ans{{ $question->id }}"
                                                        class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                                                        @checked(old($question->id)==$option) @if($question->is_mandatory) required @endif >
                                                    <label for="{{ $question->id }}-{{$option}}"
                                                        class="ml-2 text-sm lg:text-md font-medium text-gray-900 dark:text-gray-300" >{{$option}}</label>
                                                </div>
                                            @empty
                                                <div class="flex items-center mr-4">
                                                    <div class="ml-2 text-sm lg:text-md mb-2 font-medium text-gray-900 dark:text-gray-300">
                                                        Tidak ada opsi tersedia
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                    @endif

                                </div>
                            @empty
                                <div class="flex items-center mr-4">
                                    <div class="ml-2 text-sm lg:text-md font-medium text-gray-900 dark:text-gray-300">
                                        Belum ada pertanyaan untuk survey ini !
                                    </div>
                                </div>      
                            @endforelse
                    <div class="sm:col-full col-span-6 sm:col-span-3">
                        <button id="btnSubmit"
                            class="float-right text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm lg:text-md px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            type="submit">
                            Submit
                        </button>
                    </div>
                        </div>

                </div>
                
                </form>
            </div>
        </div>
    </main>
    @endsection


    @push('scripts')
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
        <script src="/js/sidebar.js"></script>
        <script src="/js/dark-mode.js"></script>

        @vite('resources/js/usersurvey.js')
    @endpush
