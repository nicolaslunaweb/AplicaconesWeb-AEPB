<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Admin extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->model('m_admin');
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
	  		$data['especialidades'] = $this->alumnos->especialidades();
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('admintipo', $data);
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



//validamos el username con ajax y sacomos el nombre
    public function comprobar_usuario_ajax2() {
		//if para ver si tomo el post de alumno o alta_alumnos
		$matricula_ = $this->input->post('clave_docente');
        $comprobar_matricula_ = $this->m_admin->verifica_username2($matricula_);
        if ($comprobar_matricula_ == $matricula_) {
            echo $this->m_admin->nombre_del_user($matricula_);
            return TRUE;
        } else {
            echo 'midato';
            return TRUE;
        }
    }

/////////////////////////////////////////////////////////////
function profesor()
  {
	$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
     		$data['idsession'] = $session_data['id_nivel'];
	  		$data['especialidades'] = $this->alumnos->especialidades();
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('profesor_tipo', $data);
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
function vista_tipo_personal()
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
	  
	  /// armo mi case para hacer las vista que corresponden
	  switch ($this->input->post('tipo_personal')) {
	  case 1:
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($this->input->post('clave_tipo'));
	  if($data ['dt_prof'] == ""){redirect('admin', 'refresh');}else{
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('vista_profesor', $data);
	  $this->load->view('common/footer');
	  }////termina mi if de dt_prof para redireccionar
	  break;
	  case 2:
	  $data ['dt_adminis'] = $this->m_admin->datos_administrativo($this->input->post('clave_tipo'));
	  if($data ['dt_adminis'] == ""){redirect('admin', 'refresh');}else{
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('vista_administrador', $data);
	  $this->load->view('common/footer');
	  }////termina mi if de dt_prof para redireccionar
	  break;
	  default:
	  redirect('admin', 'refresh');
	  break;
	  }//// fin del case
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


/////////////////////////////////////////////////////////////  profesor vistas  ////////////////////
function profesor_tipo()
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
	  
	  /// armo mi case para hacer las vista que corresponden
	  switch ($this->input->post('tipo_vista')) {
	  case 1:
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($this->input->post('clave_tipo'));
	  $data ['dt_historial_prof'] = $this->m_admin->datos_historial_profesor($this->input->post('clave_tipo'));
	  if($data ['dt_prof'] == ""){redirect('admin/profesor', 'refresh');}else{
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('vista_historial_profesor', $data);
	  $this->load->view('common/footer');
	  }////termina mi if de dt_prof para redireccionar
	  break;
	  case 2:
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($this->input->post('clave_tipo'));
	  $data ['dt_doc_prof'] = $this->m_admin->datos_doc_profesor($this->input->post('clave_tipo'));
	  if($data ['dt_prof'] == ""){redirect('admin/profesor', 'refresh');}else{
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('vista_doc_profesor', $data);
	  $this->load->view('common/footer');
	  }////termina mi if de dt_prof para redireccionar
	  break;
	  case 3:
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($this->input->post('clave_tipo'));
	  $data['d_t_profesores'] = $this->m_admin->listar_talleres_profesor($this->input->post('clave_tipo'));
	  if($data ['dt_prof'] == ""){redirect('admin/profesor', 'refresh');}else{
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('listar_talleres_profesor', $data);
	  $this->load->view('common/footer');
	  }////termina mi if de dt_prof para redireccionar
	  break;
	  default:
	  redirect('admin/profesor', 'refresh');
	  break;
	  }//// fin del case
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
/////////////////////////////////////////////////////////////  profesor vistas  ////////////////////


/////////////////////////////////////////////////////////////  alta_profesor  ////////////////////
  function alta_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alta_profesor', $data);
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
		$this->form_validation->set_rules('clave_docente', 'Clave Docente', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
		$this->form_validation->set_rules('paterno', 'Paterno', 'trim|required|xss_clean');
		$this->form_validation->set_rules('materno', 'Materno', 'trim|required|xss_clean');
		$this->form_validation->set_rules('cedula', 'Cedula', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tipo', 'Tipo', 'trim|required|xss_clean');
		$this->form_validation->set_rules('domicilio', 'Domicilio', 'trim|required|xss_clean');
		$this->form_validation->set_rules('telefono_cel', 'Teléfono Cel', 'trim|required|xss_clean');
		$this->form_validation->set_rules('sexo', 'Sexo', 'trim|required|xss_clean');
		$this->form_validation->set_rules('estado_civil', 'Estado Civil', 'trim|required|xss_clean');
		$this->form_validation->set_message('required', '<span style="margin:0px; padding:0px; color:#FF0000;">El campo %s es obligatorio. </span>');
		///if de validacion
		if($this->form_validation->run() == FALSE)
		{
			  $session_data = $this->session->userdata('logged_in');
			  $data['idsession'] = $session_data['id_nivel'];
			  $data['especialidades'] = $this->alumnos->especialidades();
			  ///vistas
			  $this->load->view('common/header');
			  $this->load->view('common/menu', $data);
			  $this->load->view('alta_profesor', $data);
			  $this->load->view('common/footer');
		}else
		{
			  $post_ID = $this->input->post('clave_docente');
			  $post_password = MD5($this->input->post('clave_docente'));
			  $post_id_nivel = "2";
			  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
			  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
			  $query = array(
			  'ID' => $post_ID,
			  'password' => $post_password,
			  'id_nivel' => $post_id_nivel
			   );
		   
		   ///// datos para tallere
 			$clave_docente = $this->input->post('clave_docente');
			$nombre = $this->input->post('nombre');
			$paterno = $this->input->post('paterno');
			$materno = $this->input->post('materno');
			$cedula = $this->input->post('cedula');
			$tipo = $this->input->post('tipo');
			$domicilio = $this->input->post('domicilio');
			$municipio = $this->input->post('municipio');
			$estado = $this->input->post('estado');
			$telefono_casa = $this->input->post('telefono_casa');
			$telefono_cel = $this->input->post('telefono_cel');
			$email = $this->input->post('email');
			$fecha_nacimiento = $this->input->post('fecha_nacimiento');
			$sexo = $this->input->post('sexo');
			$estado_civil = $this->input->post('estado_civil');
			$colonia = $this->input->post('colonia');
			$telefono_trabajo = $this->input->post('telefono_trabajo');
			$perfil = $this->input->post('perfil');
			$curp = $this->input->post('curp');
			$fecha_ingreso = $this->input->post('fecha_ingreso');
			$horario_laboral = $this->input->post('horario_laboral');
			$funciones = $this->input->post('funciones');
			$lengua = $this->input->post('lengua');
			$rfc = $this->input->post('rfc');
			$clave_presupuestal = $this->input->post('clave_presupuestal');
			$tipo_nombramiento = $this->input->post('tipo_nombramiento');
			$categoria = $this->input->post('categoria');
			$grado = $this->input->post('grado');
			$grupo = $this->input->post('grupo');
			$escolaridad = $this->input->post('escolaridad');
 	 	 	 	 	 	 	 	 	 	 	 	 	
		  $query2 = array(
		  'clave_docente' => $clave_docente, 
		  'nombre' => $nombre,
		  'paterno' => $paterno,
		  'materno' => $materno, 
		  'cedula' => $cedula, 
		  'tipo' => $tipo, 
		  'domicilio' => $domicilio, 
		  'municipio' => $municipio, 
		  'estado' => $estado, 
		  'telefono_casa' => $telefono_casa, 
		  'telefono_cel' => $telefono_cel, 
		  'email' => $email, 
		  'fecha_nacimiento' => $fecha_nacimiento, 
		  'sexo' => $sexo, 
		  'estado_civil' => $estado_civil, 
		  'colonia' => $colonia, 
		  'telefono_trabajo' => $telefono_trabajo, 
		  'perfil' => $perfil, 
		  'curp' => $curp, 
		  'fecha_ingreso' => $fecha_ingreso, 
		  'horario_laboral' => $horario_laboral, 
		  'funciones' => $funciones, 
		  'lengua' => $lengua,
		  'rfc' => $rfc,
		  'clave_presupuestal' => $clave_presupuestal,
		  'tipo_nombramiento' => $tipo_nombramiento,
		  'categoria' => $categoria,
		  'grado' => $grado,
		  'grupo' => $grupo,
		  'escolaridad' => $escolaridad
		  
		   );
	
	      $this->db->insert('users', $query); //--- inserto a tabla users
		  $this->db->insert('profesores', $query2); //--- inserto a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('admin/vista_profesor/'.$clave_docente); 		
	}
	}//fin de la validacion
/////////////////////////////////////////////////////////////  
 function listar_profesores()
	{	
		$session_data = $this->session->userdata('logged_in');
	    $data['idsession'] = $session_data['id_nivel'];
	  	$data['especialidades'] = $this->alumnos->especialidades();
		//Funciones
		$data['m_profesores'] = $this->m_admin->lista_profesores();

		//Armando la salida
		$this->load->view('common/header');
	    $this->load->view('common/menu', $data);
        $this->load->view('lista_profesores', $data);
		$this->load->view('common/footer');
	}

/////////////////////////////////////////////////////////////  

  function vista_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  if($this->input->post('clave_tipo')){$clave_d = $this->input->post('clave_tipo');}else{$clave_d = $this->uri->segment(3); }
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($clave_d);
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

  function editar_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($this->input->post('clave_docente'));
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_profesor', $data);
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
  public function sav_editar_profesor()
	{
 			$clave_docente = $this->input->post('clave_docente');
			$nombre = $this->input->post('nombre');
			$paterno = $this->input->post('paterno');
			$materno = $this->input->post('materno');
			$cedula = $this->input->post('cedula');
			$tipo = $this->input->post('tipo');
			$domicilio = $this->input->post('domicilio');
			$municipio = $this->input->post('municipio');
			$estado = $this->input->post('estado');
			$telefono_casa = $this->input->post('telefono_casa');
			$telefono_cel = $this->input->post('telefono_cel');
			$email = $this->input->post('email');
			$fecha_nacimiento = $this->input->post('fecha_nacimiento');
			$sexo = $this->input->post('sexo');
			$estado_civil = $this->input->post('estado_civil');
			$colonia = $this->input->post('colonia');
			$telefono_trabajo = $this->input->post('telefono_trabajo');
			$perfil = $this->input->post('perfil');
			$curp = $this->input->post('curp');
			$fecha_ingreso = $this->input->post('fecha_ingreso');
			$horario_laboral = $this->input->post('horario_laboral');
			$funciones = $this->input->post('funciones');
			$lengua = $this->input->post('lengua');
			$rfc = $this->input->post('rfc');
			$clave_presupuestal = $this->input->post('clave_presupuestal');
			$tipo_nombramiento = $this->input->post('tipo_nombramiento');
			$categoria = $this->input->post('categoria');
			$grado = $this->input->post('grado');
			$grupo = $this->input->post('grupo');
			$escolaridad = $this->input->post('escolaridad');
 	 	 	 	 	 	 	 	 	 	 	 	 	
		  $query2 = array( 
		  'nombre' => $nombre,
		  'paterno' => $paterno,
		  'materno' => $materno, 
		  'cedula' => $cedula, 
		  'tipo' => $tipo, 
		  'domicilio' => $domicilio, 
		  'municipio' => $municipio, 
		  'estado' => $estado, 
		  'telefono_casa' => $telefono_casa, 
		  'telefono_cel' => $telefono_cel, 
		  'email' => $email, 
		  'fecha_nacimiento' => $fecha_nacimiento, 
		  'sexo' => $sexo, 
		  'estado_civil' => $estado_civil, 
		  'colonia' => $colonia, 
		  'telefono_trabajo' => $telefono_trabajo, 
		  'perfil' => $perfil, 
		  'curp' => $curp, 
		  'fecha_ingreso' => $fecha_ingreso, 
		  'horario_laboral' => $horario_laboral, 
		  'funciones' => $funciones, 
		  'lengua' => $lengua,
		  'rfc' => $rfc,
		  'clave_presupuestal' => $clave_presupuestal,
		  'tipo_nombramiento' => $tipo_nombramiento,
		  'categoria' => $categoria,
		  'grado' => $grado,
		  'grupo' => $grupo,
		  'escolaridad' => $escolaridad
		   );
		   
		  if($this->session->userdata('logged_in') && $clave_docente):
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  $this->db->where('clave_docente', $clave_docente);
		  $this->db->update('profesores', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('admin/vista_profesor/'.$clave_docente);
		  else:
		  redirect(base_url(), 'refresh');
		  endif;
	}
  
/////////////////////////////////////////////////////////////  alta_profesor  ////////////////////
  
  
  
  
  
/////////////////////////////////////////////////////////////  alta_historial_profesor  ////////////////////
function alta_historial_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alta_historial_profesor', $data);
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
public function sav_historial_profesor()
	{
		///// datos para tallere
		 	 	 	 	 	 	 	 	 	 	 	 	  
 			$clave_docente = $this->input->post('clave_docente');
			$nivel = $this->input->post('nivel');
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
			$fecha = $this->input->post('fecha');
 	 	 	 	 	 	 	 	 	 	 	 	 	
		  $query2 = array(
		  'clave_docente' => $clave_docente,
		  'nivel' => $nivel,
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
		  'institucion_que_la_otorga' => $institucion_que_la_otorga,
		  'fecha'  => $fecha
		   );
	
	      $this->db->insert('hist_profesores', $query2); //--- inserto a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('admin/vista_historial_profesor/'.$clave_docente); 
	}
/////////////////////////////////////////////////////////////    
  function vista_historial_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  if($this->input->post('clave_tipo')){$clave_d = $this->input->post('clave_tipo');}else{$clave_d = $this->uri->segment(3); }
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($clave_d);
	  $data ['dt_historial_prof'] = $this->m_admin->datos_historial_profesor($clave_d);
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
function edit_historial_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data ['dt_historial_prof'] = $this->m_admin->datos_historial_profesor($this->input->post('clave_docente'));
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_historial_profesor', $data);
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
 public function sav_edithistorial_profesor()
	{
 			$clave_docente = $this->input->post('clave_docente');
			$nivel = $this->input->post('nivel');
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
			$fecha = $this->input->post('fecha');
 	 	 	 	 	 	 	 	 	 	 	 	 	
		  $query2 = array(
		  'clave_docente' => $clave_docente,
		  'nivel' => $nivel,
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
		  'institucion_que_la_otorga' => $institucion_que_la_otorga,
		  'fecha' => $fecha
		   );
		   
		  if($this->session->userdata('logged_in') && $clave_docente):
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  $this->db->where('clave_docente', $clave_docente);
		  $this->db->update('hist_profesores', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('admin/vista_historial_profesor/'.$clave_docente);
		  else:
		  redirect(base_url(), 'refresh');
		  endif;
	}
/////////////////////////////////////////////////////////////  alta_historial_profesor  ////////////////////
  
  
  
  

/////////////////////////////////////////////////////////////  alta_doc_profesor  ////////////////////
function alta_doc_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alta_doc_profesor', $data);
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

public function sav_doc_profesor()
	{
		///// datos para tallere 	 	 
 			$clave_docente = $this->input->post('clave_docente');
			$rfc = $this->input->post('rfc');
			$ingreso_sep = $this->input->post('ingreso_sep');


			$tiponombramiento1 = $this->input->post('tiponombramiento1');
			$clavepresupuestal1 = $this->input->post('clavepresupuestal1');
			$categoriapuesto1 = $this->input->post('categoriapuesto1');
			$horasclave1 = $this->input->post('horasclave1');

			$tiponombramiento2 = $this->input->post('tiponombramiento2');
			$clavepresupuestal2 = $this->input->post('clavepresupuestal2');
			$categoriapuesto2 = $this->input->post('categoriapuesto2');
			$horasclave2 = $this->input->post('horasclave2');

			$tiponombramiento3 = $this->input->post('tiponombramiento3');
			$clavepresupuestal3 = $this->input->post('clavepresupuestal3');
			$categoriapuesto3 = $this->input->post('categoriapuesto3');
			$horasclave3 = $this->input->post('horasclave3');

			$tiponombramiento4 = $this->input->post('tiponombramiento4');
			$clavepresupuestal4 = $this->input->post('clavepresupuestal4');
			$categoriapuesto4 = $this->input->post('categoriapuesto4');
			$horasclave4 = $this->input->post('horasclave4');

			$tatoldehoras = $this->input->post('tatoldehoras');
 	 	 	 	 	 	 	 	 	 	 	 	 	
		  $query2 = array(
		  'clave_docente' => $clave_docente,
		  'rfc' => $rfc,
		  'ingreso_sep' => $ingreso_sep,

		  'tiponombramiento1' => $tiponombramiento1,
		  'clavepresupuestal1' => $clavepresupuestal1,
		  'categoriapuesto1' => $categoriapuesto1,
		  'horasclave1' => $horasclave1,

		  'tiponombramiento2' => $tiponombramiento2,
		  'clavepresupuestal2' => $clavepresupuestal2,
		  'categoriapuesto2' => $categoriapuesto2,
		  'horasclave2' => $horasclave2,

		  'tiponombramiento3' => $tiponombramiento3,
		  'clavepresupuestal3' => $clavepresupuestal3,
		  'categoriapuesto3' => $categoriapuesto3,
		  'horasclave3' => $horasclave3,

		  'tiponombramiento4' => $tiponombramiento4,
		  'clavepresupuestal4' => $clavepresupuestal4,
		  'categoriapuesto4' => $categoriapuesto4,
		  'horasclave4' => $horasclave4,

		  'tatoldehoras' => $tatoldehoras
		   );
	
	      $this->db->insert('doc_profesores', $query2); //--- inserto a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('admin/vista_doc_profesor/'.$clave_docente); 
	}
/////////////////////////////////////////////////////////////  
  function vista_doc_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  if($this->input->post('clave_tipo')){$clave_d = $this->input->post('clave_tipo');}else{$clave_d = $this->uri->segment(3); }
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($clave_d);
	  $data ['dt_doc_prof'] = $this->m_admin->datos_doc_profesor($clave_d);
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
function editar_doc_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data ['dt_doc_prof'] = $this->m_admin->datos_doc_profesor($this->input->post('clave_docente'));
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_doc_profesor', $data);
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
 public function sav_editdoc_profesor()
	{

		    $clave_docente = $this->input->post('clave_docente');
			$rfc = $this->input->post('rfc');
			$ingreso_sep = $this->input->post('ingreso_sep');
			
 			$tiponombramiento1 = $this->input->post('tiponombramiento1');
			$clavepresupuestal1 = $this->input->post('clavepresupuestal1');
			$categoriapuesto1 = $this->input->post('categoriapuesto1');
			$horasclave1 = $this->input->post('horasclave1');

			$tiponombramiento2 = $this->input->post('tiponombramiento2');
			$clavepresupuestal2 = $this->input->post('clavepresupuestal2');
			$categoriapuesto2 = $this->input->post('categoriapuesto2');
			$horasclave2 = $this->input->post('horasclave2');

			$tiponombramiento3 = $this->input->post('tiponombramiento3');
			$clavepresupuestal3 = $this->input->post('clavepresupuestal3');
			$categoriapuesto3 = $this->input->post('categoriapuesto3');
			$horasclave3 = $this->input->post('horasclave3');

			$tiponombramiento4 = $this->input->post('tiponombramiento4');
			$clavepresupuestal4 = $this->input->post('clavepresupuestal4');
			$categoriapuesto4 = $this->input->post('categoriapuesto4');
			$horasclave4 = $this->input->post('horasclave4');

			$tatoldehoras = $this->input->post('tatoldehoras');
 	 	 	 	 	 	 	 	 	 	 	 	 	
		  $query2 = array(
		  'clave_docente' => $clave_docente,
		  'rfc' => $rfc,
		  'ingreso_sep' => $ingreso_sep,

		  'tiponombramiento1' => $tiponombramiento1,
		  'clavepresupuestal1' => $clavepresupuestal1,
		  'categoriapuesto1' => $categoriapuesto1,
		  'horasclave1' => $horasclave1,

		  'tiponombramiento2' => $tiponombramiento2,
		  'clavepresupuestal2' => $clavepresupuestal2,
		  'categoriapuesto2' => $categoriapuesto2,
		  'horasclave2' => $horasclave2,

		  'tiponombramiento3' => $tiponombramiento3,
		  'clavepresupuestal3' => $clavepresupuestal3,
		  'categoriapuesto3' => $categoriapuesto3,
		  'horasclave3' => $horasclave3,

		  'tiponombramiento4' => $tiponombramiento4,
		  'clavepresupuestal4' => $clavepresupuestal4,
		  'categoriapuesto4' => $categoriapuesto4,
		  'horasclave4' => $horasclave4,

		  'tatoldehoras' => $tatoldehoras
		   );
		   
		  if($this->session->userdata('logged_in') && $clave_docente):
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  $this->db->where('clave_docente', $clave_docente);
		  $this->db->update('doc_profesores', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('admin/vista_doc_profesor/'.$clave_docente);
		  else:
		  redirect(base_url(), 'refresh');
		  endif;
	}
/////////////////////////////////////////////////////////////  alta_doc_profesor  ////////////////////





/////////////////////////////////////////////////////////////  alta_talleres_profesor  ////////////////////
function alta_talleres_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alta_talleres_profesor', $data);
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
public function sav_talleres_profesor()
	{
		///// datos para tallere
		 	 	 	 	 	 	 	 	 	 	 	 	  
 			$clave_docente = $this->input->post('clave_docente');
			$nivel = $this->input->post('nivel');
			$nombre = $this->input->post('nombre');
			$institucion = $this->input->post('institucion');
			$titulo = $this->input->post('titulo');
			$sedulaprofecional = $this->input->post('sedulaprofecional');
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
		  'clave_docente' => $clave_docente,
		  'nivel' => $nivel,
		  'nombre' => $nombre,
		  'institucion' => $institucion,
		  'titulo' => $titulo,
		  'sedulaprofecional' => $sedulaprofecional,
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
		   
	      $this->db->insert('talleres_profesores', $query2); //--- inserto a tabla alumnos
		  $idre = $this->db->insert_id();
		  ///aki redirecciono con "redirect()"
		  redirect('admin/vista_talleres_profesor/'.$clave_docente."/".$idre); 
	}
/////////////////////////////////////////////////////////////    
  function vista_talleres_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  if($this->input->post('clave_tipo')){$clave_d = $this->input->post('clave_tipo');}else{$clave_d = $this->uri->segment(3); }
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_prof'] = $this->m_admin->datos_profesor($clave_d);
	  $data ['dt_talleres_prof'] = $this->m_admin->datos_talleres_profesor($clave_d,$this->uri->segment(4));
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_talleres_prof']){
      $this->load->view('vista_talleres_profesor', $data);
	  }else{redirect(base_url().'admin/profesor', 'refresh');}
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
function edit_talleres_profesor()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data ['dt_talleres_prof'] = $this->m_admin->datos_talleres_profesor($this->input->post('clave_docente'),$this->input->post('idre'));
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_talleres_profesor', $data);
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
 public function sav_edittalleres_profesor()
	{
		    $idre = $this->input->post('idre');
 			$clave_docente = $this->input->post('clave_docente');
			$nivel = $this->input->post('nivel');
			$nombre = $this->input->post('nombre');
			$institucion = $this->input->post('institucion');
			$titulo = $this->input->post('titulo');
			$sedulaprofecional = $this->input->post('sedulaprofecional');
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
		  'nombre' => $nombre,
		  'institucion' => $institucion,
		  'titulo' => $titulo,
		  'sedulaprofecional' => $sedulaprofecional,
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
		   
		  if($this->session->userdata('logged_in') && $clave_docente):
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  $this->db->where('IDre', $idre);
		  $this->db->where('clave_docente', $clave_docente);
		  $this->db->update('talleres_profesores', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('admin/vista_talleres_profesor/'.$clave_docente."/".$idre);
		  else:
		  redirect(base_url(), 'refresh');
		  endif;
	}
/////////////////////////////////////////////////////////////  alta_talleres_profesor  ////////////////////
  
  
  
///////////////////////////////////////////////////////////// 


/////////////////////////////////////////////////////////////  alta_administrativo  ////////////////////
function alta_administrativo()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alta_administrativo', $data);
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
public function sav_administrativo()
	{
			  $post_ID = $this->input->post('matricula');
			  $post_password = MD5($this->input->post('matricula'));
			  $post_id_nivel = "3";
			  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
			  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
			  $query = array(
			  'ID' => $post_ID,
			  'password' => $post_password,
			  'id_nivel' => $post_id_nivel
			   );
		///// datos para administrativos 	 	 	 	 	 	 	 
 			$matricula = $this->input->post('matricula');
			$nombre = $this->input->post('nombre');
			$paterno = $this->input->post('paterno');
			$materno = $this->input->post('materno');
			$curp = $this->input->post('curp');
			$tel = $this->input->post('tel');
			$tel_casa = $this->input->post('tel_casa');
			$ciudad = $this->input->post('ciudad');
			$direccion = $this->input->post('direccion');
			$email = $this->input->post('email');
 	 	 	 	 	 	 	 	 	 	 	 	 	
		  $query2 = array(
		  'matricula' => $matricula,
		  'nombre' => $nombre,
		  'paterno' => $paterno,
		  'materno' => $materno,
		  'curp' => $curp,
		  'tel' => $tel,
		  'tel_casa' => $tel_casa,
		  'ciudad' => $ciudad,
		  'direccion' => $direccion,
		  'email' => $email
		   );
		  
		  $this->db->insert('users', $query); 
	      $this->db->insert('administrativos', $query2); //--- inserto a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('admin/vista_administrador/'.$matricula); 
	}
/////////////////////////////////////////////////////////////  
 function listar_administrativos()
	{	
		$session_data = $this->session->userdata('logged_in');
	    $data['idsession'] = $session_data['id_nivel'];
	  	$data['especialidades'] = $this->alumnos->especialidades();
		//Funciones
		$data['d_adminis'] = $this->m_admin->lista_administrador();

		//Armando la salida
		$this->load->view('common/header');
	    $this->load->view('common/menu', $data);
        $this->load->view('lista_administrador', $data);
		$this->load->view('common/footer');
	}

/////////////////////////////////////////////////////////////  
function vista_administrador()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {
	  if($this->input->post('matricula')){$clave_a = $this->input->post('matricula');}else{$clave_a = $this->uri->segment(3); }
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///////
	  $data ['dt_adminis'] = $this->m_admin->datos_administrativo($clave_a);
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_adminis']){
      $this->load->view('vista_administrador', $data);
	  }else{redirect(base_url().'admin', 'refresh');}
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
function edit_administrador()
  {
	  $session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		//////////
    if($session_data['id_nivel'] >= 2)
    {	
      $data['idsession'] = $session_data['id_nivel'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  $data ['dt_adminis'] = $this->m_admin->datos_administrativo($this->input->post('matricula_ad'));
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_administrador', $data);
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
public function sav_editadministrativo()
	{
		  ///// datos para administrativos 	 	 	 	 	 	 	 
 			$matricula = $this->input->post('matricula');
			$nombre = $this->input->post('nombre');
			$paterno = $this->input->post('paterno');
			$materno = $this->input->post('materno');
			$curp = $this->input->post('curp');
			$tel = $this->input->post('tel');
			$tel_casa = $this->input->post('tel_casa');
			$ciudad = $this->input->post('ciudad');
			$direccion = $this->input->post('direccion');
			$email = $this->input->post('email');
 	 	 	 	 	 	 	 	 	 	 	 	 	
		  $query2 = array(
		  'nombre' => $nombre,
		  'paterno' => $paterno,
		  'materno' => $materno,
		  'curp' => $curp,
		  'tel' => $tel,
		  'tel_casa' => $tel_casa,
		  'ciudad' => $ciudad,
		  'direccion' => $direccion,
		  'email' => $email
		   );
		    
		  if($this->session->userdata('logged_in') && $matricula):
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  $this->db->where('matricula', $matricula);
		  $this->db->update('administrativos', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('admin/vista_administrador/'.$matricula);
		  else:
		  redirect(base_url(), 'refresh');
		  endif;
	}   
/////////////////////////////////////////////////////////////  alta_administrativo  ////////////////////

function eliminar()
{
if ($this->input->post('id_eliminar')) {
$id = $this->input->post('id_eliminar');
/// profesores
$this->db->where('clave_docente', $id);
$this->db->delete('profesores');
/// user
$this->db->where('ID', $id);
$this->db->delete('users');
/// talleres_profesores
$this->db->where('clave_docente', $id);
$this->db->delete('talleres_profesores');
/// doc_profesores
$this->db->where('clave_docente', $id);
$this->db->delete('doc_profesores');
/// hist_profesores
$this->db->where('clave_docente', $id);
$this->db->delete('hist_profesores');
}
//////
redirect(base_url().'admin/listar_profesores', 'refresh');
}
/////////////////////////////////////

}

?>