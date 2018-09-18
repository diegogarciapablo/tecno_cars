<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="usuarios.css">
</head>
<body>
<form action="permisos.php" method="post">
	<?php 
		$a=1;
		error_reporting(0); 
		mysql_connect("localhost","root","");
		mysql_select_db("proyecto_software");
		$consulta=mysql_query("select * from rol");
		echo "<table border='1' align='center' width='30%'>";
		echo "<tr>
			<th><label>modificar permisos</label></th>
		</tr>";
		echo "<tr>
			<td>
			<select name='roles'>";
			while($datos=mysql_fetch_array($consulta)){
		echo "<option value='$a'>$datos[nombre_rol]</option>";
				$a++;}
			echo "</select>
			</td>
		</tr>
		<tr>
		<td><INPUT TYPE='checkbox' NAME='m_noticias'>m. noticias
		<INPUT TYPE='checkbox' NAME='g_reportes'>m. proveedor
		<INPUT TYPE='checkbox' NAME='r_proveedor'>Television<br>

		<INPUT TYPE='checkbox' NAME='m_inventario'>m. inventario
		<INPUT TYPE='checkbox' NAME='n_compra'>n. compra
		<INPUT TYPE='checkbox' NAME='e_roles'>e. roles<br>

		<INPUT TYPE='checkbox' NAME='g_backup'>g. backup
		<INPUT TYPE='checkbox' NAME='c_ventas'>c. ventas
		<INPUT TYPE='checkbox' NAME='e_permisos'>e. permisos<br>

		<INPUT TYPE='checkbox' NAME='c_backup'>c. backup
		<INPUT TYPE='checkbox' NAME='e_comentario'>e. comentario
		<INPUT TYPE='checkbox' NAME='r_servicios'>r. servicios
		</td>
		</tr>";
		echo "</table>";
		?>
		
		<input type="submit" name="btn_pordefecto" value="por defecto">
		<input type="submit" name="btnguardar" value="guardar">
		<input type="submit" name="volver" value="volver">
<?php 

 ?>
</form>
</body>
</html>