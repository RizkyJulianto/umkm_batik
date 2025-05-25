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
    <header class="header">
        <nav class="bg-transparant py-5 px-8">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-bold whitespace-nowrap text-black/70 font-fira">Batik Indonesia</span>
                </a>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  ">
                        <li>
                            <a href="#" class="block py-2  text-black/70 hover:text-primary transition-all duration-300" aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2  text-black/70 hover:text-primary transition-all duration-300 ">Tentang</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2  text-black/70 hover:text-primary transition-all duration-300 ">Produk</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2  text-black/70 hover:text-primary transition-all duration-300 ">Testimoni</a>
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
                <a href="" class="bg-primary hover:bg-amber-500 transition-all duration-500 text-white py-3 px-6 inline-block  w-[240px] rounded-[10px] font-medium text-lg ">Lihat Menu</a>
            </div>
        </div>

        <!-- Gradient -->
        <!-- <img src="assets/images/gradient-beranda.png" alt="" class="absolute -bottom-30 w-screen"> -->
        <div class="absolute h-20 bg-linear-to-t from-white to-white/5  w-full bottom-0 "></div>
    </div>

    <!-- Beranda Section End -->


    <!-- Tentang Section -->
     <div class="tentang mt-12 px-30 relative">
        <div class="tentang-container-content w-full flex justify-between">
            <div class="tentang-left-col max-w-[500px]">
                <div class="judul">
                    <h2 class="text-4xl font-bold text-black/80">Mengapa Batik <span class="text-primary">Indonesia ?</span></h2>
                </div>
                <div class="deskripsi mt-4  text-justify">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt justo at rhoncus convallis. Maecenas non tempor sapien, sed fermentum nunc. Sed mattis, nibh vitae mollis facilisis, ex magna cursus neque, sed dapibus lorem tortor id ex. Curabitur vehicula velit eget tincidunt feugiat. Nulla facilisi. In auctor sem vitae odio ornare commodo quis ac enim. Nulla eu cursus sapien. Praesent vitae malesuada magna. Fusce lacinia arcu eros, sit amet hendrerit metus pretium non. </p>
                </div>
                <div class="keunggulan mt-5 flex gap-4 flex-wrap">
                    <div class="card flex items-center gap-x-3 text-md text-white bg-black/80 py-3 px-5 rounded-[10px] ">
                        <div class="icon">
                            <div class="fas fa-palette"></div>
                        </div>
                        <div class="judul">
                            <span>Motif Beragam</span>
                        </div>
                    </div>
                    <div class="card flex  items-center gap-x-3 text-md text-white bg-primary py-3 px-5 rounded-[10px] ">
                        <div class="icon">
                            <div class="fas fa-shirt"></div>
                        </div>
                        <div class="judul">
                            <span>Bahan Berkualitas</span>
                        </div>
                    </div>
                    <div class="card flex  items-center gap-x-3 text-md text-white bg-black/80 py-3 px-5 rounded-[10px] ">
                        <div class="icon">
                            <div class="fas fa-home"></div>
                        </div>
                        <div class="judul">
                            <span>Buatan Tangan Lokal</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tentang-right-col">
                <img src="assets/images/batik-1.png" alt="" class="w-[270px] h-[232px] rounded-[20px] absolute right-70 -top-10">
                <img src="assets/images/batik-2.jpg" alt="" class="w-[270px] h-[232px] border-8 border-white rounded-[20px] absolute right-32 bottom-20 top-5">
                <img src="assets/images/batik-3.jpg" alt="" class="w-[270px] h-[232px] border-8 border-white rounded-[20px] absolute right-80 -bottom-10 top-40">

                <!-- Gradient Circle -->
                 <div class="circle bg-primary w-[350px] h-[350px] absolute rounded-full right-35 -z-10 blur-[125px] top-15"></div>
            </div>
        </div>
     </div>
    <!-- Tentang Section End -->

    <script src="libs/flowbite/flowbite.min.js"></script>
</body>

</html>