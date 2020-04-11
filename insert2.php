<html>
	<head>
		<title>Insercion de datos</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>

	<div class="container-fluid">
	<div class="row">
    <div class="col-3 bg-success">
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-9 bg-warning">
      
    	<?php
		$aSimon=$_REQUEST["simon"];
			# se comvierte el vector en arreglo
		$aArraySimon = explode(',', $aSimon);
			# se cuenta el numero de campos del arreglo
		$countArraySimon=count($aArraySimon);
			//print_r($aArraySimon)."</br>";
			# se captura cada posicion del vector
		for( $contador=0; $contador<$countArraySimon; $contador++ ) {
         echo "El valor Simon Recibido es [".$contador."] es [".$aArraySimon[$contador]."]<br/>";
         echo "El valor Simon Recibido es [".$contador."] es [".$aArraySimon[$contador]."]<br/>";
         echo "El valor Simon Recibido es [".$contador."] es [".$aArraySimon[$contador]."]<br/>";
         echo "El valor Simon Recibido es [".$contador."] es [".$aArraySimon[$contador]."]<br/>";
         echo "El valor Simon Recibido es [".$contador."] es [".$aArraySimon[$contador]."]<br/>";
     	 echo "El valor Simon Recibido es [".$contador."] es [".$aArraySimon[$contador]."]<br/>";
         echo "El valor Simon Recibido es [".$contador."] es [".$aArraySimon[$contador]."]<br/>";
         echo "El valor Simon Recibido es [".$contador."] es [".$aArraySimon[$contador]."]<br/>";
         echo "El valor Simon Recibido es [".$contador."] es [".$aArraySimon[$contador]."]<br/>";
         echo "El valor Simon Recibido es [".$contador."] es [".$aArraySimon[$contador]."]<br/>";
     	}
     	echo "</br>"; 
		/*$conexion = new mysqli('localhost', 'id4064186_root', 'simon2017', 'id4064186_simon'); //conexion al servidor
		if ($conexion->connect_errno) {
			echo "La conexion con el servidor fallo :   '(". $conexion->connect_errno .") ".$conexion->connect_error;
		}
		$conexion->set_charset("utf8");
		$conexion->query("INSERT INTO tlb_coordenadas(nombre, apellido, edad, latitud, orilat, longitud, orilon, velocidad) values ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[edad]','$_REQUEST[latitud]','$_REQUEST[orilat]','$_REQUEST[longitud]','$_REQUEST[orilon]','$_REQUEST[velocidad]')");	//insert de registros en tabla
		if($conexion->affected_rows > 0){
    	echo "La informacion fue registrada con exito" .'<br>';
		}else{
    	echo "Error en la inserción";
		}
		//$mysqli->query($sql);
		$conexion->close();	//conexion a base de datos cerrada
		//	carpeta raiz,    instrumentosinteligentes.000webhostapp.com/insertdb.php
		*/	
	?>
      <p>Sed ut perspiciatis...</p>
    </div>
  </div>
	</div>	
	</body>
</html>
