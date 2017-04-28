<!DOCTYPE html>
<html>
<head>
	<title>Kosan Rencana Studi</title>
	<!--Untuk aplikasi mobile-->
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
	});
	</script>
	<!--Ini untuk memulai scroll yang halus-->
</head>

<body>
	<!--header-->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>Promo Pembukaan Kosan Rencana Studi . <a href="halaman_produk.php">Pesan Sekarang</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="halaman_pendaftaran.php"> Daftar  </a></li>
					<li><a href="halaman_login.php">Masuk</a></li>
					<li><a href="halaman_hubungi_kami.php">Hubungi Kami</a></li>
					<li><a href="halaman_produk.php">Produk Kami</a></li>
				</ul>
			</div>
			<div class="product_list_header">  
					<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
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
	<!--Ini adalah bagian nav untuk halaman login-->
		<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="halaman_depan.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Halaman Masuk</li>
			</ol>
		</div>
	</div>
	<!--Ini adalah bagian akhir nav untuk halaman login-->
	<!--Mulai Masuk Login-->
	<div class="login">
		<div class="container">
			<h2>Masuk KRS</h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post" action="database/hub_masuk.php">
					<input type="email" placeholder="Masukkan Email anda" required=" " name="Alamat_Email">
					<input type="password" placeholder="Masukkan Kata Sandi Anda" required=" " name="Kata_Sandi" >
					<div class="forgot">
						<a href="#">Lupa Kata Sandi?</a>
					</div>
					<input type="submit" value="Masuk">
				</form>
			</div>
			<div class="register-home">
				<h4>Belum memiliki akun?</h4><br><a href="halaman_pendaftaran.php">Daftar</a>
			</div>
		</div>
	</div>
	<!--Sudah selesai loginnya Login-->
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
				<p>© 2017 Halaman Masuk Kelompok 8</p>
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
	<!--Boostrap Inti Js-->
		<script src="js/boostrap.min.js"></script>

	<!--Header paling atas dan untuk slider-->
	<!--Untuk untuk icon scroll-->
		<script type="text/javascript">
			$(document).ready(function(){
				$().UItoTop({easingType: 'easeOutQuart'});
			});
		</script>
	<!--selesai script untuk ikon scroll-->
		<script src="js/minicart.min.js"></script>
		<script>
			//mini cart
			paypal.minicart.render({
				action: '#';
			})

			if(~window.location.search.indexOf('reset=true')){
				paypal.minicart.reset();
			}
		</script>
	<!--Untuk slider-banner utama-->
	<script src="js/skdslider.min.js"></script>
	<link href="css/skdslider.css" rel="stylesheet" />
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000, 'showNextPrev': true, 'showPlayButton': true, 
			'animationType': 'fading'});

			jQuery('#responsive').change(function(){
				$('#responsive_wrapper').width(jQuery(this).val());
			});
		});
	</script>
<!--Selesailah slide utama-->
</body>
</html>