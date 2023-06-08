<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="font-myFont bg-slate-50">
    <header class="pt-5 animation-header  w-full ">
        <div class="container mx-auto  flex justify-between  bg-transparent items-center h-full ">
            <a href="" class="lg:w-[20%] font-semibold text-black tracking-wide text-2xl">Study Tracer</a>
            <div class="lg:w-[60%] lg:justify-self-end">
                <nav class=" hidden lg:block lg:animate-none  animate-slider ">
  
                    <ul class="lg:flex lg:justify-evenly w-full lg:items-center  ">
                        <li><a href="#home" class="text-sm md:text-md  font-semibold relative active-link ">Home</a></li>
                        <li><a href="#services" class="text-sm md:text-md  font-semibold relative active-link">About</a></li>
                        <li><a href="#whyus" class="text-sm md:text-md  font-semibold relative active-link">Why Us</a></li>
                        <li><a href="#faq" class="text-sm md:text-md  font-semibold relative active-link">Goals</a></li>
                    </ul>
                </nav>
                <button id="humberger" class="lg:hidden ">
                    <span class="humberger humberger-line"></span>
                    <span class="humberger humberger-line"></span>
                    <span class="humberger humberger-line"></span>
                </button>
            </div>
        </div>
    </header>
    <section id="home" class=" lg:h-[90vh] home-navbar-fixed  bg-gradient-to-b from-emerald-200 to-bg-slate-50 pt-[5.1rem] overflow-hidden">
        <div class="container mx-auto  lg:animate-buble lg:h-full">
            <div class="grid grid-cols-1 gap-y-4 md:grid-cols-2 items-center h-full ">
                <div class="lg:justify-self-start ">
                    <h1 class=" lg:text-first-size-h md:text-second-size-h text-first-size-h font-bold mb-8">Selamat Datang Di Website <span class="text-main">Tracer Study</span>  Universitas <span class="tracking-wider">UNIMED</span></h1>
                    <p class="text-first-size-t font-base md:text-lg lg:text-xl">Mari Sukseskan Pelaksaanaan Study Tracer Universitas Negeri Medan</p>
                    <a href="/login" class="btn mt-10 inline-block ">Isi Survey Sekarang</a>
                </div>
                <div class="md:self-center md:-right-[10%]  mt-8 relative lg:mt-0">
                    <div class="bg-image md:-bottom-[0%] z-10 relative  ">
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <section id="services" class=" lg:pb-32 pt-28 ">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-y-12 md:grid-cols-2">
                <div class="md:self-center">
                    <div class="lg:h-[50vh] bg-image2 relative after:bg-yellow-300  after:absolute after:-bottom-[5%] after:left-[5%] after:w-[26px]  after:h-[26px] after:content-[''] after:rounded-full  before:bg-rose-500  before:absolute before:-top-[5%] before:right-[16%] before:w-[15px]  before:h-[15px] before:content-[''] before:rounded-full">
                        <div class="lg:h-[50vh] lg:w-[50vh] absolute w-[30vh] h-[30vh] translate-x-[-55%] -bottom-[10%] left-[50%] right-[4rem] -z-10 bg-primary-bg-c rounded-full after:bg-green-400  after:absolute after:-top-14 after:-left-[30%] after:w-[70px] after:opacity-50 after:h-[70px] after:content-[''] after:rounded-full">
                        
                        </div>
                    </div>

                </div>
                <div class="mt-16 md:mt-0">
                    <span class="first-title-bg">About US</span>
                    <h1 class="text-second-size-h font-bold mb-8 mt-5">Apa Itu  Study Tracer ?</h1>
                    <p class="text-first-size-t text-justify font-normal">Tracer Study merupakan salah satu metode yang populer dan banyak digunakan oleh Perguruan Tinggi di Indonesia Untuk : </p>
                    <div class="grid grid-cols-[15%,85%] gap-y-4 py-4 justify-between items-center">
                        <span
                            class="bg-third-bg-c rounded-full h-8 w-8 text-primary-bg-c flex justify-center items-center"><i
                                class="fa-solid fa-check"></i></span>
                        <p class="text-first-size-t font-normal text-justify"> Memperoleh umpan balik dari alumni</p>
                        <span
                            class="bg-third-bg-c rounded-full h-8 w-8 text-primary-bg-c flex justify-center items-center"><i
                                class="fa-solid fa-check"></i></span>
                        <p class="text-first-size-t font-normal text-justify ">Memperbaikan  kualitas dan sistem pendidikan</p>
                        <span
                            class="bg-third-bg-c rounded-full h-8 w-8 text-primary-bg-c flex justify-center items-center"><i
                                class="fa-solid fa-check"></i></span>
                        <p class="text-first-size-t font-normal text-justify ">Melakukan pengembangan terhadap sistem pendidikan</p>   
                         
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="whyus" class="pt-24 pb-10  ">
        <!-- <span class="absolute top-0 -right-0 pattern1  w-30 h-40">a</span> -->
        <div class="container mx-auto  relative">
            <span class="absolute top-28 -left-10 -z-10"><img src="/img/pattern.png" class="w-4/12 h-4/12" alt=""></span>
            <div class=" grid grid-cols-1  gap-y-4">
                <div class="flex justify-center w-full flex-col items-center">
                    <span class=" font-semibold text-slate-500">Why US</span>
                    <h1 class="text-center text-[30px] font-semibold">Metode dan Konsep Tracer Study</h1>
                    <p class="text-center text-first-size-t mt-5">Sistem pelacakan alumni  yang berada di bawah koordinasi UNIMED dengan memanfaatkan data dari Universitas Negeri Medan. Study Tracer yang dilaksanakan menggunakan sistem survei online berbasis Lime Survey. Sistem ini bersifat open source sehingga dapat digunakan dengan gratis tanpa perlu mengembangkan sistem survei online secara independen. Secara umum, gambaran metode tracer study yang dilaksanakan di UNIMED yaitu </p>
                </div>
                <div class="lg:grid-cols-3 md:grid-cols-2 md:gap-x-4 grid grid-cols-1 gap-y-4  mt-4">
                    <div
                        class="px-4 py-4 box-content shadow-xl bg-white flex items-center flex-col rounded-md group hover:bg-emerald-400 cursor-pointer hover:border-0  transition-all duration-300">
                        <div>
                            <img src="/img/announcement.svg" class="w-20 h-20" alt="">
                        </div>
                        <h1 class="font-semibold text-second-size-h my-2 group-hover:text-white text-center">Pemberitahuan Informasi</h1>
                        <p class="text-first-size-t font-normal text-justify  group-hover:text-white">Tim Study Tracer mengirimkan email broadcast dan wa broadcast kepada lulusan berdasarkan data yang diperoleh dari data Direktorat Kependidikan  untuk berpartisipasi dalam tracer study online.</p>
                    </div>
                    <div
                    class="px-4 py-4 box-content shadow-xl bg-white flex items-center flex-col rounded-md group hover:bg-emerald-400 cursor-pointer hover:border-0  transition-all duration-300">
                        <div>
                            <img src="/img/message.svg" class="w-20 h-20" alt="">
                        </div>
                        <h1 class="font-semibold text-second-size-h my-2 group-hover:text-white text-center">Informasi Pesan</h1>
                        <p class="text-first-size-t font-normal text-justify  group-hover:text-white">Pengelola prodi akan menghubungi lulusan melalui beberapa media untuk memberikan jawaban atas butir pertanyaan tracer study.</p>
                    </div>
                    <div
                    class="px-4 py-4 box-content shadow-xl bg-white flex items-center flex-col rounded-md group hover:bg-emerald-400 cursor-pointer hover:border-0  transition-all duration-300">
                        <div>
                            <img src="/img/share.svg" class="w-20 h-20" alt="">
                        </div>
                        <h1 class="font-semibold text-second-size-h my-2 group-hover:text-white text-center">Sosialisasi Study Tracer</h1>
                        <p class="text-first-size-t font-normal text-justify  group-hover:text-white">Himpunan mahasiswa akan turut berperan aktif dengan mengirim broadcast message melalui media yang populer digunakan oleh alumni Seperti Instagram,WAG</p>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>
  
    <section id="faq" class="pt-28 pb-32 bg-white inset-10 shadow-inner selection:bg-main selection:text-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:gap-x-8 gap-y-8 md:grid-cols-2 justify-between">
                <div class="text-center">
                    <img src="/img/goal.svg" alt="">
                </div>
                <div class=" md:gap-x-4 grid grid-cols-1 items-center gap-y-4 md:gap-y-6 lg:gap-y-0">
                    <div>
                        <span class="first-title-bg">Our Goals</span>
                        <h1 class="text-first-size-h font-bold my-4 ">Penelusuran lulusan <span class="text-main">Tracer Study</span> ditujukan untuk </h1>
                    </div>
                    <div>
                        <button type="button" data-toggle="false" class="px-4  flex gap-x-4 moreinfo gap-2 items-center cursor-pointer border-gray-400 rounded-md hover:text-first-bg-c group font-bold  transition-all duration-300">
                            <span class="pointer-events-none order-2">Umpan Balik</span> 
                             <div class="pointer-events-none order-1 container-icons">
                                 <span><i class="fa-solid fa-angle-down cursor-pointer"></i></span>
                                 <span class="hidden"><i class="fa-solid fa-minus cursor-pointer"></i></span>
                             </div>
                        </button>
                        <p class="pl-12 data hidden text-justify py-4">Memperoleh umpan balik proses pembelajaran yang berlangsung selama masa perkuliahan sebagai bahan evaluasi untuk mengetahui relevansi antara pendidikan dengan pekerjaan</p>
                    </div>
                    <div>
                        <button type="button" data-toggle="false" class="px-4  flex gap-x-4 moreinfo items-center cursor-pointer border-gray-400 rounded-md hover:text-first-bg-c group font-bold  transition-all duration-300">
                            <span class="pointer-events-none order-2 text-left">Informasi Mahsiswa Lulusan</span> 
                             <div class="pointer-events-none order-1 container-icons">
                                 <span><i class="fa-solid fa-angle-down cursor-pointer"></i></span>
                                 <span class="hidden"><i class="fa-solid fa-minus cursor-pointer"></i></span>
                             </div>
                        </button>
                        <p class="pl-12 data hidden text-justify py-4">Memberikan informasi bagi mahasiswa, orang tua, dosen, administrasi pendidikan dan para pelaku pendidikan mengenai alumni/lulusan perguruan tinggi.</p>
                    </div>
                    <div>
                        <button type="button" data-toggle="false" class="px-4  flex gap-x-4 moreinfo gap-2 items-center cursor-pointer border-gray-400 rounded-md hover:text-first-bg-c group font-bold  transition-all duration-300">
                            <span class="pointer-events-none order-2">akreditasi</span> 
                             <div class="pointer-events-none order-1 container-icons">
                                 <span><i class="fa-solid fa-angle-down cursor-pointer"></i></span>
                                 <span class="hidden"><i class="fa-solid fa-minus cursor-pointer"></i></span>
                             </div>
                        </button>
                        <p class="pl-12 data hidden text-justify py-4">Membantu perguruan tinggi dalam proses akreditasi, baik nasional maupun internasional</p>
                    </div>
                    <div>
                        <button type="button" data-toggle="false" class="px-4  flex gap-x-4 moreinfo gap-2 items-center cursor-pointer border-gray-400 rounded-md hover:text-first-bg-c group font-bold  transition-all duration-300">
                            <span class="pointer-events-none order-2">jaminan Kualitas</span> 
                             <div class="pointer-events-none order-1 container-icons">
                                 <span><i class="fa-solid fa-angle-down cursor-pointer"></i></span>
                                 <span class="hidden"><i class="fa-solid fa-minus cursor-pointer"></i></span>
                             </div>
                        </button>
                        <p class="pl-12 data hidden text-justify py-4">Medapatkan umpan balik bagi jaminan kualitas perguruan tinggi dalam menentukan kebijakan pendidikan secara nasional</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <footer class="bg-first-bg-c text-white pt-6">
    <div class="container mx-auto ">
        <div class="lg:grid-cols-3 grid grid-cols-2  gap-y-4 gap-x-2 justify-between flex-wrap">
            <div class="flex flex-col justify-center items-center gap-y-4 self-center order-0 row-span-2">
                <div class="w-full flex gap-x-6 justify-center items-center">
                    <img src="/img/logo-unimed.png" class="w-20 h-20 md:w-24 md:h-24" alt="" srcset="">
                    <div>
                        <h1 class="font-bold text-md md:text-lg lg:text-xl tracking-wider capitalize">Study Tracer </h1>
                        <p class="text-xs md:sm">Universitas Negeri Medan</p>
                    </div>
                </div>
                <div class="flex items-center w-full justify-center ml-6 gap-x-4">
                    <span><i class="cursor-pointer text-sm md:text-md lg:text-xl fa-brands fa-facebook bg-first-bg-c p-2 rounded-full text-white"></i></span>
                    <span><i class="cursor-pointer text-sm md:text-md lg:text-xl fa-brands fa-github bg-first-bg-c p-2 rounded-full text-white"></i></span>
                    <span><i class="cursor-pointer text-sm md:text-md lg:text-xl fa-brands fa-instagram bg-first-bg-c p-2 rounded-full text-white"></i></span>
                </div>  
            </div>
            <div class="lg:justify-self-center justify-self-start order-2 ">
                <h1 class="text-md md:text-xl lg:text-2xl font-semibold mt-2 mb-4">Kontak Kami</h1>
                <ul class="flex flex-col gap-y-2">
                    <li><a href="">Unimed</a></li>
                    <li><a href="">Unimed Ilkom</a></li>
                </ul>
            </div>
            <div class="lg:justify-self-end justify-self-start order-1">
                <h1 class="text-md md:text-xl lg:text-2xl font-semibold mt-2 mb-4">Tautan Penting</h1>
                <ul class="flex flex-col gap-y-2">
                    <li><a href="">Isi Survey</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Home</a></li>
                </ul>
                
            </div>
            <div class="lg:col-span-3 col-span-2 text-center mb-4 mt-8 order-4 ">
                <p class="font-semibold "><span></span> &copy;Universitas Negeri Medan </p>
            </div>
        </div>
    </div>
    </footer>
</body>
<script src="https://kit.fontawesome.com/8f4661d17d.js" crossorigin="anonymous"></script>
<!-- <script src="assets/js/main.js"></script>
 -->
 @vite('resources/js/landingPage.js')
<script>
   
</script>

</html>