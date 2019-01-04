<?php include_once("koneksi.php")?>
<?php
    error_reporting(0);
    $sesi = $_POST['sesi'];
    if(isset($_POST['jawaban'])){
        $query = mysqli_query($koneksi,"SELECT * FROM tbsoal WHERE id_soal = ".$sesi);
        $jawaban = mysqli_fetch_array($query);
        if($_POST['jawaban'] == $jawaban['jawaban']){
            if($sesi != 4){
                ?>
                    <script>
                        var ok = confirm("Hore Kamu Benar, Ayo Lanjut Main?");
                    if(ok){
                        window.location.href = "game.php#!/sesi<?php echo $sesi+2 ?>";
                    }else{
                        window.location.href = "index.html";
                    }
                    </script>
                <?php
            }else if ($sesi == 4){
                ?>
                    <script>
                        var ok = alert("Hore Kamu Berhasil Menjawab Semuanya! Aku Punya Video Buat Kamu.");
                        window.location.href = "game.php#!/sesi<?php echo $sesi+2 ?>";
                    </script>
                <?php
            }
        }
        else{
            ?>
            <script>
                var ok = confirm("Wah Sepertinya Kamu Belum Benar, Ayo Coba Lagi?");
                if(ok){
                    window.location.href = "game.php#!/sesi<?php echo $sesi+1 ?>";
                }else{
                    window.location.href = "index.html";
                }
            </script>
            <?php
        }
    }


?>