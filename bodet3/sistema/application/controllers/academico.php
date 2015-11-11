<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Academico extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->model('m_documentacion');
		$this->load->model('m_historial');
		$this->load->model('m_admin');
		$this->load->model('m_academico');
		$this->load->model('m_calificaciones');
		
		///
		$this->load->library('form_validation');
  }

  function index()
  {
      //If no session, redirect to login page
      redirect('login', 'refresh');
  }
  

  
/////////////////////////////////////////////////////////////  
function perfil()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($session_data['ID']);
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('vista_profesor', $data);
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

  function doc_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($session_data['ID']);
	  $data ['dt_doc_prof'] = $this->m_admin->datos_doc_profesor($session_data['ID']);
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('vista_doc_profesor', $data);
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

 function historial_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($session_data['ID']);
	  $data ['dt_historial_prof'] = $this->m_admin->datos_historial_profesor($session_data['ID']);
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('vista_historial_profesor', $data);
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
 function talleres_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($session_data['ID']);
	  $data['d_t_profesores'] = $this->m_admin->listar_talleres_profesor($session_data['ID']);
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('listar_talleres_profesor_academico', $data);
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
	  

  function calificaciones()
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
	  if($session_data['id_nivel'] == 2){
		  $data ['dt_prof'] = $this->m_admin->datos_profesor($session_data['ID']);
		  $data['d_materias'] = $this->m_academico->materias_profesor($session_data['ID']);
		  $this->load->view('lista_materias_profesor', $data);
	  }else{
		  echo "admin o mas";
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

  function lista_alumnos_materia()
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
	  ////
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($session_data['ID']);
	  $data['dt_e'] = $this->user->d_escuela();
	  $data ['a_m_calificacion'] = $this->m_academico->alumnos_de_materia($this->uri->segment(3),$this->uri->segment(4),$data['dt_e'][0]->cicloescolar);
	  ////
	  $data['clave_materia'] = $this->uri->segment(3);
	  $data['lic'] =  $data ['a_m_calificacion'][0]->clave_especialidad;
	  if($this->uri->segment(3) == ""){redirect('academico/calificaciones', 'refresh');}
	  
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('lista_alumnos_materia', $data);
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

function calificar_alumno()
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
	  $data ['dt_calificaciones'] = $this->m_calificaciones->edit_dt_calificaciones($this->uri->segment(3),$this->uri->segment(4)); //llama a la funcion trae_dominio dentro del modelo vista
	  $data['on_off'] = $this->m_academico->fecha_apertura_calificar();
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      ///if para dar vista de 3 o 4 calificaciones
	  	if($data ['dt_calificaciones'][0]->clave_especialidad == 5){
	  		$this->load->view('edit_calificaciones_maestro_4', $data);
	  	}else{
	  		$this->load->view('edit_calificaciones_maestro', $data);
	  	}
	  	//// fin 
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
public function edit_sav_calificaciones()
	{

		   ///// datos para historial
		  $matricula = $this->input->post('matricula');
			$materia = $this->input->post('materia');
			$ciclo_escolar = $this->input->post('ciclo_escolar');
			$asistencia1 = $this->input->post('asistencia1');
			$evaluacion1 = $this->input->post('evaluacion1');
			$fecha1 = $this->input->post('fecha1');
			$asistencia2 = $this->input->post('asistencia2');
			$evaluacion2 = $this->input->post('evaluacion2');
			$fecha2 = $this->input->post('fecha2');
			$asistencia3 = $this->input->post('asistencia3');
			$evaluacion3 = $this->input->post('evaluacion3');
			$fecha3 = $this->input->post('fecha3');
			$asistencia4 = $this->input->post('asistencia4');
			$evaluacion4 = $this->input->post('evaluacion4');
			$fecha4 = $this->input->post('fecha4');
			$asistencia_general = $this->input->post('asistencia_general');
			$calificacion_final = $this->input->post('calificacion_final');
			$fecha = $this->input->post('fecha');
			$tipo_examen = $this->input->post('tipo_examen');
			$extraordinario = $this->input->post('extraordinario');
			$fecha_extra = $this->input->post('fecha_extra');

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query = array(
			'ciclo_escolar' => $ciclo_escolar,
			'asistencia1' => $asistencia1,
			'evaluacion1' => $evaluacion1,
			'fecha1' => $fecha1,
			'asistencia2' => $asistencia2,
			'evaluacion2' => $evaluacion2,
			'fecha2' => $fecha2,
			'asistencia3' => $asistencia3,
			'evaluacion3' => $evaluacion3,
			'fecha3' => $fecha3,
			'asistencia4' => $asistencia4,
			'evaluacion4' => $evaluacion4,
			'fecha4' => $fecha4,
			'asistencia_general' => $asistencia_general,
			'calificacion_final' => $calificacion_final,
			'fecha' => $fecha,
			'tipo_examen' => $tipo_examen,
			'extraordinario' => $extraordinario,
			'fecha_extra' => $fecha_extra
		   );
		   
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  //$this->db->insert('users', $query); //--- inserto a tabla users
		  $this->db->where('matricula', $matricula);
		  $this->db->where('materia', $materia);
		  $this->db->update('calificaciones', $query);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('academico/lista_alumnos_materia/'.$materia); 		
	}
  
  
  
///////////////////////////////////////////////////////////// 

 function alumnoperfil()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($this->input->post('matricula')); 
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
  
/////////////////////////////////////////////////////////////  

 function alumnodoc()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($this->input->post('matricula'));
	  $data ['dt_documentacion'] = $this->m_documentacion->vista_dt_documentacion($this->input->post('matricula'));
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('vista_documentacion', $data);
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

 function alumnohist()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($this->input->post('matricula'));
	  $data ['dt_historial'] = $this->m_historial->vista_dt_historial($this->input->post('matricula'));
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('vista_historial', $data);
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


}
?>