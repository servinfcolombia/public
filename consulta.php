<?php
/* ------------------------ DONDE QUEDE ----------------------------------                            
LOS REGISTROS SE INGRESAN CON EXITO, TOCO VOLVER LA VARIABLE postData postData[] Y CON ESO FUNCIONO.

EL FORMULARIO DE BUSQUEDA TIENE PROBLEMAS CON EL RETORNO DE LA INFORMACION

*/

require_once('conexion.php');//require_once ('conexion.php');
$search = $_POST['search'];
$postData[] = $_POST['postData'];

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

/*if(!empty($postData)){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $type = $_POST['type'];
    $sql = "INSERT INTO markers(name, address, lat, lng, type) VALUES ('$name', '$address', '$lat', '$lng', '$type')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        # code...
        die("error al insertar en tabla". mysqli_error($conn));
    }
    echo "Registros Insertados con exito";
}*/
?>