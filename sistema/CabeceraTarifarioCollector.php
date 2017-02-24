<?php

include_once('cabeceraTarifario.php');
include_once('Collector.php');

class CabeceraTarifarioCollector extends Collector
{
  
  function showCabecerasTarifarias() {
    $rows = self::$db->getRows("SELECT idcabeceratarifario,idperiodo,idcultivo,fecha,estado FROM controlAgricola.cabeceratarifario ");        
    $arrayCabeceraTarifario= array();        
    foreach ($rows as $c){
      $aux = new CabeceraTarifario($c{'idcabeceratarifario'},$c{'idperiodo'},$c{'idcultivo'},$c{'fecha'},$c{'estado'});
      array_push($arrayCabeceraTarifario, $aux);
    }
    return $arrayCabeceraTarifario;        
  }
 
 function deleteCabecerasTarifarias($id){
   $rows = self::$db->deleteRow("DELETE FROM controlAgricola.cabeceratarifario where idcabeceratarifario = $id", null);
}

function insertCabecerasTarifarias($id, $idperiodo, $idcultivo, $fecha, $estado) {
    $rows = self::$db->insertRow("Insert into controlAgricola.cabeceratarifario (idcabeceratarifario, idperiodo, idcultivo, fecha, estado) values ('$id','$idperiodo', '$idcultivo', '$fecha' , '$estado' )" , null);             
  }

function updateCabecerasTarifarias($id, $idperiodo, $idcultivo, $fecha, $estado) {
    $rows = self::$db->updateRow("Update controlAgricola.cabeceratarifario set idperiodo = '$idperiodo', idcultivo = '$idcultivo', fecha = '$fecha', estado = '$estado' where idcabeceratarifario =$id", null);             
  }
}
?>

