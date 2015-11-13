<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Alumno extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		/////
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
    //Datos iniciales para la paginacion
		$limite = 10;
		$desdedonde = $this->uri->segment(3); //Que parte de la URI toma para saber desde donde empieza a listar (OFFSET)
	    
      $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data['d_lista_alumnos'] = $this->alumnos->lista_alumno($limite, $desdedonde);
	  $data['url'] = "alumno/vista_alumno";
	  $data['si'] = "si";
	  
	  //Paginacion
		$this->load->library('pagination');//jalamos la libreria para paginar
		$config['base_url'] = site_url('alumno/index');
		$config['total_rows'] = $this->db->get('alumnos')->num_rows();
		$config['num_links'] = '3'; //Número de enlaces antes y después de la página actual
		$config['first_link'] = '<< First';
$config['last_link'] = 'Last >>';
$config['next_link'] = 'Next ' . '&gt;';
$config['prev_link'] = '&lt;' . ' Previous';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="current"><a href="#">';
$config['cur_tag_close'] = '</a></li>';
		$config['per_page'] = $limite ;//LIMIT - numero de enlaces por página
		$this->pagination->initialize($config);

	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alumno', $data);
      $this->load->view('alumno_lista', $data);
	  $this->load->view('common/footer');
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



function indexf()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
    
    //Datos iniciales para la paginacion
		$nombre = $this->input->post('nombre');
		$nombrep = $this->input->post('nombrep');
	    
      $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data['d_lista_alumnos'] = $this->alumnos->lista_alumnof($nombre, $nombrep);
	  $data['url'] = "alumno/vista_alumno";
	  $data['si'] = "no";


	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alumno', $data);
      $this->load->view('alumno_lista', $data);
	  $this->load->view('common/footer');
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





  //validamos el username con ajax
    public function comprobar_usuario_ajax() {
		//if para ver si tomo el post de alumno o alta_alumnos
		if($this->input->post('matricula_post')){
        $matricula_ = $this->input->post('matricula_post');}else{
		$matricula_ = $this->input->post('matricula');}////fin if
        $comprobar_matricula_ = $this->alumnos->verifica_username($matricula_);
        if ($comprobar_matricula_ == $matricula_) {
            $this->form_validation->set_message('comprobar_usuario_ajax', '%s: ya existe en la base de datos');
            return FALSE;
        } else {
            echo '<div style="display:none">1</div>';
            return TRUE;
        }
    }
	//validamos el username con ajax y sacomos el nombre
    public function comprobar_usuario_ajax2() {
		//if para ver si tomo el post de alumno o alta_alumnos
		if($this->input->post('matricula_post')){
        $matricula_ = $this->input->post('matricula_post');}else{
		$matricula_ = $this->input->post('matricula');}////fin if
        $comprobar_matricula_ = $this->alumnos->verifica_username2($matricula_);
        if ($comprobar_matricula_ == $matricula_) {
            echo $this->alumnos->nombre_del_user($matricula_);
            return TRUE;
        } else {
            echo 'midato';
            return TRUE;
        }
    }
	  //validamos el clave_docente con ajax
    public function comprobar_docente_ajax() {
		//if para ver si tomo el post de alumno o alta_alumnos
		$clave_docente = $this->input->post('clave_docente');
        $comprobar_clave_docente = $this->alumnos->verifica_clave_docente($clave_docente);
        if ($comprobar_clave_docente == $clave_docente) {
            $this->form_validation->set_message('comprobar_clave_docente_ajax', '%s: ya existe en la base de datos');
            return FALSE;
        } else {
            echo '<div style="display:none">1</div>';
            return TRUE;
        }
    }
