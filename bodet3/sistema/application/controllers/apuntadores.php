<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Apuntadores extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->model('m_apuntadores');
		$this->load->model('m_calificaciones');
		/////
		$this->load->library('form_validation');
  }

  function index()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 3)
    {
   	  $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
    if ($this->input->post('corte')) {
	 $corte = substr($this->input->post('corte'), 2);
	 $data['cortec'] = $this->input->post('corte');

	$data['corte'] = $corte;
	///para sacar la corte anterior
	$corte_an = $corte - '01';
	$data['corteanterior'] = $corte_an;
	$corteanterior = $corte_an;
	///////
	  $data['d_lista_alumnos'] = $this->m_apuntadores->lista_alumno2($corte);
	  ///
	  $data['d_lista_titulados'] = $this->m_apuntadores->lista_titulados($corte);
	  ///
	  $data['d_lista_egresados'] = $this->m_apuntadores->lista_egresados($corte);
	  ///
	  $data['d_corteanterior'] = $this->m_apuntadores->corteanterior($corteanterior);
	  //

	  /* comento este codigo porque ya esta dinamico
	  $data['biologia'] = $this->m_calificaciones->lista_materias_edit(1);
	  $data['espanol'] = $this->m_calificaciones->lista_materias_edit(2);
	  $data['ingles'] = $this->m_calificaciones->lista_materias_edit(3);
	  $data['matematicas'] = $this->m_calificaciones->lista_materias_edit(4);
	  $data['educacioninicial'] = $this->m_calificaciones->lista_materias_edit(5);
	  */
	  ///

	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alumnosgeneracion', $data);
	  $this->load->view('common/footer');
	  
	  }else{
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alumnosgeneracionform');
	  $this->load->view('common/footer');
	  }
    }
	else
	{
	  redirect('../', 'refresh');
	}
	}//fin if @session_data para pasar a else-----
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  }



///////////
}

?>