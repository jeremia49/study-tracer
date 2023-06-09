<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | TRACER STUDY </title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,400;1,500&display=swap"
        rel="stylesheet" />
</head>

<body class="font-main selection:bg-main selection:text-white">
    <section id="form">
        <div class="container-full w-full h-[100vh]">
            <div class="lg:grid lg:grid-cols-[45%,55%] lg:justify-center lg:h-[100vh] w-full">
                <div
                    class="w-full h-full lg:overflow-y-scroll scrollbar lg:pt-20 lg:h-[100vh] grid grid-cols-1 justify-center grid-rows-[10rem] lg:grid-rows-[15rem] pb-20 pt-10 box-border bg-page-login">
                    <div id="logo" class="flex justify-center">
                        <img src="/img/logo-unimed.png" class="h-32 md:h-40 lg:h-52" alt="" />
                    </div>
                    <h2 class="text-center text-2xl font-bold  lg:text-3xl">
                        Welcome To Tracer Study
                    </h2>
                    <div class="px-4 lg:px-8 mt-4">
                        <p class="text-center font-normal text-md lg:text-xl ">
                            Dalam rangka pelaksanaan Program Tracer Study, kami meminta kesediaan Bapak/ Ibu/Mas/Mbak
                            untuk mengisi survey/ kuesioner secara online pada form berikut.

                        </p>
                        <p class="text-center font-normal text-md lg:text-xl my-4">
                            Hasil Tracer Study akan digunakan untuk berbagai dokumen akreditasi (BAN-PT, AUN, ABET,
                            IABEE), SIP MONEV, laporan SPMI, World Class University, KONKIN DIKTI dan pemeringkatan
                            Perguruan Tinggi, selain itu juga untuk mengetahui relevansi pendidikan tinggi terhadap
                            kebutuhan dunia kerja, dan dapat digunakan sebagai evaluasi proses pendidikan di UNIMED.
                        </p>
                        <p class="text-center font-normal text-md lg:text-xl ">
                            Mengingat betapa pentingnya Hasil Tracer Study bagi kredibilitas UNIMED, kami berharap
                            Bapak/Ibu/Mas/Mbak bersedia meluangkan waktunya untuk mengisi kuesioner tersebut di atas.
                            Terima kasih sebelumnya atas kesediaan untuk mengisi survey ini.
                        </p>

                    </div>
                </div>
                <div class="w-full mt-14 pb-20 flex flex-col gap-y-8 justify-center items-center">

                    @if (session('success'))
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                            role="alert">
                            <span class="font-medium">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div id="title-login">
                        <h2 class="font-semibold text-xl text-center uppercase lg:text-2xl">LOGIN AKUN</h2>
                        <h2 class="font-semibold text-xl text-center uppercase lg:text-2xl"><span
                                class="text-main tracking-wider">Tracer Study UNIMED</span> </h2>

                    </div>
                    <div id="form" class="md:w-[60%]">
                        <form action="{{ route('login') }}" method="POST" class="w-full" autocomplete="off">
                            @csrf
                            <div class="mt-2">
                                <label for="nim" class="font-semibold text-smlg:text-medium  mb-2">NIM</label>
                                <input type="text" id="nim" name="nim"
                                    class="block w-full px-4 py-2 rounded-md bg-slate-200 border-none focus:border-none focus:ring-main focus:ring-2"
                                    placeholder="" />
                            </div>
                            <div class="mt-6">
                                <label for="password" class="font-semibold text-sm lg:text-medium mb-2">Password</label>
                                <input type="password" id="password" name="password"
                                    class="block px-4 py-2 w-full rounded-md bg-slate-200 border-none focus:border-none focus:ring-main focus:ring-2"
                                    placeholder="" />
                                @error('password')
                                    <span id="passwordMessage" class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            @error('nim')
                                <span id="nimMessage" class="text-pink-500 text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                            @error('password')
                                <span id="passwordMessage" class="text-pink-500 text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                            <button id="submit" type="submit"
                                class="px-4 py-2  mt-8 w-full text-base font-semibold  bg-emerald-400 rounded-md border-none text-white btn-flash">
                                Login
                            </button>
                        </form>
                        <br>
                        <p>Belum punya akun ? <a class="underline" href="/register">REGISTER</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
