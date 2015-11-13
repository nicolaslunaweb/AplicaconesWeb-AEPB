<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Oficios extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->model('m_documentacion');
		$this->load->model('m_calificaciones');
		$this->load->model('m_parametros');
		$this->load->model('m_academico');
  }

  function index()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['dt_escuela'] = $this->alumnos->datos_escuela();
	  $data['dt_alumno'] = $this->alumnos->vista_dt_alumonos($this->input->post('matricula_post'));
	  
	  if($this->input->post('oficios')){$oficiosss = $this->input->post('oficios');}else{$oficiosss = $this->input->post('oficiosgrupo');}
	  /// case para mandar vista segun el oficio
	  switch ($oficiosss) {
    	case 1:
        $this->load->view('oficios/liberaciondeadeudo', $data);
        break;
		
    	case 2:
        
        break;
		
   		case 3:
		$data['dt_documento'] = $this->m_documentacion->vista_dt_documentacion($this->input->post('matricula_post'));
		$data['re_in'] = $this->input->post('ins_rei');
        $this->load->view('oficios/comprobantedeinscripcionyreinscripcion', $data);
        break;
		
		case 4:
        
        break;
		
		case 5:
        
        break;
		
		case 6:
		$data['m_primer'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"1");
		$data['m_segundo'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"2");
		$data['m_terser'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"3");
		$data['m_cuarto'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"4");
		$data['m_quinto'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"5");
		$data['m_sexto'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"6");
		$data['m_septimo'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"7");
		$data['m_octavo'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"8");
		$data['formaboleta'] = $this->input->post('formaboleta');
		$this->load->view('oficios/formatodeboleta', $data);
        break;
		
		case 7:
		$this->load->view('oficios/trasladodeescuela', $data);
        break;
		
		case 8:
		$data['sem'] = $this->input->post('semestrekardex');
		///
        $data['m_primer'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"1");
		$data['m_segundo'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"2");
		$data['m_terser'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"3");
		$data['m_cuarto'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"4");
		$data['m_quinto'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"5");
		$data['m_sexto'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"6");
		$data['m_septimo'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"7");
		$data['m_octavo'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"8");
		///
		switch ($this->input->post('semestrekardex')) {
		case "todo";	
		$this->load->view('oficios/formatokardex', $data);
		break;
		case 1:
		case 2:
		case 3:
		case 4:
		$this->load->view('oficios/formatokardex2', $data);
		break;
		case 5:
		case 6:
		case 7:
		case 8:
		$this->load->view('oficios/formatokardex3', $data);
		break;

		}
        break;
		
		case 9:
		$data['m_primer'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"1");
		$data['m_segundo'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"2");
		$data['m_terser'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"3");
		$data['m_cuarto'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"4");
		$data['m_quinto'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"5");
		$data['m_sexto'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"6");
		$data['m_septimo'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"7");
		$data['m_octavo'] = $this->m_calificaciones->listar_materias($this->input->post('matricula_post'),"8");
		//para listar todas las materia que tienen calificacion
		$data['total'] = $this->m_calificaciones->listar_materias_total($this->input->post('matricula_post'));
		////
        $this->load->view('oficios/constanciadecalificaciones', $data);
        break;
		
		case 10:
        $this->load->view('oficios/bajadefinitiva', $data);
        break;

        case 11:
        redirect('oficios/formaboleta/'.$this->input->post('clave_especialidad').'/'.$this->input->post('semestre')); 
        break;

        case 12:
        $data['dt_e'] = $this->user->d_escuela();
        $data['alumnos'] = $this->alumnos->listadealumnos($this->input->post('clave_especialidad'),$this->input->post('semestre'),$data['dt_e'][0]->cicloescolar);
        $this->load->view('oficios/listadealumnos', $data);
        break;
		}
	  /// case para mandar vista segun el oficio
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

	
	function actasfinalesordinarioyextraordinario()
	{
		$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
	  $data['dt_escuela'] = $this->alumnos->datos_escuela();
      $this->load->view('oficios/actasfinalesordinarioyextraordinario', $data);
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
	
	
	
	function formatolistadeevaluacion()
	{
		$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
      $data['eva'] = $this->uri->segment(4);
	  $data['dt_escuela'] = $this->alumnos->datos_escuela();
	  $data['dt_materia'] = $this->m_parametros->datos_materia($this->uri->segment(3));
	  $data ['a_m_calificacion'] = $this->m_academico->alumnos_de_materia($this->uri->segment(3));
	  $data ['a_m_calificacion_sex_h'] = $this->m_academico->alumnos_de_materia_sex($this->uri->segment(3),1);////el segundo valor es el tipo de sexo para el contador
	  $data ['a_m_calificacion_sex_m'] = $this->m_academico->alumnos_de_materia_sex($this->uri->segment(3),2);////el segundo valor es el tipo de sexo para el contador
	  ////
      $this->load->view('oficios/formatolistadeevaluacion', $data);
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
	
	
	
	
	function listaevaluacionespaciales()
	{
		$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  $data['dt_escuela'] = $this->alumnos->datos_escuela();
	  $data['dt_materia'] = $this->m_parametros->datos_materia($this->uri->segment(3));
	  $data ['a_m_calificacion'] = $this->m_academico->alumnos_de_materia($this->uri->segment(3));
	  $data ['a_m_calificacion_sex_h'] = $this->m_academico->alumnos_de_materia_sex($this->uri->segment(3),1);////el segundo valor es el tipo de sexo para el contador
	  $data ['a_m_calificacion_sex_m'] = $this->m_academico->alumnos_de_materia_sex($this->uri->segment(3),2);////el segundo valor es el tipo de sexo para el contador
	  ////
      $this->load->view('oficios/listaevaluacionespaciales', $data);
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
	
	

	

	function formaboleta()
	{
		$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
      $data['dt_e'] = $this->user->d_escuela();
	  $data['dt_escuela'] = $this->alumnos->datos_escuela();
	  $data['alumnos'] = $this->alumnos->formatodeboletaporgrupo($this->uri->segment(3),$this->uri->segment(4),$data['dt_e'][0]->cicloescolar);
	  $data['semestre'] = $this->uri->segment(4);
      $this->load->view('oficios/formatodeboletaporgrupo', $data);
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
	


	function listadeasistencia()
	{
		$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  $data['dt_escuela'] = $this->alumnos->datos_escuela();
	  $data['dt_materia'] = $this->m_parametros->datos_materia($this->uri->segment(3));
	  $data ['a_m_calificacion'] = $this->m_academico->alumnos_de_materia($this->uri->segment(3));
	  $data ['a_m_calificacion_sex_h'] = $this->m_academico->alumnos_de_materia_sex($this->uri->segment(3),1);////el segundo valor es el tipo de sexo para el contador
	  $data ['a_m_calificacion_sex_m'] = $this->m_academico->alumnos_de_materia_sex($this->uri->segment(3),2);////el segundo valor es el tipo de sexo para el contador
	  ////
      $this->load->view('oficios/listadeasistencia', $data);
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
	
	
	
	function registrodeescolaridad()
	{
		$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
      $ciclo = $this->input->post('ciclo_escolar');
      $semestre = $this->input->post('semestre');
      $clave_especialidad = $this->input->post('clave_especialidad');
	  $data['dt_escolaridad'] = $this->m_calificaciones->lista_por_ciclo($ciclo,$semestre,$clave_especialidad);
	  $data['semestre'] = $semestre;
	  $data['especialidad'] = $clave_especialidad;
	  ////
	  if($clave_especialidad == 5)
	  {
      	if($semestre == 8){$this->load->view('oficios/lista_calificacionesporsemestre_ei2', $data);}else{$this->load->view('oficios/lista_calificacionesporsemestre_ei', $data);}
      }
      else
      {
        if($semestre == 7 || $semestre == 8){$this->load->view('oficios/lista_calificacionesporsemestre2', $data);}else{$this->load->view('oficios/lista_calificacionesporsemestre', $data);}
      }
      
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
	
	
 
}////////fin

?>