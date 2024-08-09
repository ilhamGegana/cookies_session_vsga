<?php
    $servername="localhost";
    $database="web_vsga";
    $username="root";
    $password="";

    $connect= new mysqli($servername,$username,$password,$database);

    if ($connect->connect_error){
        echo"Koneksi gagal : ".$connect->connect_error;
    } else {
        echo "Koneksi berhasil";
    }
?>