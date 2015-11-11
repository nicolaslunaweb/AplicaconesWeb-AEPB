<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Ceneval extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->model('m_ceneval');
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
	  $data['url'] = "ceneval/vista_ceneval";
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
  function alta_ceneval()
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
      $this->load->view('alta_ceneval', $data);
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
		   ///// datos para ceneval
 			$matricula = $this->input->post('matricula');
			$examen_admision = $this->input->post('examen_admision');
			$fecha = $this->input->post('fecha');
			$examen = $this->input->post('examen');
			$puntuaciondeexamen = $this->input->post('puntuaciondeexamen');
			$programa = $this->input->post('programa');
			$aplicador = $this->input->post('aplicador');
			$grupo = $this->input->post('grupo');
			$folio = $this->input->post('folio');
			$verision_seleccion = $this->input->post('verision_seleccion');
			$version_diagnostico = $this->input->post('version_diagnostico');
			$responsable = $this->input->post('responsable');

		  $query2 = array(
		  'matricula' => $matricula,
		  'examen_admision' => $examen_admision,
		  'fecha' => $fecha,
		  'examen' => $examen,
		  'puntuaciondeexamen' => $puntuaciondeexamen,
		  'programa' => $programa,
		  'aplicador' => $aplicador,
		  'grupo' => $grupo,
		  'folio' => $folio,
		  'verision_seleccion' => $verision_seleccion,
		  'version_diagnostico' => $version_diagnostico,
		  'responsable' => $responsable
		   );
	
		  $this->db->insert('ceneval', $query2); //--- inserto a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('ceneval/vista_ceneval/'.$matricula); 		
	}
/////////////////////////////////////////////////////////////  

  function vista_ceneval()
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
	  $data ['dt_ceneval'] = $this->m_ceneval->vista_dt_ceneval($matricula);
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_ceneval']){
      $this->load->view('vista_ceneval', $data);
	  }else{redirect(base_url().'ceneval', 'refresh');}
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
	  $data ['dt_ceneval'] = $this->m_ceneval->vista_dt_ceneval($this->input->post('mat_post'));
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_ceneval']){
      $this->load->view('edit_ceneval', $data);}else{
	  $this->load->view('cenaval', $data);
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
  public function edit_sav_ceneval()
	{

		   ///// datos para ceneval
 			$matricula = $this->input->post('matricula');
			$examen_admision = $this->input->post('examen_admision');
			$fecha = $this->input->post('fecha');
			$examen = $this->input->post('examen');
			$puntuaciondeexamen = $this->input->post('puntuaciondeexamen');
			$programa = $this->input->post('programa');
			$aplicador = $this->input->post('aplicador');
			$grupo = $this->input->post('grupo');
			$folio = $this->input->post('folio');
			$verision_seleccion = $this->input->post('verision_seleccion');
			$version_diagnostico = $this->input->post('version_diagnostico');
			$responsable = $this->input->post('responsable');

		  $query2 = array(
		  'examen_admision' => $examen_admision,
		  'fecha' => $fecha,
		  'examen' => $examen,
		  'puntuaciondeexamen' => $puntuaciondeexamen,
		  'programa' => $programa,
		  'aplicador' => $aplicador,
		  'grupo' => $grupo,
		  'folio' => $folio,
		  'verision_seleccion' => $verision_seleccion,
		  'version_diagnostico' => $version_diagnostico,
		  'responsable' => $responsable
		   );
		   
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  $this->db->where('matricula', $matricula);
		  $this->db->update('ceneval', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('ceneval/vista_ceneval/'.$matricula); 		
	}
  
  
///////////////////////////////////////////////////////////// 

}

?>