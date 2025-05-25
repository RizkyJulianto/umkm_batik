<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/tailwindcss/output.css">

    <!-- Flowbite -->
    <link rel="stylesheet" href="libs/flowbite/flowbite.min.css">
    <link rel="stylesheet" href="libs/font/font.css">
    <title>Batik Indonesia</title>
</head>

<body class="font-fira">
    <!-- Header Section -->
    <header class="header">
        <nav class="bg-transparant py-5 px-8">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-bold whitespace-nowrap text-black/70 font-fira">Batik Indonesia</span>
                </a>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  ">
                        <li>
                            <a href="#" class="block py-2  text-black/70 dark:text-black/70 " aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2  text-black/70 rounded-sm">Tentang</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2  text-black/70 rounded-sm">Produk</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2  text-black/70 rounded-sm">Testimoni</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <!-- Header Section End -->

    <!-- Beranda Section -->
    <div class="beranda  h-screen">
        <!-- Backround -->
        <img src="assets/images/beranda-bg.png" alt="" class="absolute -z-10 top-0 w-full h-screen">
        <div class="background-overlay bg-white/80 w-full h-screen absolute top-0 -z-9 "></div>
        <div class="beranda-section-box-text text-center text-black mt-20 flex flex-col items-center justify-center gap-y-2 ">
            <div class="beranda-section-text-title">
                <h2 class="font-bold text-black/70 lg:text-4xl md:text-4xl text-[35px] font-fira">
                    Batik <span class="text-primary">Indonesia</span> Membentuk Pola <br>
                    Melestarikan <span class="text-primary">Budaya</span>
                </h2>
            </div>
            <div class="beranda-section-text-subtitle mt-4">
                <p class="lg:text-[20px] text-black/80 text-base font-[400] text-center max-w-[720px]">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid architecto provident perspiciatis ipsa aut repellat quis cumque voluptatibus veniam inventore.
                </p>
            </div>
            <div class="beranda-section-cta mt-6">
                <a href="" class="bg-primary text-white py-3 px-6 inline-block  w-[240px] rounded-[10px] font-medium text-lg transition-all duration-300 hover:bg-darkbrown">Lihat Menu</a>
            </div>
        </div>

        <!-- Gradient -->
        <!-- <img src="assets/images/gradient-beranda.png" alt="" class="absolute -bottom-30 w-screen"> -->
        <div class="absolute h-20 bg-linear-to-t from-white to-white/5  w-full bottom-0 "></div>
    </div>

    <!-- Beranda Section End -->

    <script src="libs/flowbite/flowbite.min.js"></script>
</body>

</html>