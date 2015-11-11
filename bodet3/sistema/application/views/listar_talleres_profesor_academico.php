<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="unavailable"><a href="#">Lista Talleres Profesor</a></li>
</ul>
</div></div>
<!-- breadcrumbs  -->

<div class="row">
		<div class="large-12 columns">
            <hr />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="78" bgcolor="#FFFFFF">Clave Profesor:</td>
                <td width="222" bgcolor="#F9F9F9"><?=$dt_prof['0']->clave_docente;?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Cedula:</td>
                <td bgcolor="#F9F9F9"><?=$dt_prof['0']->cedula;?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Tipo:</td>
                <td bgcolor="#F9F9F9"><?=$dt_prof['0']->tipo;?></td>
              </tr>
              </table>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_prof['0']->paterno;?></td>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_prof['0']->materno;?></td>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_prof['0']->nombre;?></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF">Paterno</td>
                <td align="center" bgcolor="#FFFFFF">Materno</td>
                <td align="center" bgcolor="#FFFFFF">Nombre</td>
              </tr>
            </table>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_prof['0']->curp;?></td>
                <td align="center" bgcolor="#F9F9F9"><? if($dt_prof['0']->sexo == 1){echo "Hombre";} if($dt_prof['0']->sexo == 2){echo "Mujer";} if($dt_prof['0']->sexo == 3){echo "Otros";}?></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF">CURP</td>
                <td align="center" bgcolor="#FFFFFF">SEXO</td>
              </tr>
            </table>
<h4> Lista de Talleres Profesores </h4>
<table width="100%">
  <thead>
	<tr> 	 	 	  	 	
		<th>Clave Docente</th>
		<th>Nivel</th>
		<th>Nombre</th>
        <th>Institución</th>
        <th>Titulo</th>
        <th>Horas</th>
        <th>Porcentaje</th>
        <th>Tematica</th>
        <th>Beca</th>
        <th>Institución que la Otorga</th>
	</tr>
</thead>
<tbody>
<?php 
function minivel($id){
	switch ($id) {
    case 1: return "Taller"; break;
	case 2: return "Diplomado"; break;
	case 3: return "Seminario"; break;
	case 4: return "Técnico"; break;
	case 5: return "Licenciatura"; break;
  case 6: return "Maestria"; break;
  case 7: return "Doctorado"; break;
	default: "No hay dato"; break;
}
}
function beca($id){
	switch ($id) {
    case 1: return "Si"; break;
	case 2: return "no"; break;
	default: "No hay dato"; break;
}
}
if($d_t_profesores){?>
<?php 
foreach($d_t_profesores as $valor):?>
	<tr>
		<td><?=$valor->clave_docente ?></td>
		<td><?=minivel($valor->nivel) ?></td>
        <td><?=$valor->nombre ?></td>
        <td><?=$valor->institucion ?></td>
        <td><?=$valor->titulo ?></td>
        <td><?=$valor->horas ?></td>
        <td><?=$valor->porcentaje_de_avance ?></td>
        <td><?=$valor->tematica ?></td>
        <td><?=beca($valor->beca) ?></td>
        <td><?=$valor->institucion_que_la_otorga ?></td>
	</tr>
<?php endforeach;?>
<?php }else{
?>
<tr>
	<td colspan="10" align="center"><h4>No hay talleres relacionados a este Academico</h4></td>
</tr>
<?php 	
}?>
</tbody>
</table>
  </div>
</div>
