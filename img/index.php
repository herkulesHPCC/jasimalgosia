<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'connect.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Galeria Piekarstwo-Cukiernictwo Jaś i Małgosia Romanowscy Spółka Jawna</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- for-gallery-rotation -->
<script src="../js/modernizr.custom.97074.js"></script>
<!-- //for-gallery-rotation -->
<!-- FlexSlider -->
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
<script defer src="../js/jquery.flexslider.js"></script>
<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
<!-- //FlexSlider -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">
<script type="text/javascript" src="../js/sticky.js"></script>
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <div class="logo">
							<h1><a class="navbar-brand" href="../index.php"><img class="logo" style=" border: 0px !important; height:80%; width:20%;" src="../images/logo.png" style='width:30%;' ></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
						<li class="hvr-sweep-to-bottom active"><a href="../index.php#gallery">Powrót do galerii</a></li>
						
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->



<!-- gallery -->
	<div id="gallery" class="gallery">
		<div class="container"></br></br></br></br>
			<h3>Galeria - <?php echo ' '.$_GET['kategoria'].''; ?></h3>
		
			<div class="gallery-grids" >
				<section>
					<ul id="da-thumbs" class="da-thumbs">

						<?php

						$grupa = $_GET['id'];
						if ($grupa < 6)
						{
						echo '<p>Szanowny Kliencie informujemy, iż zamówiony tort może nieco odbiegać od tortu ze zdjęcia. Do dekoracji tortów używamy owoców sezonowych dostępnych w zależności od pory roku.<p></br>';
						}
						 $pdo = $pdo->query( "SELECT * FROM img WHERE grupa = '$grupa' order by nr DESC ");

						 foreach( $pdo->fetchAll() as $value ) {
							echo '<li style="">
							<a style=" width: 330px !important; height: 250px !important;" href="torty/' . $value['nr'] . '.jpg" class=" mask b-link-stripe b-animate-go "  title="">
								<img  class="hover-shadow" style=" width: 330px !important; height: 250px !important; border:1px solid #FF9900;" src="torty/'. $value['nr'] .'.jpg" alt="" />
								<div>
									<h5>' . $value['nazwa'] . '</h5>
									<span>' . $value['nr'] . '</span>
								</div>
							
							</a>
							<center>'. $value['nr'] .'</center></br>
						</li>';
						
						 }
						
						?>
					</ul>
					

				</section>
				
				<script type="text/javascript" src="../js/jquery.hoverdir.js"></script>	
				<script type="text/javascript">
					$(function() {
					
						$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

					});
				</script>
			</div>
		</div>
		
	</div>
<!-- //gallery -->
<
	<div class="copy">
		<div class="container">
			<div class="copy-left-w3l-agile">
				<p>© 2017 Piekarnia Cukiernia Jaś i Małgosia | Zaprojektowane i stworzone przez <a href="http://herkues.com.pl">Herkules</a></p>
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="#" class="fb"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#" class="gg"></a></li>
					<li><a href="#" class="pn"></a></li>					
				</ul>	
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

		<script src="js/bootstrap.js"> </script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
						
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>

</body>
</html>