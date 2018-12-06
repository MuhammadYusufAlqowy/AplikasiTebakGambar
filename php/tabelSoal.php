<?php require_once("../php/koneksi.php") ?>

<!DOCTYPE html>
<html>
<head>
    <title>Koneksi Databse PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container p-5 bg-white">
        <h3 class="display-3s">Tabel Soal Aplikasi Tebak Gambar</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Deskripsi</th>
                    <th>Poin</th>
                    <th>Jawaban</th>
                    <th>Gambar</th>
                    <th></th>
                </tr>
            </thead>
                <?php $query = mysqli_query($koneksi,"SELECT * FROM tbSoal"); 
                $i=0;
                while($record = mysqli_fetch_array($query)) 
                { 
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $record["id_soal"]; ?></td>
                    <td><?php echo $record["deskripsi"]; ?></td>
                    <td><?php echo $record["poin"]; ?></td>
                    <td><?php echo $record["jawaban"]; ?></td>
                    <td><img src="../source/image/ echo <?php $record['gambar']; ?>" width=200px height=200px /></td>
                    <td><button class="btn btn-danger" type="button">Hapus</button></td>
                </tr>	
                <?php
                }
                ?>	
        </table>
        <br>
        <button onclick="Back()" class="btn btn-primary">Kembali</button>
        <button class="btn btn-primary">Tambah Soal</button>
    </div>
	<script type="text/javascript">
		function Back(){
			window.location ="index.php";
		}
        function TambahSoal() {
            window.location ="../php/tambahSoal.php";
        }
	</script>
</body>
</html>
<?php
mysqli_close($koneksi);
?>
