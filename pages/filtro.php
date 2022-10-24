<html>
<head>
<title>Buscador</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>


<body>


<?php 
 
 $servidor= "localhost";
 $usuario= "root";
 $password = "";
 $nombreBD= "tienda";
 $conexion = new mysqli($servidor, $usuario, $password, $nombreBD);
 if ($conexion->connect_error) {
     die("la conexión ha fallado: " . $conexion->connect_error);
 }
 
 
 if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
 if (!isset($_POST['nombre'])){$_POST['nombre'] = '';}
 if (!isset($_POST['tv1'])){$_POST['tv1'] = '';}
 if (!isset($_POST['producto1'])){$_POST['producto1'] = '';}
 if (!isset($_POST['buscafechadesde'])){$_POST['buscafechadesde'] = '';}
 if (!isset($_POST['buscafechahasta'])){$_POST['buscafechahasta'] = '';}
 if (!isset($_POST['buscapreciodesde'])){$_POST['buscapreciodesde'] = '';}
 if (!isset($_POST['buscapreciohasta'])){$_POST['buscapreciohasta'] = '';}
 if (!isset($_POST["orden"])){$_POST["orden"] = '';}
 
 
 ?>
 
 
 
 <center> 
	<br>
    <input type="button" class="btn btn-success" onclick="history.back()" name="atras" value="volver atrás">
    </center>
 <div class="container mt-5">
     <div class="col-12">
  
 
 
     <div class="row">
 <div class="col-12 grid-margin">
 <div class="card">
 <div class="card-body">
 
         <h4 class="card-title">Buscador</h4>
 
 
 <form id="form2" name="form2" method="POST" action="filtro.php">
         <div class="col-12 row">
 
             <div class="mb-3">
                     <label  class="form-label">Nombre a buscar</label>
                     <input type="text" class="form-control" id="buscar" name="buscar" value="<?php echo $_POST["buscar"] ?>" >
             </div>
 
             <h4 class="card-title">Filtro de búsqueda</h4>  
             
             <div class="col-11">
 
                         <table class="table">
                                 <thead>
                                         <tr class="filters">
                                                 <th>
                                                       
                                                 <th>
                                                         Precio desde:
                                                         <input type="number" id="buscapreciodesde" name="buscapreciodesde" class="form-control mt-2" value="<?php echo $_POST["buscapreciodesde"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                 </th>
                                                 <th>
                                                         Precio hasta:
                                                         <input type="number" id="buscapreciohasta" name="buscapreciohasta" class="form-control mt-2" value="<?php echo $_POST["buscapreciohasta"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                 </th>
                                          
                                                 <th>
                                                         Fecha desde:
                                                         <input type="date" id="buscafechadesde" name="buscafechadesde" class="form-control mt-2" value="<?php echo $_POST["buscafechadesde"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                 </th>
                                                 <th>
                                                         Fecha hasta:
                                                         <input type="date" id="buscafechahasta" name="buscafechahasta" class="form-control mt-2" value="<?php echo $_POST["buscafechahasta"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                 </th>
                                                 <th>
                                                        Producto:
                                                        <select id="subject-filter" id="producto" name="producto1" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["producto1"] != ''){ ?>
                                                                <option value="<?php echo $_POST["producto1"]; ?>"><?php echo $_POST["producto1"]; ?></option>
                                                                <?php } ?>
                                                                <option value="">Todos</option>
                                                                <option style="color: blue;" value="gaseosa">Gaseosa</option>
                                                                <option style="color: red;" value="pan">pan</option>
                                                                <option style="color: orange;" value="aceite">aceite</option>
                                                                <option style="color: green;" value="arroz">arroz</option>
                                                         </select>
                                                 </th>
                                         </tr>
                                 </thead>
                         </table>
                 </div>
 
 
                 <h4 class="card-title">Ordenar por</h4>  
             
             <div class="col-11">
 
                         <table class="table">
                                 <thead>
                                         <tr class="filters">
                                                 <th>
                                                         Selecciona el orden
                                                         <select id="assigned-tutor-filter" id="orden" name="orden" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                 <?php if ($_POST["orden"] != ''){ ?>
                                                                 <option value="<?php echo $_POST["orden"]; ?>">
                                                                 <?php 
                                                                 if ($_POST["orden"] == '1'){echo 'Ordenar por nombre';} 
                                                                 if ($_POST["orden"] == '3'){echo 'Ordenar por producto';} 
                                                                 if ($_POST["orden"] == '4'){echo 'Ordenar por precio de menor a mayor';} 
                                                                 if ($_POST["orden"] == '5'){echo 'Ordenar por precio de mayor a menor';} 
                                                                 if ($_POST["orden"] == '6'){echo 'Ordenar por fecha de reciente';} 
                                                                 if ($_POST["orden"] == '7'){echo 'Ordenar por fecha de antigua';} 
                                                                 ?>
                                                                 </option>
                                                                 <?php } ?>
                                                                 <option value=""></option>
                                                                 <option value="1">Ordenar por nombre</option>
                                                                 <option value="3">Ordenar por producto</option>
                                                                 <option value="4">Ordenar por precio de menor a mayor</option>
                                                                 <option value="5">Ordenar por precio de mayor a menor</option>
                                                                 <option value="6">Ordenar por fecha de reciente</option>
                                                                 <option value="7">Ordenar por fecha de antigua</option>
                                                         </select>
                                                 </th>
                                           
                                               
                                       
                                         </tr>
                                 </thead>
                         </table>
                 </div>
 
 
                 <div class="col-1">
                         <input type="submit" class="btn " value="Ver" style="margin-top: 38px; background-color: purple; color: white;">
                 </div>
         </div>
 
 
         <?php 
         /*FILTRO de busqueda////////////////////////////////////////////*/
         if ($_POST['buscar'] == ''){ $_POST['buscar'] = ' ';}
         $aKeyword = explode(" ", $_POST['buscar']);
         
        
         if ($_POST["buscar"] ==  '' AND $_POST['tv1'] =='' AND $_POST['nombre1'] =='' AND $_POST['buscafechadesde'] == '' AND $_POST['buscafechahasta'] == ''AND $_POST['buscapreciodesde'] == '' AND $_POST['buscapreciohasta'] == ''){ 
                 $query ="SELECT * FROM tienda1";
         }else{
 
 
                 $query ="SELECT * FROM tienda1 ";
 
         if ($_POST["buscar"] != '' ){ 
                 $query .= "WHERE (nombre1 LIKE LOWER('%".$aKeyword[0]."%') OR nombre1 LIKE LOWER('%".$aKeyword[0]."%')) ";
         
         for($i = 1; $i < count($aKeyword); $i++) {
            if(!empty($aKeyword[$i])) {
                $query .= " OR nombre1 LIKE '%" . $aKeyword[$i] . "%' OR nombre1 LIKE '%" . $aKeyword[$i] . "%'";
            }
          }
 
         }
 
         if ($_POST["buscafechadesde"] != '' ){
                 $query .= " AND fecha1 BETWEEN '".$_POST["buscafechadesde"]."' AND '".$_POST["buscafechahasta"]."' ";
          }
 
          if ( $_POST['buscapreciodesde'] != '' ){
                 $query .= " AND valor1 >= '".$_POST['buscapreciodesde']."' ";
          }
 
          if ( $_POST['buscapreciohasta'] != '' ){
                 $query .= " AND valor1 <= '".$_POST['buscapreciohasta']."' ";
        }
               
         if ($_POST["tv1"] != '' ){
                              $query .= " AND tv1 = '".$_POST["tv1"]."' ";
        }
               
         if ($_POST["producto1"] != '' ){
                       $query .= " AND producto1 = '".$_POST["producto1"]."' ";
        }
 
          if ($_POST["orden"] == '1' ){
                 $query .= " ORDER BY nombre1 ASC ";
        }

          if ($_POST["orden"] == '3' ){
                       $query .= " ORDER BY producto1 ASC ";
        }
 
          if ($_POST["orden"] == '4' ){
                 $query .= " ORDER BY valor1 ASC ";
          }
 
          if ($_POST["orden"] == '5' ){
                 $query .= " ORDER BY valor1 DESC ";
          }
 
          if ($_POST["orden"] == '6' ){
                 $query .= " ORDER BY fecha1 ASC ";
          }
 
          if ($_POST["orden"] == '7' ){
                 $query .= " ORDER BY fecha1 DESC ";
          }
         
        
 }
 
   
 $sql=$conexion->query($query);
 $numero = mysqli_num_rows($sql);
 
         ?>
         
         <p style="font-weight: bold; color:green;"><i class="mdi mdi-file-document"></i> <?php echo $numero; ?> Resultados encontrados</p>
 </form>
 
 
 <div class="table-responsive">
         <table class="table">
                 <thead>
                         <tr style="background-color:green; color:#FFFFFF;">
                                <th style=" text-align: center;"> Tienda </th>
                                 <th style=" text-align: center;"> Nombre </th>
                                 <th style=" text-align: center;"> Producto </th>
                                 <th style=" text-align: center;"> Precio </th>
                                 <th style=" text-align: center;"> Fecha </th>
                         </tr>
                 </thead>
                 <tbody>
                 <?php While($rowSql = $sql->fetch_assoc()) {   ?>
                
                         <tr>
                         <td style="text-align: center;"><?php echo $rowSql["tv1"]; ?></td>
                         <td style="text-align: center;"><?php echo $rowSql["nombre1"]; ?></td>
                         <td style="text-align: center;"><?php echo $rowSql["producto1"]; ?></td>
                         <td style="text-align: center;"><?php echo $rowSql["valor1"]; ?> €</td>
                         <td style=" text-align: center;"><?php echo $rowSql["fecha1"]; ?></td>
                         </tr>
                
                <?php } ?>
                 </tbody>
         </table>
 </div>
 
 
 </div>
 </div>

</body>
</html>
 
 