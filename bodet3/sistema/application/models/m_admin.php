<?php
class m_admin extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	


		public function verifica_username2($matricula_) {
        $this->db->where('clave_docente',$matricula_);
        $consulta = $this->db->get('profesores');
        if($consulta->num_rows() == 1)
        {
            $row = $consulta->row();
            return $row->clave_docente;
        }
    }
	
	////
	
	public function nombre_del_user($matri){
		$this->db->where('clave_docente',$matri);
        $consulta = $this->db->get('profesores');
        if($consulta->num_rows() == 1)
        {
            $row = $consulta->row();
            return $row->nombre." ".$row->paterno." ".$row->materno;
        }
		
	}
	
	///numero de IDre para pasar a la vista de lo guardado
	function relacion(){
		$this->db->select('IDre');
		$this->db->from('talleres_profesores');
		$this->db->order_by("IDre", "desc");
		$this->db->limit(1);
		$query = $this->db->get();
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	///lista_materias_edit
	function lista_profesores(){
		$this->db->select('*');
		$this->db->from("profesores");
		$this->db->order_by("nombre", "asc");
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	///lista_administrador
	function lista_administrador(){
		$this->db->select('*');
		$this->db->from("administrativos");
		$this->db->order_by("nombre", "asc");
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	/////listar_talleres_profesor
	function listar_talleres_profesor($id){
		$this->db->select('*');
		$this->db->from("talleres_profesores");
		$this->db->where("clave_docente",$id);
		$this->db->order_by("nivel", "asc");
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	///////
	function datos_profesor($id){
		$query = $this->db->where("clave_docente",$id);
		$query = $this->db->get('profesores'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	///////
	function datos_doc_profesor($id){
		$query = $this->db->where("clave_docente",$id);
		$query = $this->db->get('doc_profesores'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	///////
	function datos_historial_profesor($id){
		$query = $this->db->where("clave_docente",$id);
		$query = $this->db->get('hist_profesores'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	///////
	function datos_talleres_profesor($id,$idre){
		$query = $this->db->where("IDre",$idre);
		$query = $this->db->where("clave_docente",$id);
		$query = $this->db->get('talleres_profesores'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	///////
	
	function datos_administrativo($id){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->get('administrativos'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	/////
	
//////aki cierra*/
}
?>