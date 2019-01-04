<?php
    $server = 'localhost';
    $username ='root';
    $password = '';
    $database = 'dbaplikasitebakgambar';
    $koneksi = mysqli_connect($server, $username, $password);

    // if($koneksi){
    // 	echo "Konesi Sukses!";
    // }else{
    // 	echo "Koneksi Gagal!".mysqli_connect_error();
    // }

    $koneksi_db=mysqli_select_db($koneksi, $database);
    // if(!$koneksi_db){
    // 	echo "Gagal Koneksi Ke database!";
    // }else{
    // 	echo "Sukses Koneksi Ke database!";
    // }
    // if(!$koneksi_db)echo("Gagal Koneksi Ke database!"); else echo("Sukses Koneksi Ke database!");


?>