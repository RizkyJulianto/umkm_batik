<?php

include "../connection/config.php";
session_start();

if ($_SESSION['login'] != 1) {
    header("Location: ../auth/sign-in.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/tailwindcss/output.css">
    <link rel="stylesheet" href="../libs/font/font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-fira">

    <header class="flex h-screen">
        <aside class="w-[360px] h-full border-r-[2px] border-r-gray-200 shadow py-3 px-5">
            <div class="logo flex justify-center text-center w-full">
                <a href="" class="font-semibold text-xl pt-2 px-3 pb-3"><span class="text-primary">Batik</span>
                    Indonesia</a>
            </div>
            <div class="nav-side w-full mt-3">
                <span class="text-sm text-gray-400 mb-3 inline-block">Menu</span>
                <div class="nav-menu active-menu bg-primary text-white p-3 rounded mb-3">
                    <a href=""><i class="fas fa-th-large"></i> Dashboard</a>
                </div>
                <div class="nav-menu p-3 rounded mb-3 hover:bg-primary hover:text-white">
                    <a href=""><i class="fas fa-database"></i> Data Produk</a>
                </div>
                <div class="nav-menu p-3 rounded mb-3 hover:bg-primary hover:text-white">
                    <a href=""><i class="fa-solid fa-clock-rotate-left"></i> Aktivitas</a>
                </div>
                <div class="nav-menu p-3 rounded mb-3 hover:bg-primary hover:text-white">
                    <a href=""><i class="fas fa-people-arrows"></i> Testimoni</a>
                </div>
                <div class="nav-menu p-3 rounded mb-3 hover:bg-primary hover:text-white">
                    <a href="../auth/sign-out.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                </div>
            </div>
        </aside>
        <nav class="w-full h-[65px] border-b-[2px] border-b-gray-200 shadow flex justify-end items-center px-5">
            <h1>Hello <?= $_SESSION['name'] ?></h1>
        </nav>
    </header>
</body>

</html>