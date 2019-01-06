<?php 
    session_start();
    $_SESSION['jenis'];
    $_SESSION['kategori'];
    require_once('koneksi.php');
    $query = mysqli_query($koneksi, "SELECT DISTINCT jenis FROM `tbsoal` WHERE kategori = ".$_POST['btnKategori']);
    if($query){
        $rowcount = mysqli_num_rows($query);
        $jenis = rand(1,$rowcount);
        $_SESSION['jenis'] = $jenis;
        $_SESSION['kategori'] = $_POST['btnKategori'];
        ?>
            <script>
                window.location.href = "game.php#!/sesi1";
            </script>
        <?php
    }
?>