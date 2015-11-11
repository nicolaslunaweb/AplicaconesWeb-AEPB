<?php
class m_calificaciones extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	function vista_dt_calificaciones($id){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->get('calificaciones'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	///////
	function edit_dt_calificaciones($id,$clave){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->where("materia",$clave);
		$query = $this->db->get('calificaciones'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	///////
	public function verifica_materia($materia) {
        $this->db->where('clave_especialidad',$materia);
        $consulta = $this->db->get('materias');
        if($consulta->num_rows() == 1)
        {
            $row = $consulta->row();
            return $row->matricula_;
        }
    }
	
	////////////
	
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
	
	///lista_materias_edit
	function lista_materias_edit($materias){
		$this->db->select('*');
		$this->db->from("materias");
		$this->db->where("licenciatura",$materias);
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	//listar materia para editar
	function lista_materia_edit($especialidad,$clave_materia){
		$query = $this->db->where("licenciatura",$especialidad);
		$query = $this->db->where("clave_especialidad",$clave_materia);
		$query = $this->db->get('materias'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	//funcion listar
	function listar_materias_total($matricula){
		$this->db->select('*');
		$this->db->from('calificaciones',"materias");
		$this->db->join('materias', 'materias.clave_especialidad = calificaciones.materia');
		$this->db->where("calificaciones.matricula",$matricula);
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	
	///clava_docente
	function docenteclave($materia){
		$query = $this->db->select('clave_docente');
		$query = $this->db->where("clave_especialidad",$materia);
		$query = $this->db->get('materias'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	///clava_docente
	function docentedatos($id){
		$query = $this->db->where("clave_docente",$id);
		$query = $this->db->get('profesores'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	
	
	//funcion listar para registro de escolaridad
	function lista_por_ciclo($ciclo,$semestre,$especialidad){
		$this->db->select('matricula');
		$this->db->where("ciclo_escolar",$ciclo);
		$this->db->where("semestre",$semestre);
		$this->db->where("clave_especialidad",$especialidad);
		$this->db->distinct();
		$query = $this->db->get('calificaciones');
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	
	
	
//////aki cierra*/
}
?>