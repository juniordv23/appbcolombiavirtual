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


 $servername = "localhost";
$database = "metr0n1c";
$username = "junior";
$password = "junior";

function conectar (){
	//$conn = mysqli_connect($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["database"]), $GLOBALS["port"]);	
	$conn = mysqli_connect($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["database"]);	
	
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
