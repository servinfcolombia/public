<?php
/* ------------------------ DONDE QUEDE ----------------------------------                            
LOS REGISTROS SE INGRESAN CON EXITO, TOCO VOLVER LA VARIABLE postData postData[] Y CON ESO FUNCIONO.

*/

require_once('conexion.php');//require_once ('conexion.php');
$search = $_POST['search'];

if(!empty($search)){

    $sql = "SELECT * FROM markers WHERE name LIKE '$search%'";
    $result=mysqli_query($conn, $sql);
    if (!$result) {
        #mensaje de error en consulta a base de datos
        die('error en consulta a base de datos '. mysqli_error($conn));
    }

    $json = array();
    while ($row=mysqli_fetch_array($result)) {
        # recorro el arreglo
        $json[]=array(
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
}

?>