<?php
	$bd_host="localhost";
	$bd_usuario="compusciens";
	$bd_password="kakolukiya";
	$bd_base="ptransporteucv";
	$con=mysqli_connect($bd_host, $bd_usuario, $bd_password, $bd_base) 
		or die ("Se produjo un error conectando con la base datos.");
?>