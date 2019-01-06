
<?php
    require_once("koneksi.php");
    session_start();
    $query = mysqli_query($koneksi,"SELECT * FROM tbsoal where kategori = ".$_SESSION['kategori']." AND jenis = ".$_SESSION['jenis']);

    if($query){
        $result = mysqli_fetch_array($query);
    }

?>

<div class="container-fluid text-center mt-5" style="height: 100vh">
        <div class="display-4 text-center text-warning text-capitalize p-5 text-head mt-5">Aku adalah <?php echo $result['nama_jenis'] ?>, apakah kamu tau tentang aku?</div>
        <button class="btn btn-warning rounded-circle mx-auto text-white" style="width: 100px; height: 100px; font-size: 16px; font-weight: bold;" onclick="window.location.href = '#!sesi2'">MULAI</button>
</div>

