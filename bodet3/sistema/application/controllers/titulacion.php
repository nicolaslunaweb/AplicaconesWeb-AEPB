<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class titulacion extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->model('m_titulacion');
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
      $this->load->view('titulacion', $data);
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
  function alta_titulacion()
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
      $this->load->view('alta_titulacion', $data);
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
			$tema = $this->input->post('tema');
			$linea_tematica = $this->input->post('linea_tematica');
			$presidente = $this->input->post('presidente');
			$cedulapresidente = $this->input->post('cedulapresidente');
			$secretario = $this->input->post('secretario');
			$cedulasecretario = $this->input->post('cedulasecretario');
			$vocal = $this->input->post('vocal');
			$cedulavocal = $this->input->post('cedulavocal');
			$suplente = $this->input->post('suplente');
			$cedulasuplente = $this->input->post('cedulasuplente');
			$no_autorizacion = $this->input->post('no_autorizacion');
			$veredicto = $this->input->post('veredicto');
			$fechapendiente = $this->input->post('fechapendiente');
			$promedio = $this->input->post('promedio');
			$hora = $this->input->post('hora');
			$salon = $this->input->post('salon');
			$generacion = $this->input->post('generacion');
			$fechatitulacion = $this->input->post('fechatitulacion');
			$asesor = $this->input->post('asesor');
			$documento = $this->input->post('documento');
			$ciclo_escolar = $this->input->post('ciclo_escolar');
			$no_titulo = $this->input->post('no_titulo');

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query = array(
		    'matricula' => $matricula,
			'tema' => $tema,
			'linea_tematica' => $linea_tematica,
		    'presidente' => $presidente,
		    'cedulapresidente' => $cedulapresidente,
			'secretario' => $secretario,
			'cedulasecretario' => $cedulasecretario,
			'vocal' => $vocal,
			'cedulavocal' => $cedulavocal,
			'suplente' => $suplente,
			'cedulasuplente' => $cedulasuplente,
			'no_autorizacion' => $no_autorizacion,
			'veredicto' => $veredicto,
			'fechapendiente' => $fechapendiente,
			'promedio' => $promedio,
			'hora' => $hora,
			'salon' => $salon,
			'generacion' => $generacion,
			'fechatitulacion' => $fechatitulacion,
			'asesor' => $asesor,
			'documento' => $documento,
			'ciclo_escolar' => $ciclo_escolar,
			'no_titulo' => $no_titulo
		   );
	
		  $this->db->insert('titulacion', $query); //--- inserto a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('titulacion/vista_titulacion/'.$matricula); 	
	}
/////////////////////////////////////////////////////////////  
  function vista_titulacion()
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
	  $data ['dt_titulacion'] = $this->m_titulacion->vista_dt_titulacion($matricula); //llama a la funcion trae_dominio dentro del modelo vista
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_titulacion']){
      $this->load->view('vista_titulacion', $data);
	  }else{redirect(base_url().'titulacion', 'refresh');}
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
	  $data ['dt_titulacion'] = $this->m_titulacion->vista_dt_titulacion($this->input->post('mat_post')); //llama a la funcion trae_dominio dentro del modelo vista
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_titulacion', $data);
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
  public function edit_sav_titulacion()
	{
		$matricula = $this->input->post('matricula');
		$tema = $this->input->post('tema');
			$linea_tematica = $this->input->post('linea_tematica');
			$presidente = $this->input->post('presidente');
			$cedulapresidente = $this->input->post('cedulapresidente');
			$secretario = $this->input->post('secretario');
			$cedulasecretario = $this->input->post('cedulasecretario');
			$vocal = $this->input->post('vocal');
			$cedulavocal = $this->input->post('cedulavocal');
			$suplente = $this->input->post('suplente');
			$cedulasuplente = $this->input->post('cedulasuplente');
			$no_autorizacion = $this->input->post('no_autorizacion');
			$veredicto = $this->input->post('veredicto');
			$fechapendiente = $this->input->post('fechapendiente');
			$promedio = $this->input->post('promedio');
			$hora = $this->input->post('hora');
			$salon = $this->input->post('salon');
			$generacion = $this->input->post('generacion');
			$fechatitulacion = $this->input->post('fechatitulacion');
			$asesor = $this->input->post('asesor');
			$documento = $this->input->post('documento');
			$ciclo_escolar = $this->input->post('ciclo_escolar');
			$no_titulo = $this->input->post('no_titulo');

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query = array(
		    'tema' => $tema,
			'linea_tematica' => $linea_tematica,
		    'presidente' => $presidente,
		    'cedulapresidente' => $cedulapresidente,
			'secretario' => $secretario,
			'cedulasecretario' => $cedulasecretario,
			'vocal' => $vocal,
			'cedulavocal' => $cedulavocal,
			'suplente' => $suplente,
			'cedulasuplente' => $cedulasuplente,
			'no_autorizacion' => $no_autorizacion,
			'veredicto' => $veredicto,
			'fechapendiente' => $fechapendiente,
			'promedio' => $promedio,
			'hora' => $hora,
			'salon' => $salon,
			'generacion' => $generacion,
			'fechatitulacion'  => $fechatitulacion,
			'asesor' => $asesor,
			'documento' => $documento,
			'ciclo_escolar' => $ciclo_escolar,
			'no_titulo' => $no_titulo
		   );
		
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  //$this->db->insert('users', $query); //--- inserto a tabla users
		  $this->db->where('matricula', $matricula);
		  $this->db->update('titulacion', $query);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('titulacion/vista_titulacion/'.$matricula); 		
	}
  
  
/////////////////////////////////////////////////////////////  

  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect(base_url().'home', 'refresh');
  }


}

?>