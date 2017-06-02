<?php
	include 'connect.php';
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
	}
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
				<p>Promo Pembukaan Kosan Rencana Studi. <a href="halaman_produk.php">Pesan Sekarang</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<?php
						if(($_SESSION['status'] == "user")) {
					?>
						<li><a href="halaman_profil.php"> Profile </a></li>
						<li><a href="keluar.php"> Keluar </a></li>
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
					<li><a href="halaman_produk.php"> Produk Kami </a></li>
				</ul>
			</div>
			<div class="product_list_header">  
					<form action="#" method="post" class="last">
						<?php
							if(($_SESSION['status'] == "user")) {
						?>
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>
					<?php
						}
					?>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Hubungi Kami di (0823) 1178 5149</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="halaman_depan.php">Kosan Rencana Studi</a></h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
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
	<!--Bagian nav Register-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="halaman_depan.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Halaman Pendaftaran</li>
			</ol>
		</div>
	</div>
	<!--Selesai bagian nav Register-->
<!--//Navigasi-->
	
<!--Bagian utama register-->
	<div class="register">
		<div class="container">
			<h2>Daftar Disini</h2>
			<div class="login-form-grids">
				<h5>Informasi Profil</h5>
				<form action="hub_daftar.php" method="post">
					<input type="text" placeholder="Nama Depan" required=" " name="nama_depan">
					<input type="text" placeholder="Nama Belakang" required=" " name="nama_belakang">
					<input type="text" placeholder="Username" required=" " name="username">
				<h6>Informasi Utama</h6>
					<input type="email" placeholder="Alamat email anda" required=" " name="alamat_email">
					<input type="password" placeholder="Kata Sandi" required=" " id="kata_sandi" name="kata_sandi">
					<input type="password" placeholder="Konfirmasi Kata Sandi" required=" " name="kata_sandi2">
					<div class="register-check-box">
						<div class="check">
							<label class="item"><input type="checkbox" name="checkbox" required><i> </i>Saya menerima syarat dan ketentuan yang berlaku</label>
						</div>
					</div>
					<input type="submit" value="Daftar">
				</form>
			</div>
			<div class="register-home">
				<h4>Sudah memiliki akun?</h4><br><a href="halaman_login.php">Masuk</a>
			</div>
		</div>
	</div>
<!--Selesai bagian utaama register-->
	
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
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="halaman_produk.php">Produk Kami</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profil</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="halaman_keranjang_saya.php">Keranjang Saya</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="halaman_login.php">Masuk</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="halaman_pendaftaran.php">Daftar Akun</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2017 Halaman Pendaftaran Kelompok 8</p>
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
			<div class="payment-w3ls">	
				<img src="images/card.png" alt=" " class="img-responsive">
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--Sudah berakhir untuk footer-->

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
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
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
