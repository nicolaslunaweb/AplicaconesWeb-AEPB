<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class calificaciones extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->model('m_calificaciones');
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
	  $data['url'] = "calificaciones/lista_calificaciones";
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
  function alta_calificaciones()
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
      $this->load->view('calificaciones', $data);
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
  
  //validamos el clave_docente con ajax
    public function comprobar_materia_ajax() {
		//if para ver si tomo el post de alumno o alta_alumnos
		$materia = $this->input->post('materia');
        $comprobar_materia = $this->m_calificaciones->verifica_materia($materia);
        if ($comprobar_materia == $materia) {
            $this->form_validation->set_message('comprobar_materia_ajax', '%s: ya existe en la base de datos');
            return FALSE;
        } else {
            echo '<div style="display:none">1</div>';
            return TRUE;
        }
    }

/////////////////////////////////////////////////////////////  
 function lista_calificaciones()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();	
	//
		$matricula_uri = $this->input->post('matricula_post');
		$data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($matricula_uri);
		$data ['dt_calificaciones'] = $this->m_calificaciones->vista_dt_calificaciones($matricula_uri); 
		$data ['id_matricula'] = $matricula_uri;
		//Funciones
		$data['m_primer'] = $this->m_calificaciones->listar_materias($matricula_uri,"1");
		$data['m_segundo'] = $this->m_calificaciones->listar_materias($matricula_uri,"2");
		$data['m_terser'] = $this->m_calificaciones->listar_materias($matricula_uri,"3");
		$data['m_cuarto'] = $this->m_calificaciones->listar_materias($matricula_uri,"4");
		$data['m_quinto'] = $this->m_calificaciones->listar_materias($matricula_uri,"5");
		$data['m_sexto'] = $this->m_calificaciones->listar_materias($matricula_uri,"6");
		$data['m_septimo'] = $this->m_calificaciones->listar_materias($matricula_uri,"7");
		$data['m_octavo'] = $this->m_calificaciones->listar_materias($matricula_uri,"8");

		//Armando la salida
		$this->load->view('common/header');
	    $this->load->view('common/menu', $data);
		if($data ['dt_calificaciones']){
        $this->load->view('list_calificaciones', $data);
	    }else{redirect(base_url().'calificaciones', 'refresh');}
		$this->load->view('common/footer');
	}
/////////////////////////////////////////////////////////////  
  function vista_calificaciones()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  $matricula = $this->uri->segment(3); //Que parte de la URI toma para saber desde donde empieza a listar (OFFSET)
	  $materia = $this->uri->segment(4);///clave materia
	  $docente = $this->uri->segment(5);///clave docente
      $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades(); 
	  ///////
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($matricula);
	  $data ['dt_calificaciones'] = $this->m_calificaciones->edit_dt_calificaciones($matricula,$materia);
	  $data['doncente'] = $this->m_calificaciones->docenteclave($materia);
	  $data['doncente2'] = $this->m_calificaciones->docentedatos($data['doncente'][0]->clave_docente);
	  
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_calificaciones']){
      $this->load->view('vista_calificaciones', $data);
	  }else{redirect(base_url().'calificaciones', 'refresh');}
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
	  $data ['dt_calificaciones'] = $this->m_calificaciones->edit_dt_calificaciones($this->input->post('matricula_post'),$this->input->post('clave_materia')); //llama a la funcion trae_dominio dentro del modelo vista
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_calificaciones']){
	  ///if para dar vista de 3 o 4 calificaciones
	  	if($data ['dt_calificaciones'][0]->clave_especialidad == 5){
	  		$this->load->view('edit_calificaciones_4', $data);
	  	}else{
	  		$this->load->view('edit_calificaciones', $data);
	  	}
	  	//// fin 
  	  }else{
	  $this->load->view('calificaciones', $data);
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
		  redirect('calificaciones/vista_calificaciones/'.$matricula.'/'.$materia); 		
	}
  
  
/////////////////////////////////////////////////////////////  

  
  function malla_materias()
  {
	 
	 $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
		if($this->input->post('clave_especialidad_malla')){$clave_especialidad_malla = $this->input->post('clave_especialidad_malla');}else{$clave_especialidad_malla = $this->uri->segment(3);}
      $data['idsession'] = $session_data['id_nivel'];
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data['materias'] = $this->m_calificaciones->lista_materias_edit($clave_especialidad_malla);
	  $data['que_especialidad'] = $clave_especialidad_malla;
 	  //////
	  if($clave_especialidad_malla == ""){redirect('home', 'refresh');}
	  //////
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('materias_edit', $data);
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

  
  function edit_materias()
  {
	 
	 $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  $data['clave_especialidad'] = $this->uri->segment(3); ///clave_especialidad para poder editar
	  $data['clave_materia'] = $this->uri->segment(4);///clave_materia para poder editar
      $data['idsession'] = $session_data['id_nivel'];
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data['materia_edit'] = $this->m_calificaciones->lista_materia_edit($this->uri->segment(3),$this->uri->segment(4));
 	  //////
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_materia', $data);
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
  public function sav_edit_materias()
	{

		   ///// datos para historial
		    $clave_especialidad = $this->input->post('clave_especialidad');
			$clave_materia = $this->input->post('clave_materia');
			//
			$materia = $this->input->post('materia');
			$semestre = $this->input->post('semestre');
			$horas = $this->input->post('horas');
			$creditos = $this->input->post('creditos');
			$prioridad = $this->input->post('prioridad');
			$prisemestre = $this->input->post('prisemestre');
			$clave_docente = $this->input->post('clave_docente');
			$cicloescolar = $this->input->post('cicloescolar');
			$horario = $this->input->post('horario');
			$salon = $this->input->post('salon');

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query = array(
		    'materia' => $materia,
			'semestre' => $semestre,
			'horas' => $horas,
			'creditos' => $creditos,
			'prioridad' => $prioridad,
			'prisemestre' => $prisemestre,
			'clave_docente' => $clave_docente,
			'cicloescolar' => $cicloescolar,
			'horario' => $horario,
			'salon' => $salon
		   );
		   
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  //$this->db->insert('users', $query); //--- inserto a tabla users
		  $this->db->where('licenciatura', $clave_especialidad);
		  $this->db->where('clave_especialidad', $clave_materia);
		  $this->db->update('materias', $query);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('calificaciones/malla_materias/'.$clave_especialidad); 		
	}

/////////////////////////////////////////////////////////////  
  function vista_horarios()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  $data['clave_especialidad'] = $this->uri->segment(3); ///clave_especialidad para poder editar
	  $data['clave_materia'] = $this->uri->segment(4);///clave_materia para poder editar
	  $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data['materia_edit'] = $this->m_calificaciones->lista_materia_edit($this->uri->segment(3),$this->uri->segment(4));
	  ///////
	  
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  $this->load->view('vista_horarios', $data);
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
////////////////////////////////////////////////////////////////  
  function horarios()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  $data['clave_especialidad'] = $this->uri->segment(3); ///clave_especialidad para poder editar
	  $data['semestre'] = $this->uri->segment(4);///semestre 
	  $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  $this->load->view('horarios');
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
  

//////////////////
}

?>