<html lang="en">
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
            transitional.dtd">
            <META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=ISO-8859-1">
  <title>SimonPintar</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    function sendRequest(){

    }
  </script>
</head>
    <body>
  <?php
  
  echo "<div class='container-fluid'>";
  echo "  <div class='row'>";
  echo "    <div class='col-3 bg-success'>";
  //echo "    <p>Lorem ipsum...</p>";
  //echo "    <div class='container'>";
  echo "    <h2>Formulario de busqueda de Automovil</h2>";
  echo "    <p>Bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla,:</p>";
  
 
  echo "  <form method=post   name=simon id=simon action='pintar.php'>";
  echo "  <div id=document>";//abro codument
  echo "  <div id=mensaje_1>";
  echo"   </div>";
  echo "   <div class='form-group'>";
  echo "     <input type='text' class='form-control btn-group' placeholder='Ingrese placa de vehiculo' name='text1' 'enabled' onkeyup=$cambio value='$text1'>";
  echo "   </div>";
  echo "   <button type='submit' onclick='sendRequest()' class='btn btn-primary'>Enviar</button>"."<br>";
  echo "<br>";
  echo "   </div>";//cierro document
  echo "  </form>";
  echo "</div>";
  
  echo "<div class='col-9 bg-warning'>";
        echo"<div id=mensaje_2>";
                      echo"<br>"."<br>";
                              echo"<div id=resp_html2>";
                              echo "</div>";
                      echo"<div id=validador_depto>";
                      echo "</div>";
        echo"</div>";
        echo "<p>Sed ut perspiciatis...</p>";
  //echo "</div>";
  echo "</div>";
  ?>
</body>
</html>