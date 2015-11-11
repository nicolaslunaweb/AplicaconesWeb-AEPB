<?php
class m_parametros extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	//funcion listar
	function listar_alumnos($clave_especialidad,$sexo,$semestre){
		$this->db->select('*');
		$this->db->from("alumnos");
		if($clave_especialidad != "" && $clave_especialidad != "0"){$this->db->where("clave_especialidad",$clave_especialidad);}///por clave_especialidad
		if($sexo != "" && $sexo != "0"){$this->db->where("sexo",$sexo);}///por sexo
		if($semestre != "" && $semestre != "0"){$this->db->where("semestre",$semestre);}///por semestre
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	
	
	//funcion listar documentacion
	function listar_documentacion(){
		$this->db->select('*');
		$this->db->from("documentacion");
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	//funcion listar cobranza
	function listar_cobranza(){
		$this->db->select('*');
		$this->db->from("cobranza");
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	//////
	
	//funcion listar cobranza
	function plantilla_personal(){
		$this->db->select('*');
		$this->db->from("profesores");
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	//////
	
	///funcion datos materia -- lista de alumnos
	function datos_materia($clave){
		$query = $this->db->where("clave_especialidad", $clave);
		$query = $this->db->get('materias'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	///////
	
//////aki cierra*/
}
?>