<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class perfil extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->helper('form');
  }
  


/////////////////////////////////////////////////////////////  
  function index()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] == 1)
    {
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($session_data['ID']); //llama a la funcion vista_dt_alumonos dentro del modelo alumnos
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('vista_alumno', $data);
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
///////
}

?>