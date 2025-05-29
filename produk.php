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
     
<div class="flex justify-center">
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 cursor-pointer gap-6 p-6" >
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
    <div class="p-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8 w-[300px] h-[501px]">
        <div class="">
            <a href="#">
                <img class=" rounded-t-lg" src="assets/images/BTPekalongan.jpg" alt="product image" />
            </a>
            <div class="text-left">
                <h2 class="text-xl font-semibold tracking-tight text-gray-900 mt-4">Batik Tulis Solo</h2>
                <h5 class="text-lg font-semibold text-gray-900 mt-2">Rp. 250.000</h5>
                <p class="mt-2 text-gray-500">Batik khas Solo dengan motif tradisional yang elegan dan cocok digunakan dalam acara resmi maupun santai.</p>
            </div>
        </div>
    </div>
    <div class="p-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8 w-[300px] h-[501px]">
        <div class="">
            <a href="#">
                <img class=" rounded-t-lg" src="assets/images/BTPekalongan.jpg" alt="product image" />
            </a>
            <div class="text-left">
                <h2 class="text-xl font-semibold tracking-tight text-gray-900 mt-4">Batik Tulis Solo</h2>
                <h5 class="text-lg font-semibold text-gray-900 mt-2">Rp. 250.000</h5>
                <p class="mt-2 text-gray-500">Batik khas Solo dengan motif tradisional yang elegan dan cocok digunakan dalam acara resmi maupun santai.</p>
            </div>
        </div>
    </div>  
</div>
</div>


    
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
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
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
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
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
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
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

        // // Responsive Navbar
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