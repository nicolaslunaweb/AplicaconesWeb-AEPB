<?php
class m_documentacion extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	function vista_dt_documentacion($id){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->get('documentacion'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
//////aki cierra*/
}
?>