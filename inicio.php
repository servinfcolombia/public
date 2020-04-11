<html>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=ISO-8859-1">
<head>
	
	<title>Buesqueda de Vehiculo</title>
</head>
<body onload='mostrarUsuarios()'>
<form> Buscar Usuario <input type="text" name="Usuario" id="text" placeholder="Ingrese el Usuario"></form>
<div id="mostrar"></div>
<script type="text/javascript">

	function mostrarUsuarios() {
		// body...
		var xmlhttp;
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function () {
			// body...
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("mostrar").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","servidor.php",true);
		xmlhttp.send();
	}
</script>

</body>
</html>