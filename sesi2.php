<?php include_once("koneksi.php") ?>
<!-- sesi -->
        <div class="container text-warning text-center pt-5" id="sesi2" >
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?php 
                    $query = mysqli_query($koneksi,@"SELECT * FROM tbsoal where id_soal = 1");
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
                        <button type="submit" class="btn btn-outline-warning p-0 m-0" name="jawaban" value="d" style="width:250px;">
                            <img src="https://img.icons8.com/color/480/000000/creek.png" alt="" style="height: 150px; width: 150px;">
                            <h2>Sungai</h2>
                        </button>
                    </div>
                    <div class="col-sm-6 col-md-6">
                         <button type="submit" class="btn btn-outline-warning p-0 m-0" name="jawaban" value="d" style="width:250px;">
                            <img src="https://img.icons8.com/color/480/000000/cave.png" alt="" style="height: 150px; width: 150px;">
                            <h2>Gua</h2>
                        </button>
                    </div>
                </div>
                <div class="row p-3 mt-3 mx-auto h-50" style="width: 600px; height: 300px;">
                    <div class="col-sm-6 col-md-6 ">
                         <button type="submit" class="btn btn-outline-warning p-0 m-0" name="jawaban" value="hutan" style="width:250px;">
                            <img src="https://img.icons8.com/color/480/000000/nature.png" alt="" style="height: 150px; width: 150px;">
                            <h2>Hutan</h2>
                        </button>
                    </div>
                    <div class="col-sm-6 col-md-6">
                         <button type="submit" class="btn btn-outline-warning p-0 m-0" name="jawaban" value="d" style="width:250px;">
                            <img src="https://img.icons8.com/color/480/000000/forest.png" alt="" style="height: 150px; width: 150px;">
                            <h2>Pohon</h2>
                        </button>
                    </div>
                </div>
                 <input type="hidden" name="sesi" value="1">
            </form>
        </div>
        <!-- sesi -->

        
