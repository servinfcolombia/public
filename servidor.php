<?php  
require_once "conexion.php";
/*$consulta = "SELECT * FROM markers";
$resultado=mysqli_query($conn,$consulta);
while ($fila = mysqli_fetch_assoc($resultado)) {
	# code...
echo "". $fila['name'];
}
mysqli_close($conn);
*/
//include "conexion.php";
mysqli_select_db($conn, $mysql_db);
$tildes = $conn->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$sql="SELECT * FROM $tabla";
$result = $conn->query($sql);
$registro = $result->fetch_array(MYSQLI_NUM);

    echo $registro[0], $registro[1];
    echo "<br>";

/*$row_cnt = $result->num_rows;
//$longitud = $result->count;
$longitud = count($result);
//echo"". $longitud;
//mysqli_data_seek ($result, 0);
$extraido= mysqli_fetch_array($result);

for ($i=0; $i<= $row_cnt; $i++) {
    # code...
    echo "Registro Numero    ".$i."<br/>";
    //echo "".$extraido['name']."<br/>";
}

//echo "el numero de registros es: ".$row_cnt;
//echo "Nombre: ".$extraido['name']."<br/>";
mysqli_free_result($result);
mysqli_close($link);

*/



?>