/////////////////////////////////////////////////////////////  
  function alta_alumno()
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
	  $data['error'] = "no";
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alta_alumno', $data);
	  $this->load->view('common/footer');
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
/////////////////////////////////////////////////////////////    
  function alta_foto_alumno()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
	  ///vistas
	  $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data['matricula'] = $this->uri->segment(3);
	  $data['error'] = ' ';
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  $this->load->view('alta_foto_alumno', $data);
	  $this->load->view('common/footer');
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
////////
function do_upload()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
		///validacion
		$this->form_validation->set_rules('matricula', 'Matricula', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tipo_documentos', 'Tipo de Documento', 'trim|required|xss_clean');
		$this->form_validation->set_message('required', '<span style="margin:0px; padding:0px; color:#FF0000;">El campo %s es obligatorio. </span>');
		///if de validacion
		if($this->form_validation->run() == FALSE)
		{
			 $data['matricula'] = $this->uri->segment(3);
	  		 $data['error'] = "No ha seleccionado un archivo para cargar.";
			/////
			$this->load->view('common/header');
	  		$this->load->view('common/menu', $data);
			$this->load->view('alta_foto_alumno', $data);
			$this->load->view('common/footer');
		}
		else
		{	
		$config['upload_path'] = "common/documentos/".$this->input->post('matricula');
		$config['file_name'] = $this->input->post('tipo_documentos');
		$config['allowed_types'] = 'jpg';
		$config['max_size']	= '3072';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$data['matricula'] = $this->uri->segment(3);
	  		$data['error'] = "No ha seleccionado un archivo para cargar.";
			/////
			$this->load->view('common/header');
	  		$this->load->view('common/menu', $data);
			$this->load->view('alta_foto_alumno', $data);
			$this->load->view('common/footer');
		}
		else
		{
			if($this->input->post('tipo_documentos') == "foto"){
			//// cambio el estado de la foto en alumno
			$query3 = array(
		    'foto' => 1
		    );  
			  /////////////////////////////////////////////////////////////
			  $this->db->where('matricula', $this->input->post('matricula'));
		 	  $this->db->update('alumnos', $query3);//--- idito a tabla alumnos
			}
			  ///////
			  redirect('documentacion/vista_documentacion/'.$this->input->post('matricula')); 	
		}
		}///fin if de validacion
	}
