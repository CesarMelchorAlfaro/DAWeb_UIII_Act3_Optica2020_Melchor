<!DOCTYPE html>
<html>
<head>
	<title>Alta de Articulos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
		<!-- Cesar Melchor Alfaro 5J -->
    	<h1>Alta de Articulos</h1>
    	<input type="text" name="Nombre" placeholder="Nombre Del Articulo">
    	<input type="text" name="Clasificacion" placeholder="Clasificacion">
		<input type="text" name="Marca" placeholder="Marca">
    	<input type="text" name="Estilo" placeholder="Estilo">
    	<input type="submit" name="articulos">
    </form>
        <?php 
        include("articulos.php");
        ?>
</body>
</html>