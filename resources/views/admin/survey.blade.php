@php
    $activeMenu = 'SURVEY';
@endphp

@extends('admin.template')

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

                <div
                    class="relative overflow-x-auto md:overflow-hidden shadow-md sm:rounded-lg bg-white px-4 dark:bg-gray-900 dark:shadow-slate-800 ">
                    <button type="button" data-tooltip-placement="right" data-tooltip-target="create-btn"
                        data-modal-target="newSurveyModal" data-modal-toggle="newSurveyModal"
                        class="float-right text-blue-700 border-none focus:outline-none hover:shadow-xl font-bold   rounded-lg text-sm px-5 py-2.5 mr-2 my-4 bg-white dark:bg-gray-900  dark:border-slate-600 dark:shadow-slate-700 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                    <div id="create-btn" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Buat Survey Baru
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <br>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-4">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="rounded-tl-lg px-6 py-3">
                                    Nama Survey
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Periode
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Banyak Pertanyaan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Limit per User
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class=" rounded-tr-lg  px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($surveys as $survey)
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
                                    {{ $survey->limit == '0' ? 'Unlimited' : $survey->limit }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $survey->is_active == '1' ? 'Aktif' : 'Tidak Aktif' }}
                                </td>
                                <td class="px-6 py-4 flex justify-start gap-x-2">
                                    <div>
                                        <a href="{{ route('admin.surveyedit', ['id' => $survey->id]) }}"
                                            data-tooltip-target="hp2" data-tooltip-trigger="hover"
                                            class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-blue-600 dark:text-blue-500 hover:underline">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div id="hp2" role="tooltip"
                                            class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Edit
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.surveyquestionedit', ['id' => $survey->id]) }}"
                                            data-tooltip-target="hp3" data-tooltip-trigger="hover"
                                            class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-emerald-600 dark:text-emerald-500 btn-edit-option">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                </svg>

                                            </span>
                                        </a>
                                        <div id="hp3" role="tooltip"
                                            class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Edit Questions
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.submissions', ['id' => $survey->id]) }}"
                                            data-tooltip-target="hp4" data-tooltip-trigger="hover"
                                            class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-emerald-600 dark:text-emerald-500 btn-edit-option">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19 20C19.5523 20 20 19.5523 20 19V11.2268L19.6644 11.5252L13.9931 16.5663C12.8564 17.5767 11.1436 17.5767 10.0069 16.5663L4.33564 11.5252L4 11.2268V19C4 19.5523 4.44772 20 5 20H19ZM6 10.3287L11.3356 15.0715C11.7145 15.4083 12.2855 15.4083 12.6644 15.0715L18 10.3287V7.33333V5.99999H16.2H7.8H6V7.33333V10.3287ZM20 6.86495L21.6402 8.23177C21.8682 8.42177 22 8.70322 22 8.99999V19C22 20.6568 20.6569 22 19 22H5C3.34315 22 2 20.6568 2 19V8.99999C2 8.70322 2.13182 8.42177 2.35982 8.23177L4 6.86495V4.99999C4 4.44771 4.44772 3.99999 5 3.99999H7.43795L10.0794 1.79875C11.192 0.871632 12.808 0.871632 13.9206 1.79875L16.562 3.99999H19C19.5523 3.99999 20 4.44771 20 4.99999V6.86495ZM13.438 3.99999L12.6402 3.33519C12.2693 3.02615 11.7307 3.02615 11.3598 3.33519L10.562 3.99999H13.438Z" />
                                                </svg>

                                            </span>
                                        </a>
                                        <div id="hp4" role="tooltip"
                                            class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Lihat Submission
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#"
                                            onclick="window.confirm('Apakah anda yakin ingin menghapus?')? window.location.href = '{{ route('admin.deleteSurvey', ['id' => $survey->id]) }}' : ''"
                                            data-tooltip-target="hp1" data-tooltip-trigger="hover"
                                            class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-red-600 dark:text-red-500 hover:underline">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div id="hp1" role="tooltip"
                                            class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Delete
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
                                        Belum ada data
                                    </th>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                </div>

            </div>
        </div>

        {{-- Modal Buat Survey Baru --}}
        <div id="newSurveyModal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative animate-fadeUp w-full max-w-2xl max-h-full">
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
                        <form action="{{ route('admin.createSurvey') }}" method="POST" class="w-full"
                            autocomplete="off">

                            @csrf

                            <div class="mt-2">
                                <label for="nama"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                    Survey</label>
                                <input type="text" id="nama" name="nama" class="style-input bg-gray-50 "
                                    placeholder="" required value="{{ old('nama') }}" />
                                @error('nama')
                                    <span class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <label for="periode"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun
                                    Survey</label>
                                <input type="number" id="periode" name="periode" class="style-input bg-gray-50"
                                    placeholder="" required value="{{ old('periode') }}" />
                                @error('periode')
                                    <span class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <label for="is_active"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                                    Survey</label>

                                <select id="is_active" name="is_active"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="-1" @selected(old('is_active') == '-1')>Pilih Status</option>
                                    <option value="1" @selected(old('is_active') == '1')>Aktif</option>
                                    <option value="0" @selected(old('is_active') == '0')>Tidak Aktif</option>
                                </select>

                                @error('is_active')
                                    <span class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <label for="limit"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Limit
                                    Pengisian</label>

                                <input type="number" id="limit" name="limit" class="style-input bg-gray-50"
                                    placeholder="" required value="{{ old('limit') }}" min="0" />

                                @error('limit')
                                    <span class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="flex justify-end w-full">
                                <button id="submit" type="submit" class="btn-submit">
                                    Save
                                </button>
                            </div>

                        </form>
                    </div>
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

    <script>
        var ERROR = false;
        @if ($errors->any())
            ERROR = true;
        @endif
    </script>

    @vite('resources/js/adminsurvey.js')
@endpush
