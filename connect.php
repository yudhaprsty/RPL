<?php

	$con = mysqli_connect('localhost','root','','kartu_rencana_kosan') or die ("gagal" .mysqli_error());

	session_start();

	if(!(isset($_SESSION['id']))) {
		$_SESSION['status'] = 'nouser';
	}

?>