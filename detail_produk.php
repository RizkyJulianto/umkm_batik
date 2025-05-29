<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Produk</title>
  <link rel="stylesheet" href="assets/css/tailwindcss/output.css">
  <!-- Flowbite -->
  <link rel="stylesheet" href="libs/flowbite/flowbite.min.css">

  <!-- Font -->
  <link rel="stylesheet" href="libs/font/font.css">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100 font-sans">

  <a href="index.php" class="absolute top-6 left-14 px-4 py-2 border border-gray-700 rounded-lg text-gray-700 hover:bg-gray-100 ">
    <i class="fa-solid fa-left-long"></i></a>
  <!-- Container Utama -->
  <div class="max-w-6xl mx-auto p-20">

    <!-- Detail Produk -->
    <div class="flex gap-8 bg-white rounded-xl shadow p-12">
      <!-- Gambar Produk -->
      <div class="flex-[1_1_43%]">
        <div class="w-full h-[400px] aspect-square bg-gray-300 flex items-center justify-center text-gray-500 text-xl rounded">
          <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 3h18v18H3V3zm3 14l3-4 4 5 5-6 3 4" />
          </svg>
        </div>
        <!-- Thumbnail -->
        <!-- <div class="grid grid-cols-4 gap-4 mt-4">
          <div class="w-full h-18 bg-gray-300 rounded"></div>
          <div class="w-full h-18 bg-gray-300 rounded"></div>
          <div class="w-full h-18 bg-gray-300 rounded"></div>
          <div class="w-full h-18 bg-gray-300 rounded"></div>
        </div> -->
      </div>

      <!-- Info Produk -->
      <div class="flex-[1_1_57%]">
        <div>
          <h2 class="text-xl font-bold mb-1">Nama Produk</h2>
          <p class="text-sm text-gray-600 mb-2">Tersedia:</p>
          <p class="text-2xl font-bold text-gray-800 mb-4">Rp. 100.000</p>
          <p class="text-gray-700 mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
          </p>
          <div class="flex space-x-4">
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="px-4 py-2 border border-gray-700 rounded-lg cursor-pointer text-gray-700 hover:bg-gray-100">
              <i class="fa-regular fa-comments mr-2"></i>Testimoni</button>
            <button class="px-4 py-2 border border-gray-700 rounded-lg text-gray-700 hover:bg-gray-100">
              <i class="fa-brands fa-whatsapp mr-2"></i>Beli</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimoni -->
    <div class="mt-12">
      <h3 class="text-xl font-bold mb-6 bg-gray-200 inline-block px-6 py-2 rounded-full">Testimoni Produk</h3>

      <!-- Daftar Testimoni -->
      <div class="space-y-4">
        <!-- Satu Testimoni -->
        <div class="flex space-x-3 bg-gray-200 p-4 rounded-lg">
          <div class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
            <svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
            </svg>
          </div>
          <div>
            <p class="text-sm font-semibold mb-1">Anonim</p>
            <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt justo at rhoncus convallis...</p>
          </div>
        </div>

        <!-- Duplikasi Testimoni -->
        <div class="flex space-x-3 bg-gray-200 p-4 rounded-lg">
          <div class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
            <svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
            </svg>
          </div>
          <div>
            <p class="text-sm font-semibold mb-1">Anonim</p>
            <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt justo at rhoncus convallis...</p>
          </div>
        </div>

        <!-- Tambahkan testimoni lain sesuai kebutuhan -->
      </div>
    </div>
  </div>



  <!-- Modal toggle
<button  class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button> -->

  <!-- Main modal -->
  <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 cursor-pointer justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow-sm">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t cursor-pointer border-gray-200">
          <h3 class="text-lg font-semibold text-black">
            Tambahkan Testimoni
          </h3>
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <!-- Modal body -->
        <form class="p-4 md:p-5">
          <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="col-span-2 sm:col-span-1">
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
              <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nama" required="">
            </div>
            <div class="col-span-2 sm:col-span-1">
              <label for="produk" class="block mb-2 text-sm font-medium text-gray-900">Produk</label>
              <input type="text" name="produk" id="produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nama Produk" required="" readonly>
            </div>
            <div class="col-span-2">
              <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
              <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write product description here"></textarea>
            </div>
          </div>
          <div class="flex justify-between items-center">
            <span id="timestamp" class="text-gray-500 text-sm ml-2"></span>
            <button type="submit" class=" text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
              Kirim
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="libs/flowbite/flowbite.min.js"></script>
  <script>
    // Fungsi untuk menampilkan waktu saat ini secara otomatis
    function updateTimestamp() {
      const now = new Date();

      // Format: 28 Mei 2025, 10:15 WIB
      const options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        hour12: false,
        timeZone: 'Asia/Jakarta'
      };
      const formatter = new Intl.DateTimeFormat('id-ID', options);
      document.getElementById('timestamp').textContent = formatter.format(now) + " WIB";
    }

    // Tampilkan saat halaman dimuat
    window.onload = updateTimestamp;
  </script>
</body>

</html>