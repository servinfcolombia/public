<?php

require_once('conexion.php');
$postData[] = $_POST['postData'];


if(isset($postData)){
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
    }

?>
