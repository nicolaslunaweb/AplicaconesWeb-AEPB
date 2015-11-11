<?php
class m_titulacion extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

	function vista_dt_titulacion($id){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->get('titulacion'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
//////aki cierra*/
}
?>