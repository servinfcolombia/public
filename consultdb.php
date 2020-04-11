<?php
    require("../../xajax/xajax.inc.php");//hemos direcionado la libreria de trabajo ajax
    //a continuacion creamos la instancia de trabajo(objeto)
    $xajax=new xajax();  //instancia
    //capa ajax
  function conectar()
    {
        @$db=mysql_pconnect("localhost","root","");
        if (!$db){
            echo "Error Al Conectar La Base De Datos......Intente Mas Tarde..";
            exit;
        }
        mysql_select_db("municipios");
    }
    conectar();
    
    function buscar_depto($a) //metodo   
    {
        $respuesta=new xajaxResponse();
        $qbusmuni="select codciudad,desciudad,sum(dato8+dato9+dato10+dato11),sum(dato12+dato13+dato14),sum(dato8+dato9+dato10+dato11+dato12+dato13+dato14)
        from ciudades,encuesta_evaluacion
        where desciudad like '%$a%' 
        and codciudad = codciud
        group by codciudad";
                    
        $rbusmuni=mysql_query($qbusmuni);
        $nmuni=mysql_num_rows($rbusmuni);
                 
         $salida=$a.'&nbsp;&nbsp Registro  '.$nmuni."'<br>'";
                        $cuadrante = "<i><font class=fuentemenu>Seleccione - Municipios</font></i></br></br>";
                        $cuadrante .= '<div>';
          while($lin=mysql_fetch_row($rbusmuni))
           {
                         $cuadrante.="<a style='cursor:pointer;text-decoration:underline; color:#007000;'onclick='selecc_muni(\"" .$lin[1].  ','   .$lin[2].  ','   .$lin[3]. ','   .$lin[4]. ','   .$lin[5]. ','   .$lin[6]."\");'>";                                
                        $cuadrante.= $lin[0]. "&nbsp;&nbsp" .$lin[1].  '<br></tr></a>';
               
           }
        $cuadrante .= '</div>';
        $respuesta->addAssign("resp_html2","innerHTML",$salida);
        $respuesta->addAssign("validador_depto","innerHTML",$cuadrante);
         $respuesta->addAssign("grafica","innerHTML",$grafica);
    //    $respuesta->addAssign("resp_html1","innerHTML",$cuadrante);
          return $respuesta;
      }
    $xajax->registerfunction('buscar_depto');//"funcion de tipo metodo , abstracion de metodo"  
       //*********************************
    $xajax->processRequests(); //se define el puente atravez del objeto ajax  puntualizando el procesos y respuestas 
    //*********************************
?>











