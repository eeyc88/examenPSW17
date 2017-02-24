<?php

class CabeceraTarea{

	private $idcabeceratarea;
	private $periodo;
	private $fecha;
	private $supervisor;
	private $idcultivolote;
	private $estado;
	private $tarea;

	function __construct($idcabeceratarea, $periodo, $fecha, $supervisor, $idcultivolote, $estado, $tarea){
		$this->idcabeceratarea = $idcabeceratarea;
		$this->periodo = $periodo;
		$this->idcultivolote = $idcultivolote;
		$this->supervisor = $supervisor;
		$this->fecha = $fecha;
		$this->estado = $estado;
		$this->tarea = $tarea;
	}

	function setIdcabeceratarea($idcabeceratarea){
		$this->idcabeceratarea = $idcabeceratarea;
	}

	function getIdcabeceratarea(){
		return $this->idcabeceratarea;
	}

	function setPeriodo($periodo){
                $this->periodo = $periodo;
        }

        function getPeriodo(){
                return $this->periodo;
        }

	function setIdcultivolote($idcultivolote){
                $this->idcultivolote = $idcultivolote;
        }

        function getIdcultivolote(){
                return $this->idcultivolote;
        }

	function setSupervisor($supervisor){
                $this->supervisor = $supervisor;
        }

        function getSupervisor(){
                return $this->supervisor;
        }

	function setFecha($fecha){
                $this->fecha = $fecha;
        }

        function getFecha(){
                return $this->fecha;
        }

	function setEstado($estado){
                $this->estado = $estado;
        }

        function getEstado(){
                return $this->estado;
        }

	function setTarea($tarea){
		$this->tarea = $tarea;
	}

	function getTarea(){
		return $this->tarea;
	}

}

?>
