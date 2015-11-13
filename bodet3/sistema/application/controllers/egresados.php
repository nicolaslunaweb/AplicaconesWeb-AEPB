<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Egresados extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->model('m_egresados');
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
	  $data['url'] = "egresados/vista_egresados";
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alumno', $data);
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
  function alta_egresados()
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
      $this->load->view('alta_egresados', $data);
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
		   ///// datos para egresados
 			$matricula = $this->input->post('matricula');
			$fecha = $this->input->post('fecha');
			$semestrescursados = $this->input->post('semestrescursados');
			$email = $this->input->post('email');
			$telefono = $this->input->post('telefono');
			$celular = $this->input->post('celular');
			$empleo = $this->input->post('empleo');
			$institucion = $this->input->post('institucion');
			$tipo = $this->input->post('tipo');
			$direccion = $this->input->post('direccion');
			$director = $this->input->post('director');
			$puesto = $this->input->post('puesto');
			$hrs_grupo = $this->input->post('hrs_grupo'); 	 	 	 	 	 	 

		  $query2 = array(
		  'matricula' => $matricula,
		  'fecha' => $fecha,
		  'semestrescursados' => $semestrescursados,
		  'email' => $email,
		  'telefono' => $telefono,
		  'celular' => $celular,
		  'empleo' => $empleo,
		  'institucion' => $institucion,
		  'tipo' => $tipo,
		  'direccion' => $direccion,
		  'director' => $director,
		  'puesto' => $puesto,
		  'hrs_grupo' => $hrs_grupo
		   );
	
		  $this->db->insert('egresado', $query2); //--- inserto a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('egresados/vista_egresados/'.$matricula); 		
	}
/////////////////////////////////////////////////////////////  

  function vista_egresados()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  if($this->input->post('matricula_post')){$matricula = $this->input->post('matricula_post');}else{$matricula = $this->uri->segment(3); }
      $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($matricula);
	  $data ['dt_egresados'] = $this->m_egresados->vista_dt_egresados($matricula);
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_egresados']){
      $this->load->view('vista_egresados', $data);
	  }else{redirect(base_url().'egresados', 'refresh');}
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
	  $data ['dt_egresados'] = $this->m_egresados->vista_dt_egresados($this->input->post('mat_post'));
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_egresados']){
      $this->load->view('edit_egresados', $data);}else{
	  $this->load->view('egresados', $data);
	  }
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
  public function edit_sav_egresados()
	{

		  ///// datos para egresados
 			$matricula = $this->input->post('matricula');
			$fecha = $this->input->post('fecha');
			$semestrescursados = $this->input->post('semestrescursados');
			$email = $this->input->post('email');
			$telefono = $this->input->post('telefono');
			$celular = $this->input->post('celular');
			$empleo = $this->input->post('empleo');
			$institucion = $this->input->post('institucion');
			$tipo = $this->input->post('tipo');
			$direccion = $this->input->post('direccion');
			$director = $this->input->post('director');
			$puesto = $this->input->post('puesto');
			$hrs_grupo = $this->input->post('hrs_grupo'); 	 	 	 	 	 	 

		  $query2 = array(
		  'fecha' => $fecha,
		  'semestrescursados' => $semestrescursados,
		  'email' => $email,
		  'telefono' => $telefono,
		  'celular' => $celular,
		  'empleo' => $empleo,
		  'institucion' => $institucion,
		  'tipo' => $tipo,
		  'direccion' => $direccion,
		  'director' => $director,
		  'puesto' => $puesto,
		  'hrs_grupo' => $hrs_grupo
		   );
		   
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  $this->db->where('matricula', $matricula);
		  $this->db->update('egresado', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('egresados/vista_egresados/'.$matricula); 		
	}
  
  
///////////////////////////////////////////////////////////// 

}

?>