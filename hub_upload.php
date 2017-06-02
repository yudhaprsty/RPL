<?php
	include "connect.php";

	$id = $_SESSION['id'];
	$nama_file = $_FILES['gambar']['name'];
	$ukuran_file = $_FILES['gambar']['size'];
	$tipe_file = $_FILES['gambar']['type'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
	$jenis_produk = $_POST['jenis'];
	$deskripsi = $_POST['deskripsi'];
	$nama_produk = $_POST['nama_produk'];
	$harga = $_POST['harga'];
	$namabaru = time().$nama_file;
	$path = "produk/".$namabaru;

	if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
		if($ukuran_file <= 1000000){
			if(move_uploaded_file($tmp_file, $path)){
			$query = "INSERT INTO penjualan (nama_produk, produk, ukuran, tipe, id_user, deskripsi, harga, jenis)
					VALUES ('$nama_produk', '$namabaru', '$ukuran_file', '$tipe_file', '$id', '$deskripsi', '$harga', '$jenis_produk')";
			$sql = mysqli_query($con, $query);
			if($sql){
?>
				<script>document.location.href='halaman_profil.php?id=<?php echo $_SESSION['id'];?>';</script>
<?php
			}
			else{
?>
				<script language="javascript">alert("Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.");</script>
				<script>document.location.href='halaman_profil.php?id=<?php echo $_SESSION['id'];?>';</script>
<?php
				}
			}
		else{
?>
			<script language="javascript">alert("Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB.");</script>
			<script>document.location.href='halaman_profil.php?id=<?php echo $_SESSION['id'];?>';</script>
<?php
		}
	}
	else{
?>
		<script language="javascript">alert("Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.");</script>
		<script>document.location.href='halaman_profil.php?id=<?php echo $_SESSION['id'];?>';</script>
<?php
		}
	}
?>