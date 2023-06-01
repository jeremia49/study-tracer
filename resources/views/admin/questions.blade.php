@php
    $activeMenu = 'QUESTION';
@endphp

@extends('admin.template')

@section('title')
    Questions | Study Tracer
@endsection


@section('content')
    <main id="app">
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
            <div class="mb-4 col-span-full xl:mb-2">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    List Pertanyaan
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
                    class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white px-4 dark:bg-gray-900 dark:shadow-slate-800 pb-8">
                    <button type="button" data-modal-target="newQuestionModal" data-modal-toggle="newQuestionModal"
                        class="float-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 my-4 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Buat
                        Pertanyaan Baru
                    </button>
                    <table class="w-full text-sm  text-left text-gray-500 dark:text-gray-400 rounded-xl ">
                        <thead class="text-xs  text-gray-900 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="rounded-tl-lg  px-6 py-3">
                                    No.
                                </th>
                                <th scope="col" class=" px-6 py-3">
                                    Pertanyaan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tipe Pertanyaan
                                </th>
                                <th scope="col" class=" px-6 py-3">
                                    Wajib Diisi
                                </th>
                                <th scope="col" class="rounded-tr-lg px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($questions as $question)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->index + 1 }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $question->question }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $question->type }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $question->is_mandatory ? 'Ya' : 'Tidak' }}
                                    </td>
                                    <td class="px-6 py-4 flex justify-start gap-x-2">
                                        <div>
                                            <a href="{{route('admin.questionedit', ['id'=> $question->id])}}" data-tooltip-target="hp2" data-tooltip-trigger="hover"
                                                class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-blue-600 dark:text-blue-500 hover:underline">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5">
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
                                        @if ($question->type !== 'text')
                                            <div>
                                                <a href="#" 
                                                data-tooltip-target="hp3" data-tooltip-trigger="hover"
                                                    data-modal-target="optionModal" data-modal-toggle="optionModal"
                                                    data-id="{{$question->id}}"
                                                    class=" flex justify-center items-center w-9  h-9  font-medium   transition-all duration-300 bg-white dark:bg-gray-800  dark:border-slate-600 dark:shadow-slate-700 hover:shadow-lg box-border  rounded-lg text-emerald-600 dark:text-emerald-500 btn-edit-option"
                                                    >
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
                                                    Edit Options
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </div>
                                        @endif
                                        <div>
                                            <a href="#" onclick="window.confirm('Apakah anda yakin ingin menghapus?') ? window.location.href = '{{ route('admin.deleteQuestion', ['id' => $question->id]) }}' : ''"
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

        {{-- Modal Buat Pertanyaan Baru --}}
        <div id="newQuestionModal" tabindex="-1" aria-hidden="true"
            class="fixed  top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative animate-fadeUp w-full max-w-6xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Buat Pertanyaan Baru
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="newQuestionModal">
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
                    <form action="{{ route('admin.createQuestion') }}" method="POST" class="w-full" autocomplete="off">
                        <div class="p-6 space-y-2">
                            @csrf
                            <div class="mb-6">
                                <label for="question"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pertanyaan</label>
                                <input type="text" id="question"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-borderForm focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-borderForm dark:focus:border-blue-500" value="{{old('question')}}"
                                    placeholder="Your question" required name="question">
                                @error('question', 'createQuestion' )
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
                                    <option value="" class="capitalize text-sm" @selected(old('type')=="") >Pilih Tipe Pertanyaan</option>
                                    <option value="text" class="capitalize text-sm" @selected(old('type')=="text") >Text &#40; Isian &#41;</option>
                                    <option value="radio" class="capitalize text-sm" @selected(old('type')=="radio") >Radio &#40; Pilihan memilih 1 opsi
                                        &#41;</option>
                                    <option value="radioOthers" class="capitalize text-sm"  @selected(old('type')=="radioOthers")>Radio With Others &#40; Pilihan
                                        1 opsi w/ others &#41;</option>
                                    <option value="checkbox" class="capitalize text-sm"  @selected(old('type')=="checkbox")>Checkbox &#40; Pilihan multi opsi
                                        &#41;</option>
                                    <option value="rate" class="capitalize text-sm"  @selected(old('type')=="rate")>Rating &#40; Rating &#41;</option>

                                </select>
                                @error('type', 'createQuestion' )
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
                                        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @checked(old('is_mandatory')=="1")>
                                    <label for="red-radio"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ya</label>
                                </div>
                                <div class="flex items-center mr-4">
                                    <input id="not-required" type="radio" value="0" name="is_mandatory"
                                        class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @checked(old('is_mandatory')=="0")>
                                    <label for="not-required"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300" >Tidak</label>
                                </div>
                                @error('is_mandatory', 'createQuestion' )
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
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                            <button data-modal-hide="newQuestionModal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                        </div>
                    </form>
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
                            Edit Opsi
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
                        <form id="optionsEditForm" method="POST" action="{{route('admin.editOptions')}}" autocomplete="off">
                            <div id="optionContainer"></div>
                            @csrf
                            <input type="hidden" name="id" value="" id="idQuestion">
                        </form>
                        <button type="button"
                            class="text-right text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            id="addOptionButton">Tambah Opsi</button>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                            class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="btnupdateOptions">
                            Kirim</button>
                        <button data-modal-hide="optionModal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
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
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        var ERRORCREATEQUESTION = false;
        @if ($errors->createQuestion->any())
            ERRORCREATEQUESTION = true;
        @endif

        var QUESTIONS={!! json_encode($questions, JSON_HEX_TAG) !!}
    </script>
    @vite('resources/js/adminquestions.js')
@endpush
