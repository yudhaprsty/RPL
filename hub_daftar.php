<?php
	include "connect.php";

	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$username = $_POST['username'];
	$alamat_email = $_POST['alamat_email'];
	$kata_sandi = $_POST['kata_sandi'];
	$kata_sandi2 = $_POST['kata_sandi2'];
	
	$query = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE username = '$username'"));
	$query2 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE alamat_email = '$alamat_email'"));
	
	if($query > 0){
?>
		<script language="javascript">alert("username telah digunakan");</script>
		<script> document.location.href='halaman_pendaftaran.php';</script>	
<?php
	}
	
	else if($query2 > 0){
?>
		<script language="javascript">alert("email telah digunakan");</script>
		<script> document.location.href='halaman_pendaftaran.php';</script>	
<?php
	}
	
	else{
		if ($kata_sandi == $kata_sandi2) {
		$insert_query = mysqli_query($con, "INSERT INTO users (id, nama_depan, nama_belakang, username, alamat_email, kata_sandi)
		VALUES ('','$nama_depan', '$nama_belakang', '$username', '$alamat_email', '$kata_sandi')");

		if($insert_query){
?>
			<script language="javascript">alert("input berhasil");</script>
			<script> document.location.href='halaman_login.php';</script>
<?php
		}
		else{
?>
			<script language="javascript">alert("input tidak berhasil");</script>
			<script> document.location.href='halaman_pendaftaran.php';</script>
<?php
		}
	}

	else {
?>
	<script language="javascript">alert("Password tidak sama");</script>
			<script> document.location.href='halaman_pendaftaran.php';</script>

<?php
	}
	
	mysqli_close($con);
	}
?>