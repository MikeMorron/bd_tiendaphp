<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
<title>Tienda 1</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 </head>



 <body>
    <div>
	</div>


	<center>
	<center><h1>Registrar Venta</h1></center>
<form action="conexion.php" method="post">
 <fieldset class="scheduler-border">

<br>
  <input type="number" name="tv1"  id="tv1" placeholder="Estas en Tienda 1" required>
<br>
  <input type="text" name="nombre1"  id="nombre1" placeholder="Nombre del Vendedor" required  >
<br>
  <input type="text" name="producto1" id="producto1" placeholder="producto" >
<br>
  <input type="text" name="marca1" id="marca1" placeholder="marca" >
<br>   
    <input type="number" name="cantidad1"id="cantidad1" placeholder="cantidad" >
<br>  
  <input type="number" name="valor1" id="valor1" placeholder="precio total de venta" required>
 <br>   
  <input type="date" name="fecha1" id="fecha1" required >
</center>





    <br>


<center>
	<br>

<button type="submit" name="enviar" class="btn btn-success">Guardar</button>
<input type="reset" class="btn btn-deletes" name="btn0" value="Borrar">

<br>
</center>

 </fieldset>
</form>


<center> 
	<br>
	<a href="pages/filtro.php">
    <button class=btn-btn>Filtrar</button>
  </a> 
    </center>

<?php
/*valor*/
include("consl/abrir_conexion.php");

    $consulta =" SELECT valor1  FROM tienda1 ";
    $resultado = mysqli_query ( $conexion , $consulta ) or die ( " Algo ha ido mal!" ) ;


	$total=0;

	$count=mysqli_num_rows($resultado);
    if($count > 0){
    while($columna=mysqli_fetch_array($resultado)){
		echo "<tr>";
		echo"<table>";		
	    echo "</tr>";
		$total+=$columna['valor1'];
    }
}
	
      
	echo "</table>";
	echo "<table>";
	echo "<td>Total Ganancias del mes en tienda 1 = </td>";
	echo "<td>".$total."</td>";
	echo "</table>";
 
    mysqli_close ( $conexion ) ;
	?>


<?php
/*productos*/
include("consl/abrir_conexion.php");

    $consulta =" SELECT cantidad1  FROM tienda1 ";
    $resultado = mysqli_query ( $conexion , $consulta ) or die ( " Algo ha ido mal!" ) ;


	$total=0;

	$count=mysqli_num_rows($resultado);
    if($count > 0){
    while($columna=mysqli_fetch_array($resultado)){
		echo "<tr>";
		echo"<table>";		
	    echo "</tr>";
		$total+=$columna['cantidad1'];
    }
}
	
      
	echo "</table>";
	echo "<table>";
	echo "<td>Productos vendidos del mes en tienda 1 = </td>";
	echo "<td>".$total."</td>";
	echo "</table>";
 
    mysqli_close ( $conexion ) ;
	?>



 </body>
</html>

