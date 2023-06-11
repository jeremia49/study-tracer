@php
    $activeMenu = 'SURVEY';
@endphp

@extends('admin.template')

@section('title')
    Edit Survey Questions | Study Tracer
@endsection


@section('content')
    <main>
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
            <div class="mb-4 col-span-full xl:mb-2">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    Edit Pertanyaan Survei
                </h1>
            </div>
            <!-- Right Content -->
            <div class="col-span-full">
                @if (session('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                @if (session('error'))
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-medium">{{ session('error') }}</span>
                    </div>
                @endif

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <form action="{{ route('admin.surveyquestionedit', ['id' => $survey->id]) }}" method="POST"
                                class="w-full" autocomplete="off" id="formSurveyQuestion">

                                @csrf
                                <div class="mt-2  mb-8">
                                    <label for="question"
                                        class="block mb-2 text-center  text-sm font-bold md:text-base text-gray-900 dark:text-white">Pilih
                                        Pertanyaan</label>
                                    <input type="text" id="inputquestion" class="style-input bg-gray-50"
                                        placeholder="Masukkan Pertanyaan" multiple="multiple" />

                                </div>
                                <ul class=" divide-y divide-gray-200 dark:divide-gray-700">
                                    <li class="pb-3 sm:pb-4 px-5">
                                        <div class="flex items-center space-x-4 w-full">
                                            <div
                                                class="flex-shrink-0 text-center text-sm font-bold text-gray-900 truncate dark:text-white mr-3">
                                                No.
                                            </div>
                                            <div
                                                class="flex-1 text-center text-sm font-bold text-gray-900 truncate dark:text-white mr-3">
                                                Pertanyaan
                                            </div>
                                            <div
                                                class="flex-shrink-0 text-center text-sm font-bold text-gray-900 truncate dark:text-white mr-3">
                                                Aksi
                                            </div>
                                        </div>
                                    </li>

                                    <div id="optionContainer"></div>

                                </ul>


                                <div class="flex justify-end w-full mt-6">
                                    <button id="submit" type="submit"
                                        class=" px-4 py-2 text-sm font-semibold md:text-base bg-emerald-500 hover:bg-emerald-700 rounded-md border-none text-white  inline-block btn-flash">
                                        Simpan
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </main>
@endsection


@push('scripts')
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="/js/sidebar.js"></script>
    <script src="/js/dark-mode.js"></script>
    <script>
        var SURVEY = {!! json_encode($survey, JSON_HEX_TAG) !!}
        var QUESTIONS = {!! json_encode($questions, JSON_HEX_TAG) !!}
    </script>
    @vite('resources/js/admineditsurveyquestion.js')
@endpush
