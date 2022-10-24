<?php
$conexion = mysqli_connect('localhost','root','','tienda' ) 
or die(mysql_error($mysqli));


insertar($conexion);

function insertar($conexion){
	$tv1       =   $_POST['tv1'];
	$nombre1   =   $_POST['nombre1'];
	$producto1 =   $_POST['producto1']; 
	$marca1    =   $_POST['marca1'];
	$cantidad1 =   $_POST['cantidad1']; 
	$valor1    =   $_POST['valor1']; 
	$fecha1    =   $_POST['fecha1']; 

	
	$consulta = "INSERT INTO tienda1(tv1, nombre1, producto1, marca1, cantidad1, valor1, fecha1)
	VALUES ('$tv1','$nombre1','$producto1','$marca1','$cantidad1','$valor1','$fecha1')";
	
	mysqli_query($conexion, $consulta);
	mysqli_close($conexion);
	
	if($consulta){
	
		echo "<script>
		
		alert('Registro insertado');
		window.location='main.php';
		</script>";
	}else {
		echo
		"<script>
		alert('existe alguna falla, favor de intentar nuevamente');
		window.location = 'main.php';
		</script>";
	}	
	
	
}


?>
	
