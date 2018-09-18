<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo1.css">
	<script type="text/javascript">
		function ver_noticias(){
			location.href="ver_noticias.php";
		}
		function ver_promociones(){
			location.href="ver_promociones.php";
		}
	</script>
</head>
<body>
	<div class="contenedor">
		<header class="arriba">
			<ul class="cabecera1">
				<li>
					<img height="25" src="img/llave media luna.png"/>
					<a href="#">
						registro
					</a>
				</li>
				<li class="aux">
					<img height="25" src="img/destornillador.jpg"/>
					<a href="#">
						ingresar
					</a>
				</li>
			</ul>
			<ul class="cabecera2">
				<li>
					<img height="25" src="img/telefono.jpg"/>
					+591-72978229
				</li>
				<li>
					<img height="25" src="img/arroba.jpg"/>
					tecno_cars@gmail.com
				</li>
			</ul>
		</header>
		<img class="logo" height="130" src="img/tecno_cars.png"/>
	</div>
	<div class="cuello">
		<ul class="menu2">
			<li><a href="">archivo</a>
				<ul>
					<li><a href="">login</a></li>
					<li><a href="">backup</a></li>
					<li><a href="ubicacion.html">donde ubicarnos</a></li>
				</ul>
			</li>
			<li class="menu_cuello">
				<a href="#">
					personas
				</a>
				<ul>
					<li><a href="roles.php">roles</a></li>
					<li><a href="permisos.php">permisos</a></li>
					<li><a href="">registro</a></li>
				</ul>
			</li>
			<li class="menu_cuello">
				<a href="#">
					noticias
				</a>
				<ul>
					<li><a href="agregar_noticias.php">gestionar</a></li>
				</ul>
			</li>
			<li class="menu_cuello">
				<a href="#">
					inventario
				</br>
			</a>
			<ul>
					<li><a href="">productos</a></li>
					<li><a href="agregar_promociones.php">promociones</a></li>
					<li><a href="">contactar proveedores</a></li>
				</ul>
		</li>
		<li class="menu_cuello">
				<a href="#">
					servicios
				</br>
			</a>
			<ul>
					<li><a href="">mantenimiento</a></li>
					<li><a href="">sistema electrico</a></li>
					<li><a href="">reparacion de llantas</a></li>
					<li><a href="">asistencia y rescate</a></li>
					<li><a href="">atencion al cliente</a></li>
				</ul>
		</li>
		<li class="menu_cuello">
				<a href="#">
					transacciones
				</br>
			</a>
			<ul>
					<li><a href="">compras</a></li>
					<li><a href="">ventas</a></li>
					
				</ul>
		</li>
		<li class="menu_cuello">
				<a href="#">
					reportes
				</br>
			</a>
			<ul>
					<li><a href="">usuarios</a></li>
					<li><a href="">empleados</a></li>
					<li><a href="">proveedores</a></li>
					<li><a href="">servicios</a></li>
					<li><a href="">compras</a></li>
					<li><a href="">ventas</a></li>
					<li><a href="">existencias</a></li>
				</ul>
		</li>
</ul>

</div>

<div class="slider">
	<?php 
	error_reporting(0); 
	$imagenes=array();
	mysql_connect("localhost","root","");
	mysql_select_db("proyecto_software");
	$consulta=mysql_query("select * from banner");

	$a=-1;

	while($imagen=mysql_fetch_array($consulta)){
		$imagenes[]=$imagen[ruta];
		$a++;
	}
	$uno=$a-3;
	$dos=$a-2;
	$tres=$a-1;
	$cuatro=$a-0;
	echo "<ul>
	<li>
	<img src='$imagenes[$uno]'>

	</li>
	<li>
	<img src='$imagenes[$dos]'>

	</li>
	<li>
	<img src='$imagenes[$tres]'>

	</li>
	<li>
	<img src='$imagenes[$cuatro]'>

	</li>
	</ul>";
	?>
	
</div>