<html>
	<head>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
            transitional.dtd">
            <META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=ISO-8859-1">
            <title>Simon 08092019</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script type="text/javascript" src="dialog_box.js"></script>
            <script>
                function pulsar(e) 
                {
                    tecla=(document.all) ? e.keyCode : e.which;
                    if(tecla==13) return false;
                }
            </script>
            <script>
            function selecc_muni(muni)
                {
                    var lin = muni.split(",")

                    nino1=lin[0];
                    n4=lin[1];
                    n8=lin[2];
                    nt=lin[3];
                    dezpla=lin[4];
                    manza=lin[5];
                    
                    
                    document.depto.nino1.value=nino1
                    document.getElementById("validador_depto").innerHTML='<input type="hidden" name="text1" value="' +text1+ '">'
                    document.depto.n4.value=n4
                    document.getElementById("validador_depto").innerHTML='<input type="hidden" name="n4" value="' +n4+ '">'
                    document.depto.n8.value=n8
                   }

            </script>
    </head>
  






  <body onkeypress="return pulsar(event)"
    background= "img/cuadricula2.png" align="left">
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
         }
      echo "</br>"; 
    /*$conexion = new mysqli('localhost', 'id4064186_root', 'simon2017', 'id4064186_simon'); //conexion al servidor
    if ($conexion->connect_errno) {
      echo "La conexion con el servidor fallo :   '(". $conexion->connect_errno .") ".$conexion->connect_error;
    }
    $conexion->set_charset("utf8");
    $conexion->query("INSERT INTO tlb_coordenadas(nombre, apellido, edad, latitud, orilat, longitud, orilon, velocidad) values ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[edad]','$_REQUEST[latitud]','$_REQUEST[orilat]','$_REQUEST[longitud]','$_REQUEST[orilon]','$_REQUEST[velocidad]')"); //insert de registros en tabla
    if($conexion->affected_rows > 0){
      echo "La informacion fue registrada con exito" .'<br>';
    }else{
      echo "Error en la inserción";
    }
    //$mysqli->query($sql);
    $conexion->close(); //conexion a base de datos cerrada
    //  carpeta raiz,    instrumentosinteligentes.000webhostapp.com/insertdb.php
    */  
  ?>
















		<?php
		$conexion = new mysqli('localhost', 'id4064186_root', 'simon2017', 'id4064186_simon'); //conexion al servidor
		if ($conexion->connect_errno) {
			echo "La conexion con el servidor fallo :   ".$conexion->connect_errno; # verifica si la conexion al servidor registro fallos.
		}
		$conexion->set_charset("utf8"); # UTF-8 codifica cada carácter utilizando de uno a cuatro bytes. 
										# Los primeros 128 caracteres de Unicode corresponden uno a uno con ASCII, 
										# haciendo válido el texto ASCII, al igual que el texto con codificación UTF-8 
		
		$sql="SELECT * FROM markers"; # se seleciona la tabla de la base de datos
		$resultado=$conexion->query($sql); # Se realiza la consulta y se guardaen la variable resultado.
		if ($conexion->errno) {
			die($conexion->error); #Verifica que no halla error en la consulta, de ser asi se cierra la misma
		}
		while ($fila=$resultado->fetch_assoc()) {
			# creamos una tabla para mostrar los campos de la consulta.
			echo "<table><tr><td>";
			echo $fila['Id']."</td><td> ";
			echo $fila['name']."</td><td> ";
			echo $fila['address']."</td><td> ";
			echo $fila['lat']."</td><td> ";
			echo $fila['lng']."</td><td> ";
			echo $fila['type']."</td><td> ";
			echo "<br>";
		}
		$conexion->close(); # cerramos la conexion a la base de datos.

	//	carpeta raiz,    instrumentosinteligentes.000webhostapp.com/storage/ssd3/542/4011542 my_sql_select_database.php
	?>










	<?php
    require("../../xajax/xajax.inc.php");//hemos direcionado la libreria de trabajo ajax
    //a continuacion creamos la instancia de trabajo(objeto)
    $xajax=new xajax();  //instancia
    //capa ajax
  function conectar()
    {
        @$db=mysql_pconnect("localhost","root","");
        if (!$db){
            echo "Error Al Conectar La Base De Datos......Intente Mas Tarde..";
            exit;
        }
        mysql_select_db("municipios");
    }
    conectar();
    
    function buscar_depto($a) //metodo   
    {
        $respuesta=new xajaxResponse();
        $qbusmuni="select codciudad,desciudad,sum(dato8+dato9+dato10+dato11),sum(dato12+dato13+dato14),sum(dato8+dato9+dato10+dato11+dato12+dato13+dato14)
        from ciudades,encuesta_evaluacion
        where desciudad like '%$a%' 
        and codciudad = codciud
        group by codciudad";
                    
        $rbusmuni=mysql_query($qbusmuni);
        $nmuni=mysql_num_rows($rbusmuni);
                 
         $salida=$a.'&nbsp;&nbsp Registro  '.$nmuni."'<br>'";
                        $cuadrante = "<i><font class=fuentemenu>Seleccione - Municipios</font></i></br></br>";
                        $cuadrante .= '<div>';
          while($lin=mysql_fetch_row($rbusmuni))
           {
                         $cuadrante.="<a style='cursor:pointer;text-decoration:underline; color:#007000;'onclick='selecc_muni(\"" .$lin[1].  ','   .$lin[2].  ','   .$lin[3]. ','   .$lin[4]. ','   .$lin[5]. ','   .$lin[6]."\");'>";                                
                        $cuadrante.= $lin[0]. "&nbsp;&nbsp" .$lin[1].  '<br></tr></a>';
               
           }
        $cuadrante .= '</div>';
        $respuesta->addAssign("resp_html2","innerHTML",$salida);
        $respuesta->addAssign("validador_depto","innerHTML",$cuadrante);
         $respuesta->addAssign("grafica","innerHTML",$grafica);
    //    $respuesta->addAssign("resp_html1","innerHTML",$cuadrante);
          return $respuesta;
      }
    $xajax->registerfunction('buscar_depto');//"funcion de tipo metodo , abstracion de metodo"  
       //*********************************
    $xajax->processRequests(); //se define el puente atravez del objeto ajax  puntualizando el procesos y respuestas 
    //*********************************
?>
 
<?php 
  //$xajax->printJavascript('../../xajax/');
  //extract($_POST);
          
 echo "<div class='container-fluid'>";
  echo "  <div class='row'>";
  echo "    <div class='col-3 bg-success'>";
  //echo "    <p>Lorem ipsum...</p>";
  //echo "    <div class='container'>";
  echo "    <h2>Formulario de busqueda de Automovil</h2>";
  echo "    <p>Bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla,:</p>";
    
  echo "  <form method=post   name=simon id=simon action='/pintar.php'>";
  //echo "  <div id=document>";

  //     $a='document.simon.text1.value';
  //     $cambio='xajax_buscar_simon('.$a.')';
 
  echo "   <div class='form-group'>";
  echo "     <input type='text' class='form-control' placeholder='Ingrese placa de vehiculo' name='text1' 'enabled' onkeyup=$cambio value='$text1>";
  echo "   </div>";
  echo "   <button type='submit' class='btn btn-primary'>Enviar</button>";
  echo "  </form>";

  //echo "  </div>";
  echo "</div>";
  echo "<div class='col-9 bg-warning'>";
  echo "<p>Sed ut perspiciatis...</p>";
  //echo "</div>";
  echo "</div>";
?>