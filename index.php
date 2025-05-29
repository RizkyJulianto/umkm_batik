<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/tailwindcss/output.css">

    <!-- Flowbite -->
    <link rel="stylesheet" href="libs/flowbite/flowbite.min.css">

    <!-- Font -->
    <link rel="stylesheet" href="libs/font/font.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Batik Indonesia</title>
</head>

<body class="font-fira h-[5000px]">
    <!-- Header Section -->
    <header class="header relative" id="beranda">
        <nav class="bg-transparant py-5 md:px-8 lg:px-14 min-[420px]:px-4 ">
            <div class="flex flex-wrap justify-between items-center mx-auto  py-4 px-6  lg:px-4 fixed top-4 lg:top-0 w-[92%]   z-50" id="navbar">
                <a href="#" class="flex items-center space-x-3  lg:text-2xl md:text-3xl text-2xl font-bold whitespace-nowrap text-black/70 font-fira">
                    Batik<span class="text-primary"> Indonesia</span>
                </a>
                <div class=" md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col  mt-4 md:mt-0 rounded-lg  absolute lg:static lg:flex-row  max-sm:left-5 md:left-8  -top-96 lg:top-0 lg:left-0 max-lg:bg-secondary max-lg:border-gray-100 w-[90%] lg:w-full transition-all duration-500" id="navigation">
                        <li>
                            <a href="#beranda" class="block py-5 lg:py-0 lg:px-2 px-5  lg:text-base  border-b border-gray-100 lg:border-0 min-[420px]:text-white md:text-white lg:text-black/70 hover:text-primary transition-all duration-300 max-lg:text-xl" aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <a href="#tentang" class="block py-5 lg:py-0 lg:px-2 px-5  lg:text-base  border-b border-gray-100 lg:border-0 min-[420px]:text-white md:text-white lg:text-black/70 hover:text-primary transition-all duration-300 max-lg:text-xl">Tentang</a>
                        </li>
                        <li>
                            <a href="#produk" class="block py-5 lg:py-0 lg:px-2 px-5  lg:text-base  border-b border-gray-100 lg:border-0 min-[420px]:text-white md:text-white lg:text-black/70  hover:text-primary transition-all duration-300 max-lg:text-xl">Produk</a>
                        </li>
                        <li>
                            <a href="#" class="block py-5 lg:py-0 lg:px-2 px-5  lg:text-base  border-b border-gray-100 lg:border-0 min-[420px]:text-white md:text-white lg:text-black/70 hover:text-primary transition-all duration-300 max-lg:text-xl">Testimoni</a>
                        </li>
                    </ul>
                </div>
                <div class="button-hamburger relative flex items-center lg:hidden ml-2">
                    <button id="hamburger" name="hamburger" type="button" class="block">
                        <span class="hamburger-bar bg-primary block w-[30px] h-[2px] my-2 rounded-md origin-top-left transition-all duration-500"></span>
                        <span class="hamburger-bar bg-primary block w-[30px] h-[2px] my-2 ml-2 rounded-md transition-all duration-500"></span>
                        <span class="hamburger-bar bg-primary block w-[30px] h-[2px] my-2 rounded-md origin-bottom-left transition-all duration-500"></span>
                    </button>

                </div>
        </nav>

    </header>

    <!-- Header Section End -->

    <!-- Beranda Section -->
    <div class="beranda h-screen">
        <!-- Backround -->
        <img src="assets/images/beranda-bg.png" alt="" class="absolute -z-10 top-0 w-screen h-screen object-cover">
        <div class="background-overlay bg-white/80 w-full h-screen absolute top-0 -z-9 "></div>
        <div class="beranda-section-box-text text-center lg:mt-40 mt-24 ">
            <div class="beranda-section-text-title ">
                <h2 class="font-bold text-secondary max-lg:text-4xl max-md:text-2xl lg:text-5xl">
                    Batik <span class="text-primary">Indonesia</span> Membentuk Pola <br>
                    Melestarikan <span class="text-primary">Budaya</span>
                </h2>
            </div>
            <div class="beranda-section-text-subtitle mt-4 ">
                <p class="lg:text-[20px] text-secondary md:text-base text-sm font-[400] text-center lg:max-w-[720px] md:max-w-[630px] max-w-[370px] mx-auto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid architecto provident perspiciatis ipsa aut repellat quis cumque voluptatibus veniam inventore.
                </p>
            </div>
            <div class="beranda-section-cta mt-6">
                <a href="" class="bg-primary hover:bg-amber-500 transition-all duration-500 text-white py-3 px-6 inline-block  md:w-[240px] rounded-[10px] font-medium md:text-lg text-base">Lihat Produk</a>
            </div>
        </div>

        <!-- Gradient -->
        <div class="absolute h-20 bg-linear-to-t from-white to-white/5  w-full bottom-0 -z-10"></div>
    </div>

    <!-- Beranda Section End -->

    <!-- Tentang Section -->
    <div class="tentang mt-12 lg:mt-2 px-30 relative scroll-mt-28 " id="tentang">
        <div class="tentang-container-content   flex flex-col-reverse lg:flex-row justify-between items-center">
            <div class="tentang-left-col w-[350px] md:w-auto md:max-w-[500px]">
                <div class="judul">
                    <h2 class="text-[28px] md:text-4xl font-bold text-secondary">Mengapa Batik <span class="text-primary">Indonesia ?</span></h2>
                </div>
                <div class="deskripsi mt-4 text-justify">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt justo at rhoncus convallis. Maecenas non tempor sapien, sed fermentum nunc. Sed mattis, nibh vitae mollis facilisis, ex magna cursus neque, sed dapibus lorem tortor id ex. Curabitur vehicula velit eget tincidunt feugiat. Nulla facilisi. In auctor sem vitae odio ornare commodo quis ac enim. Nulla eu cursus sapien. Praesent vitae malesuada magna. Fusce lacinia arcu eros, sit amet hendrerit metus pretium non. </p>
                </div>
                <div class="keunggulan mt-5 flex gap-4 flex-wrap">
                    <div class="card flex items-center gap-x-3 text-md text-white w-full lg:w-auto bg-secondary py-3 px-5 rounded-[10px] ">
                        <div class="icon">
                            <div class="fas fa-palette"></div>
                        </div>
                        <div class="judul">
                            <span>Motif Beragam</span>
                        </div>
                    </div>
                    <div class="card flex  items-center gap-x-3 w-full lg:w-auto text-md text-white bg-primary py-3 px-5 rounded-[10px] ">
                        <div class="icon">
                            <div class="fas fa-shirt"></div>
                        </div>
                        <div class="judul">
                            <span>Bahan Berkualitas</span>
                        </div>
                    </div>
                    <div class="card flex  items-center gap-x-3 w-full lg:w-auto  text-md text-white bg-secondary py-3 px-5 rounded-[10px] ">
                        <div class="icon">
                            <div class="fas fa-home"></div>
                        </div>
                        <div class="judul">
                            <span>Buatan Tangan Lokal</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tentang-right-col max-lg:relative w-full lg:w-auto  h-[350px] md:h-[500px] lg:h-[400px]">
                <img src="assets/images/batik-1.png" alt="" class="md:w-[270px] h-[150px] md:h-[232px]  rounded-[20px] absolute max-md:right-5 md:max-lg:left-30 lg:right-70 lg:-top-10">
                <img src="assets/images/batik-2.jpg" alt="" class="md:w-[270px] h-[150px] md:h-[232px]  border-8 border-white rounded-[20px] absolute max-md:left-16 max-md:top-12 max-lg:left-64 md:top-30  lg:right-32 lg:bottom-20 lg:top-5">
                <img src="assets/images/batik-3.jpg" alt="" class="md:w-[270px] h-[150px] md:h-[232px]  border-8 border-white rounded-[20px] absolute max-md:right-12 max-md:top-28 md:top-50 md:right-50  lg:right-80 lg:-bottom-10 lg:top-40">



                <!-- Gradient Circle -->
                <div class="circle bg-primary w-[250px] h-[250px] md:w-[350px] md:h-[350px] absolute rounded-full md:right-35  -z-10 blur-[125px] top-15"></div>
            </div>
        </div>
    </div>
    <!-- Tentang Section End -->


    <!-- Produk Section -->
    <div class="produk mt-12 px-30 relative scroll-mt-28" id="produk">
        <div class="card flex justify-center mt-70 items-center gap-x-3 text-lg text-white bg-primary py-3 px-6 w-[240px] rounded-[30px] mx-auto">
            <span>Produk Kami</span>
        </div>
        <form class="max-w-md mt-18 ml-auto mr-5">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Produk" required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
        <div class="flex justify-center mt-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
                <div class="w-[300px] h-[501px]" style=" perspective: 1000px;">
                    <div id="flipCard" style="width: 100%; height: 100%; position: relative; transform-style: preserve-3d; transition: all 0.5s ease; cursor: pointer;">
                        <!-- Depan Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; flex-direction: column; align-items: start; justify-content: start; padding: 1.5rem;">
                            <img class=" rounded-t-lg" src="assets/images/BTPekalongan.jpg" alt="product image" />
                            <div class="text-left">
                                <h2 class="text-xl font-semibold tracking-tight text-gray-900 mt-4">Batik Tulis Solo</h2>
                                <h5 class="text-lg font-semibold text-gray-900 mt-2">Rp. 250.000</h5>
                                <p class="mt-2 text-gray-500"><?php
                                                                $test = "Batik khas Solo dengan motif tradisional yang elegan dan cocok digunakan dalam acara resmi maupun santai.";
                                                                echo substr($test, 0, 60); ?>...</p>
                            </div>
                        </div>
                        <!-- Belakang Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: #fff; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transform: rotateY(180deg); display: flex; flex-direction: column; align-items: center; justify-content: start; padding: 1rem; gap: 100px;">
                            <div class="w-[185px] h-[185px] mt-12 aspect-square bg-gray-300 flex items-center justify-center text-gray-500 text-xl rounded">
                                <svg class="w-20 h-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h18v18H3V3zm3 14l3-4 4 5 5-6 3 4" />
                                </svg>
                            </div>
                            <button class="px-4 py-2 border border-gray-700 rounded-lg text-gray-700 hover:bg-gray-100">Salin URL</button>
                        </div>
                    </div>
                </div>
                <div class="w-[300px] h-[501px]" style=" perspective: 1000px;">
                    <div id="flipCard" style="width: 100%; height: 100%; position: relative; transform-style: preserve-3d; transition: all 0.5s ease; cursor: pointer;">
                        <!-- Depan Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 1.5rem;">
                            <img class=" rounded-t-lg" src="assets/images/BTPekalongan.jpg" alt="product image" />
                            <div class="text-left">
                                <h2 class="text-xl font-semibold tracking-tight text-gray-900 mt-4">Batik Tulis Solo</h2>
                                <h5 class="text-lg font-semibold text-gray-900 mt-2">Rp. 250.000</h5>
                                <p class="mt-2 text-gray-500">Batik khas Solo dengan motif tradisional yang elegan dan cocok digunakan dalam acara resmi maupun santai.</p>
                            </div>
                        </div>
                        <!-- Belakang Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: #fff; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transform: rotateY(180deg); display: flex; flex-direction: column; align-items: center; justify-content: start; padding: 1rem; gap: 100px;">
                            <div class="w-[185px] h-[185px] mt-12 aspect-square bg-gray-300 flex items-center justify-center text-gray-500 text-xl rounded">
                                <svg class="w-20 h-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h18v18H3V3zm3 14l3-4 4 5 5-6 3 4" />
                                </svg>
                            </div>
                            <button class="px-4 py-2 border border-gray-700 rounded-lg text-gray-700 hover:bg-gray-100">Salin URL</button>
                        </div>
                    </div>
                </div>
                <div class="w-[300px] h-[501px]" style=" perspective: 1000px;">
                    <div id="flipCard" style="width: 100%; height: 100%; position: relative; transform-style: preserve-3d; transition: all 0.5s ease; cursor: pointer;">
                        <!-- Depan Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 1.5rem;">
                            <img class=" rounded-t-lg" src="assets/images/BTPekalongan.jpg" alt="product image" />
                            <div class="text-left">
                                <h2 class="text-xl font-semibold tracking-tight text-gray-900 mt-4">Batik Tulis Solo</h2>
                                <h5 class="text-lg font-semibold text-gray-900 mt-2">Rp. 250.000</h5>
                                <p class="mt-2 text-gray-500">Batik khas Solo dengan motif tradisional yang elegan dan cocok digunakan dalam acara resmi maupun santai.</p>
                            </div>
                        </div>
                        <!-- Belakang Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: #fff; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transform: rotateY(180deg); display: flex; flex-direction: column; align-items: center; justify-content: start; padding: 1rem; gap: 100px;">
                            <div class="w-[185px] h-[185px] mt-12 aspect-square bg-gray-300 flex items-center justify-center text-gray-500 text-xl rounded">
                                <svg class="w-20 h-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h18v18H3V3zm3 14l3-4 4 5 5-6 3 4" />
                                </svg>
                            </div>
                            <button class="px-4 py-2 border border-gray-700 rounded-lg text-gray-700 hover:bg-gray-100">Salin URL</button>
                        </div>
                    </div>
                </div>
                <div class="w-[300px] h-[501px]" style=" perspective: 1000px;">
                    <div id="flipCard" style="width: 100%; height: 100%; position: relative; transform-style: preserve-3d; transition: all 0.5s ease; cursor: pointer;">
                        <!-- Depan Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 1.5rem;">
                            <img class=" rounded-t-lg" src="assets/images/BTPekalongan.jpg" alt="product image" />
                            <div class="text-left">
                                <h2 class="text-xl font-semibold tracking-tight text-gray-900 mt-4">Batik Tulis Solo</h2>
                                <h5 class="text-lg font-semibold text-gray-900 mt-2">Rp. 250.000</h5>
                                <p class="mt-2 text-gray-500">Batik khas Solo dengan motif tradisional yang elegan dan cocok digunakan dalam acara resmi maupun santai.</p>
                            </div>
                        </div>
                        <!-- Belakang Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: #fff; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transform: rotateY(180deg); display: flex; flex-direction: column; align-items: center; justify-content: start; padding: 1rem; gap: 100px;">
                            <div class="w-[185px] h-[185px] mt-12 aspect-square bg-gray-300 flex items-center justify-center text-gray-500 text-xl rounded">
                                <svg class="w-20 h-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h18v18H3V3zm3 14l3-4 4 5 5-6 3 4" />
                                </svg>
                            </div>
                            <button class="px-4 py-2 border border-gray-700 rounded-lg text-gray-700 hover:bg-gray-100">Salin URL</button>
                        </div>
                    </div>
                </div>
                <div class="w-[300px] h-[501px]" style=" perspective: 1000px;">
                    <div id="flipCard" style="width: 100%; height: 100%; position: relative; transform-style: preserve-3d; transition: all 0.5s ease; cursor: pointer;">
                        <!-- Depan Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 1.5rem;">
                            <img class=" rounded-t-lg" src="assets/images/BTPekalongan.jpg" alt="product image" />
                            <div class="text-left">
                                <h2 class="text-xl font-semibold tracking-tight text-gray-900 mt-4">Batik Tulis Solo</h2>
                                <h5 class="text-lg font-semibold text-gray-900 mt-2">Rp. 250.000</h5>
                                <p class="mt-2 text-gray-500">Batik khas Solo dengan motif tradisional yang elegan dan cocok digunakan dalam acara resmi maupun santai.</p>
                            </div>
                        </div>
                        <!-- Belakang Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: #fff; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transform: rotateY(180deg); display: flex; flex-direction: column; align-items: center; justify-content: start; padding: 1rem; gap: 100px;">
                            <div class="w-[185px] h-[185px] mt-12 aspect-square bg-gray-300 flex items-center justify-center text-gray-500 text-xl rounded">
                                <svg class="w-20 h-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h18v18H3V3zm3 14l3-4 4 5 5-6 3 4" />
                                </svg>
                            </div>
                            <button class="px-4 py-2 border border-gray-700 rounded-lg text-gray-700 hover:bg-gray-100">Salin URL</button>
                        </div>
                    </div>
                </div>
                <div class="w-[300px] h-[501px]" style=" perspective: 1000px;">
                    <div id="flipCard" style="width: 100%; height: 100%; position: relative; transform-style: preserve-3d; transition: all 0.5s ease; cursor: pointer;">
                        <!-- Depan Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 1.5rem;">
                            <img class=" rounded-t-lg" src="assets/images/BTPekalongan.jpg" alt="product image" />
                            <div class="text-left">
                                <h2 class="text-xl font-semibold tracking-tight text-gray-900 mt-4">Batik Tulis Solo</h2>
                                <h5 class="text-lg font-semibold text-gray-900 mt-2">Rp. 250.000</h5>
                                <p class="mt-2 text-gray-500">Batik khas Solo dengan motif tradisional yang elegan dan cocok digunakan dalam acara resmi maupun santai.</p>
                            </div>
                        </div>
                        <!-- Belakang Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: #fff; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transform: rotateY(180deg); display: flex; flex-direction: column; align-items: center; justify-content: start; padding: 1rem; gap: 100px;">
                            <div class="w-[185px] h-[185px] mt-12 aspect-square bg-gray-300 flex items-center justify-center text-gray-500 text-xl rounded">
                                <svg class="w-20 h-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h18v18H3V3zm3 14l3-4 4 5 5-6 3 4" />
                                </svg>
                            </div>
                            <button class="px-4 py-2 border border-gray-700 rounded-lg text-gray-700 hover:bg-gray-100">Salin URL</button>
                        </div>
                    </div>
                </div>
                <div class="w-[300px] h-[501px]" style=" perspective: 1000px;">
                    <div id="flipCard" style="width: 100%; height: 100%; position: relative; transform-style: preserve-3d; transition: all 0.5s ease; cursor: pointer;">
                        <!-- Depan Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 1.5rem;">
                            <img class=" rounded-t-lg" src="assets/images/BTPekalongan.jpg" alt="product image" />
                            <div class="text-left">
                                <h2 class="text-xl font-semibold tracking-tight text-gray-900 mt-4">Batik Tulis Solo</h2>
                                <h5 class="text-lg font-semibold text-gray-900 mt-2">Rp. 250.000</h5>
                                <p class="mt-2 text-gray-500">Batik khas Solo dengan motif tradisional yang elegan dan cocok digunakan dalam acara resmi maupun santai.</p>
                            </div>
                        </div>
                        <!-- Belakang Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: #fff; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transform: rotateY(180deg); display: flex; flex-direction: column; align-items: center; justify-content: start; padding: 1rem; gap: 100px;">
                            <div class="w-[185px] h-[185px] mt-12 aspect-square bg-gray-300 flex items-center justify-center text-gray-500 text-xl rounded">
                                <svg class="w-20 h-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h18v18H3V3zm3 14l3-4 4 5 5-6 3 4" />
                                </svg>
                            </div>
                            <button class="px-4 py-2 border border-gray-700 rounded-lg text-gray-700 hover:bg-gray-100">Salin URL</button>
                        </div>
                    </div>
                </div>
                <div class="w-[300px] h-[501px]" style=" perspective: 1000px;">
                    <div id="flipCard" style="width: 100%; height: 100%; position: relative; transform-style: preserve-3d; transition: all 0.5s ease; cursor: pointer;">
                        <!-- Depan Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 1.5rem;">
                            <img class=" rounded-t-lg" src="assets/images/BTPekalongan.jpg" alt="product image" />
                            <div class="text-left">
                                <h2 class="text-xl font-semibold tracking-tight text-gray-900 mt-4">Batik Tulis Solo</h2>
                                <h5 class="text-lg font-semibold text-gray-900 mt-2">Rp. 250.000</h5>
                                <p class="mt-2 text-gray-500">Batik khas Solo dengan motif tradisional yang elegan dan cocok digunakan dalam acara resmi maupun santai.</p>
                            </div>
                        </div>
                        <!-- Belakang Kartu -->
                        <div style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; border-radius: 0.5rem; background: #fff; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transform: rotateY(180deg); display: flex; flex-direction: column; align-items: center; justify-content: start; padding: 1rem; gap: 100px;">
                            <div class="w-[185px] h-[185px] mt-12 aspect-square bg-gray-300 flex items-center justify-center text-gray-500 text-xl rounded">
                                <svg class="w-20 h-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h18v18H3V3zm3 14l3-4 4 5 5-6 3 4" />
                                </svg>
                            </div>
                            <button class="px-4 py-2 border border-gray-700 rounded-lg text-gray-700 hover:bg-gray-100">Salin URL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-primary w-[500px] h-[350px] absolute left-1/2 -translate-x-1/2 top-150 -z-10 blur-[350px] rounded-xl"></div>
        <div class="bg-primary w-[500px] h-[350px] absolute right-35 -z-10 blur-[210px] top-120 rounded-xl"></div>
        <div class="bg-primary w-[500px] h-[350px] absolute left-35 -z-10 blur-[210px] top-120 rounded-xl"></div>
    </div>
    <!-- Produk Section End -->

    <!-- Testimoni Section  -->
    <div class="testimonial mt-12 px-25 relative">
        <div class="card flex justify-center mt-70 items-center gap-x-3 text-lg text-white bg-primary py-3 px-6 w-[240px] rounded-[30px] mx-auto">
            <span>Testimoni</span>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-6">
            <div class="bg-white rounded-xl relative mt-12 shadow border-[1px] border-[#eee] p-6 max-w-lg w-full">
                <!-- Avatar & Label (Floating di atas card) -->
                <div class="flex items-center space-x-1">
                    <!-- Avatar -->
                    <div class="absolute -top-4 -left-4 z-20 w-14 h-14 right-5 bg-gray-300 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>

                    <!-- Label -->
                    <div class="absolute z-10 top-0 left-4 bg-gray-100 pl-9 pr-4 py-1 rounded-br-2xl text-sm text-gray-700 font-medium shadow">
                        Anonim
                    </div>
                </div>
                <!-- Teks Testimoni -->
                <p class="text-gray-800 text-sm mt-5 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt justo at rhoncus convallis. Maecenas non tempor sapien, sed fermentum nunc. Sed mattis, nibh vitae mollis facilisis, ex magna cursus neque, sed dapibus lorem tortor id ex.
                </p>
            </div>
            <div class="bg-white rounded-xl relative mt-12 shadow border-[1px] border-[#eee] p-6 max-w-lg w-full">
                <!-- Avatar & Label (Floating di atas card) -->
                <div class="flex items-center space-x-1">
                    <!-- Avatar -->
                    <div class="absolute -top-4 -left-4 z-20 w-14 h-14 right-5 bg-gray-300 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>

                    <!-- Label -->
                    <div class="absolute z-10 top-0 left-4 bg-gray-100 pl-9 pr-4 py-1 rounded-br-2xl text-sm text-gray-700 font-medium shadow">
                        Anonim
                    </div>
                </div>
                <!-- Teks Testimoni -->
                <p class="text-gray-800 text-sm mt-5 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt justo at rhoncus convallis. Maecenas non tempor sapien, sed fermentum nunc. Sed mattis, nibh vitae mollis facilisis, ex magna cursus neque, sed dapibus lorem tortor id ex.
                </p>
            </div>
            <div class="bg-white rounded-xl relative mt-12 shadow border-[1px] border-[#eee] p-6 max-w-lg w-full">
                <!-- Avatar & Label (Floating di atas card) -->
                <div class="flex items-center space-x-1">
                    <!-- Avatar -->
                    <div class="absolute -top-4 -left-4 z-20 w-14 h-14 right-5 bg-gray-300 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>

                    <!-- Label -->
                    <div class="absolute z-10 top-0 left-4 bg-gray-100 pl-9 pr-4 py-1 rounded-br-2xl text-sm text-gray-700 font-medium shadow">
                        Anonim
                    </div>
                </div>
                <!-- Teks Testimoni -->
                <p class="text-gray-800 text-sm mt-5 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt justo at rhoncus convallis. Maecenas non tempor sapien, sed fermentum nunc. Sed mattis, nibh vitae mollis facilisis, ex magna cursus neque, sed dapibus lorem tortor id ex.
                </p>
            </div>
        </div>
        <!-- Testimoni Section End -->

        <!-- Footer -->
        <footer class="footer mt-96 lg:px-8">
            <div class="footer-container bg-white shadow-md border border-gray-100 rounded-[10px] p-12 lg:p-8 w-full gap-y-10 flex flex-wrap justify-between">
                <div class="foooter-col max-md:w-full md:max-w-72  ">
                    <div class="judul">
                        <h3 class="max-md:text-center font-bold text-3xl text-secondary">Batik <span class="text-primary">Indonesia</span></h3>
                    </div>
                    <div class="deskripsi mt-2 text-secondary font-light max-md:text-center ">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, atque!</p>
                    </div>
                    <div class="sosial-media mt-12">
                        <ul class="flex gap-x-3 max-md:justify-center ">
                            <li class="bg-primary rounded-full w-13  h-13 flex justify-center items-center p-2"><a href=""><i class="fa-brands fa-x-twitter text-3xl text-white"></i></a></li>
                            <li class="bg-primary rounded-full w-13  h-13 flex justify-center items-center p-2"><a href=""><i class="fa-brands fa-instagram text-3xl text-white"></i></a></li>
                            <li class="bg-primary rounded-full w-13 h-13 flex justify-center items-center p-2"><a href=""><i class="fa-brands fa-facebook text-3xl text-white"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="foooter-col max-w-90 h-full flex flex-col pt-2 items-center max-md:order-3">
                    <div class="link-cepat border-t border-gray-200">
                        <ul class="flex gap-x-4 text-lg  text-secondary pt-2">
                            <li><a href="#beranda" class="hover:text-primary transition-all duration-500 ">Beranda</i></a></li>
                            <li><a href="#tentang" class="hover:text-primary transition-all duration-500 ">Tentang</i></a></li>
                            <li><a href="" class="hover:text-primary transition-all duration-500 ">Produk</i></a></li>
                            <li><a href="" class="hover:text-primary transition-all duration-500 ">Testimoni</i></a></li>
                        </ul>
                    </div>
                    <div class="tagline mt-8">
                        <h6 class="font-bold text-xl text-center text-secondary italic">" Batik <span class="text-primary">Indonesia</span> Membentuk Pola <br>
                            Melestarikan <span class="text-primary">Budaya "</span></h6>
                    </div>
                    <div class="copyright text-center mt-8 text-secondary">
                        <p>&copy; 2025 Batik Indonesia. All rights reserved.</p>
                    </div>
                </div>
                <div class="foooter-col  w-full lg:w-auto pt-5 lg:pt-2 max-md:order-2 max-lg:border-t border-gray-200">
                    <div class="judul">
                        <h3 class="text-secondary font-bold text-2xl">Galeri Kami</h3>
                    </div>
                    <div class="footer-col-content flex lg:flex-col max-md:flex-col  h-full justify-between ">
                        <div class="galeri flex gap-x-3 mt-3">
                            <img src="assets/images/batik-2.jpg" alt="" class="w-[100px] lg:w-[90px]  h-[90px] lg:h-[80px] object-cover  ring-2 ring-primary rounded-[10px]">
                            <img src="assets/images/batik-2.jpg" alt="" class="w-[100px] lg:w-[90px]  h-[90px] lg:h-[80px] object-cover  ring-2 ring-primary rounded-[10px]">
                            <img src="assets/images/batik-2.jpg" alt="" class="w-[100px] lg:w-[90px]  h-[90px] lg:h-[80px] object-cover  ring-2 ring-primary rounded-[10px]">
                        </div>
                        <div class="kerjasama">
                            <form action="" class=" mb-7 w-full">
                                <div class="judul">
                                    <h4 class="font-bold text-xl lg:text-base text-secondary mb-2">Ingin Bekerja Sama?</h4>
                                </div>
                                <div class="form-group w-full flex gap-x-2">
                                    <input type="text" name="email" id="email" placeholder="Masukan Email Anda..." class="text-sm rounded-[5px] ring-0 border border-gray-200  w-full lg:w-auto ">
                                    <button type="submit" class="bg-primary text-white font-bold rounded-[5px] py-2 px-5 cursor-pointer hover:bg-amber-500 duration-500 transition-all">Kirim</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </footer>
        <!-- Footer End -->


        <script src="libs/flowbite/flowbite.min.js"></script>
        <script>
            // function showDetail(card) {
            //     const content = card.querySelector("div.text-left");
            //     const detail = card.querySelector("div.product-detail");

            // // Sembunyikan konten utama
            //     if (content && detail) {
            //         content.style.display = "none";
            //         detail.classList.remove("hidden");
            //     }
            // }
            // function hideDetail(button) {
            //     const detail = button.closest("div.product-detail");
            //     const card = detail.closest("div.relative"); // Mengarah ke card
            //     const content = card.querySelector("div.text-left");

            //     if (detail && content) {
            //         detail.classList.add("hidden");
            //         content.style.display = "block";
            //     }
            // }

            window.addEventListener('scroll', function() {
                const scrollY = window.pageYOffset;
                const navbar = document.getElementById('navbar');

                if (scrollY > 5) {
                    navbar.classList.add('nav-scroll');
                } else {
                    navbar.classList.remove('nav-scroll');
                }
            })

            // Script yang sangat sederhana dan pasti bekerja
            const card = document.getElementById('flipCard');
            let isFlipped = false;

            card.addEventListener('click', function() {
                isFlipped = !isFlipped;
                this.style.transform = isFlipped ? 'rotateY(180deg)' : 'rotateY(0deg)';

                // Untuk debugging - pastikan ini muncul di console
                console.log('Card diklik! Status flip:', isFlipped);
            });

            // Verifikasi event listener terpasang
            console.log('Event listener berhasil dipasang');

            // Responsive Navbar
            const navigation = document.getElementById('navigation');
            const hamburger = document.querySelector('#hamburger');


            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('hamburger-active');
                navigation.classList.toggle('nav-active');
            });

            navLinks.forEach(anchor => {
                anchor.addEventListener('click', function() {
                    navigation.classList.remove('nav-active');
                    hamburger.classList.remove('hamburger-active');
                });
            });
        </script>
</body>

</html>