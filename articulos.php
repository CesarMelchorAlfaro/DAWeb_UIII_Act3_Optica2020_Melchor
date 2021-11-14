<?php 
//Cesar Melchor Alfaro 5J
include("con_db.php");

if (isset($_POST['articulos'])) {
    if (strlen($_POST['Nombre']) >= 1 && 
	    strlen($_POST['Clasificacion']) >= 1 && 
		strlen($_POST['Marca']) >= 1 && 
		strlen($_POST['Estilo']) >= 1) {

	    $Nombre = trim($_POST['Nombre']);
	    $Clasificacion = trim($_POST['Clasificacion']);
	    $Marca = trim($_POST['Marca']);
		$Estilo= trim($_POST['Estilo']);

	    $consulta = "INSERT INTO articulos(Nombre, Clasificacion, Marca, Estilo) VALUES ('$Nombre', '$Clasificacion', '$Marca', '$Estilo')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Registro enviado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>