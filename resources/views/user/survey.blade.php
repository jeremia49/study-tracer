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
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    List Survei
                </h1>
            </div>
            <!-- Right Content -->
            <div class="col-span-full bg-white rounded-lg">
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

                <div class="relative overflow-x-auto md:overflow-hidden shadow-md sm:rounded-lg bg-white px-4 py-2 dark:bg-gray-900 dark:shadow-slate-800">
                    <br>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class=" rounded-tl-lg px-6 py-3">
                                    Nama Survey
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Periode
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Banyak Pertanyaan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class=" rounded-tr-lg px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($surveys as $survey)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $survey->nama }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $survey->periode }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ count(json_decode($survey->questions)) }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $survey->is_active == '1' ? 'Aktif' : 'Tidak Aktif' }}
                                        </td>
                                        <td class="px-6 py-4 flex justify-start gap-x-2">
                                            <div>
                                                <a href="{{ route('user.fillSurvey', ['id' => $survey->id]) }}"
                                                    data-tooltip-target="hp3" data-tooltip-trigger="hover"
                                                    class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-emerald-600 dark:text-emerald-500 btn-edit-option">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                        </svg>

                                                    </span>
                                                </a>
                                                <div id="hp3" role="tooltip"
                                                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Isi Survei
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            
                            @empty
                                <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center"
                                        colspan="5">
                                        Untuk saat ini, tidak ada survey yang tersedia
                                    </th>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                </div>

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
@endpush
