<?php
class m_talleres extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	function vista_dt_talleres($id,$IDre){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->where("IDre",$IDre);
		$query = $this->db->get('talleres'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	//funcion listar
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
/////////
}
?>