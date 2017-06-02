<?php
	include 'connect.php';
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
	}
	$query1 = mysqli_query($con, "SELECT * FROM penjualan WHERE jenis = 'kosan' ORDER BY id DESC");
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
				<p>Promo Pembukaan Kosan Rencana Studi. <a href="halaman_produk_kosan.php">Pesan Sekarang</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<?php
						if(($_SESSION['status'] == "user")) {
					?>
						<li><a href="halaman_profil.php"> Profil </a></li>
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
					<li><i class="fa fa-phone" aria-hidden="true"></i>Hubungi Kami di (0823) 1178 5149</li>
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

<!--Ini adalah nav header untuk halaman produk-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li ><a href="halaman_depan.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Produk Kami</li>
			</ol>
		</div>
	</div>
<!--Ini adalah bagian akhir nav header-->

<!--Ini mulai masuk bagian inti produk-->
	<div class="products">
		<div class="container">
			<div class="col-md-4 product-left">
				<div class="categories">
					<h2>Kategori</h2>
					<ul class="cate">
						<li><a href="halaman_produk_kosan.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Kosan</a></li>
						<li><a href="halaman_produk_kontrakan.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Kontrakan</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8 products-right">
				<?php
					$count = 0;
					while($result1 = mysqli_fetch_array($query1)){
						$count++;
				?>
				<div class="agile_top_brands_grids">
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="halaman_produk_satuan.php?id=<?php echo $result1['id'] ?>"> <img style="height:150px; width;100%;" <?php echo "src = 'produk/".$result1['produk']."';" ?> > </a>
												</br>
												<h4> <?php echo $result1['nama_produk']; ?> </h4>
												<p> Rp <?php echo number_format($result1['harga'], 0, ", ", ". "); ?> </p>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<?php
													if(($_SESSION['status'] == "user")) {
												?>
												<form action="halaman_keranjang_saya.php?id=<?php echo $result1['id']?>&id_2=<?php echo $result1['id_user'] ?>" method="post">
													<input type="submit" name="submit" value="Sewa" class="button">
												</form>
												<?php
													}
													else{
												?>
													<form action="halaman_login.php" method="post" >
														<input type="submit" name="submit" value="Sewa" class="button"/>
													</form>
												<?php
													}
												?>
											</div>
										</div>
									</figure>
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
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--Ini adalah bagian akhir halaman produk-->

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
				<p>© 2017 Halaman Produk Kelompok 8</p>
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