<?php
    include_once("koneksi.php");
    session_start();
?>
<!-- sesi -->
    <div class="container text-warning text-center pt-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <?php 
                $query = mysqli_query($koneksi,@"SELECT * FROM tbsoal where no_soal = 5 AND kategori = ".$_SESSION['kategori']." AND jenis = ".$_SESSION['jenis']);
                while ($fetch = mysqli_fetch_array($query)) {
                ?>
                    <h3 class="m-3"><?php echo $fetch['deskripsi']; ?> </h3>
                
            </div>
        </div>
                <div class="embed-responsive embed-responsive-4by3 mt-0" style="height:500px; width:auto;">
                    <iframe class="embed-responsive-item" src="<?php echo $fetch['jawaban'] ?>" allowfullscreen></iframe>
                </div>
                <?php    
                }
                ?>
    </div>
    <!-- sesi -->

    
