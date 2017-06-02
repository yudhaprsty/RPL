<?php
	include "connect.php";
	 	// error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$username = $_POST['username'];
		$kata_sandi = $_POST['kata_sandi'];

	$query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' AND kata_sandi ='$kata_sandi'");
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	
	if($row){
		$_SESSION['id'] = $row['id'];
		$_SESSION['status'] = "user";
?>

<?php
		$id = $_SESSION['id'];
		$query2 = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
					$result = mysqli_fetch_array($query2);
					$author = $result['id_status'];
		if($author == 1)
		{
?>
		<script> document.location.href='halamanadmin/halaman_depan.php';</script>
<?php
		}
		else {
?>
		<script> document.location.href='halaman_depan.php';</script>
<?php
		}
	}
	else{
?>
		<script language="javascript">alert("login tidak berhasil");</script>
		<script> document.location.href='halaman_login.php';</script>
<?php
	}
	mysqli_close($con);
?>