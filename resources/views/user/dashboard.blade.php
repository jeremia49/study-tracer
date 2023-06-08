@php
    $activeMenu = "DASHBOARD";
@endphp

@extends('user.template')

@section('title')
    Dashboard Responden | Study Tracer
@endsection


@section('content')
    <main>
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
            <div class="mb-4 col-span-full xl:mb-2">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    Dashboard Responden
                </h1>
            </div>
            <!-- Right Content -->
            <div class="col-span-full grid md:grid-cols-[25%,75%] mx-4 grid-cols-1 md:gap-x-4  gap-y-4 justify-between dark:text-white">
                <div class="w-full bg-white shadow-xl dark:text-white dark:bg-gray-700 rounded-lg flex flex-col justify-center items-center gap-y-4 py-10">
                    <div class="flex justify-center  w-full h-full"><img class="md:w-8/12  w-4/12" src="/img/userman.svg" alt=""></div>
                    <div class="text-center px-4">
                        <p class=" font-base text-md md:text-lg text-slate-500 dark:text-white">Hallo Selamat Datang User</p>
                        <p class=" font-base text-md md:text-lg  dark:text-white text-black"><span class="font-bold  ">{{ auth()->user()->nama }}</span></p>

                    </div>
                </div>
                <div class="w-full bg-white shadow-xl dark:text-white dark:bg-gray-700 py-4 flex items-center flex-col rounded-lg">
                    <h1 class="text-sm lg:text-lg text-center font-bold mt-2">Report Data</h1>
                    <div class=" w-[50vw] md:w-[40vw] lg:w-[30vw] xl:w-[20vw] chart-container"><canvas id="acquisitionsUser" ></canvas></div>
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
    <script>
         var dataCount = {!! json_encode($countData) !!};
        
    </script>
    @vite('resources/js/chartUser.js')
   
@endpush
