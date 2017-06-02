<?php
	include"connect.php";
	
	$id = $_GET['id'];
	$sql_delete = "DELETE FROM diskusi WHERE id = '$id'";
	if (mysqli_query($con, $sql_delete)){
?>
		<script language="javascript">alert("Delete Item Successful");</script>
		<script>document.location.href='halaman_profil.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Something Wrong. Delete Item Failed");</script>
		<script>document.location.href='halaman_profil.php;</script>
<?php
	}
	mysqli_close($con);
?>