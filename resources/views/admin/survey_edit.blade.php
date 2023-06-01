@php
    $activeMenu = 'SURVEY';
@endphp

@extends('admin.template')

@section('title')
    Edit Survey | Study Tracer
@endsection


@section('content')
    <main>
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
            <div class="mb-4 col-span-full xl:mb-2">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    Edit Survey {{$survey->nama}}
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


                    <br>
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <form action="{{ route('admin.surveyedit', ['id' => $survey->id]) }}" method="POST" class="w-full"
                                autocomplete="off">

                                @csrf

                                <div class="mt-2">
                                    <label for="nama"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Survey</label>
                                    <input type="text" id="nama" name="nama" class="style-input bg-gray-50"
                                        placeholder="" required value="{{$survey->nama}}" />
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
                                        placeholder="" required value="{{$survey->periode}}" />
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
                                        <option value="-1" @selected($survey->is_active == '-1')>Pilih Status</option>
                                        <option value="1" @selected($survey->is_active == '1')>Aktif</option>
                                        <option value="0" @selected($survey->is_active == '0')>Tidak Aktif</option>
                                    </select>

                                    @error('is_active')
                                        <span class="text-pink-500 text-sm">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>


                                <button id="submit" type="submit"
                                    class="px-4 py-2  mt-8 w-full text-base font-semibold  bg-emerald-400 rounded-md border-none text-white btn-flash">
                                    Submit
                                </button>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
    <script src="/js/sidebar.js"></script>
    <script src="/js/dark-mode.js"></script>
@endpush
