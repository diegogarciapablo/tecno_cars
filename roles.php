<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="usuarios.css">
</head>
<body>
<form action="roles.php" method="post">
	<?php 
		error_reporting(0); 
		mysql_connect("localhost","root","");
		mysql_select_db("proyecto_software");
		$consulta=mysql_query("select * from rol");
		echo "<table border='1' align='center' width='17%'>";
		echo "<tr>
			<th><label>lista de roles</label></th>
		</tr>";
		
		echo "<tr>
			<td>";
			while($datos=mysql_fetch_array($consulta)){
				echo "$datos[nombre_rol]<br>";
			}
			echo "</td>
		</tr>";
		echo "</table>";
		?>
		<label>nuevo rol:</label>
		<input type="text" name="name_rol"><br>
		<input type="submit" name="btnagregar" value="agregar rol">
<?php 
if (isset($_POST['btnagregar'])) {
mysql_connect("localhost","root","");
mysql_select_db("proyecto_software");
mysql_query("INSERT INTO rol (nombre_rol)
 VALUES ('$_POST[name_rol]')");
}
 ?>
</form>


</body>
</html>