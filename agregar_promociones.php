<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="usuarios.css">
</head>
<body>
<form name="registrarImagen" action="agregar_promociones.php" method="post" enctype="multipart/form-data">
	<table border="1" align="center">
		<tr>
			<td colspan="2" align="center"><b>PROMOCIONES</b></td>
		</tr>
		<tr>
			<td align="right"><input type="text" name="cod_pro" placeholder="codigo del producto"></td>
		</tr>
		<tr>
			<td align="center"><input type="text" name="titulo" placeholder="nombre del producto"></td>
		</tr>
		<tr>
			<td align="center"><input type="file" name="archivo" placeholder="ruta de la imagen" accept="image/png, .jpeg, .jpg, image/gif"></td>
		</tr>
		<tr>
			<td><textarea placeholder="descripcion" name="descrip"></textarea></td>
		</tr>
		<tr>
			<td><input type="text" name="fecha" placeholder="ingrese fecha inicio-limite(dd/mm/aaaa)"></td>
		</tr>
		<tr><td><input type="submit" name="btnGuardar" value="Guardar"><input type="submit" name="btnvolver" value="volver"></td></tr>
	</table>
</form>
</body>
</html>
<?php 
if (isset($_POST['btnGuardar'])) {
$archivo = $_FILES['archivo']['tmp_name'];
$destino= "promociones/img/". $_FILES['archivo']['name'];
move_uploaded_file($archivo,$destino);
mysql_connect("localhost","root","");
mysql_select_db("proyecto_software");
mysql_query("INSERT INTO promociones (cod_prom, titulo, imagen, descripcion, fecha)
 VALUES ('$_POST[cod_pro]','$_POST[titulo]','$destino','$_POST[descrip]','$_POST[fecha]')");
	header('Location: principal.php');
}elseif (isset($_POST['btnvolver'])) {
	header('Location: principal.php');
}
 ?>