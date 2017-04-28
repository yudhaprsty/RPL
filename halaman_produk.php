<!DOCTYPE html>
<html>
<head>
	<title>Kosan Rencana Studi</title>
	<script type="application/x-javascript">addEventListener("load",function(){ setTimeout(hideURLbar,0);}, false); function hideURLbar(){window.scrollTo(0,1);}</script>

	<link rel="stylesheet" type="text/css" href="css/boostrap.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<link rel="stylesheet" href="css/font-awesome.css">

	<script src="js/jquery-3.1.0.min.js"></script>

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
	<!--Ini adalah nav header untuk halaman produk-->
		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
					<li ><a href="halaman_depan.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
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
							<li><a href="halaman_produk.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Kosan</a></li>
							<li><a href="halaman_produk.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Kontrakan</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-8 products-right">
					<div class="products-right-grid">
						<div class="products-right-grids">
							<div class="sorting">
								<select id="country" onchange="change_country(this.value" class="frm-field required sect">
									<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tanpa Pengurutan</option>
									<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Urutan Popularitas</option>
									<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Urutan Peringkat</option>
									<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Urutan Harga</option>
								</select>
							</div>
							<div class="sorting-left">
								<select id="country1" onchange="change_country(this.value" class="frm-field required select">
									<option class="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>
									Tampilkan item</option>
									<option class="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tampilkan item</option>
									<option class="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tampilkan item</option>
								</select>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="agile_top_brands_grids">
						<div class="col-md-4 top_brand_left">
							<div class="hover14 column">
								<div class="agile_top_brand_left_grid">
									<div class="agile_top_brand_left_grid_pos">
										<img src="gambar/.png" alt=" " class="img-responsive">
									</div>
									<div class="agile_top_brand_left_grid1">
										<figure>
											<div class="snipcart-item block">
												<div class="snipcart-thumb">
													<a href="halaman_produk_satuan.php"><img title=" " alt=" " src="gambar.png"></a>
													<p>Kosan Pertama</p>
													<h4>Rp. 100.000</h4>
												</div>
												<div class="snipcart-details top_brand_home_details">
													<form action="#" method="post">
														<fieldset>
															<input type="hidden" name="cmd" value="_cart">
															<input type="hidden" name="add" value="1">
															<input type="hidden" name="business" value=" ">
															<input type="hidden" name="item_name" value="Kosan Pertama">
															<input type="hidden" name="amount" value="100.000">
															<input type="hidden" name="currency_code" value="IDR"
															>
															<input type="hidden" name="return" value=" ">
															<input type="hidden" name="cancel_return" value=" ">
															<input type="submit" name="submit" value="Add to cart" class="button">	
														</fieldset>
													</form>
												</div>
											</div>
										</figure>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 top_brand_left">
							<div class="hover14 column">
								<div class="agile_top_brand_left_grid">
									<div class="agile_top_brand_left_grid_pos">
										<img src="gambar/.png" alt=" " class="img-responsive">
									</div>
									<div class="agile_top_brand_left_grid1">
										<figure>
											<div class="snipcart-item block">
												<div class="snipcart-thumb">
													<a href="halaman_produk_satuan.php"><img title=" " alt=" " src="gambar.png"></a>
													<p>Kosan Kedua</p>
													<h4>Rp. 150.000</h4>
												</div>
												<div class="snipcart-details top_brand_home_details">
													<form action="#" method="post">
														<fieldset>
															<input type="hidden" name="cmd" value="_cart">
															<input type="hidden" name="add" value="1">
															<input type="hidden" name="business" value=" ">
															<input type="hidden" name="item_name" value="Kosan Kedua">
															<input type="hidden" name="amount" value="150.000">
															<input type="hidden" name="currency_code" value="IDR"
															>
															<input type="hidden" name="return" value=" ">
															<input type="hidden" name="cancel_return" value=" ">
															<input type="submit" name="submit" value="Add to cart" class="button">	
														</fieldset>
													</form>
												</div>
											</div>
										</figure>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 top_brand_left">
							<div class="hover14 column">
								<div class="agile_top_brand_left_grid">
									<div class="agile_top_brand_left_grid_pos">
										<img src="gambar/.png" alt=" " class="img-responsive">
									</div>
									<div class="agile_top_brand_left_grid1">
										<figure>
											<div class="snipcart-item block">
												<div class="snipcart-thumb">
													<a href="halaman_produk_satuan.php"><img title=" " alt=" " src="gambar.png"></a>
													<p>Kosan Ketiga</p>
													<h4>Rp. 180.000</h4>
												</div>
												<div class="snipcart-details top_brand_home_details">
													<form action="#" method="post">
														<fieldset>
															<input type="hidden" name="cmd" value="_cart">
															<input type="hidden" name="add" value="1">
															<input type="hidden" name="business" value=" ">
															<input type="hidden" name="item_name" value="Kosan Ketiga">
															<input type="hidden" name="amount" value="180.000">
															<input type="hidden" name="currency_code" value="IDR"
															>
															<input type="hidden" name="return" value=" ">
															<input type="hidden" name="cancel_return" value=" ">
															<input type="submit" name="submit" value="Add to cart" class="button">	
														</fieldset>
													</form>
												</div>
											</div>
										</figure>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<nav class="numbering">
						<ul class="pagination paging">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
							<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
							</li>
						</ul>
					</nav>
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