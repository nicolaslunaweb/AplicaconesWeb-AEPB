<?php
class m_egresados extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	function vista_dt_egresados($id){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->get('egresado'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
/////////
}
?>