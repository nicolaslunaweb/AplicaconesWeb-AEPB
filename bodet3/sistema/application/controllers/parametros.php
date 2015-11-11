<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Parametros extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('m_parametros');
  }

  function index()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      redirect('home', 'refresh');
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




function alumnos() {
$data['alumnos'] = $this->m_parametros->listar_alumnos($this->input->post('clave_especialidad'),$this->input->post('sexo'),$this->input->post('semestre'));
$this->load->view('alumnosfile', $data);
}

function documentacion() {
$data['documentacion'] = $this->m_parametros->listar_documentacion();
$this->load->view('documentacionfile', $data);
}

function cobranza() {
$data['cobranza'] = $this->m_parametros->listar_cobranza();
$this->load->view('cobranzafile', $data);
}
function plantillapersonal() {
$data['pp'] = $this->m_parametros->plantilla_personal();
$this->load->view('plantilladepersonal', $data);
}


	function backup()
	{
		$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  $this->load->dbutil();

        $prefs = array(     
                'format'      => 'zip',             
                'filename'    => 'my_db_backup.sql'
				//'tables' => array('alumnos') // Array of tables to backup.
              );


        $backup =& $this->dbutil->backup($prefs); 

        $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
        $save = 'common/backup/'.$db_name;

        $this->load->helper('file');
        write_file($save, $backup); 


        $this->load->helper('download');
        force_download($db_name, $backup);
		redirect('home', 'refresh');
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
 ////// fin de back up
 
 function superadmin_general_clave()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
	  $password = MD5($this->input->post('clave_nueva'));
      $query = array(
		    'password' => $password
			);
		$this->db->where('ID', $session_data['ID']);
		$this->db->update('users', $query);
		////termino de editar la clave y destruyo la session y redirecciono fuera del sistema
		$this->session->unset_userdata('logged_in');
    	session_destroy();
    	redirect(base_url(), 'refresh');
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
  /////////////////
  
  function alumnoclave()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
	  $password = MD5($this->input->post('clave_nueva'));
      $query = array(
		    'password' => $password
			);
		$this->db->where('ID', $this->input->post('clave_nueva'));
		$this->db->where('id_nivel', 1);
		$this->db->update('users', $query);
		////termino de editar la clave y redirecciono 
    	redirect(base_url()."home", 'refresh');
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
  /////////////////
  
  function maestroclave()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
	  $password = MD5($this->input->post('clave_nueva'));
      $query = array(
		    'password' => $password
			);
		$this->db->where('ID', $this->input->post('clave_nueva'));
		$this->db->where('id_nivel', 2);
		$this->db->update('users', $query);
		////termino de editar la clave y redirecciono 
    	redirect(base_url()."home", 'refresh');
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
   /////////////////
  
  function administradorclave()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
	  $password = MD5($this->input->post('clave_nueva'));
      $query = array(
		    'password' => $password
			);
		$this->db->where('ID', $this->input->post('clave_nueva'));
		$this->db->where('id_nivel', 3);
		$this->db->update('users', $query);
		////termino de editar la clave y redirecciono 
    	redirect(base_url()."home", 'refresh');
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
  /////////////////
 
 
 function escueladatos()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] == 4)
    {	
      $query = array(
		    'nom_escuela' => $this->input->post('nom_escuela'),
			'clave' => $this->input->post('clave'),
			'direccion' => $this->input->post('direccion'),
			'tipo' => $this->input->post('tipo'),
			'responsable_control_escolar' => $this->input->post('responsable_control_escolar'),
			'director' => $this->input->post('director'),
			'subdirector' => $this->input->post('subdirector'),
			'cicloescolar' => $this->input->post('cicloescolar')
			);
		$this->db->where('id', 1);
		$this->db->update('datos_escuela', $query);
		////termino de editar la clave y redirecciono 
    	redirect(base_url()."home", 'refresh');
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
  /////////////////
  
  
   function fechas_apertura()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 3)
    {
      if($this->input->post('ev1')=='on'){$ev1 = 1;}else{$ev1 = 0;}
      if($this->input->post('ev2')=='on'){$ev2 = 1;}else{$ev2 = 0;}
      if($this->input->post('ev3')=='on'){$ev3 = 1;}else{$ev3 = 0;}
      if($this->input->post('ev4')=='on'){$ev4 = 1;}else{$ev4 = 0;}
      $query = array(
		    'primera_e' => $ev1,
			'segunda_e' => $ev2,
			'tercera_e' => $ev3,
			'cuarta_e' => $ev4	 	 	 	 
			);
		$this->db->where('ID', 'E34rZdFDe4');
		$this->db->update('apertura_fechas', $query);
		////termino de editar la clave y redirecciono 
    	redirect(base_url()."home", 'refresh');
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
  /////////////////

 
}////////fin

?>