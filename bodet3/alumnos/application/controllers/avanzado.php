<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Avanzado extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->helper('form');
  }

function index()
  {
  }
  ////////
  function contrasena()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] = 1)
    {
		$password = MD5($this->input->post('contrasena'));
		$query = array(
		    'password' => $password
		   );
		  $this->db->where('ID', $session_data['ID']);
	 	  $this->db->update('users', $query);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('home'); 	
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

 ////////
  function datospersonales()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] = 1)
    {
		$query = array( 	 	
		    'telefono_casa' => $this->input->post('telcasaalumno'),
			'telefono_cel' => $this->input->post('celalumno'),
			'email' => $this->input->post('mailalumno'),
			'telefono_tutor' => $this->input->post('telcasatutor'),
			'email_tutor' => $this->input->post('mailtutor'),
			'telemergencia' => $this->input->post('telemergencia')
		   );
		  $this->db->where('matricula', $session_data['ID']);
	 	  $this->db->update('alumnos', $query);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('home'); 	
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