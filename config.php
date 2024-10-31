<?php
$hostdb = "localhost";
$userdb = "root";
$passdb = "tkjtkj";
$namedb = "ujianpos";
$con = mysqli_connect($hostdb,$userdb,$passdb,$namedb);
if (!$con) {
    die ("koneksi gagal:" . mysqli_connect_error());
}