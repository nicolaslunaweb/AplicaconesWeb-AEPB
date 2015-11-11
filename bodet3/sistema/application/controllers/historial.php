<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Historial extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->model('m_historial');
		///
		$this->load->library('form_validation');
  }

  function index()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('historial', $data);
	  $this->load->view('common/footer');
    }
	else
	{
	  $this->load->view('common/header');
      $this->load->view('home_view_stop');
	}
	}//fin if @session_data para pasar a else-----
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  }
/////////////////////////////////////////////////////////////  
  function alta_historial()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alta_historial', $data);
	  $this->load->view('common/footer');
	  }
	else
	{
	  $this->load->view('common/header');
      $this->load->view('home_view_stop');
	}
	}//fin if @session_data para pasar a else-----
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  
  }
/////////////////////////////////////////////////////////////    
  
  public function sav()
	{	   
		   ///// datos para historial
 			$matricula = $this->input->post('matricula');
			$nombre_sec = $this->input->post('nombre_sec');
			$certificado_sec = $this->input->post('certificado_sec');
			$periodo_sec = $this->input->post('periodo_sec');
			$municipio_sec = $this->input->post('municipio_sec');
			$estado_sec = $this->input->post('estado_sec');
			$promedio_sec = $this->input->post('promedio_sec');
			$nombre_prep = $this->input->post('nombre_prep');
			$certificado_prep = $this->input->post('certificado_prep');
			$periodo_prep = $this->input->post('periodo_prep');
			$municipio_prep = $this->input->post('municipio_prep');
			$estado_prep = $this->input->post('estado_prep');
			$promedio_prep = $this->input->post('promedio_prep');

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query2 = array(
		  'matricula' => $matricula,
		  'nombre_sec' => $nombre_sec,
		  'certificado_sec' => $certificado_sec,
		  'periodo_sec' => $periodo_sec,
		  'municipio_sec' => $municipio_sec,
		  'estado_sec' => $estado_sec,
		  'promedio_sec' => $promedio_sec,
		  'nombre_prep' => $nombre_prep,
		  'certificado_prep' => $certificado_prep,
		  'periodo_prep' => $periodo_prep,
		  'municipio_prep' => $municipio_prep,
		  'estado_prep' => $estado_prep,
		  'promedio_prep' => $promedio_prep
		   );
	
		  $this->db->insert('historial', $query2); //--- inserto a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('historial/vista_historial/'.$matricula); 		
	}
/////////////////////////////////////////////////////////////  
  function vista_historial()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  $matricula_uri = $this->uri->segment(3); //Que parte de la URI toma para saber desde donde empieza a listar (OFFSET)
      $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades(); 
	  //mi if es para que si no paso la matricula por POST la poso por URI
	  if($this->input->post('matricula_post')){$matricula = $this->input->post('matricula_post');}else{$matricula = $matricula_uri;}
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($matricula);
	  $data ['dt_historial'] = $this->m_historial->vista_dt_historial($matricula); //llama a la funcion trae_dominio dentro del modelo vista
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_historial']){
      $this->load->view('vista_historial', $data);
	  }else{redirect(base_url().'historial', 'refresh');}
	  $this->load->view('common/footer');
	  }
	else
	{
	  $this->load->view('common/header');
      $this->load->view('home_view_stop');
	}
	}//fin if @session_data para pasar a else-----
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  
  }
/////////////////////////////////////////////////////////////  

  function editar()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data ['dt_historial'] = $this->m_historial->vista_dt_historial($this->input->post('mat_post')); //llama a la funcion trae_dominio dentro del modelo vista
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_historial', $data);
	  $this->load->view('common/footer');
	  }
	else
	{
	  $this->load->view('common/header');
      $this->load->view('home_view_stop');
	}
	}//fin if @session_data para pasar a else-----
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  
  }

/////////////////////////////////////////////////////////////    
  public function edit_sav_historial()
	{

		   ///// datos para historial
		  $matricula = $this->input->post('matricula');
		  
			$nombre_sec = $this->input->post('nombre_sec');
			$certificado_sec = $this->input->post('certificado_sec');
			$periodo_sec = $this->input->post('periodo_sec');
			$municipio_sec = $this->input->post('municipio_sec');
			$estado_sec = $this->input->post('estado_sec');
			$promedio_sec = $this->input->post('promedio_sec');
			
			$nombre_prep = $this->input->post('nombre_prep');
			$certificado_prep = $this->input->post('certificado_prep');
			$periodo_prep = $this->input->post('periodo_prep');
			$municipio_prep = $this->input->post('municipio_prep');
			$estado_prep = $this->input->post('estado_prep');
			$promedio_prep = $this->input->post('promedio_prep');
		  
		  

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
	$query2 = array(
		  'nombre_sec' => $nombre_sec,
		  'certificado_sec' => $certificado_sec,
		  'periodo_sec' => $periodo_sec,
		  'municipio_sec' => $municipio_sec,
		  'estado_sec' => $estado_sec,
		  'promedio_sec' => $promedio_sec,
		  
		  'nombre_prep' => $nombre_prep,
		  'certificado_prep' => $certificado_prep,
		  'periodo_prep' => $periodo_prep,
		  'municipio_prep' => $municipio_prep,
		  'estado_prep' => $estado_prep,
		  'promedio_prep' => $promedio_prep
		  
		   );
		   
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  //$this->db->insert('users', $query); //--- inserto a tabla users
		  $this->db->where('matricula', $matricula);
		  $this->db->update('historial', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('historial/vista_historial/'.$matricula); 		
	}
  
  
/////////////////////////////////////////////////////////////  


}

?>