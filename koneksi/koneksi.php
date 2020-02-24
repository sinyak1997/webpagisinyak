<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="biodata";

    $koneksi=mysqli_connect($server,$username,$password,$db)or die(mysqli_error($koneksi));

    if($koneksi){
        echo "database berhasil terkoneksi cui";
    }else if(!$koneksi){
        die('koneksi gagal'.mysqli_connect_error());
    }
?>