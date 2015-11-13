<?php
Class User extends CI_Model
{
	function login($ID, $password)
	{
		$this -> db -> select('*');
		$this -> db -> from('users');
		$this -> db -> where('ID = ' . "'" . $ID . "'"); 
		$this -> db -> where('password = ' . "'" . MD5($password) . "'"); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	///
	//parametros de "mi_join" ... esto es para imprimir etiquetas atraves de un ID
	//primer parametro : id
	//tercer parametro : nombre de la tabla
	//segundo parametro : idtabla de id de la tabla (id"nombre de la tabla")
	//cuarto parametro : label que quiero inprimir
	function mi_join($id,$tabla,$idtabla,$label){
		$query = $this->db->where($idtabla,$id);
		$query = $this->db->get($tabla); 
		
			foreach ($query->result() as $datos){
				///aki tengo mi $label que quiero retornar 
			return  $datos->$label;
		}
	}
	////
}
?>