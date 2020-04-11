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
            <title>CONSULTA DE MUNICIPIOS</title>
            <script type="text/javascript" src="dialog_box.js"></script>
            <link rel="STYLESHEET" type="text/css" href="practicaphp.css">
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
                    document.getElementById("validador_depto").innerHTML='<input type="hidden" name="nino1" value="' +nino1+ '">'
                    document.depto.n4.value=n4
                    document.getElementById("validador_depto").innerHTML='<input type="hidden" name="n4" value="' +n4+ '">'
                    document.depto.n8.value=n8
                    document.getElementById("validador_depto").innerHTML='<input type="hidden" name="n8" value="' +n8+ '">'
                    document.depto.nt.value=nt
                    document.getElementById("validador_depto").innerHTML='<input type="hidden" name="nt" value="' +nt+ '">'
                    document.depto.dezpla.value=dezpla
                    document.getElementById("validador_depto").innerHTML='<input type="hidden" name="dezpla" value="' +dezpla+ '">'
                    document.depto.nt1.value=nt
                    document.getElementById("validador_depto").innerHTML='<input type="hidden" name="nt1" value="' +nt+ '">'
                    document.depto.manza.value=manza
                    document.getElementById("validador_depto").innerHTML='<input type="hidden" name="manza" value="' +manza+ '">'
                    }

            </script>
    </head>
    <body onkeypress="return pulsar(event)"
    background= "img/cuadricula2.png" align="left">
<?php
$xajax->printJavascript('../../xajax/');
extract($_POST);
echo "<form method=post   name=depto id=depto  action='_peinada.php'>";
    echo"<div id=document>";
       echo"<div id=mensaje_1>";
            echo"Municipio    "."&nbsp;&nbsp;&nbsp;&nbsp;";
            $a='document.depto.codciu.value';
           $cambio='xajax_buscar_depto('.$a.')';
            echo"<input type=text class=row1  name=codciu  size=10  'enabled' onkeyup=$cambio value='$codciu'>&nbsp;&nbsp";
            echo"<tr><td align=center><input type=text class=row1 align=center name=nino1  size=15 disabled  value='$nino1'></td><br><br>";
 
                    echo "<center>"; 
                           echo "<table border=2>";
                               echo "<tr ><td colspan=3  align=center>Totales En El Municipio</td>";
                               echo "<td colspan=3  align=center>Encuestados</td>";
                                    echo"<tr><td align=center>Niños Segun Meta</td>";
                                    echo"<td>Manzanas</td>";
                                    echo"<td>Barrios</td>";
                                    echo"<td>Niños Encuestados</td>";
                                    echo"<td>Manzanas Encuestadas</td>";
                                    echo"<td>Barrios Encuestados</td>";
                                echo "<center>";
                                    echo"<tr><td align=center><input type=text class=row1  name=niño3  size=2  disabled  value='$niño3'></td>";
                                    echo"<td align=center><input type=text class=row1  name=niño2  size=2  disabled  value='$niño2'></td>";
                                    echo"<td align=center><input type=text class=row1  name=niño4  size=2  disabled value='$niño4'></td>";
                                    echo"<td align=center><input type=text class=row1  name=nt1  size=2  disabled value='$nt1'></td>";
                                    echo"<td align=center><input type=text class=row1  name=manza  size=2  disabled value='$manza'></td>";
                                    echo"<td align=center><input type=text class=row1  name=linea  size=2  disabled value='$linea'></td>";
                            echo "</center>";
                            echo "</table><br>";
                            
                            echo "<table border=2>";
                               echo "<center>";
                                    echo"<tr><td>Niños De 1 a 4 Años</td>";
                                    echo"<td>Niños De 5 a 8 Años</td>";
                                    echo"<td>Total de Niños</td>";
                                    echo"<td>Niños Encontrados Sin Vacuna</td></tr>";
                                
                                    echo"<tr><td align=center><input type=text class=row1  name=n4  size=2  disabled  value='$n4'></td>";
                                    echo"<td align=center><input type=text class=row1  name=n8  size=2  disabled  value='$n8'></td>";
                                    echo"<td align=center><input type=text class=row1  name=nt  size=2  disabled value='$nt'></td>";
                                    echo"<td align=center><input type=text class=row1  name=dezpla  size=2  disabled value='$dezpla'></td>";
                                echo "</center>";
                            echo "</table><br>";
                    echo "</center>";
        echo"</div>";
        echo"<div id=mensaje_3>";
        echo"<div id=grafica></div>";
        echo "</div>";
        echo"<div id=mensaje_2>";
                echo"MUNICIPIOS";
                echo"<br>"."<br>";
                        echo"<div id=resp_html2></div>";
                echo"<div id=validador_depto></div>";
       
        echo"</div>";
    echo"</div>";
echo"</form>";
?>