<?php
	include 'connect.php';

	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
	}

	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

	if(($_SESSION['status'] == "user")) {
		$first_name = $_POST['nama_depan'];
		$last_name = $_POST['nama_belakang'];
		$email_profil = $_POST['alamat_email'];
		$username_profil = $_POST['username'];
		$alamat = $_POST['alamat'];
		$notel = $_POST['no_telepon'];
		$tgl = $_POST['tanggal_lahir'];

		$query4= mysqli_query($con, "UPDATE users SET nama_depan='$first_name', nama_belakang='$last_name', alamat_email='$email_profil', username='$username_profil', alamat='$alamat', no_telepon='$notel', tanggal_lahir='$tgl' WHERE id='{$result['id']}'");

		if($query4) {
?>
		<script> document.location.href='halaman_profil.php';</script>
<?php
		}
		else{
?>
		<script language="javascript">alert("input tidak berhasil");</script>
		<script> document.location.href='halaman_profil.php';</script>
<?php
		}
	mysqli_close($con);
		}
	
?>