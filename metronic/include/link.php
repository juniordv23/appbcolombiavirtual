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










$servername = "containers-us-west-41.railway.app";
$database = "railway";
$username = "root";
$password = "1mp1y4fs616OUFtKS5sK";
*/



$servername = $_ENV["DB_HOST"];
$database =  $_ENV["DB_NAME"];
$username = $_ENV["DB_USER"];
$password = $_ENV["DB_PASSWORD"];
$DB_PORT = $_ENV["DB_PORT"];


function conectar (){
	//$conn = mysqli_connect($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["database"]), $GLOBALS["port"]);	
	// $conn = mysqli_connect($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["database"]);	
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
