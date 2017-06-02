<?php
	include 'connect.php';
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
	}
	$batas = 3;
	$query1 = mysqli_query($con, "SELECT * FROM penjualan ORDER BY id DESC");
	$query2 = mysqli_query($con, "SELECT * FROM penjualan WHERE jenis = 'kosan' ORDER BY id DESC LIMIT $batas");
	$query3 = mysqli_query($con, "SELECT * FROM penjualan WHERE jenis = 'kontrakan' ORDER BY id DESC LIMIT $batas");
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
					<li><i class="fa fa-phone" aria-hidden="true"></i>Hubungi Kami di (0823) 1178 5149</li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="halaman_depan.php">Kosan Rencana Studi</a></h1>
			</div>
		<div class="w3l_search">
			<form action="halaman_pencarian.php" method="post">
				<input type="search" name="search" placeholder="Cari kosan atau kontrakan..." required="">
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
	<!--slider-->
	<ul id="demo1">
		<li>
			<img src="gambar/gambar1.jpg" alt="" />
			<!--Ini adalah awal slide-->
			<div class="slide-desc">
				<h3>Produk Terbaru</h3>
			</div>
		</li>
		<li>
			<img src="gambar/gambar2.jpg" alt="" />
			<div class="slide-desc">
				<h3>Produk Terlaris</h3>
			</div>
		</li>
		<li>
			<img src="gambar/gambar3.jpg" alt="" />
			<div src="slide-desc">
				<h3>Produk Tercari</h3>
			</div>
		</li>
	</ul>
	<!--//slider-->
<!--//Navigasi-->

<!--Top Kosan-->
	<div class="top-brands">
		<div class="container">
		<h2>Produk Pilihan</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Kosan Pilihan</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Kontrakan Pilihan</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp">
								<h5>Kosan Pilihan Kami</h5>
							</div>
							<?php
								$count = 0;
								while($result2 = mysqli_fetch_array($query2)){
									$count++;
							?>
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="halaman_produk_satuan.php?id=<?php echo $result2['id'] ?>"> <img style="height:250px; width;50%;" <?php echo "src = 'produk/".$result2['produk']."';" ?> > </a>
															</br>
															<h3> <?php echo $result2['nama_produk']; ?> </a> </h3>
															<p> Rp <?php echo number_format($result2['harga'], 0, ", ", ". "); ?> </p>
														</div>
														<div class="snipcart-details top_brand_home_details">
														<?php
															if(($_SESSION['status'] == "user")) {
														?>
															<form action="halaman_keranjang_saya.php?id=<?php echo $result2['id'] ?>&id_2=<?php echo $result2['id_user'] ?>" method="post">
																<input type="submit" name="submit" value="Sewa" class="button"/>
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
						
						<div role="tabpanel" class="tab-pane fade " id="tours" aria-labelledby="tours-tab">
							<div class="agile-tp text">
								<h5>Kontrakan Pilihan Kami</h5>
							</div>
							<?php
								$count = 0;
								while($result3 = mysqli_fetch_array($query3)){
									$count++;
							?>
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="halaman_produk_satuan.php?id=<?php echo $result3['id'] ?>"> <img style="height:250px; width;50%;" <?php echo "src = 'produk/".$result3['produk']."';" ?> > </a>
															</br>
															<h3> <?php echo $result3['nama_produk']; ?> </h3>
															<p> Rp <?php echo number_format($result3['harga'], 0, ", ", ". "); ?> </p>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<?php
																if(($_SESSION['status'] == "user")) {
															?>
																<form action="halaman_keranjang_saya.php?id=<?php echo $result3['id'] ?>&id_2=<?php echo $result3['id_user'] ?>" method="post">
																	<input type="submit" name="submit" value="Sewa" class="button"/>
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
					</div>
				</div>
			</div>
		</div>
	</div>
<!--//Top Kosan-->

<!--Bagian produk terbaru kami-->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>Penawaran Produk Terbaru</h3>
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
												<a href="halaman_produk_satuan.php?id=<?php echo $result1['id'] ?>"> <img style="height:250px; width;10%;" <?php echo "src = 'produk/".$result1['produk']."';" ?> > </a>
												</br>
												<h4> <?php echo $result1['nama_produk']; ?> </h4>
												<p> Rp <?php echo number_format($result1['harga'], 0, ", ", ". "); ?> </p>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<?php
													if(($_SESSION['status'] == "user")) {
												?>
													<form action="halaman_keranjang_saya.php?id=<?php echo $result1['id']?>&id_2=<?php echo $result1['id_user'] ?>" method="post">
														<input type="submit" name="submit" value="Sewa" class="button"/>
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
		</div>
	</div>		
<!--Sudah berakhir untuk produk terbaru-->
	
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
                <p>© 2017 Halaman Depan Kelompok 8</p>
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