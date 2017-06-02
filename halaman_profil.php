<?php
    include 'connect.php';
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $id = $_SESSION['id'];
    if($_SESSION['status'] == "nouser"){
        header('Location:halaman_login.php');
    }
    else if($_GET['id']){
        $id   = $_GET['id'];
	}
        $query = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
        $result = mysqli_fetch_array($query);
		$query1 = mysqli_query($con, "SELECT * FROM penjualan WHERE id_user = '$id' ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Kosan Rencana Studi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/profil.css" rel="stylesheet"/>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" 
    integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">
    <meta name="viewport" content="width=devide-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Kosan Rencana Studi">
    <script type="application/x-javascript">addEventListener("load",function(){ setTimeout(hideURLbar,0);}, false); function hideURLbar(){window.scrollTo(0,1);}</script>
    <!--Selesai untuk bagian mobile apps-->
    <link rel="stylesheet" type="text/css" href="css/boostrap.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <!--Penambahan font-->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!--Selesai untuk penambahan font-->
    <!--Javascript framework-->
    <script src="js/jquery-3.1.0.min.js"></script>
    <!--Selesai untuk javascript framework-->
    <link href="fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" />
    <!--Ini untuk scroll yang halus-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($)){
        $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
    };
    </script>
</head>

<body>
<!--header-->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p> Promo Pembukaan Kosan Rencana Studi. <a href="halaman_produk_kosan.php"> Pesan Sekarang </a></p>
			</div>
			<div class="agile-login">
				<ul>
					<?php
						if(($_SESSION['status'] == "user")) {
					?>
						<li><a href="halaman_profil.php?id=<?php echo $_SESSION['id'];?>"> Profil </a></li>
						<li><a href="hub_keluar.php"> Keluar </a></li>
					<?php
						}
						else{
					?>
						<li><a href="halaman_pendaftaran.php"> Daftar </a></li>
						<li><a href="halaman_login.php"> Masuk </a></li>
					<?php
							}
					?>
					<li><a href="halaman_hubungi_kami.php"> Hubungi Kami </a></li>
					<li><a href="halaman_produk_kosan.php"> Produk Kami </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i> Hubungi Kami di (0823) 1178 5149 </li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="halaman_depan.php">Kosan Rencana Studi</a></h1>
			</div>
		<div class="w3l_search">
			<form action="halaman_pencarian.php" method="post">
				<input type="search" name="Search" placeholder="Cari kosan atau kontrakan..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>   
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->

<!--Navigasi-->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
					</ul>
				</div>
			</nav>
		</div>
	</div>
