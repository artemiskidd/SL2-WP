<?php
    $server = "localhost";
    $username = "root";
    $db_name = "aplikasi_keuangan";
    $password = "";

    $connection = mysqli_connect($server, $username, $password, $db_name);
    if($connection){
        // echo "koneksi berhasil";
    }else{
        echo "koneksi gagal ".mysqli_connect_error();
    }

?>