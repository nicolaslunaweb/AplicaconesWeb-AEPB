<?php
class m_historial extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	function vista_dt_historial($id){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->get('historial'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
//////aki cierra*/
}
?>