@php
    $activeMenu = 'ADMIN';
@endphp

@extends('admin.template')

@section('title')
    Admins | Study Tracer
@endsection


@section('content')
    <main>
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
            <div class="mb-4 col-span-full xl:mb-2">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    List Akun Admin
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

                    <br>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-4">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="rounded-tl-lg px-6 py-3">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    NIM
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Prodi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Role
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Pembuatan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <th scope="row">{{$loop->index + 1}}</th>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->nim }}
                                    </th>
                                    <th scope="row">
                                        {{ $user->nama }}
                                    </th>
                                    <th scope="row">
                                        {{ $user->prodi }}
                                    </th>
                                    <th scope="row">
                                        {{ $user->role }}
                                    </th>
                                    <th scope="row">
                                        {{ $user->created_at }}
                                    </th>
                                </tr>
                            @empty
                                <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center"
                                        colspan="6">
                                        Belum ada data
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
