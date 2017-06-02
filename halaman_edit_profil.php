 <?php
    include 'connect.php';
    
    if($_SESSION['status'] == "nouser"){
        header('Location:halaman_login.php');
    }
    else{
        $id = $_SESSION['id'];
        $query = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
        $result = mysqli_fetch_array($query);
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

<!--Breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="halaman_depan.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active"> Ganti Profil</li>
			</ol>
		</div>
	</div>
<!--//Breadcrumbs-->
	
<!--halaman edit-->
	<div class="container">
		<?php 
			if(($_SESSION['status'] == "user")) {
		?>     
		<form class="form-horizontal" action="hub_edit.php" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2"> Nama Depan :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama_depan" value="<?php echo $result['nama_depan']; ?>" style="width: 50%">
				</div>
			</div>
		   <div class="form-group">
				<label class="control-label col-sm-2">Nama Belakang :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama_belakang" value="<?php echo $result['nama_belakang']; ?>" style="width: 50%">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Alamat Email :</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="alamat_email" value="<?php echo $result['alamat_email']; ?>" style="width: 50%">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Username :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="username" value="<?php echo $result['username']; ?>" style="width: 50%">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Alamat Rumah:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="alamat" value="<?php echo $result['alamat']; ?>" style="width: 50%">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">No Telp :</label>
				<div class="col-sm-10">
					<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="no_telepon" value="<?php echo $result['no_telepon']; ?>" style="width: 50%">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Tanggal Lahir :</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $result['tanggal_lahir']; ?>" style="width: 50%">
				</div>
			</div>
			<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn" name="update" value="Save" style="width: 30%">
				</div>
			</div>
		</form>
		<?php 
			}
		?>
	</div>
<!--//halaman edit-->

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
                <p>© 2017 Halaman Edit Profil Kelompok 8</p>
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
<?php
    }
?>