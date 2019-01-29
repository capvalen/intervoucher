<?php
$json = file_get_contents('http://perugamecard.com/precios.json');
$obj = json_decode($json,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Process - Buy Game Cards With Bitcoin, also Prepaid Cards &amp; Gift Cards.</title>
	<link rel="shortcut icon" href="https://intervouchers.com/wp-content/uploads/2017/02/cropped-intervoucher_mini.png" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- http://perugamecard.com/precios.json -->
</head>
<body>
<style>

#divRowPrincipal{background-color: #01274c;color:white; font-size:12px;}
#divTitle{
	background-image: url("https://intervouchers.com/wp-content/uploads/2019/01/InterVouchers-fondo-2.jpg");
	background-repeat: no-repeat; background-size: 100%;
}
#sectBody{background-color: #EFEFEF;}
#spanPrice{color: #1B3550;}
.spanResaltar{color: #82C91E;}
#rowBlanco{background-color: #fff;}
.btn-outline-warning:hover{
	color: #ffffff; 
}
.btn-group-lg>.btn, .btn-lg{
	width: 250px;
}
</style>
<div class="container-fluid p-1" id="divRowPrincipal">
	<div class="row">
	<div class="container">
		<span><i class="fas fa-phone"></i> +51 <?= $obj['CELULAR']['1'];?></span>
		<span class="ml-3"><i class="fas fa-envelope"></i> gamecardperu@gmail.com</span>
	</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000;">
	<div class="container p-2">
		<a href="https://intervouchers.com/" class="navbar-brand">
			<img src="https://intervouchers.com/wp-content/uploads/2016/05/logo_intervouchers_2.png" alt="Game Cards, Prepaid Cards &amp; Gift Cards With Bitcoin" id="logo" width="208.13" height="43.19">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
	  
	  <div class='collapse navbar-collapse' id="divIzquierda">
		<div class="navbar-nav ml-auto">
			<a class="nav-item nav-link " href="https://intervouchers.com/">Home</a>
			<a class="nav-item nav-link" href="https://intervouchers.com/list-of-game-cards/">List of Game Cards</a>
			<a class="nav-item nav-link" href="https://intervouchers.com/how-to-buy/">How to buy</a>
			<a class="nav-item nav-link" href="https://intervouchers.com/about-us/">About us</a>
			<a class="nav-item nav-link" href="https://intervouchers.com/contact-us/">Contact us</a>
		</div>
		
	  </div>

	</div>
</nav>

<section id="divTitle">
<div class="container-fluid p-5 text-center text-light" >
	<h3 class="display-3">CKECK OUT</h3>
	<h5 class="display-4">Instant Delivery: +51 <?= $obj['CELULAR']['1'];?></h5>
</div>
</section>
<section id="sectBody">
	<div class="container p-5">
		<div class="container-fluid">
			<div class="row p-5" id="rowBlanco">
				<div class="col-xs-12 col-md-4">
					<img class="rounded" src="https://intervouchers.com/wp-content/uploads/2019/01/steam1.png" alt="">
					<p class="mt-2"><small><strong>Choose one of <? echo count($obj['STEAM']);?> options:</strong></small></p>
					<div class="row mt-n2">
					<? foreach(  $obj['STEAM']  as $clave){ ?>
						<div class="col"><button class="btn btn-outline-secondary btn-block btnPagos">$<?= $clave;?></button></div>
					<? } ?>
						<div class="col"><button class="btn btn-outline-secondary btn-block btnPagos">$5</button></div>
						<div class="col"><button class="btn btn-outline-secondary btn-block btnPagos">$10</button></div>
						<div class="col"><button class="btn btn-outline-secondary btn-block btnPagos">$25</button></div>
					</div>
				</div>
				<div class="col-xs-12 col-md-8 pl-5">
					<h2 class="mb-n1 ">Steam Card</h2>
					<p class="spanResaltar"><small>Available in stock</small></p>
					<p class="text-muted" style="font-weight: 700;">USD5 Steam Wallet Code (US) </p>
					<p class="mb-n1 text-muted"><small>Buy it for:</small></p>
					<h4 class="text-muted">USD <span id="spanPrice">$7.15</span></h4>
					<p><small><a href="https://intervouchers.com/how-to-buy/">Step by step: How to buy</a></small></p>
					<p><span class="spanResaltar"><i class="fas fa-shield-alt"></i></span> Payment method: <span><span style="color:#EF8E19"><i class="fab fa-bitcoin"></i></span> Bitcoin</span></p>
					<button class="btn btn-outline-warning btn-lg"><i class="fas fa-chevron-circle-right"></i> Pay with Bitcoin</button>
				</div>
			</div>
		</div>
	</div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script>
$('.btnPagos').click(function () {
	$('.btnPagos').removeClass('active');
	$(this).addClass('active');
})
</script>
</body>
</html>