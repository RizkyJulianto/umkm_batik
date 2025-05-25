<?php

$connect = mysqli_connect("localhost", "root", '', 'umkm_batik');

if (!$connect) {
    die("Tidak terhubung dengan database" . mysqli_connect_error($connect));
}