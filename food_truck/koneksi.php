<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "db_foodtruck";

$koneksi = new mysqli($server, $username, $password, $dbname);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>

