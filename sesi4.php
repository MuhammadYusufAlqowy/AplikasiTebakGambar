<?php include_once("koneksi.php") ?>
<!-- sesi -->
    <div class="container text-warning text-center pt-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <?php 
                $query = mysqli_query($koneksi,@"SELECT * FROM tbsoal where id_soal = 3");
                while ($fetch = mysqli_fetch_array($query)) {
                ?>
                    <h3 class="m-3"><?php echo $fetch['deskripsi']; ?> </h3>
                <?php    
                    }
                ?>
            </div>
        </div>
        <form action="cek.php" method="POST">
            <div class="row p-3 mt-3 mx-auto h-50" style="width: 600px; height: 300px;">
                <div class="col-sm-6 col-md-6 ">
                    <button type="submit" class="btn btn-outline-warning p-0 m-0" name="jawaban" value="corak jerapah" style="width:250px;">
                        <img src="source/image/corak-jerapah.jpg" class="p-3" alt="" style="height: 200px; width: 250px;">
                    </button>
                </div>
                <div class="col-sm-6 col-md-6">
                        <button type="submit" class="btn btn-outline-warning p-0 m-0" name="jawaban" value="d" style="width:250px;">
                        <img src="source/image/corak-harimau.jpg" class="p-3" alt="" style="height: 200px; width: 250px;">
                    </button>
                </div>
            </div>
            <div class="row p-3 mt-3 mx-auto h-50" style="width: 600px; height: 300px;">
                <div class="col-sm-6 col-md-6 ">
                        <button type="submit" class="btn btn-outline-warning p-0 m-0" name="jawaban" value="hutan" style="width:250px;">
                        <img src="source/image/corak-zebra.jpg" class="p-3" alt="" style="height: 200px; width: 250px;">
                    </button>
                </div>
                <div class="col-sm-6 col-md-6">
                        <button type="submit" class="btn btn-outline-warning p-0 m-0" name="jawaban" value="daun" style="width:250px;">
                        <img src="source/image/corak-macan.jpg" class="p-3" alt="" style="height: 200px; width: 250px;">
                    </button>
                </div>
            </div>
            <input type="hidden" name="sesi" value="3">
        </form>
    </div>
    <!-- sesi -->

    