/////////////////////////////////////////////////////////////    
  public function sav()
	{
		///validacion
		$this->form_validation->set_rules('matricula', 'Matricula', 'trim|required|xss_clean');
		$this->form_validation->set_rules('curp', 'CURP', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
		$this->form_validation->set_rules('paterno', 'Paterno', 'trim|required|xss_clean');
		$this->form_validation->set_rules('materno', 'Materno', 'trim|required|xss_clean');
		$this->form_validation->set_rules('fecha_nacimiento', 'Fecha de Nacimiento del Alumno', 'trim|required|xss_clean');
		//// selectes
		$this->form_validation->set_rules('clave_especialidad', 'Clave Especialidad', 'trim|required|xss_clean');
		$this->form_validation->set_rules('sexo', 'Sexo', 'trim|required|xss_clean');
		if($this->input->post('ficha_numero') == ''){
		$this->form_validation->set_rules('semestre', 'Semestre', 'trim|required|xss_clean');
		}
		$this->form_validation->set_rules('tipo_sangre', 'Tipo de Sangre', 'trim|required|xss_clean');
		$this->form_validation->set_message('required', '<span style="margin:0px; padding:0px; color:#FF0000;">El campo %s es obligatorio. </span>');
		///if de validacion
		if($this->form_validation->run() == FALSE)
		{
			$session_data = $this->session->userdata('logged_in');
			$data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
			$data['error'] = "si";
		    ///vistas
		    $this->load->view('common/header');
		    $this->load->view('common/menu', $data);
			if($this->input->post('ficha_numero')){
	 		$data['dt_alumno'] = $this->alumnos->vista_dt_prealumonos($this->input->post('ficha_numero'));
			$this->load->view('alta_alumno_pre', $data);}else{
		    $this->load->view('alta_alumno', $data);}
		    $this->load->view('common/footer');
		}
		else
		{
		//aki cacho los post del form y los meto en varibles para poder pasarlas al array
		  $post_ID = $this->input->post('matricula');
		  $post_password = MD5($this->input->post('matricula'));
		  $post_id_nivel = "1";
		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query = array(
		  'ID' => $post_ID,
		  'password' => $post_password,
		  'id_nivel' => $post_id_nivel
		   );
		   
		   
		   ///// datos para alumnos
		  $matricula = $this->input->post('matricula');
		  $curp = $this->input->post('curp');
		  $nombre = $this->input->post('nombre');
		  $paterno = $this->input->post('paterno');
		  $materno = $this->input->post('materno');
		  $fecha_nacimiento = $this->input->post('fecha_nacimiento');
		  $sexo = $this->input->post('sexo');
		  ////
		  if($this->input->post('semestre')){$semestre = $this->input->post('semestre');}else{$semestre = 1;}
		  ////
		  $clave_especialidad = $this->input->post('clave_especialidad');
		  $ciclo_escolar = $this->input->post('ciclo_escolar');
		  $generacion = $this->input->post('generacion');
		  $estadodeprocedencia = $this->input->post('estadodeprocedencia');
		  $municipiodeprocedencia = $this->input->post('municipiodeprocedencia');
		  $observaciones = $this->input->post('observaciones');
		  $domicilio = $this->input->post('domicilio');
		  $municipio = $this->input->post('municipio');
		  $estado = $this->input->post('estado');
		  $cp = $this->input->post('cp');
		  $telefono_casa = $this->input->post('telefono_casa');
		  $telefono_cel = $this->input->post('telefono_cel');
		  $email = $this->input->post('email');
		  $tipo_sangre = $this->input->post('tipo_sangre');
		  $enfermedades = $this->input->post('enfermedades');
		  $capacidad_diferente = $this->input->post('capacidad_diferente');
		  $cuentaconbeca = $this->input->post('cuentaconbeca');
		  $tipobeca = $this->input->post('tipobeca');
		  $nombre_tutor = $this->input->post('nombre_tutor');
		  $domicilio_tutor = $this->input->post('domicilio_tutor');
		  $telefono_tutor = $this->input->post('telefono_tutor');
		  $email_tutor = $this->input->post('email_tutor');
       	  $telemergencia = $this->input->post('telemergencia');
		  $clave_asesor = $this->input->post('clave_asesor');

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query2 = array(
		  'matricula' => $matricula,
		  'ficha' => $this->input->post('ficha_numero'),
		  'curp' => $curp,
		  'nombre' => $nombre,
		  'paterno' => $paterno,
		  'materno' => $materno,
		  'fecha_nacimiento' => $fecha_nacimiento,
		  'sexo' => $sexo,
		  'semestre' => $semestre,
		  'clave_especialidad' => $clave_especialidad,
		  'ciclo_escolar' => $ciclo_escolar,
		  'generacion' => $generacion,
		  'estadodeprocedencia' => $estadodeprocedencia,
		  'municipiodeprocedencia' => $municipiodeprocedencia,
		  'estatus' => "0",
		  'observaciones' => $observaciones,
		  'domicilio' => $domicilio,
		  'municipio' => $municipio,
		  'estado' => $estado,
		  'cp' => $cp,
		  'telefono_casa' => $telefono_casa,
		  'telefono_cel' => $telefono_cel,
		  'email' => $email,
		  'tipo_sangre' => $tipo_sangre,
		  'enfermedades' => $enfermedades,
		  'capacidad_diferente' => $capacidad_diferente,
		  'cuentaconbeca' => $cuentaconbeca,
		  'tipobeca' => $tipobeca,
		  'nombre_tutor' => $nombre_tutor,
		  'domicilio_tutor' => $domicilio_tutor,
		  'telefono_tutor' => $telefono_tutor,
		  'email_tutor' => $email_tutor,
		  'telemergencia' => $telemergencia,
		  'clave_asesor' => $clave_asesor

		   );
		  


		  ///llamo los datos del alumno para ver si existe y hacer un if
		  $datosalumno = $this->alumnos->vista_dt_alumonos($matricula); //llama a la
		  if($datosalumno == ""){

		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  $this->db->insert('users', $query); //--- inserto a tabla users
		  $this->db->insert('alumnos', $query2); //--- inserto a tabla alumnos
		  /////////
		  if($this->input->post('ficha_numero')){
		  $query3 = array(
		  'estatus' => 1
		   );  
			  /////////////////////////////////////////////////////////////
			  $this->db->where('ficha', $this->input->post('ficha_numero'));
		 	  $this->db->update('preinscripcion', $query3);//--- idito a tabla alumnos
		  }
		  /////
		  
			  ///while para cobranza
			  $i = 1;   
			  while ($i <= 8)
				{
					$query = array(
					  'matricula' => $matricula,
					  'semestre' => $i
					   ); 
					$this->db->insert('cobranza', $query);
					$i++;
				}/// fin while para cobranza  
		  
		  //// llamar funcion que llena calificaciones
		  $this->alumnos->kardex($matricula,$clave_especialidad,$semestre,$ciclo_escolar);
		  //// fin llamar funcion que llena calificaciones

		  ///aki redirecciono con "redirect()"
		  redirect('alumno/vista_alumno/'.$matricula);
		  }else{
		  ///aki redirecciono con "redirect()"
		  redirect('alumno/vista_alumno/'.$matricula.'/error');
		  }

		  


		}///fin if de validacion
	}
/////////////////////////////////////////////////////////////  
  function vista_alumno()
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
	  if($this->uri->segment(4) == "error"){$data['error'] = "si";}else{$data['error'] = "no";}
	  //mi if es para que si no paso la matricula por POST la poso por URI
	  if($this->input->post('matricula_post')){$matricula = $this->input->post('matricula_post');}else{$matricula = $matricula_uri;}
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($matricula); //llama a la funcion vista_dt_alumonos dentro del modelo alumnos
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_alumno']){
      $this->load->view('vista_alumno', $data);
	  }else{redirect(base_url().'alumno', 'refresh');}
	  $this->load->view('common/footer');
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
	  $data['dt_alumno'] = $this->alumnos->vista_dt_alumonos($this->input->post('matricula_post')); //llama a la funcion trae_dominio dentro del modelo vista
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_alumno', $data);
	  $this->load->view('common/footer');
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

