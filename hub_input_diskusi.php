<?php
	include ('connect.php');
	$id = $_SESSION['id'];
	$id_user = $_GET['id'];
	$diskusi = $_POST['diskusi'];
	$query = "INSERT INTO diskusi (id_user ,id_user_diisi, diskusi) VALUES ('$id','$id_user','$diskusi')";
	$data = mysqli_query($con,$query);
	
	if ($data){
?>
	<script> document.location.href='halaman_profil.php?id=<?php echo $id_user; ?>';</script>
<?php
	}
	else {
?>
	<script language="javascript">alert("gagal");</script>
	<script> document.location.href='halaman_profil.php?id=<?php echo $id_user; ?>';</script>
<?php
	}
	mysqli_close($con);
?>