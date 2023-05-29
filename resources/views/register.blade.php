<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register | TRACER STUDY </title>
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
                        <p class="text-center font-normal text-base lg:text-md">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias,
                            est deleniti repellat quos sunt minus consequatur commodi
                            distinctio iusto numquam? Consectetur facilis minima, quaerat
                            quod, libero similique expedita quisquam odit debitis ipsam ad
                            quidem. Sapiente deleniti fugiat nulla magni totam. Optio atque
                            libero eos quod facere vero iste maxime a?
                        </p>
                        <p class="text-center font-normal text-base lg:text-md mt-2">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias,
                            est deleniti repellat quos sunt minus consequatur commodi
                            distinctio iusto numquam? Consectetur facilis minima, quaerat
                            quod, libero similique expedita quisquam odit debitis ipsam ad
                            quidem. Sapiente deleniti fugiat nulla magni totam. Optio atque
                            libero eos quod facere vero iste maxime a?
                        </p>
                        <p class="text-center font-normal text-base lg:text-md mt-2">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias,
                            est deleniti repellat quos sunt minus consequatur commodi
                            distinctio iusto numquam? Consectetur facilis minima, quaerat
                            quod, libero similique expedita quisquam odit debitis ipsam ad
                            quidem. Sapiente deleniti fugiat nulla magni totam. Optio atque
                            libero eos quod facere vero iste maxime a?
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
                        <h2 class="font-semibold text-xl text-center uppercase lg:text-2xl">REGISTER AKUN</h2>
                        <h2 class="font-semibold text-xl text-center uppercase lg:text-2xl"><span
                                class="text-main tracking-wider">Tracer Study UNIMED</span> </h2>

                    </div>
                    <div id="form" class="md:w-[60%]">
                        <form action="{{ route('register') }}" method="POST" class="w-full" autocomplete="off">
                            @csrf
                            <div class="mt-2">
                                <label for="nim" class="font-semibold text-sm lg:text-medium mb-2">NIM</label>
                                <input type="number" id="nim" name="nim"
                                    class="block w-full px-4 py-2 rounded-md bg-slate-200 border-none focus:border-none focus:ring-main focus:ring-2"
                                    placeholder="" required value="{{ old('nim') }}" />
                                @error('nim')
                                    <span class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label for="nama" class="font-semibold text-sm lg:text-medium mb-2">NAMA
                                    LENGKAP</label>
                                <input type="text" id="nama" name="nama"
                                    class="block w-full px-4 py-2 rounded-md bg-slate-200 border-none focus:border-none focus:ring-main focus:ring-2"
                                    placeholder="" required value="{{ old('nama') }}" />
                                @error('nama')
                                    <span class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label for="fakultas"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fakultas</label>
                                <select required id="fakultas" name="fakultas"
                                    class="bg-slate-200  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="0" {{ old('fakultas') == "0" ? 'selected' : ''}}>Pilih Fakultas</option>
                                    <option value="fmipa" {{ old('fakultas') == "fmipa" ? 'selected' : ''}}>FMIPA</option>
                                </select>
                                @error('fakultas')
                                    <span class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label for="jurusan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
                                <select required id="jurusan" name="jurusan"
                                    class="bg-slate-200  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="0" {{ old('jurusan') == "0" ? 'selected' : ''}} >Pilih Jurusan</option>
                                    <option value="matematika" {{ old('jurusan') == "matematika" ? 'selected' : ''}} >Matematika</option>
                                </select>
                                @error('jurusan')
                                    <span class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label for="prodi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program
                                    Studi</label>
                                <select required id="prodi" name="prodi"
                                    class="bg-slate-200  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="0" {{ old('prodi') == "0" ? 'selected' : ''}}>Pilih Program Studi</option>
                                    <option value="ilmu komputer" {{ old('prodi') == "ilmu komputer" ? 'selected' : ''}} >Ilmu Komputer</option>
                                </select>
                                @error('prodi')
                                    <span class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label for="password" class="font-semibold text-sm lg:text-medium mb-2">PASSWORD</label>
                                <input type="password" id="password" name="password"
                                    class="block px-4 py-2 w-full rounded-md bg-slate-200 border-none focus:border-none focus:ring-main focus:ring-2"
                                    placeholder="" required />
                                @error('password')
                                    <span class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label for="password_confirmation"
                                    class="font-semibold text-sm lg:text-medium mb-2">PASSWORD
                                    CONFIRMATION</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="block px-4 py-2 w-full rounded-md bg-slate-200 border-none focus:border-none focus:ring-main focus:ring-2"
                                    placeholder="" required />
                                @error('password_confirmation')
                                    <span class="text-pink-500 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <button id="submit" type="submit"
                                class="px-4 py-2  mt-8 w-full text-base font-semibold  bg-emerald-400 rounded-md border-none text-white btn-flash">
                                Register
                            </button>
                        </form>
                        <br>
                        <p>Sudah punya akun ? <a class="underline" href="/login">LOGIN</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