/////////////////////////////////////////////////////////////    
  
  public function edit_sav_alumno()
	{
		//aki cacho los post del form y los meto en varibles para poder pasarlas al array  
	
		   ///// datos para alumnos
		  $matricula = $this->input->post('matricula');
		  $curp = $this->input->post('curp');
		  $nombre = $this->input->post('nombre');
		  $paterno = $this->input->post('paterno');
		  $materno = $this->input->post('materno');
		  $fecha_nacimiento = $this->input->post('fecha_nacimiento');
		  $sexo = $this->input->post('sexo');
		  $semestre = $this->input->post('semestre');
		  $clave_especialidad = $this->input->post('clave_especialidad');
		  $ciclo_escolar = $this->input->post('ciclo_escolar');
		  $generacion = $this->input->post('generacion');
		  $estadodeprocedencia = $this->input->post('estadodeprocedencia');
		  $municipiodeprocedencia = $this->input->post('municipiodeprocedencia');
		  $observaciones = $this->input->post('observaciones');
		  $domicilio = $this->input->post('domicilio');
		  $municipio = $this->input->post('municipio');
		  $estado = $this->input->post('estado');
		  $cp = $this->input->post('cp');
		  $telefono_casa = $this->input->post('telefono_casa');
		  $telefono_cel = $this->input->post('telefono_cel');
		  $email = $this->input->post('email');
		  $tipo_sangre = $this->input->post('tipo_sangre');
		  $enfermedades = $this->input->post('enfermedades');
		  $capacidad_diferente = $this->input->post('capacidad_diferente');
		  $cuentaconbeca = $this->input->post('cuentaconbeca');
		  $tipobeca = $this->input->post('tipobeca');
		  $nombre_tutor = $this->input->post('nombre_tutor');
		  $domicilio_tutor = $this->input->post('domicilio_tutor');
		  $telefono_tutor = $this->input->post('telefono_tutor');
		  $email_tutor = $this->input->post('email_tutor');
       	  $telemergencia = $this->input->post('telemergencia');
		  $clave_asesor = $this->input->post('clave_asesor');

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query2 = array(
		  'curp' => $curp,
		  'nombre' => $nombre,
		  'paterno' => $paterno,
		  'materno' => $materno,
		  'fecha_nacimiento' => $fecha_nacimiento,
		  'sexo' => $sexo,
		  'semestre' => $semestre,
		  'clave_especialidad' => $clave_especialidad,
		  'ciclo_escolar' => $ciclo_escolar,
		  'generacion' => $generacion,
		  'estadodeprocedencia' => $estadodeprocedencia,
		  'municipiodeprocedencia' => $municipiodeprocedencia,
		  'estatus' => "0",
		  'observaciones' => $observaciones,
		  'domicilio' => $domicilio,
		  'municipio' => $municipio,
		  'estado' => $estado,
		  'cp' => $cp,
		  'telefono_casa' => $telefono_casa,
		  'telefono_cel' => $telefono_cel,
		  'email' => $email,
		  'tipo_sangre' => $tipo_sangre,
		  'enfermedades' => $enfermedades,
		  'capacidad_diferente' => $capacidad_diferente,
		  'cuentaconbeca' => $cuentaconbeca,
		  'tipobeca' => $tipobeca,
		  'nombre_tutor' => $nombre_tutor,
		  'domicilio_tutor' => $domicilio_tutor,
		  'telefono_tutor' => $telefono_tutor,
		  'email_tutor' => $email_tutor,
		  'telemergencia' => $telemergencia,
		  'clave_asesor' => $clave_asesor

		   );
		   
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  //$this->db->insert('users', $query); //--- inserto a tabla users
		  $this->db->where('matricula', $matricula);
		  $this->db->update('alumnos', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('alumno/vista_alumno/'.$matricula); 		
	}
  


/* preinscripcion */
//////////////////////////////////////////////////////////////////////////////////////////////////////////
  function preinscripcion()
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
	  //
	  $data['dt_pre'] = $this->alumnos->numero_ficha();
	  $data['error'] = "no";
	  
	  if($data['dt_pre']){$data['ficha'] = $data['dt_pre'][0]->ficha + 1;}else{$data['ficha'] = 1;}
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('preinscripcion', $data);
	  $this->load->view('common/footer');
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

/* fin preinscripcion */
/////////////////////////////////////////////////////////////    
  public function sav_ficha_numero()
	{
		///validacion
		$this->form_validation->set_rules('ficha_numero', 'Ficha Numero', 'trim|required|xss_clean');
		$this->form_validation->set_rules('curp', 'CURP', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
		$this->form_validation->set_rules('paterno', 'Paterno', 'trim|required|xss_clean');
		$this->form_validation->set_rules('materno', 'Materno', 'trim|required|xss_clean');
		$this->form_validation->set_rules('clave_especialidad', 'Clave Especialidad', 'trim|required|xss_clean');
		$this->form_validation->set_rules('sexo', 'Sexo', 'trim|required|xss_clean');
		$this->form_validation->set_message('required', '<span style="margin:0px; padding:0px; color:#FF0000;">El campo %s es obligatorio. </span>');
		///if de validacion
		if($this->form_validation->run() == FALSE)
		{
			$session_data = $this->session->userdata('logged_in');
			$data['idsession'] = $session_data['id_nivel'];
     		$data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
		    $data['matricula'] = $session_data['ID'];
	  		$data['especialidades'] = $this->alumnos->especialidades();
			$data['error'] = "si";
			$data['ficha'] = "x";
		    ///vistas
		    $this->load->view('common/header');
		    $this->load->view('common/menu', $data);
		    $this->load->view('preinscripcion', $data);
		    $this->load->view('common/footer');
		}
		else
		{	   
		   ///// datos para alumnos
		  $ficha_numero = $this->input->post('ficha_numero');
		  $curp = $this->input->post('curp');
		  $nombre = $this->input->post('nombre');
		  $paterno = $this->input->post('paterno');
		  $materno = $this->input->post('materno');
		  $sexo = $this->input->post('sexo');
		  $clave_especialidad = $this->input->post('clave_especialidad');
		  $domicilio = $this->input->post('domicilio');
		  $municipio = $this->input->post('municipio');
		  $estado = $this->input->post('estado');
		  $cp = $this->input->post('cp');
		  $telefono_casa = $this->input->post('telefono_casa');
		  $telefono_cel = $this->input->post('telefono_cel');
		  $email = $this->input->post('email');

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query2 = array(
		  'ficha' => $ficha_numero,
		  'curp' => $curp,
		  'nombre' => $nombre,
		  'paterno' => $paterno,
		  'materno' => $materno,
		  'sexo' => $sexo,
		  'clave_especialidad' => $clave_especialidad,
		  'domicilio' => $domicilio,
		  'municipio' => $municipio,
		  'estado' => $estado,
		  'cp' => $cp,
		  'telefono_casa' => $telefono_casa,
		  'telefono_cel' => $telefono_cel,
		  'email' => $email
		   );
		   
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  $this->db->insert('preinscripcion', $query2); //--- inserto a tabla preinscripcion
		  ///aki redirecciono con "redirect()"
		  redirect('alumno/vista_preinscripcion/'.$ficha_numero);
		}///fin if de validacion
	}
/////////////////////////////////////////////////////////////  
function vista_preinscripcion()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  $ficha_numero = $this->uri->segment(3); //Que parte de la URI toma para saber desde donde empieza a listar (OFFSET)
      $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades(); 
	  //mi if es para que si no paso la matricula por POST la poso por URI
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_prealumonos($ficha_numero); //llama a la funcion vista_dt_alumonos dentro del modelo alumnos
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_alumno']){
      $this->load->view('vista_preinscripcion', $data);
	  }else{redirect(base_url().'home', 'refresh');}
	  $this->load->view('common/footer');
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
///////////////////////////////////////////////////////////// 

  function editar_preinscripcion()
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
	  $data['dt_alumno'] = $this->alumnos->vista_dt_prealumonos($this->input->post('ficha_post')); //llama a la funcion trae_dominio dentro del modelo vista
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_preinscripcion', $data);
	  $this->load->view('common/footer');
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

///////////////////////////////////////////////////////////// 
public function edit_sav_preinscripcion()
	{
		 ///// datos para alumnos
		  $ficha_numero = $this->input->post('ficha_numero');
		  $curp = $this->input->post('curp');
		  $nombre = $this->input->post('nombre');
		  $paterno = $this->input->post('paterno');
		  $materno = $this->input->post('materno');
		  $sexo = $this->input->post('sexo');
		  $clave_especialidad = $this->input->post('clave_especialidad');
		  $domicilio = $this->input->post('domicilio');
		  $municipio = $this->input->post('municipio');
		  $estado = $this->input->post('estado');
		  $cp = $this->input->post('cp');
		  $telefono_casa = $this->input->post('telefono_casa');
		  $telefono_cel = $this->input->post('telefono_cel');
		  $email = $this->input->post('email');

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query2 = array(
		  'curp' => $curp,
		  'nombre' => $nombre,
		  'paterno' => $paterno,
		  'materno' => $materno,
		  'sexo' => $sexo,
		  'clave_especialidad' => $clave_especialidad,
		  'domicilio' => $domicilio,
		  'municipio' => $municipio,
		  'estado' => $estado,
		  'cp' => $cp,
		  'telefono_casa' => $telefono_casa,
		  'telefono_cel' => $telefono_cel,
		  'email' => $email
		   );
		   
		  $this->db->where('ficha', $ficha_numero);
		  $this->db->update('preinscripcion', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('alumno/vista_preinscripcion/'.$ficha_numero); 
		
	}
	
/////////////////////////////////////////////////////////////  

  function limpiar_preinscripcion()	
  {
	  $this->db->truncate('preinscripcion');
	  redirect('home'); 
  }
	
	
/////////////////////////////////////////////////////////////  

  function alta_alumno_pre()
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
	  $data['error'] = "no";
	  $data['dt_alumno'] = $this->alumnos->vista_dt_prealumonos($this->input->post('ficha_numero')); //llama a la funcion trae_dominio dentro del modelo vista
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_alumno']){
      $this->load->view('alta_alumno_pre', $data);
	  }else{redirect(base_url().'alumno/alta_alumno', 'refresh');}
	  $this->load->view('common/footer');
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

/////////////////////////////////////////////////////////////  
/*reinscripcion*/
function reinscripcion()
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
	  $data['url'] = "alumno/editar_reinscripcion";
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alumno', $data);
	  $this->load->view('common/footer');
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
/////////////////////////////////////////////////////////////  
  function editar_reinscripcion()
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
	  $data ['dt_alumno'] = $this->alumnos->vista_dt_alumonos($this->input->post('matricula_post')); //llama a la funcion vista_dt_alumonos dentro del modelo alumnos
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_alumno']){
      $this->load->view('editar_reinscripcion', $data);
	  }else{redirect(base_url().'alumno/reinscripcion', 'refresh');}
	  $this->load->view('common/footer');
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
///////////////////////////////////////////////////////////// 
  public function editar_reinscripcion_sav()
	{
		 ///// datos para alumnos
		  $semestre = $this->input->post('semestre');
		  $matricula_post = $this->input->post('matricula_post');
		  $ciclo_escolar = $this->input->post('ciclo_escolar');
		  ////
		  $query2 = array(
		  'ciclo_escolar' => $ciclo_escolar,
		  'semestre' => $semestre
		   );
		  $query3 = array(
		  'ciclo_escolar' => $ciclo_escolar
		   );
		   
		  $this->db->where('matricula', $matricula_post);
		  $this->db->update('alumnos', $query2);//--- idito a tabla alumnos
		  ///
		  $this->db->where('matricula', $matricula_post);
		  $this->db->where('semestre', $semestre);
		  $this->db->update('calificaciones', $query3);//--- idito a tabla calificaciones
		  ///aki redirecciono con "redirect()"
		  redirect('alumno/vista_alumno/'.$matricula_post); 
	}
