<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    
	$basededatos = "tienda";    
	$usuariodb = "root";    
	$clavedb = "";    

	//Lista de Tablas
	$tienda1 = "tienda1"; 	   
	
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_error) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>