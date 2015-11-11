<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Talleres extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->model('m_talleres');
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
	  $data['url'] = "talleres/lista_talleres";
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
  function alta_talleres()
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
      $this->load->view('alta_talleres', $data);
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
		   ///// datos para tallere
 			$matricula = $this->input->post('matricula');
			$nivel = $this->input->post('nivel');
			$fechataller = $this->input->post('fechataller');
			$nombre = $this->input->post('nombre');
			$institucion = $this->input->post('institucion');
			$titulo = $this->input->post('titulo');
			$horas = $this->input->post('horas');
			$porcentaje_de_avance = $this->input->post('porcentaje_de_avance');
			$linea = $this->input->post('linea');
			$tematica = $this->input->post('tematica');
			$municipio = $this->input->post('municipio');
			$ciudad = $this->input->post('ciudad');
			$beca = $this->input->post('beca');
			$tipo_de_beca = $this->input->post('tipo_de_beca');
			$institucion_que_la_otorga = $this->input->post('institucion_que_la_otorga');
 	 	 	 	 	 	 	 	 	 	 	 	 	
		  $query2 = array(
		  'matricula' => $matricula,
		  'nivel' => $nivel,
		  'fechataller' => $fechataller,
		  'nombre' => $nombre,
		  'institucion' => $institucion,
		  'titulo' => $titulo,
		  'horas' => $horas,
		  'porcentaje_de_avance' => $porcentaje_de_avance,
		  'linea' => $linea,
		  'tematica' => $tematica,
		  'municipio' => $municipio,
		  'ciudad' => $ciudad,
		  'beca' => $beca,
		  'tipo_de_beca' => $tipo_de_beca,
		  'institucion_que_la_otorga' => $institucion_que_la_otorga
		   );
	
		  $this->db->insert('talleres', $query2); //--- inserto a tabla alumnos
		  $idre = $this->db->insert_id();
		  ///aki redirecciono con "redirect()"
		  redirect('talleres/vista_talleres/'.$matricula."/".$idre); 		
	}
/////////////////////////////////////////////////////////////  
 function lista_talleres()
	{	
	$session_data = $this->session->userdata('logged_in');
	    $data['idsession'] = $session_data['id_nivel'];
	  		$data['especialidades'] = $this->alumnos->especialidades();
	    //
		$matricula_uri = $this->input->post('matricula_post');
		$data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($matricula_uri);
		$data ['id_matricula'] = $matricula_uri;
		//Funciones
		$data['d_talleres'] = $this->m_talleres->listar_talleres($matricula_uri);

		//Armando la salida
		$this->load->view('common/header');
	    $this->load->view('common/menu', $data);
		if($data ['d_talleres']){
        $this->load->view('lista_talleres', $data);
	    }else{redirect(base_url().'talleres', 'refresh');}
		$this->load->view('common/footer');
	}

/////////////////////////////////////////////////////////////  

  function vista_talleres()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  if($this->input->post('matricula_post')){$matricula = $this->input->post('matricula_post');}else{$matricula = $this->uri->segment(3); }
	  $data['relacion'] = $this->uri->segment(4);///id de relacion para el taller visto y a editar
      $data['idsession'] = $session_data['id_nivel'];
     		$data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
		    $data['matricula'] = $session_data['ID'];
	  		$data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($matricula);
	  $data ['dt_talleres'] = $this->m_talleres->vista_dt_talleres($matricula,$this->uri->segment(4));
	  $data['id_matricula'] = $this->input->post('matricula_post');
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_talleres']){
      $this->load->view('vista_talleres', $data);
	  }else{redirect(base_url().'talleres', 'refresh');}
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
	  $data ['dt_talleres'] = $this->m_talleres->vista_dt_talleres($this->input->post('mat_post'),$this->input->post('relacion'));
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_talleres']){
      $this->load->view('edit_talleres', $data);}else{
	  $this->load->view('talleres', $data);
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
  public function edit_sav_talleres()
	{

		   ///// datos para tallere
		   $IDre = $this->input->post('relacion');
		   ///
 			$matricula = $this->input->post('matricula');
			$nivel = $this->input->post('nivel');
			$fechataller = $this->input->post('fechataller');
			$nombre = $this->input->post('nombre');
			$institucion = $this->input->post('institucion');
			$titulo = $this->input->post('titulo');
			$horas = $this->input->post('horas');
			$porcentaje_de_avance = $this->input->post('porcentaje_de_avance');
			$linea = $this->input->post('linea');
			$tematica = $this->input->post('tematica');
			$municipio = $this->input->post('municipio');
			$ciudad = $this->input->post('ciudad');
			$beca = $this->input->post('beca');
			$tipo_de_beca = $this->input->post('tipo_de_beca');
			$institucion_que_la_otorga = $this->input->post('institucion_que_la_otorga');
 	 	 	 	 	 	 	 	 	 	 	 	 	
		  $query2 = array(
		  'nivel' => $nivel,
		  'fechataller' => $fechataller,
		  'nombre' => $nombre,
		  'institucion' => $institucion,
		  'titulo' => $titulo,
		  'horas' => $horas,
		  'porcentaje_de_avance' => $porcentaje_de_avance,
		  'linea' => $linea,
		  'tematica' => $tematica,
		  'municipio' => $municipio,
		  'ciudad' => $ciudad,
		  'beca' => $beca,
		  'tipo_de_beca' => $tipo_de_beca,
		  'institucion_que_la_otorga' => $institucion_que_la_otorga
		   );
		   
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  $this->db->where('matricula', $matricula);
		  $this->db->where('IDre', $IDre);
		  $this->db->update('talleres', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('talleres/vista_talleres/'.$matricula."/".$IDre); 		
	}
  
  
///////////////////////////////////////////////////////////// 

}

?>