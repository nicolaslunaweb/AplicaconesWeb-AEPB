<?php
class alumnos extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	function vista_dt_alumonos($id){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->get('alumnos'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	///////
	function vista_dt_historial($id){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->get('historial'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	////
	
	function vista_dt_documentacion($id){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->get('documentacion'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	////
	
	//funcion listar
	function listar_materias($matricula,$semestre){
		$this->db->select('*');
		$this->db->from('calificaciones',"materias");
		$this->db->join('materias', 'materias.clave_especialidad = calificaciones.materia');
		$this->db->where("calificaciones.matricula",$matricula);
		$this->db->where("materias.semestre",$semestre);
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	//////
	
	function listar_talleres($matricula){
		$this->db->select('*');
		$this->db->from('talleres');
		$this->db->where("matricula",$matricula);
		$this->db->order_by('nivel asc'); 
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	////////
	public function nombre_del_user($matri){
		$this->db->where('matricula',$matri);
        $consulta = $this->db->get('alumnos');
        if($consulta->num_rows() == 1)
        {
            $row = $consulta->row();
            return $row->nombre." ".$row->paterno." ".$row->materno;
        }
		
	}
//////aki cierra*/
}
?>