<?php
class M_apuntadores extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	function lista_alumno2($corte){
		$this->db->select('matricula, nombre, paterno, materno, clave_especialidad, ciclo_escolar, semestre, sexo, estatus');
		$this->db->like("matricula", $corte);
		$this->db->order_by("matricula", "asc");

		$query = $this->db->get("alumnos");
		
			  		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}

	function corteanterior($corte){
		$this->db->select('matricula, nombre, paterno, materno, clave_especialidad, ciclo_escolar, semestre, sexo');
		$this->db->like("matricula", $corte);
		$this->db->order_by("matricula", "asc");

		$query = $this->db->get("alumnos");
		
			  		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	/////////////////////////
	
	function lista_titulados($corte){
		$this->db->select('matricula, tema');
		$this->db->like("matricula", $corte);
		$this->db->order_by("matricula", "asc");

		$query = $this->db->get("titulacion");
		
			  		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}

	function lista_egresados($corte){
		$this->db->select('matricula, fecha, semestrescursados');
		$this->db->like("matricula", $corte);
		$this->db->order_by("matricula", "asc");

		$query = $this->db->get("egresado");
		
			  		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	///////
	function pormateriaycohorte($id,$clave){
		$query = $this->db->like("matricula",$id);
		$query = $this->db->where("materia",$clave);
		$this->db->order_by("matricula", "asc");


		$query = $this->db->get('calificaciones'); 

		
			if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}


	/////////////////////////
	
	
	//////aki cierra*/
}
?>