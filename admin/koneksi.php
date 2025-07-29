<?php
$host_koneksi = "localhost";
$host_username = "root";
$host_password = "ppkpi";
$host_database = "db_reza";

$koneksi = mysqli_connect($host_koneksi, $host_username, $host_password, $host_database);
// jika koneksi gagal
if (!$koneksi) {
    echo "duar koneksi gagal";
}
