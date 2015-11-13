<?php
class alumnos extends CI_Model{

	 function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	function datos_escuela(){
		$query = $this->db->where("id", 1);
		$query = $this->db->get('datos_escuela'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	///////
	
	function lista_alumno($limite,$desdedonde){
		$this->db->select('*');
		$this->db->from("alumnos");
		$this->db->limit($limite,$desdedonde);
		$this->db->order_by("paterno", "asc");
		
		
		
		$query = $this->db->get();
	  		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}

	function listadealumnos($especialidad,$semestre,$ciclo_escolar){
		$this->db->select('*');
		$this->db->from("alumnos");
		$this->db->where("clave_especialidad",$especialidad);
		$this->db->where("ciclo_escolar",$ciclo_escolar);
		$this->db->where("semestre",$semestre);
		$this->db->order_by("nombre", "asc");
		
		
		
		$query = $this->db->get();
	  		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}

	function formatodeboletaporgrupo($especialidad,$semestre,$ciclo_escolar){
		$this->db->select('*');
		$this->db->from("alumnos");
		$query = $this->db->where("clave_especialidad",$especialidad);
		$query = $this->db->where("semestre",$semestre);
		$query = $this->db->where("ciclo_escolar",$ciclo_escolar);
		$this->db->order_by("nombre", "asc");
		
		
		
		$query = $this->db->get();
	  		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	
	function lista_alumnof($nombre,$nombrep){
		$this->db->select('*');
		$this->db->from("alumnos");
		if($nombre){$this->db->like("nombre",$nombre);}///
		if($nombrep){$this->db->like("paterno",$nombrep);}
		$this->db->order_by("nombre", "asc");
		
		
		
		$query = $this->db->get();
	  		
	     if ($query->num_rows>0 ){
			foreach ($query->result() as $datos){
				$data[] = $datos;
			}
			return $data;
		}
	}
	
	
	
	function vista_dt_alumonos($id){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->get('alumnos'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	///////
	
	function vista_dt_prealumonos($id){
		$query = $this->db->where("ficha",$id);
		$query = $this->db->get('preinscripcion'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	///////
	
	function numero_ficha(){
		$this->db->select('ficha');
		$this->db->from('preinscripcion');
		$this->db->order_by("ficha", "desc");
		$this->db->limit(1);
		$query = $this->db->get();
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	
	
		///////

	public function verifica_username($matricula_) {
        $this->db->where('matricula',$matricula_);
        $consulta = $this->db->get('alumnos');
        if($consulta->num_rows() == 1)
        {
            $row = $consulta->row();
            return $row->matricula_;
        }
    }
	
	///////

	public function verifica_username2($matricula_) {
        $this->db->where('matricula',$matricula_);
        $consulta = $this->db->get('alumnos');
        if($consulta->num_rows() == 1)
        {
            $row = $consulta->row();
            return $row->matricula;
        }
    }
	
	////
	
	public function nombre_del_user($matri){
		$this->db->where('matricula',$matri);
        $consulta = $this->db->get('alumnos');
        if($consulta->num_rows() == 1)
        {
            $row = $consulta->row();
            return $row->nombre." ".$row->paterno." ".$row->materno;
        }
		
	}
	
	///////
	
	public function verifica_clave_docente($docente) {
        $this->db->where('clave_docente',$docente);
        $consulta = $this->db->get('profesores');
        if($consulta->num_rows() == 1)
        {
            $row = $consulta->row();
            return $row->matricula_;
        }
    }
	
	////
	function especialidades(){
		$query = $this->db->get('especialidades');
		
		if ($query->num_rows>0 ){
			foreach ($query->result() as $especialidades){
				$data[] = $especialidades;
				}
			return $data;
		}
	}
	
	////
	function vista_dt_cobranza($id,$semestre){
		$query = $this->db->where("matricula",$id);
		$query = $this->db->where("semestre",$semestre);
		$query = $this->db->get('cobranza'); 
		
			foreach ($query->result() as $datos){
				$data[] = $datos;
			return $data;
		}
	}
	///////
	
	
	//// crear calificaciones
	function kardex($matricula,$especialidad,$semestre,$ciclo_escolar){
		if($especialidad == 5){
			///
			///semestre 1 EDUCACIÓN INICIAL
			if($semestre == 1){
			  $i = 11;   
			  while ($i <= 18)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => "EI".$i,
					  'semestre' => "1",
					  "clave_especialidad" => $especialidad,
					  "ciclo_escolar" => $ciclo_escolar
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
				}else{
			  $i = 11;   
			  while ($i <= 18)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => "EI".$i,
					  'semestre' => "1",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
				}
			///semestre 2 EDUCACIÓN INICIAL
			  $i = 21;   
			  while ($i <= 28)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => "EI".$i,
					  'semestre' => "2",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
			///semestre 3 EDUCACIÓN INICIAL
			  $i = 31;   
			  while ($i <= 38)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => "EI".$i,
					  'semestre' => "3",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
			///semestre 4 EDUCACIÓN INICIAL
			  $i = 41;   
			  while ($i <= 48)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => "EI".$i,
					  'semestre' => "4",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
			///semestre 5 EDUCACIÓN INICIAL
			  $i = 51;   
			  while ($i <= 58)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => "EI".$i,
					  'semestre' => "5",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
			///semestre 6 EDUCACIÓN INICIAL
			  $i = 61;   
			  while ($i <= 68)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => "EI".$i,
					  'semestre' => "6",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
			///semestre 7 EDUCACIÓN INICIAL
			  $i = 71;   
			  while ($i <= 78)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => "EI".$i,
					  'semestre' => "7",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
			///semestre 8 EDUCACIÓN INICIAL
			  $i = 81;   
			  while ($i <= 82)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => "EI".$i,
					  'semestre' => "8",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
			///
			}else{
		switch ($especialidad) {
        case 1:
            $sufijo_m = "B";
			$num = 67;
            break;
        case 2:
            $sufijo_m = "E";
			$num = 67;
            break;
		case 3:
            $sufijo_m = "I";
			$num = 67;
            break;
		case 4:
            $sufijo_m = "M";
			$num = 68;
            break;
    }
///while para calificaciones
			  
			  ///semestre 1 Biologia
			  if($semestre == 1){
			  $i = 11;   
			  while ($i <= 16)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => $sufijo_m.$i,
					  'semestre' => "1",
					  "clave_especialidad" => $especialidad,
					  "ciclo_escolar" => $ciclo_escolar
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
				}else{
			  $i = 11;   
			  while ($i <= 16)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => $sufijo_m.$i,
					  'semestre' => "1",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}		
				}
				///semestre 2 Biologia
				$i = 21;   
			  while ($i <= 27)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => $sufijo_m.$i,
					  'semestre' => "2",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
				///semestre 3 Biologia
				$i = 31;   
			  while ($i <= 37)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => $sufijo_m.$i,
					  'semestre' => "3",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
				///semestre 4 Biologia
				$i = 41;   
			  while ($i <= 47)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => $sufijo_m.$i,
					  'semestre' => "4",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
				///semestre 5 Biologia
				$i = 51;   
			  while ($i <= 57)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => $sufijo_m.$i,
					  'semestre' => "5",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
				///semestre 6 Biologia
				$i = 61; 
			  while ($i <= $num)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => $sufijo_m.$i,
					  'semestre' => "6",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
				///semestre 7 Biologia
				$i = 71;   
			  while ($i <= 72)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => $sufijo_m.$i,
					  'semestre' => "7",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
				///semestre 8 Biologia
				$i = 81;   
			  while ($i <= 82)
				{
					$query = array(
					  'matricula' => $matricula,
					  'materia' => $sufijo_m.$i,
					  'semestre' => "8",
					  "clave_especialidad" => $especialidad
					   ); 
					$this->db->insert('calificaciones', $query);
					$i++;
				}
				////
	   /// fin while para calificaciones
		}/// fin del if para la especialidad 5.....
	}//// termina la funcion.............kardex
	//// fin crear calificaciones
//////aki cierra*/
}
?>