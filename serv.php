<?php
	$link = @mysql_connect("localhost","root","") or die("No se encontró el servidor");
	mysql_select_db("sesiones",$link)or die("No se encontró la base de datos");
?>