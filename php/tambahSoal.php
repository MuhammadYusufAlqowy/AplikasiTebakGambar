<?php require_once("../php/koneksi.php") ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
</head>

<body>
    <div class="container p-5">
        <form action="" method="POST">
            <div class="form-group">
                <label for="deskripsi">Deskripsi </label>
                <input class="form-control" type="text" id="deskripsi" placeholder="Deskripsi Soal" name="des">
            </div>
            <div class="form-group">
                <label for="poin">Poin </label>
                <input class="form-control" type="text" id="poin" placeholder="Nilai Poin Soal" name="poin">
            </div>
            <div class="form-group">
                <label for="jwb">Jawaban </label>
                <input class="form-control" type="text" id="jwb" placeholder="Jawaban Soal" name="jwb">
            </div>
            <div class="form-group" id="upload">
                <label for="gambar">Upload Gambar Soal </label>
                <input type="file" class="form-control-file border" id="gambar" name="gambar" onChange="loadGambar()">
            </div>
            <img id="tampilGambar" width=200px height=200px>
            <button type="button" class="btn btn-light mt-5" style="border-radius:25px;">Batal</button>
            <button type="submit" class="btn btn-primary mt-5" style="border-radius:25px;" name="login" value="login">Login</button>
        </form>
    </div>
    <script>
        function loadGambar(){
            var inputFile = document.getElementById('file');
            var pathFile = inputFile.value;
            var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            if(!ekstensiOk.exec(pathFile)){
                document.getElementById('upload') += "<br> <div id='notice'>Pastikan Yang Anda Inputkan Adalah gambar!</div>"
                document.getElementById('gambar').value = null;
            }else{
                var read = new FileReader();
                read.readAsDataURL(document.getElementById("gambar").files[0]);
                read.onload = function (e) {
                    document.getElementById("tampilGambar").src = e.target.result;
                };
            }
            
        }
    </script>
</body>
</html>


<?php
    $file=$_FILES['gambar']['name'];
    $tmp_dir=$_FILES['gambar']['tmp_name'];
    $ukuran=$_FILES['gambar']['size'];

    $direktori='../source/image/soal/'; //path tempat simpan
    $ektensi=strtolower(pathinfo($file, PATHINFO_EXTENSION)); //dapatkan info gambar
    $valid_ektensi=array('jpeg','jpg','png','gif'); //ektensi yang dibloehin
    $gambar=rand(1000,1000000).".".$ektensi;

    if(in_array($ektensi, $valid_ektensi)){
        if(!$ukuran < 1000000) {
        move_uploaded_file($tmp_dir, $direktori.$gambar);

        }
    }


?>

<script src="https://www.gstatic.com/firebasejs/5.6.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBJGrVpgulva4Rsba5ZEkRyaS7PyIiBUtw",
    authDomain: "projektebakgambar.firebaseapp.com",
    databaseURL: "https://projektebakgambar.firebaseio.com",
    projectId: "projektebakgambar",
    storageBucket: "projektebakgambar.appspot.com",
    messagingSenderId: "589042120643"
  };
  firebase.initializeApp(config);
</script>