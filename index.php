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
                    Batik<span class="text-primary">  Indonesia</span>
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
        <img src="assets/images/beranda-bg.png" alt="" class="absolute -z-10 top-0 w-screen h-screen">
        <div class="background-overlay bg-white/80 w-full h-screen absolute top-0 -z-9 "></div>
        <div class="beranda-section-box-text text-center lg:mt-40 mt-24 ">
            <div class="beranda-section-text-title ">
                <h2 class="font-bold text-secondary md:text-4xl text-2xl lg:text-5xl">
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

            if(scrollY > 5) {
                navbar.classList.add('nav-scroll');
            } else {
                navbar.classList.remove('nav-scroll');
            }
        })

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