<!--//Navigasi-->

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="halaman_depan.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Profil</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	
<!--Halaman Profile-->
	<div class="container" style="margin-top: 30px;">
		<div class="profile-head">
			<!--col-md-4 col-sm-4 col-xs-12 close-->
			<div class="col-md-4 col-sm-4 col-xs-12">
			<img src="<?php echo $result['foto_profil']?>" class="profilimg" width="400" height="400">
			<form action="hub_updatephoto.php" name="uploader" method="post" enctype="multipart/form-data">
				<div class="container" style="margin-right: 90px;">
					<input class="w3-input w3-border" type="file" name="photobaru" required=""></br>
					<button type="submit"> Unggah </button>
				</div>
			</form>
			</div>
			<!--col-md-4 col-sm-4 col-xs-12 close-->
			<div class="col-md-5 col-sm-5 col-xs-12">
				<h5><?php echo $result['nama_depan']?> <?php ?> <?php echo $result['nama_belakang']?></h5>
				<ul>
					<li><span class="glyphicon glyphicon-home"></span> <?php echo $result['alamat']?> </li>
					<li><span class="glyphicon glyphicon-phone"></span> <?php echo $result['no_telepon']?> </a></li>
					<li><span class="glyphicon fa fa-calendar"></span> <?php echo $result['tanggal_lahir']?> </a></li>
					<li><span class="glyphicon glyphicon-envelope"></span> <?php echo $result['alamat_email']?> </a></li>
				</ul>
			</div>
		</div>
		<!--profile-head close-->
	</div>
	<!--container close-->
	<br/>
	<br/>
	<div class="container">
		<div class="col-sm-12">
			<div data-spy="scroll" class="tabbable-panel">
				<div class="w3-bar w3-black">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab"> MEMBER </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab"> MENYEWAKAN </a>
						</li>
						<li>
							<a href="#tab_default_3" data-toggle="tab"> DISKUSI </a>
						</li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_default_1">
						<div class="well well-sm">
							<h4> Data Pribadi </h4>
						</div>
						<p align="right">
							<a href="halaman_edit_profil.php">
							<button type="button" class="btn btn-sm" action="hub_edit.php">
							<span class="glyphicon glyphicon-edit"></span> Ganti </button>
							</a>
						</p>
						<table class="table bio-table">
							<tbody>
								<tr>      
									<td> Nama Depan </td>
									<td>: <?php echo $result['nama_depan']?> </td> 
								</tr>
								<tr>    
									<td> Nama Belakang </td>
									<td>: <?php echo $result['nama_belakang']?></td>
								</tr>
								<tr>
									<td> Alamat Email </td>
									<td>: <?php echo $result['alamat_email']?></td>
								</tr>
								<tr>
									<td> Username </td>
									<td>: <?php echo $result['username']?></td>
								</tr>
								<tr>
									<td> Alamat Rumah </td>
									<td>: <?php echo $result['alamat']?></td>
								</tr>
								<tr>
									<td> No Telp </td>
									<td>: <?php echo $result['no_telepon']?></td>
								</tr>
								<tr>
									<td> Tanggal Lahir </td>
									<td>: <?php echo $result['tanggal_lahir']?></td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<div class="tab-pane" id="tab_default_2">
						<div class="well well-sm">
							<h4> Riwayat Menyewakan </h4>
						</div>
						<?php
							$count = 0;
							while($result1 = mysqli_fetch_array($query1)){
								$count++;
						?>
						<div class="agile_top_brands_grids">
							<div class="col-md-4 top_brand_left">
								<div class="hover14 column">
									<div class="agile_top_brand_left_grid">
										<div class="agile_top_brand_left_grid_pos">
											<a href="hub_delete.php?id=<?php echo $result1['id'] ?>"> <img style="height:25px; width;25px;" src="gambar/close_1.png" alt=" " class="img-responsive"/> </a>
										</div>
										<div class="agile_top_brand_left_grid1">
											<div class="snipcart-item block">
												<div class="snipcart-thumb">
													<a href="halaman_produk_satuan.php?id=<?php echo $result1['id'] ?>"> <img style="height:250px; width;50%;" <?php echo "src = 'produk/".$result1['produk']."';" ?> > </a>
													</br>												
													<h3> <?php echo $result1['nama_produk']; ?> </h3>
													<p> Rp <?php echo number_format($result1['harga'], 0, ", ", ". "); ?> </p>
												</div>
												<div class="snipcart-details top_brand_home_details">
													<form action="halaman_keranjang_saya.php?id=<?php echo $result1['id']?>&id_2=<?php echo $result1['id_user'] ?>" method="post">
														<input type="submit" name="submit" value="Sewa" class="button" />
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
							if($count%3==0){
							?>
								</br>
								<div class="clearfix"></div>
							<?php
								}
							}
						?>
						<div class="clearfix"></div>
						</br>
						<div class="well well-sm">
							<h4> Daftarkan Kontrakan atau Kosan </h4>
						</div>
						</br>
						<form method="post" enctype="multipart/form-data" action="hub_upload.php" class="text-left">
							<input type="file" name="gambar">
							</br>
							<h4> Jenis </h4>
							<label> <input type="radio" name="jenis" value="kosan" required=""/> kosan </label>
							<label> <input type="radio" name="jenis" value="kontrakan" required=""/> kontrakan </label>
							</br>
							</br>
							<h4> Nama </h4>
							<input type="text" name="nama_produk" placeholder="kasih nama gan" required=""/>
							</br>
							</br>
							<h4> Deskripsi </h4>
							<textarea type="text" name="deskripsi" placeholder="kasih diskripsi gan" required="" cols="50" rows="5"></textarea>
							</br>
							</br>
							<h4> Harga </h4>
							<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="harga" placeholder="harga gan" required=""/>
							</br>
							</br>
							<input type="submit" value="Unggah">
						</form>
					</div>
						
					<div class="tab-pane" id="tab_default_3">
						<div class="well well-sm">
							<h4> Diskusi </h4>
						</div>
						<?php
							$id2 = $_GET['id'];
							$tampil = mysqli_query($con, "SELECT username, a.id as id_diskusi, id_user, id_user_diisi, diskusi FROM diskusi as a INNER JOIN users as b ON a.id_user = b.id WHERE id_user_diisi='$id2' ORDER BY id_diskusi DESC");
						?>
						<form action="hub_input_diskusi.php?id=<?php echo $id2; ?>" method="post">
							<textarea name="diskusi" cols="50" rows="5"></textarea>
							</br>
							<input name="save" type="submit" value="submit"/>
						</form>
						<div class="list-group text-left">
						<?php
							while ($tampil2 = mysqli_fetch_array($tampil)){
						?>
							<a href="hub_delete_diskusi.php?id=<?php echo $tampil2['id_diskusi'] ?>"> <img style="height:25px; width;25px;" src="gambar/close_1.png" alt=" " class="img-responsive"/> </a>
							<a class="list-group-item"> <h3><?php echo $tampil2['username']; ?></h3></br> <p><?php echo $tampil2['diskusi']; ?></p> </a>
							</br>
						 <?php
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--//Halaman Profile-->

	<script type="text/javascript">
	//tab js//
	$(document).ready(function(e) {
		

	$('.form').find('input, textarea').on('keyup blur focus', function (e) {
	  
	  var $this = $(this),
		  label = $this.prev('label');

		  if (e.type === 'keyup') {
				if ($this.val() === '') {
			  label.removeClass('active highlight');
			} else {
			  label.addClass('active highlight');
			}
		} else if (e.type === 'blur') {
			if( $this.val() === '' ) {
				label.removeClass('active highlight'); 
				} else {
				label.removeClass('highlight');   
				}   
		} else if (e.type === 'focus') {
		  
		  if( $this.val() === '' ) {
				label.removeClass('highlight'); 
				} 
		  else if( $this.val() !== '' ) {
				label.addClass('highlight');
				}
		}

	});

	$('.tab a').on('click', function (e) {
	  
	  e.preventDefault();
	  
	  $(this).parent().addClass('active');
	  $(this).parent().siblings().removeClass('active');
	  target = $(this).attr('href');

	  $('.tab-content > div').not(target).hide();
	  
	  $(target).fadeIn(600);
	  
	});
	//canvas off js//
	$('#menu_icon').click(function(){
			if($("#content_details").hasClass('drop_menu'))
			{
			$("#content_details").addClass('drop_menu1').removeClass('drop_menu');
		}
			else{
				$("#content_details").addClass('drop_menu').removeClass('drop_menu1');
				}
		
		
		});
		
	//search box js//


		$("#flip").click(function(){
			$("#panel").slideToggle("5000");
		});

	// sticky js//

	$(window).scroll(function(){
		if ($(window).scrollTop() >= 500) {
		   $('nav').addClass('stick');
		}
		else {
		$('nav').removeClass('stick');
		}
	});
    </script>
	</br>
	
<!--Footer-->
	<div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-3 w3_footer_grid">
                    <h3>Kontak</h3>
                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Dramaga, Bogor</li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="#">KRS@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0823 1178 5149</li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Informasi</h3>
                    <ul class="info"> 
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="halaman_tentang_kami.php">Tentang Kami</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="halaman_hubungi_kami.php">Hubungi Kami</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="halaman_produk_kosan.php">Produk Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Profil</h3>
                    <ul class="info">
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="halaman_login.php">Masuk</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="halaman_pendaftaran.php">Daftar Akun</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        
        <div class="footer-copy">
            
            <div class="container">
                <p>© 2017 Halaman Profil Kelompok 8</p>
            </div>
        </div>
        
    </div>  
    <div class="footer-botm">
            <div class="container">
                <div class="w3layouts-foot">
                    <ul>
                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
               <div class="clearfix"> </div>
            </div>
        </div>
<!--//footer-->

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!--Selesailah slide utama-->
</body>

</html>