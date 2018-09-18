<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="usuarios.css">
	<script type="text/javascript">
		function volver(){
			location.href="principal.php";
		}
	</script>
</head>
<body>
	<div class="tablita">
		<form name="registrarImagen" action="agregar_noticias.php" method="post" enctype="multipart/form-data">
	<table border="1" align="center">
		<tr>
			<td colspan="2" align="center"><b>noticias</b></td>
		</tr>
		<tr>
			<td align="right"><input type="text" name="fecha" placeholder="fecha"></td>
		</tr>
		<tr>
			<td align="center"><input type="text" name="titulo" placeholder="titulo"></td>
		</tr>
		<tr>
			<td align="center"><input type="file" name="archivo" placeholder="ruta de la imagen" accept="image/png, .jpeg, .jpg, image/gif"></td>
		</tr>
		<tr>
			<td><textarea placeholder="historia" name="historia"></textarea></td>
		</tr>
		<tr><td><input type="submit" name="btnGuardar" value="Guardar"><input type="submit" name="btnvolver" value="volver"></td></tr>
	</table>
</form>
	</div>

</body>
</html>
<?php 
if (isset($_POST['btnGuardar'])) {
$archivo = $_FILES['archivo']['tmp_name'];
$destino= "noticias/img/". $_FILES['archivo']['name'];
move_uploaded_file($archivo,$destino);
mysql_connect("localhost","root","");
mysql_select_db("proyecto_software");
mysql_query("INSERT INTO noticias (fecha, titulo, imagen, historia,foto,comentario)
 VALUES ('$_POST[fecha]','$_POST[titulo]','$destino','$_POST[historia]','consultas/img/user.png','se el primero en comentar')");
header('Location: principal.php');
}elseif (isset($_POST['btnvolver'])) {
	header('Location: principal.php');
}	
 ?>