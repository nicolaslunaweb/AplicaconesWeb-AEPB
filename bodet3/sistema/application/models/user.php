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
	
	
	///
	//parametros de "mi_join" ... esto es para imprimir etiquetas atraves de un ID
	//primer parametro : id
	//tercer parametro : nombre de la tabla
	//segundo parametro : idtabla de id de la tabla (id"nombre de la tabla")
	//cuarto parametro : label que quiero inprimir
	function mi_join_m($id,$materia,$tabla,$idtabla,$idtabla2,$label){
		$query = $this->db->where($idtabla,$id);
		$query = $this->db->where($idtabla2,$materia);
		$query = $this->db->get($tabla); 
		
			foreach ($query->result() as $datos){
				///aki tengo mi $label que quiero retornar 
			return  $datos->$label;
		}
	}
	////
	
	function mi_select($id,$select){
		if($id == $select) {
            
            return 'selected="selected"';
        }
	}
	
	////////////////
	
	function d_escuela(){
		$query = $this->db->get('datos_escuela'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}/////////
	
	
	////////////////
	
	function fecha_apertura(){
	    $query = $this->db->where('ID','E34rZdFDe4');
		$query = $this->db->get('apertura_fechas'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}/////////
	












//funcion listar
	function lista($from,$where1,$label1,$where2,$label2,$where3,$label3){
		$this->db->select('*');
		$this->db->from($from);
		$this->db->where($where1,$label1);
		$this->db->where($where2,$label2);
		$this->db->where($where3,$label3);
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}


	//funcion listar
	function listamatarias($from,$where1,$label1,$where2,$label2){
		$this->db->select('*');
		$this->db->from($from);
		$this->db->where($where1,$label1);
		$this->db->where($where2,$label2);
		
		$query = $this->db->get();
		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}






	////////////////
	
}
?>