/////////////////////////////////////////////////////////////  

/*cobranza*/
function cobranza()
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
	  $data['url'] = "alumno/cobranza_edit";
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alumno', $data);
	  $this->load->view('common/footer');
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
/////////////////////////////  
function cobranza_edit()
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
	  $data['dt_alumno'] = $this->alumnos->vista_dt_alumonos($this->input->post('matricula_post')); //datos alumno
	  if($data['dt_alumno']){
	  $data['cobranza'] = $this->alumnos->vista_dt_cobranza($this->input->post('matricula_post'),$data['dt_alumno'][0]->semestre);
	  }
	  ///vistas
	  if($data ['dt_alumno']){ /// este if es para que no tenga error el segundo if que esta adentro
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['cobranza']){
      $this->load->view('cobranza_edit', $data);
	  }else{redirect(base_url().'alumno/cobranza', 'refresh');}
	  $this->load->view('common/footer');
	  /////////abajo termina el primer if
	  }else{redirect(base_url().'alumno/cobranza', 'refresh');}
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
///////////////////////
 function cobranza_edit_sav()
	{
		 ///// datos para alumnos
		  $matricula_post = $this->input->post('matricula_post');
		  $semestre = $this->input->post('semestre');
		  ///
		  $reinscripcion = $this->input->post('reinscripcion');
		  $fecha_reinscripcion = $this->input->post('fecha_reinscripcion');
		  $examen = $this->input->post('examen');
		  $fecha_examen = $this->input->post('fecha_examen');
		  $inscripcion = $this->input->post('inscripcion');
		  $fecha_inscripcion = $this->input->post('fecha_inscripcion');
		  ///
		  $mens1a = $this->input->post('mens1a');
		  $mens2a = $this->input->post('mens2a');
		  $mens3a = $this->input->post('mens3a');
		  $mens4a = $this->input->post('mens4a');
		  $mens5a = $this->input->post('mens5a');
		  $mens6a = $this->input->post('mens6a');
		  $fecha1a = $this->input->post('fecha1a');
		  $fecha2a = $this->input->post('fecha2a');
		  $fecha3a = $this->input->post('fecha3a');
		  $fecha4a = $this->input->post('fecha4a');
		  $fecha5a = $this->input->post('fecha5a');
		  $fecha6a = $this->input->post('fecha6a');
		  ///
		  $mens1b = $this->input->post('mens1b');
		  $mens2b = $this->input->post('mens2b');
		  $mens3b = $this->input->post('mens3b');
		  $mens4b = $this->input->post('mens4b');
		  $mens5b = $this->input->post('mens5b');
		  $mens6b = $this->input->post('mens6b');
		  $fecha1b = $this->input->post('fecha1b');
		  $fecha2b = $this->input->post('fecha2b');
		  $fecha3b = $this->input->post('fecha3b');
		  $fecha4b = $this->input->post('fecha4b');
		  $fecha5b = $this->input->post('fecha5b');
		  $fecha6b = $this->input->post('fecha6b');
		   
		  $query2 = array(
		  'reinscripcion' => $reinscripcion,
		  'fecha_reinscripcion' => $fecha_reinscripcion,
		  'examen' => $examen,
		  'fecha_examen' => $fecha_examen,
		  'inscripcion' => $inscripcion,
		  'fecha_inscripcion' => $fecha_inscripcion,
		  'mens1a' => $mens1a,
		  'mens2a' => $mens2a,
		  'mens3a' => $mens3a,
		  'mens4a' => $mens4a,
		  'mens5a' => $mens5a,
		  'mens6a' => $mens6a,
		  'fecha1a' => $fecha1a,
		  'fecha2a' => $fecha2a,
		  'fecha3a' => $fecha3a,
		  'fecha4a' => $fecha4a,
		  'fecha5a' => $fecha5a,
		  'fecha6a' => $fecha6a,
		  'mens1b' => $mens1b,
		  'mens2b' => $mens2b,
		  'mens3b' => $mens3b,
		  'mens4b' => $mens4b,
		  'mens5b' => $mens5b,
		  'mens6b' => $mens6b,
		  'fecha1b' => $fecha1b,
		  'fecha2b' => $fecha2b,
		  'fecha3b' => $fecha3b,
		  'fecha4b' => $fecha4b,
		  'fecha5b' => $fecha5b,
		  'fecha6b' => $fecha6b
		   );
		   
		  $this->db->where('matricula', $matricula_post);
		  $this->db->where('semestre', $semestre);
		  
		  $this->db->update('cobranza', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('alumno/cobranza_vista/'.$matricula_post); 
		
	}
/////////////////////////////  
function cobranza_vista()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
	  $matricula_uri = $this->uri->segment(3);
      $data['idsession'] = $session_data['id_nivel'];
     		$data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
		    $data['matricula'] = $session_data['ID'];
	  		$data['especialidades'] = $this->alumnos->especialidades();
	  $data['dt_alumno'] = $this->alumnos->vista_dt_alumonos($matricula_uri); //datos alumno
	  $data['cobranza'] = $this->alumnos->vista_dt_cobranza($matricula_uri,$data['dt_alumno'][0]->semestre); //datos alumno
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('cobranza_vista', $data);
	  $this->load->view('common/footer');
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
///////////////////////
  function eliminar()
{
if ($this->input->post('id_eliminar')) {
$id = $this->input->post('id_eliminar');
/// alumnos
$this->db->where('matricula', $id);
$this->db->delete('alumnos');
/// user
$this->db->where('ID', $id);
$this->db->delete('users');

/// calificaciones
$this->db->where('matricula', $id);
$this->db->delete('calificaciones');
/// ceneval
$this->db->where('matricula', $id);
$this->db->delete('ceneval');
/// cobranza
$this->db->where('matricula', $id);
$this->db->delete('cobranza');
/// documentacion
$this->db->where('matricula', $id);
$this->db->delete('documentacion');
/// egresado
$this->db->where('matricula', $id);
$this->db->delete('egresado');
/// historial
$this->db->where('matricula', $id);
$this->db->delete('historial');
/// talleres
$this->db->where('matricula', $id);
$this->db->delete('talleres');
/// titulacion
$this->db->where('matricula', $id);
$this->db->delete('titulacion');
}
//////
redirect(base_url().'alumno', 'refresh');
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