<?php

include_once('labor.php');
include_once('Collector.php');

class LaborCollector extends Collector
{
  
  function showLabores() {
    $rows = self::$db->getRows("SELECT idlabor,idgrupolabor,nombre,estado FROM controlAgricola.labor ");        
    $arrayLabor= array();        
    foreach ($rows as $c){
      $aux = new Labor($c{'idlabor'},$c{'idgrupolabor'},$c{'nombre'},$c{'estado'});
      array_push($arrayLabor, $aux);
    }
    return $arrayLabor;        
  }

function deleteLabores($id) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.labor where idlabor = $id", null);             
  }

function updateLabores($id, $idgrupolabor, $nombre, $estado) {
    $rows = self::$db->updateRow("Update controlAgricola.labor set idgrupolabor= $idgrupolabor, nombre = '$nombre', estado = $estado where idlabor =$id", null);             
  }

 function insertLabores($idgrupolabor, $nombre, $estado) {
    $rows = self::$db->insertRow("Insert into controlAgricola.labor (idgrupolabor, nombre, estado) values ($idgrupolabor, '$nombre' , $estado )" , null);             
  }
}
?>

