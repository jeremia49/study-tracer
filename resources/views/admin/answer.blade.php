@php
    $activeMenu = 'SURVEY';
@endphp

@extends('admin.template')

@section('title')
    Lihat Jawaban Surveys | Study Tracer
@endsection



@section('content')
    <main>
        <div class="grid items content-between grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
            <div class="mb-4 col-span-full xl:mb-2">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    {{ $survey->nama }}
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
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">

                    <form action="{{ route('user.submitSurvey', ['id' => $survey->id]) }}" autocomplete="off"
                        method="POST">
                        @csrf

                        <div class="grid grid-cols-1 gap-6">

                            @forelse ($questions as $question)
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="{{ $question->id }}"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $question->question }}
                                        @if ($question->is_mandatory)
                                            <span class="text-rose-600">*</span>
                                        @endif
                                    </label>

                                    @if ($question->type == 'text')
                                        <div class="@if ($question->is_mandatory) text-required @endif ">
                                            <input type="text" name="ans{{ $question->id }}" id="{{ $question->id }}"
                                                class="style-input bg-gray-50" placeholder=""
                                                @if ($question->is_mandatory) required @endif
                                                value="{{ $answers[$loop->index]?->content }}" />
                                        </div>
                                    @elseif($question->type == 'radio')
                                        <div
                                            class="@if ($question->is_mandatory) radio-required @endif gap-y-3 flex flex-col ">
                                            @forelse (json_decode($question->options) as $option)
                                                <div class="flex items-center mr-4">
                                                    <input id="{{ $question->id }}-{{ $option }}" type="radio"
                                                        value="{{ $option }}" name="ans{{ $question->id }}"
                                                        class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                        @checked($answers[$loop->parent->index]?->content == $option) @if ($question->is_mandatory)
                                                    required
                                            @endif >
                                            <label for="{{ $question->id }}-{{ $option }}"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $option }}</label>
                                        </div>
                                    @empty
                                        <div class="flex items-center mr-4">
                                            <div class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                Tidak ada opsi tersedia
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            @elseif($question->type == 'radioOthers')
                                <div class="@if ($question->is_mandatory) radioothers-required @endif ">
                                    @forelse (json_decode($question->options) as $option)
                                        <div class="flex items-center mr-4">
                                            <input id="{{ $question->id }}-{{ $option }}" type="radio"
                                                value="{{ $option }}" name="ans{{ $question->id }}"
                                                class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                @checked($answers[$loop->parent->index]?->content == $option) @if ($question->is_mandatory)
                                            required
                                    @endif >
                                    <label for="{{ $question->id }}-{{ $option }}"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $option }}</label>
                                </div>
                            @empty
                                <div class="flex items-center mr-4">
                                    <div class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Tidak ada opsi tersedia
                                    </div>
                                </div>
                            @endforelse
                            <div class="flex items-center mr-4">
                                <input id="{{ $question->id }}-extra" type="radio"
                                    value="{{ $answers[$loop->index]?->content }}" name="ans{{ $question->id }}"
                                    class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    {{-- @checked($answers[$loop->index]?->content==$answers[$loop->index]?->content)  --}} @if ($question->is_mandatory) required @endif>
                                <label for="{{ $question->id }}-extra"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lainnya : </label>
                                <input type="text" id="{{ $question->id }}-extra"
                                    class="ml-2 style-input bg-gray-50 h-8" placeholder="" style="width:25% !important;"
                                    value="{{ $answers[$loop->index]?->content }}" />
                            </div>
                        </div>
                    @elseif($question->type == 'checkbox')
                        <div class="@if ($question->is_mandatory) checkbox-required @endif ">
                            @forelse (json_decode($question->options) as $option)
                                <div class="flex items-center mr-4">
                                    <input id="{{ $question->id }}-{{ $option }}" type="checkbox"
                                        value="{{ $option }}" name="ans{{ $question->id }}"
                                        class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        @checked($answers[$loop->parent->index] ? in_array($option, json_decode($answers[$loop->parent->index]->content)) : false)>
                                    <label for="{{ $question->id }}-{{ $option }}"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $option }}</label>
                                </div>
                            @empty
                                <div class="flex items-center mr-4">
                                    <div class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Tidak ada opsi tersedia
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    @elseif($question->type == 'rate')
                        <div class="flex flex-row @if ($question->is_mandatory) rate-required @endif">
                            @forelse (json_decode($question->options) as $option)
                                <div class="flex items-center mr-4">
                                    <input id="{{ $question->id }}-{{ $option }}" type="radio"
                                        value="{{ $option }}" name="ans{{ $question->id }}"
                                        class="w-4 h-4 text-slate-600 bg-gray-100 border-gray-300 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        @checked($answers[$loop->parent->index]?->content == $option) @if ($question->is_mandatory)
                                    required
                            @endif >
                            <label for="{{ $question->id }}-{{ $option }}"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $option }}</label>
                        </div>
                    @empty
                        <div class="flex items-center mr-4">
                            <div class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Tidak ada opsi tersedia
                            </div>
                        </div>
                        @endforelse
                </div>
                @endif

            </div>
        @empty
            <div class="flex items-center mr-4">
                <div class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Belum ada pertanyaan untuk survey ini !
                </div>
            </div>
            @endforelse

        </div>

        </div>
        <div class="sm:col-full">
        </div>
        </form>
        </div>
        </div>
    </main>
@endsection


@push('scripts')
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="/js/sidebar.js"></script>
    <script src="/js/dark-mode.js"></script>
@endpush
