<?php
class m_ceneval extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	function vista_dt_ceneval($id){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->get('ceneval'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
/////////
}
?>