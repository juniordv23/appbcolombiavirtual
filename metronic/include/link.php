<?php

/*$servername = "http://3.143.219.233/";
$database = "metr0n1c";
$username = "freedb_NACIONAL";
$password = "%8HeUhRP%aSkr?F";
$port = "3306";

$servername = "3.143.219.233";
$database = "metr0n1c";
$username = "junior";
$password = "junior";








$servername = "154.49.247.52";
$database = "u229440033_junior";
$username = "u229440033_sayayin";
$password = "Junior2023$";
*/


$DB_HOST = $_ENV["DB_HOST"];
$DB_NAME =  $_ENV["DB_NAME"];
$DB_USER = $_ENV["DB_USER"];
$DB_PASSWORD = $_ENV["DB_PASSWORD"];
$DB_PORT = $_ENV["DB_PORT"];


function conectar (){
	//$conn = mysqli_connect($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["database"]), $GLOBALS["port"]);	
	//$conn = mysqli_connect($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["database"]);	
	$conn = mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD", "$DB_NAME");	
	
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

function sentencia($conn, $sql){
	$rst = mysqli_query($conn, $sql);
	return $rst;
}

function contarfilas ($rst){
	$nRows = mysqli_num_rows($rst);
	return $nRows;
}

function traerdatos($rst){
	$filas = mysqli_fetch_assoc($rst);	
	return $filas;
}

function desconectar ($conn){
	mysqli_close($conn);
}


?>
