<?php

//Link original http://perugamecard.com/precios.json

$json = file_get_contents('https://intervouchers.com/ticket/precios.json');
$obj = json_decode($json,true);

$tBase= $obj[$_GET['card']];
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
.pTitulo{
	text-transform: uppercase;font-size: .8rem; font-weight:700;margin-top: 0.5rem;margin-bottom: 0.5rem; color: #6c757d;
}
#lblError{color: #ff2d2d;}
.modal input{margin-top: 0.5rem;color: #6c757d;}
.form-control:focus{
	border-color: #ffc880;
   box-shadow: 0 0 0 0.2rem rgba(255, 224, 0, 0.25);
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
					<img class="rounded" src="<?= $tBase['imagen']; ?>" alt="">
					<p class="mt-2"><small><strong>Choose one of <? echo count($tBase['tarjetas']);?> options:</strong></small></p>
					<div class="row mt-n2" id="btnBotones">
					<? $i=1; foreach(  $tBase['tarjetas']  as $clave){ ?>
						<div class="col"><button class="btn btn-outline-secondary btn-block btnPagos mb-3" data-precio="<?= $tBase['tarjetas'][$i]['precio'];?>" data-id="<?= $i;?>">$<?= $clave['base'];?></button></div>
					<? $i++; } ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-8 pl-5">
					<h2 class="mb-n1 " id="h2Titulo"><?= $tBase['nombre']; ?></h2>
					<p class="spanResaltar"><small>Available in stock</small></p>
					<p class="text-muted" style="font-weight: 700;">USD <?= $tBase['nombre']; ?> Card </p>
					<p class="mb-n1 text-muted"><small>Buy it for:</small></p>
					<h4 class="text-muted">USD <span id="spanPrice">$ <span id="spanSubPrice"><?= $tBase['tarjetas'][1]['precio'];?></span></span></h4>
					<p><small><a href="https://intervouchers.com/how-to-buy/">Step by step: How to buy</a></small></p>
					<p><span class="spanResaltar"><i class="fas fa-shield-alt"></i></span> Payment method: <span><span style="color:#EF8E19"><i class="fab fa-bitcoin"></i></span> Bitcoin</span></p>
					<button class="btn btn-outline-warning btn-lg" id="btnPagarProceso" data-pre="1"><i class="fas fa-chevron-circle-right"></i> Pay with Bitcoin</button>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="modalCorreo" tabindex="-1" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
			<div id="divFormulario">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
					<p class="lead">Starting a process...</p>
				<p class="pTitulo">Whats your name?</p>
				<input type="text" class="form-control input-lg text-capitalize" value="" id="txtNombreComprador">
				<p class="pTitulo">Give us your email to send the card code:</p>
				<input type="text" class="form-control input-lg" value="" id="txtCorreoComprador">
					<label class="d-none" id="lblError"><br><i class="fas fa-paw"></i> Ups, <span id="spanError"></span></label>
				<div class="d-flex justify-content-center">
					<button type="button" class="btn btn-outline-dark mt-3 btn-lg " id="btnSolicitarProceso">Go to final part <i class="fas fa-arrow-alt-circle-right"></i></button>
				</div>
			</div>
			<div class="d-none p-3 m-3 text-center" id="divLoading">
				<p class="lead">Please wait...</p>
				<div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
				</div>
			</div>
			<div class="d-none p-3 m-3 text-center" id="divRespuesta">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<p class="lead">Please to complete the process</p>
				<img id="qrImg" src="" alt="">
				<p>Pay <strong id="spanPrecFinal"></strong> to this direction:</p>
				<p class="mb-0" id="direccionAumb"></p>
				<p class="lead">Before to pay contact via WhatsApp: <strong><?= "+51".$obj['CELULAR']['1']; ?></strong></p>
				<div class="bg-dark">
					<img class="w-75 py-3" src="https://intervouchers.com/wp-content/uploads/2016/05/logo_intervouchers_2.png" alt="">
				</div>
			</div>
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script>
var precio =parseFloat($('#spanSubPrice').text()).toFixed(2);
$('#spanSubPrice').text( precio );
$('#btnBotones .btnPagos').eq(0).addClass('active');

$('.btnPagos').click(function () {
	var precio = parseFloat($(this).attr('data-precio'));
	var id = $(this).attr('data-id');
	$('#spanSubPrice').text(precio.toFixed(2));
	$('.btnPagos').removeClass('active');
	$('#btnPagarProceso').attr('data-pre', id);
	$(this).addClass('active');
});
$('#btnPagarProceso').click(function() {
	$('#txtNombreComprador').val('');
	$('#txtCorreoComprador').val('');
	$('#divFormulario').removeClass('d-none');
	$('#divRespuesta').addClass('d-none');
	$('#divLoading').addClass('d-none');
	$('#modalCorreo').modal('show');
	$('#btnSolicitarProceso').attr('data-pre', $(this).attr('data-pre'));
});
$('#btnSolicitarProceso').click(function() {

	if( $('#txtNombreComprador').val() == '' ){
		$('#spanError').text('Please complete your name.');
		$('#lblError').removeClass('d-none');
	}else if( $('#txtCorreoComprador').val()=='' || $('#txtCorreoComprador').val().indexOf('@')==-1){
		$('#spanError').text('Your email is incorrect, please check.');
		$('#lblError').removeClass('d-none');
	}else{
		//ajax para llamar al QR
		$('#divFormulario').addClass('d-none');
		$('#divLoading').removeClass('d-none');
		$.ajax({url: 'prepararQRProceso.php', type: 'POST', data: { card: '<?= $tBase['nombre']; ?>', subid:$('#btnSolicitarProceso').attr('data-pre'), nombre: $('#txtNombreComprador').val(), correo: $('#txtCorreoComprador').val() }}).done(function(resp) {
			//console.log(resp)
			$('#divLoading').addClass('d-none');
			var jTicket = JSON.parse(resp); console.log(jTicket.length)
			$('#spanPrecFinal').text( jTicket.enBtc);
			$('#direccionAumb').text( jTicket.aumbbel);
			$('#qrImg').attr('src', jTicket.img);
			$('#divRespuesta').removeClass('d-none');
		});
	}
});
</script>
</body>
</html>
