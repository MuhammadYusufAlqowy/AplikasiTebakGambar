<?php
    require_once("../php/koneksi.php");
?>
<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];
	// print_r($_POST);
	$query = mysqli_query($koneksi,"select * from tbAdmin where username ='$username' and password ='$password'");
	$cek = mysqli_num_rows($query);
	echo($cek);
	if($cek > 0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = 'login';
		?>
			<script type="text/javascript">
				window.location = "../php/tabelSoal.php";
				alert("Login Sukses!");
			</script>
			<?php
	}else{
		?>
			<script type="text/javascript">
				window.location = "../html/admin.html";
				alert("Login Gagal!");	
			</script>
			<?php
	}
?>
