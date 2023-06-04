@php
    $activeMenu = 'SURVEY';
@endphp

@extends('admin.template')

@section('title')
    Edit Pertanyaan | Study Tracer
@endsection


@section('content')
    <main>
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
            <div class="mb-4 col-span-full xl:mb-2">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    Edit Pertanyaan
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
                            <form action="{{ route('admin.editQuestion', ['id'=> $question->id]) }}" method="POST" class="w-full" autocomplete="off">
                                <div class="p-6 space-y-2">
                                    @csrf
                                    <div class="mb-6">
                                        <label for="question"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pertanyaan</label>
                                        <input type="text" id="question"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500" value="{{old('question', $question->question)}}"
                                            placeholder="Your question" required name="question">
                                        @error('question' )
                                            <span class="text-pink-500 text-sm">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <label for="type"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe
                                            Pertanyaan</label>
                                        <select name="type" id="type"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500" 
                                            >
                                            <option value="" class="capitalize text-sm" @selected(old('type', $question->type)=="") >Pilih Tipe Pertanyaan</option>
                                            <option value="text" class="capitalize text-sm" @selected(old('type', $question->type)=="text") >Text &#40; Isian &#41;</option>
                                            <option value="radio" class="capitalize text-sm" @selected(old('type', $question->type)=="radio") >Radio &#40; Pilihan memilih 1 opsi
                                                &#41;</option>
                                            <option value="radioOthers" class="capitalize text-sm"  @selected(old('type', $question->type)=="radioOthers")>Radio With Others &#40; Pilihan
                                                1 opsi w/ others &#41;</option>
                                            <option value="checkbox" class="capitalize text-sm"  @selected(old('type', $question->type)=="checkbox")>Checkbox &#40; Pilihan multi opsi
                                                &#41;</option>
                                            <option value="rate" class="capitalize text-sm"  @selected(old('type', $question->type)=="rate")>Rating &#40; Rating &#41;</option>
        
                                        </select>
                                        @error('type')
                                            <span class="text-pink-500 text-sm">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
        
                                    <div class="flex flex-wrap">
                                        <label class="w-full mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apakah
                                            wajib diisi ?</label>
                                        <div class="flex flex-wrap items-center mr-4">
                                            <input id="red-radio" type="radio" value="1" name="is_mandatory"
                                                class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @checked(old('is_mandatory', $question->is_mandatory)=="1")>
                                            <label for="red-radio"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ya</label>
                                        </div>
                                        <div class="flex items-center mr-4">
                                            <input id="not-required" type="radio" value="0" name="is_mandatory"
                                                class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @checked(old('is_mandatory', $question->is_mandatory)=="0")>
                                            <label for="not-required"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300" >Tidak</label>
                                        </div>
                                        @error('is_mandatory' )
                                            <span class="text-pink-500 text-sm">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
        
        
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button type="submit"
                                        class="btn-submit-edit">Kirim</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
    <script src="/js/sidebar.js"></script>
    <script src="/js/dark-mode.js"></script>
@endpush
