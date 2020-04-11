<?php 

session_id('0232345');# se identifica la sesion iniciada
session_start();# se inicia la sesion

$_SESSION['sesion iniciada']=true;
$_SESSION["nombre"]="FELIPE";
$_SESSION['aDatos']=array();
$_SESSION['aDatos']['nombre']="<!DOCTYPE html>\n<html>\n<head>\n<title>Esta es una sesion</title>\n</head>\n<body>\n<h1>Esta es una sesion de PHP</h1>\n</body>\n</html>";
								

echo $_SESSION['aDatos']['nombre']."</p>";
echo "[".session_id()."]";
session_unset();
/*echo "variables borradas"."</br>";

if (isset($_SESSION["nombre"])==false){
	echo "nombre no definido.</br>";# code...
}
if (isset($_SESSION['aDatos']['nombre'])==false){
	echo "nombre en array no definido.</br>";# code...
}*/
// 
?>