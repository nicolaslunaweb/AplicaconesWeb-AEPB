<?php
class m_academico extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	//////
	function materias_profesor($idprofe){
		$this->db->select('*');
		$this->db->from("materias");
		$this->db->where("clave_docente",$idprofe);
		$this->db->order_by("clave_especialidad", "asc");
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	////////
	function alumnos_de_materia($idm,$semestre,$cicloescolar){	
		$this->db->select('*');
		$this->db->from('calificaciones',"alumnos");
		$this->db->join('alumnos', 'alumnos.matricula = calificaciones.matricula');
		$this->db->where("alumnos.semestre",$semestre);
		$this->db->where("alumnos.ciclo_escolar",$cicloescolar);
		$this->db->where("calificaciones.materia",$idm);

		$this->db->order_by("alumnos.nombre", "ASC"); 
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
/////////

    ////////
	function alumnos_de_materia_sex($idm,$sex){	
		$this->db->select('*');
		$this->db->from('calificaciones',"alumnos");
		$this->db->join('alumnos', 'alumnos.matricula = calificaciones.matricula');
		$this->db->where("calificaciones.materia",$idm);
		$this->db->where("alumnos.sexo",$sex);
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
/////////

	//////
	function fecha_apertura_calificar(){	
		$this->db->select('*');
		$this->db->from("apertura_fechas");
		$this->db->where("ID","E34rZdFDe4");
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}	/////



}
?>