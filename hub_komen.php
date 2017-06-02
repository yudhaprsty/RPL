<?php
	include 'connect.php';

	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
	}
	
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	
	if(($_SESSION['status'] == "user")) {
		$id = $_SESSION['id'];
		$namadepan = $result['nama_depan'];
		$namabelakang = $result['nama_belakang'];
		$emailkomen = $result['alamat_email'];
		$komentar = $_POST['Message'];
		$insert_query = mysqli_query($con, "INSERT INTO comment (Nama_Depan, Nama_Belakang, Nama_Komen, Email, Message) VALUES ('$namadepan', '$namabelakang', '', '$emailkomen','$komentar')");

	if($insert_query){
?>
		<script language="javascript">alert("input berhasil");</script>
		<script> document.location.href='halaman_hubungi_kami.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("input tidak berhasil");</script>
		<script> document.location.href='halaman_hubungi_kami.php';</script>
<?php
	}
	mysqli_close($con);


	}
	else {
		$nama_komentar = $_POST['Name'];
		$email_komentar = $_POST['Email'];
		$komentar = $_POST['Message'];

		$insert_query = mysqli_query($con, "INSERT INTO comment (Nama_Depan, Nama_Belakang, Nama_Komen, Email, Message)
		VALUES ('','','$nama_komentar', '$email_komentar', '$komentar')");

		if($insert_query){
?>
		<script language="javascript">alert("input berhasil");</script>
		<script> document.location.href='halaman_hubungi_kami.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("input tidak berhasil");</script>
		<script> document.location.href='halaman_hubungi_kami.php';</script>
<?php
	}
	mysqli_close($con);
	}
?>


