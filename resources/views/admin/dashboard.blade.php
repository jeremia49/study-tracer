@php
    $activeMenu = "DASHBOARD";
@endphp

@extends('admin.template')

@section('title')
    Dashboard Admin | Study Tracer
@endsection


@section('content')
    <main>
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
            <div class="mb-4 col-span-full xl:mb-2">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    Dashboard Admin
                </h1>
            </div>
            <!-- Right Content -->
            <div class="col-span-full">
               
            </div>
        </div>
    </main>
@endsection


@push('scripts')
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- <script src="../node_modules/flowbite/dist/flowbite.min.js"></script> -->
    <!-- for online -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="/js/sidebar.js"></script>
    <script src="/js/dark-mode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
   
@endpush
