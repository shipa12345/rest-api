<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "mahasiswa";

    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die("Koneksi Error!");
    }
?>