<div class="row">
	<div class="col" id="col1">
		<h2>
			ATENCION AL CLIENTE
		</h2>
		<?php 
		error_reporting(0); 
		$imagenes=array();
		$nombres=array();
		$comentarios=array();
		mysql_connect("localhost","root","");
		mysql_select_db("proyecto_software");
		$consulta=mysql_query("select * from consultas");
		
		$a=-1;

		while($datos=mysql_fetch_array($consulta)){
			$imagenes[]=$datos[foto];
			$nombres[]=$datos[nombre];
			$comentarios[]=$datos[comentario];
			$a++;
		}

		$b=3;
		echo "<table border='1'>";
		while ($b>=0) {
			echo "<tr>
			<td>
			$nombres[$a]
			<img class='usuario' src='$imagenes[$a]' width='50'/>
			<p>
			$comentarios[$a]
			</p>
			</td>
			</tr>";
			$b=$b-1;
		}
		echo "</table>";
		?>
	</div>
	<div class="col" id="col2">
		
		<h2>
			NOTICIAS
		</h2>
		<?php 
		error_reporting(0); 
		$noticia=array();
		mysql_connect("localhost","root","");
		mysql_select_db("proyecto_software");
		$consulta=mysql_query("select * from noticias order by id_noticia desc limit 1");
		while($datos=mysql_fetch_array($consulta)){
			$noticia[0]=$datos[fecha];
			$noticia[1]=$datos[titulo];
			$noticia[2]=$datos[imagen];
			$noticia[3]=$datos[historia];
			$noticia[4]=$datos[nombre];
			$noticia[5]=$datos[foto];
			$noticia[6]=$datos[comentario];
		}

		echo "<table border='1'>";
		echo "<tr>
		<td><div class='fecha'>
		$noticia[0]
		</div></td>
		</tr>
		<tr>
		<td><div class='titulo'>
		<h3>
		$noticia[1]
		</h3>
		</div></td>
		</tr>
		<tr>
		<td><img class='imagen' src='$noticia[2]' width='80%'/></td>
		</tr>
		<tr>
		<td><p>
		$noticia[3]
		</p></td>
		</tr>
		<tr>
		<td>$noticia[4]
		<img class='usuario' src='$noticia[5]' width='50'/>
		<p>$noticia[6]
		</p></td>
		</tr><tr>
		<td><div class='botones'>
		<button id='ver_mas' onclick=ver_noticias()>
		ver mas
		</button>
		</div></td>
		</tr>";
		echo "</table>";
		?>
		<a href="agregar_noticias.php">agregar</a>
	</div>
	<div class="col" id="col3">
		<h2>
			PROMOCIONES
		</h2>
		<?php 
		error_reporting(0); 
		$promociones=array();
		mysql_connect("localhost","root","");
		mysql_select_db("proyecto_software");
		$consulta=mysql_query("select * from promociones order by id_prom desc limit 1");
		while($datos=mysql_fetch_array($consulta)){
			$promociones[0]=$datos[cod_prom];
			$promociones[1]=$datos[titulo];
			$promociones[2]=$datos[imagen];
			$promociones[3]=$datos[descripcion];
			$promociones[4]=$datos[fecha];
		}
		echo "<table border='1'>";
		echo "<tr>
		<td><div class='codigo'>
		$promociones[0]
		</div></td>
		</tr>
		<tr>
		<td><div class='titulo'>
		<h3>
		$promociones[1]
		</h3>
		</div></td>
		</tr>
		<tr>
		<td><img class='imagen' src='$promociones[2]' width='40%'/></td>
		</tr>
		<tr>
		<td><p>
		$promociones[3]
		</p></td>
		</tr>
		<tr>
		<td><div class='codigo'>
		fecha limite
		<br>
		$promociones[4]
		</br>
		</div></td>
		</tr>
		<tr>
		<td><div class='botones'>
		<button id='comprar'>
		comprar
		</button><button id='ver_mas' onclick=ver_promociones()>
		ver mas
		</button>
		</div></td>
		</tr>";
		echo "</table>";
		?>
		<a href="agregar_promociones.php">agregar</a>
	</div>   
</div>
</body>
</html>