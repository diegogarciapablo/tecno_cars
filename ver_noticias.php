<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="ver_mas_style.css">
	<title></title>
	<script type="text/javascript">
		function volver(){
			location.href="principal.php";
		}
	</script>
</head>
<body>
	<div class="tablita">
		<?php 
		error_reporting(0); 
		mysql_connect("localhost","root","");
		mysql_select_db("proyecto_software");
		$consulta=mysql_query("select * from noticias");
		echo "<table border='1' align='center'>";
		while($datos=mysql_fetch_array($consulta)){
		echo "<tr>
		<td><div class='fecha'>
		$datos[fecha]
		</div></td>
		</tr>
		<tr>
		<td><div class='titulo'>
		<h3>
		$datos[titulo]
		</h3>
		</div></td>
		</tr>
		<tr>
		<td><img class='imagen' src='$datos[imagen]' width='50%'/></td>
		</tr>
		<tr>
		<td><p >
		$datos[historia]
		</p></td>
		</tr>
		<tr>
		<td>$datos[nombre]
		<img class='usuario' src='$datos[foto]' width='50'/>
		<p>$datos[comentario]
		</p></td>
		</tr>";
		}
		echo "</table>";
		?>
		<div class="botones">
			<button id='ver_mas' onclick=volver() >
		volver
		</button>
		</div>
		
	</div>
</body>
</html>