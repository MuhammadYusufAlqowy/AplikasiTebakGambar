<?php 
    include_once("koneksi.php");
    session_start();
?>
<!-- sesi -->
        <div class="text-warning text-center pt-5" id="sesi2" >
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM tbsoal where no_soal = 4 AND kategori = ".$_SESSION['kategori']." AND jenis = ".$_SESSION['jenis']);
                    $fetch = mysqli_fetch_array($query);
                     $query = mysqli_query($koneksi,"SELECT * FROM deskripsi_gambar where no_soal = 4 AND kategori = ".$_SESSION['kategori']);
                    $deskripsi = mysqli_fetch_assoc($query);
                    ?>
                        <h3 class="text-soal bg-white text-warning"><?php echo $fetch['deskripsi']; ?> </h3>
                </div>
            </div>
            <form action="cek.php" method="POST">
                <div class="row p-3 mt-5 mx-auto w-100">
                    <?php
                        $query = mysqli_query($koneksi,"SELECT * FROM gambar_jawaban where kategori = ".$_SESSION['kategori']." AND deskripsi = '".$deskripsi['deskripsi']."'");
                        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                    ?>
                    <div class="col-sm-12 col-md-12 pt-3">
                        <button type="submit" class="btn btn-outline-warning p-0 m-0" name="jawaban" value="<?php echo $result['nama'];?>">
                            <img src="<?php echo $result['path'];?>" alt="" class="p-3 img-fluid">
                        </button>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <input type="hidden" name="sesi" value="4">
            </form>
        </div>
        <!-- sesi -->

        
