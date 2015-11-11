<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Horarios extends CI_Controller {

  function __construct()
  {
    parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		///model JOIN .... este me hace una segunda funcion para llamar etiquetas atraves de ID y otros valores que paso.
		$this->load->model('user');
		$this->load->model('alumnos');
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
	  ////
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('horarios', $data);
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
  function alta_horarios()
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
      $this->load->view('alta_horarios', $data);
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



////////////////////
   function sav()
	{	   
		$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		   ///// datos para egresados
 			$periodo = $this->input->post('periodo');
 			$especialidad = $this->input->post('clave_especialidad');
 			$semestre = $this->input->post('semestre');

		  $query2 = array(
		  'periodo' => $periodo,
		  'especialidad' => $especialidad,
		  'semestre' => $semestre
		   );


		  $data['horarios'] = $this->user->lista('horarios','periodo',$periodo,'especialidad',$especialidad,'semestre',$semestre);
		  if($data['horarios'] == ""){
		  $this->db->insert('horarios', $query2); /* inserto a tabla alumnos*/
		  redirect('horarios/alta_horario/'.$periodo.'/'.$especialidad.'/'.$semestre);
		  }else{
		  redirect('horarios/vista/'.$periodo.'/'.$especialidad.'/'.$semestre); 
		  }

		   		
	} else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
	}
  
///////////////////////////////////////////////////////////// 



	function alta_horario()
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
	  $data['materias'] = $this->user->listamatarias('materias','licenciatura',$this->uri->segment(4),'semestre',$this->uri->segment(5));
	  
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('alta_horario', $data);
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

/////////////////////////////////////////
  
    function edit()
	{	   
		$session_data = $this->session->userdata('logged_in');
	if($session_data)
	{
		   ///// datos para egresados
 			$periodo = $this->input->post('periodo');
 			$especialidad = $this->input->post('especialidad');
 			$semestre = $this->input->post('semestre');


 			$horario1 = $this->input->post('horario1');
 			$horario2 = $this->input->post('horario2');
 			$horario3 = $this->input->post('horario3');
 			$horario4 = $this->input->post('horario4');
 			$horario5 = $this->input->post('horario5');
 			$horario6 = $this->input->post('horario6');
 			$horario7 = $this->input->post('horario7');
 			$horario8 = $this->input->post('horario8');
 			$horario9 = $this->input->post('horario9');

 			$lunes1 = $this->input->post('lunes1');
			$lunes2 = $this->input->post('lunes2');
			$lunes3 = $this->input->post('lunes3');
			$lunes4 = $this->input->post('lunes4');
			$lunes5 = $this->input->post('lunes5');
			$lunes6 = $this->input->post('lunes6');
			$lunes7 = $this->input->post('lunes7');
			$lunes8 = $this->input->post('lunes8');
			$lunes9 = $this->input->post('lunes9');
			$martes1 = $this->input->post('martes1');
			$martes2 = $this->input->post('martes2');
			$martes3 = $this->input->post('martes3');
			$martes4 = $this->input->post('martes4');
			$martes5 = $this->input->post('martes5');
			$martes6 = $this->input->post('martes6');
			$martes7 = $this->input->post('martes7');
			$martes8 = $this->input->post('martes8');
			$martes9 = $this->input->post('martes9');
			$miercoles1 = $this->input->post('miercoles1');
			$miercoles2 = $this->input->post('miercoles2');
			$miercoles3 = $this->input->post('miercoles3');
			$miercoles4 = $this->input->post('miercoles4');
			$miercoles5 = $this->input->post('miercoles5');
			$miercoles6 = $this->input->post('miercoles6');
			$miercoles7 = $this->input->post('miercoles7');
			$miercoles8 = $this->input->post('miercoles8');
			$miercoles9 = $this->input->post('miercoles9');
			$jueves1 = $this->input->post('jueves1');
			$jueves2 = $this->input->post('jueves2');
			$jueves3 = $this->input->post('jueves3');
			$jueves4 = $this->input->post('jueves4');
			$jueves5 = $this->input->post('jueves5');
			$jueves6 = $this->input->post('jueves6');
			$jueves7 = $this->input->post('jueves7');
			$jueves8 = $this->input->post('jueves8');
			$jueves9 = $this->input->post('jueves9');
			$viernes1 = $this->input->post('viernes1');
			$viernes2 = $this->input->post('viernes2');
			$viernes3 = $this->input->post('viernes3');
			$viernes4 = $this->input->post('viernes4');
			$viernes5 = $this->input->post('viernes5');
			$viernes6 = $this->input->post('viernes6');
			$viernes7 = $this->input->post('viernes7');
			$viernes8 = $this->input->post('viernes8');
			$viernes9 = $this->input->post('viernes9');
			$sabado1 = $this->input->post('sabado1');
			$sabado2 = $this->input->post('sabado2');
			$sabado3 = $this->input->post('sabado3');
			$sabado4 = $this->input->post('sabado4');
			$sabado5 = $this->input->post('sabado5');
			$sabado6 = $this->input->post('sabado6');
			$sabado7 = $this->input->post('sabado7');
			$sabado8 = $this->input->post('sabado8');
			$sabado9 = $this->input->post('sabado9');
 	
				 	 	 	 	 	 

		  $query2 = array(
		  'horario1' => $horario1,
		  'horario2' => $horario2,
		  'horario3' => $horario3,
		  'horario4' => $horario4,
		  'horario5' => $horario5,
		  'horario6' => $horario6,
		  'horario7' => $horario7,
		  'horario8' => $horario8,
		  'horario9' => $horario9,
		  	'lunes1' => $lunes1,
			'lunes2' => $lunes2,
			'lunes3' => $lunes3,
			'lunes4' => $lunes4,
			'lunes5' => $lunes5,
			'lunes6' => $lunes6,
			'lunes7' => $lunes7,
			'lunes8' => $lunes8,
			'lunes9' => $lunes9,
			'martes1' => $martes1,
			'martes2' => $martes2,
			'martes3' => $martes3,
			'martes4' => $martes4,
			'martes5' => $martes5,
			'martes6' => $martes6,
			'martes7' => $martes7,
			'martes8' => $martes8,
			'martes9' => $martes9,
			'miercoles1' => $miercoles1,
			'miercoles2' => $miercoles2,
			'miercoles3' => $miercoles3,
			'miercoles4' => $miercoles4,
			'miercoles5' => $miercoles5,
			'miercoles6' => $miercoles6,
			'miercoles7' => $miercoles7,
			'miercoles8' => $miercoles8,
			'miercoles9' => $miercoles9,
			'jueves1' => $jueves1,
			'jueves2' => $jueves2,
			'jueves3' => $jueves3,
			'jueves4' => $jueves4,
			'jueves5' => $jueves5,
			'jueves6' => $jueves6,
			'jueves7' => $jueves7,
			'jueves8' => $jueves8,
			'jueves9' => $jueves9,
			'viernes1' => $viernes1,
			'viernes2' => $viernes2,
			'viernes3' => $viernes3,
			'viernes4' => $viernes4,
			'viernes5' => $viernes5,
			'viernes6' => $viernes6,
			'viernes7' => $viernes7,
			'viernes8' => $viernes8,
			'viernes9' => $viernes9,
			'sabado1' => $sabado1,
			'sabado2' => $sabado2,
			'sabado3' => $sabado3,
			'sabado4' => $sabado4,
			'sabado5' => $sabado5,
			'sabado6' => $sabado6,
			'sabado7' => $sabado7,
			'sabado8' => $sabado8,
			'sabado9' => $sabado9
		   );

	
		  $this->db->where('periodo', $periodo);
		  $this->db->where('especialidad', $especialidad);
		  $this->db->where('semestre', $semestre);
		  $this->db->update('horarios', $query2);//--- idito a tabla alumnos
		  ///aki redirecciono con "redirect()"
		  redirect('horarios/vista/'.$periodo.'/'.$especialidad.'/'.$semestre); 		
	} else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
	}

/////////////////////////////////////////77


 function vista()
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
	  ///////
	  if($this->input->post('periodo')){$periodo = $this->input->post('periodo');}else{$periodo = $this->uri->segment(3);}
	  if($this->input->post('especialidad')){$especialidad = $this->input->post('especialidad');}else{$especialidad = $this->uri->segment(4);}
	  if($this->input->post('semestre')){$semestre = $this->input->post('semestre');}else{$semestre = $this->uri->segment(5);}
	  ///////
	  $data['periodo'] = $periodo;
	  $data['especialidad'] = $especialidad;
	  $data['semestre'] = $semestre;
	  ///////
	  $data['horarios'] = $this->user->lista('horarios','periodo',$periodo,'especialidad',$especialidad,'semestre',$semestre);
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
	  if($data['horarios']){
      $this->load->view('vista_horarios', $data);
  		}else{redirect('horarios', 'refresh');}
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

///////////////////////

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
	  ///
	  $periodo = $this->input->post('periodo');
	  $especialidad = $this->input->post('especialidad');
	  $semestre = $this->input->post('semestre');
	  $data['periodo'] = $periodo;
	  $data['especialidad'] = $especialidad;
	  $data['semestre'] = $semestre;
	  ///////
	  $data['horarios'] = $this->user->lista('horarios','periodo',$periodo,'especialidad',$especialidad,'semestre',$semestre);
	  ///
	  $data['materias'] = $this->user->listamatarias('materias','licenciatura',$especialidad,'semestre',$semestre);
	  ///vistas
	  $this->load->view('common/header');
	  $this->load->view('common/menu', $data);
      $this->load->view('edit_horario', $data);
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

/////////////////////////////

}

?>