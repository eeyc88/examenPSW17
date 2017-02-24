<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Menú</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet" >
        <link href="../css/tablas.css" rel="stylesheet" >
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
</head>

<body>
<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Tareas</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createTarea.php'>Nuevo</a></li>";
		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

include_once("cabeceratareaCollector.php");
$CabeceraTareaCollectorObj = new CabeceraTareaCollector();

echo "<div class='container'>";
echo "<h2>Tareas</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo " 	   <th>Código</th>"; 
echo "     <th>Periodo</th>"; 
echo "     <th>Fecha</th>";
echo "     <th>Supervisor</th>";
echo "     <th>Cultivolote</th>";
echo "     <th>Estado</th>";
echo "     <th>Tarea</th>"; 
echo "</tr>"; 
echo "</thead>"; 
foreach ($CabeceraTareaCollectorObj->showTareas() as $c){
	echo "<tbody>"; 
	echo "<tr>"; 
	echo "<td>".$c->getIdcabeceratarea()."</td>"; 
	echo "<td>".$c->getPeriodo()."</td>";
	echo "<td>".$c->getFecha()."</td>";
	echo "<td>".$c->getSupervisor()."</td>";
	echo "<td>".$c->getIdcultivolote()."</td>"; 
 	if($c->getEstado()== '1'){
		echo "<td>Activo</td>";
	}else{
		echo "<td>Inactivo</td>";
	}
	echo "<td>".$c->getTarea()."</td>";
	echo "<td><a href='updateTarea.php?idcabeceratarea=".$c->getIdcabeceratarea()."&periodo=".$c->getPeriodo()."&fecha=".$c->getFecha()."&supervisor=".$c->getSupervisor()."&idcultivolote=".$c->getIdcultivolote()."&estado=".$c->getEstado()."&tarea=".$c->getTarea()."'>Editar</a></td>"; 
	echo "<td><a href='deleteTarea.php?idcabeceratarea=".$c->getIdcabeceratarea()."&periodo=".$c->getPeriodo()."&fecha=".$c->getFecha()."&supervisor=".$c->getSupervisor()."&idcultivolote=".$c->getIdcultivolote()."&estado=".$c->getEstado()."&tarea=".$c->getTarea()."'>Eliminar</a></td>"; 
	echo "</tr>"; 
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
?>

</body>
</html>

