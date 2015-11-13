<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Documentacion extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
		$this->load->model('m_documentacion');
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
      $data['idsession'] = $session_data['id_nivel'];
      $data['nivel_label'] = $this->user->mi_join($session_data['id_nivel'],'niveles','id','label');
	  $data['matricula'] = $session_data['ID'];
	  $data['especialidades'] = $this->alumnos->especialidades();
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('documentacion', $data);
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
  function alta_documentacion()
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
      $this->load->view('alta_documentacion', $data);
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
  
  public function sav()
	{
// aqui creo el directorio para subir archivos
$folderName=$this->input->post('matricula');
		$pathToUpload = './common/documentos/' . $folderName;
    if ( ! file_exists($pathToUpload) )
    {
        $create = mkdir($pathToUpload, 0777);
        if ( ! $create)
        return;
    }
		//aki cacho los post del form y los meto en varibles para poder pasarlas al array
		   
		   ///// datos para documentacion
		  $matricula = $this->input->post('matricula');
		  $comprobante_de_pago_bancario = $this->input->post('comprobante_de_pago_bancario');
		  $acta_de_nacimiento = $this->input->post('acta_de_nacimiento');
		  $certificado_de_secundaria = $this->input->post('certificado_de_secundaria');
		  $certificado_de_bachillerato = $this->input->post('certificado_de_bachillerato');
		  $carta_de_buena_conducta = $this->input->post('carta_de_buena_conducta');
		  $certificado_de_salud = $this->input->post('certificado_de_salud');
		  $fotografias_infantil = $this->input->post('fotografias_infantil');
		  $curp = $this->input->post('curp');
		  $boleta_de_calificaciones = $this->input->post('boleta_de_calificaciones');
		  $otros = $this->input->post('otros');
		  $carta_pasante = $this->input->post('carta_pasante');
		  $acta_de_examen_profesional = $this->input->post('acta_de_examen_profesional');
		  $credencial = $this->input->post('credencial');
		  
		  

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query2 = array(
		  'matricula' => $matricula,
		  'comprobante_de_pago_bancario' => $comprobante_de_pago_bancario,
		  'acta_de_nacimiento' => $acta_de_nacimiento,
		  'certificado_de_secundaria' => $certificado_de_secundaria,
		  'certificado_de_bachillerato' => $certificado_de_bachillerato,
		  'carta_de_buena_conducta' => $carta_de_buena_conducta,
		  'certificado_de_salud' => $certificado_de_salud,
		  'fotografias_infantil' => $fotografias_infantil,
		  'curp' => $curp,
		  'boleta_de_calificaciones' => $boleta_de_calificaciones,
		  'otros' => $otros,
		  'carta_pasante' => $carta_pasante,
		  'acta_de_examen_profesional' => $acta_de_examen_profesional,
		  'credencial' => $credencial
		   );
		   
		  $this->db->insert('documentacion', $query2); //--- inserto a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('documentacion/vista_documentacion/'.$matricula);		
	}
/////////////////////////////////////////////////////////////  
  function vista_documentacion()
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
	  $data ['dt_documentacion'] = $this->m_documentacion->vista_dt_documentacion($matricula); //llama a la funcion trae_dominio dentro del modelo vista
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data ['dt_documentacion']){
      $this->load->view('vista_documentacion', $data);
	  }else{redirect(base_url().'documentacion', 'refresh');}
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
	  $data ['dt_documentacion'] = $this->m_documentacion->vista_dt_documentacion($this->input->post('mat_post')); //llama a la funcion trae_dominio dentro del modelo vista
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_documentacion', $data);
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
  public function edit_sav_documentacion()
	{
		   
		   ///// datos para alumnos
		  $matricula = $this->input->post('matricula');
		  $comprobante_de_pago_bancario = $this->input->post('comprobante_de_pago_bancario');
		  $acta_de_nacimiento = $this->input->post('acta_de_nacimiento');
		  $certificado_de_secundaria = $this->input->post('certificado_de_secundaria');
		  $certificado_de_bachillerato = $this->input->post('certificado_de_bachillerato');
		  $carta_de_buena_conducta = $this->input->post('carta_de_buena_conducta');
		  $certificado_de_salud = $this->input->post('certificado_de_salud');
		  $fotografias_infantil = $this->input->post('fotografias_infantil');
		  $curp = $this->input->post('curp');
		  $boleta_de_calificaciones = $this->input->post('boleta_de_calificaciones');
		  $otros = $this->input->post('otros');
		  $carta_pasante = $this->input->post('carta_pasante');
		  $acta_de_examen_profesional = $this->input->post('acta_de_examen_profesional');
		  $credencial = $this->input->post('credencial');
		  

		  //creo mi variable query y meto los datos al array con los nombres de las tablas que quiero llenar 
		  //(no importa que no esten todas las tablas, lo que si es  vital es que el nombre de la columna sea = al de mi db ) 
		  $query2 = array(
		  'comprobante_de_pago_bancario' => $comprobante_de_pago_bancario,
		  'acta_de_nacimiento' => $acta_de_nacimiento,
		  'certificado_de_secundaria' => $certificado_de_secundaria,
		  'certificado_de_bachillerato' => $certificado_de_bachillerato,
		  'carta_de_buena_conducta' => $carta_de_buena_conducta,
		  'certificado_de_salud' => $certificado_de_salud,
		  'fotografias_infantil' => $fotografias_infantil,
		  'curp' => $curp,
		  'boleta_de_calificaciones' => $boleta_de_calificaciones,
		  'otros' => $otros,
		  'carta_pasante' => $carta_pasante,
		  'acta_de_examen_profesional' => $acta_de_examen_profesional,
		  'credencial' => $credencial
		   );
		   
		  //esta linea es la que llena la db ... usando el array y el primer parametro es el nombre de la tabla
		  //$this->db->insert('users', $query); //--- inserto a tabla users
		  $this->db->where('matricula', $matricula);
		  $this->db->update('documentacion', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('documentacion/vista_documentacion/'.$matricula); 		
	}
  
  
/////////////////////////////////////////////////////////////  
  
  public function alta_directorio()
	{
		$folderName=$this->input->post('matricula_post');
		$pathToUpload = './common/documentos/' . $folderName;
    if ( ! file_exists($pathToUpload) )
    {
        $create = mkdir($pathToUpload, 0777);
        if ( ! $create)
        return;
    }
		//redirect('documentacion/vista_documentacion'.$folderName); 	
		redirect('alumno/alta_foto_alumno/'.$folderName); 	
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