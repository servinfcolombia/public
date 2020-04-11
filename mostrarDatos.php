<?php
require_once('conexion.php');
//echo "Estoy dentro de mostrarDatos.php";
$sql = "SELECT * FROM markers";
$result = mysqli_query($conn, $sql);

if (!$result) {
    # code...
    die('Fallo al consultar, en el archivo mostrarDatos.php').mysqli_error($conn);
}
 
# code...
$json = array();
while ($row = mysqli_fetch_array($result)) {
    # code...
    $json[] = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'address' => $row['address'],
        'lat' => $row['lat'],
        'lng' => $row['lng'],
        'type' => $row['type']
    );
}
$jsonstring = json_encode($json);
echo $jsonstring;
?>