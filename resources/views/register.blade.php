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
                    <div id="title-login">
                        <h2 class="font-semibold text-xl text-center uppercase lg:text-2xl">REGISTER AKUN</h2>
                        <h2 class="font-semibold text-xl text-center uppercase lg:text-2xl"><span
                                class="text-main tracking-wider">Tracer Study UNIMED</span> </h2>

                    </div>
                    <div id="form" class="md:w-[60%]">
                        <form action="" class="w-full">
                            <div class="mt-2">
                                <label for="Username" class="font-semibold text-smlg:text-medium  mb-2">NIM</label>
                                <input type="text" id="nim" name="nim"
                                    class="block w-full px-4 py-2 rounded-md bg-slate-200 border-none focus:border-none focus:ring-main focus:ring-2"
                                    placeholder="" required />
                                <span id="nimMessage" class="hidden text-pink-500 text-sm"></span>
                            </div>
                            <div class="mt-6">
                                <label for="fakultas"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fakultas</label>
                                <select required id="fakultas" name="fakultas"
                                    class="bg-slate-200  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Fakultas</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                </select>
                                <span id="passwordMessage" class="hidden text-pink-500  text-sm "></span>
                            </div>
                            <div class="mt-6">
                                <label for="prodi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program
                                    Studi</label>
                                <select required id="prodi" name="prodi"
                                    class="bg-slate-200  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Program Studi</option>
                                </select>
                                <span id="passwordMessage" class="hidden text-pink-500  text-sm "></span>
                            </div>
                            <div class="mt-6">
                                <label for="Username" class="font-semibold text-sm lg:text-medium mb-2">PASSWORD</label>
                                <input type="password" id="password" name="password"
                                    class="block px-4 py-2 w-full rounded-md bg-slate-200 border-none focus:border-none focus:ring-main focus:ring-2"
                                    placeholder="" required />
                                <span id="passwordMessage" class="hidden text-pink-500  text-sm "></span>
                            </div>
                            <div class="mt-6">
                                <label for="Username" class="font-semibold text-sm lg:text-medium mb-2">PASSWORD
                                    CONFIRMATION</label>
                                <input type="password" id="password" name="password_confirmation"
                                    class="block px-4 py-2 w-full rounded-md bg-slate-200 border-none focus:border-none focus:ring-main focus:ring-2"
                                    placeholder="" required />
                                <span id="passwordMessage" class="hidden text-pink-500  text-sm "></span>
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
