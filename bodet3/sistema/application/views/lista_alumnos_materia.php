<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>academico/calificaciones">Calificaciones</a></li>
  <li class="unavailable"><a href="#">Lista de Alumnos Materia</a></li>
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
            
            <div class="large-9 columns">
            <h4>Lista Alumnos de la Clave Materia:
            <span data-tooltip class="has-tip" title="<?=$this->user->mi_join($clave_materia,'materias','clave_especialidad','materia');?>"><?=$clave_materia;?></span></h4>
            </div>
            <div class="large-3 columns">
            <?=anchor('academico/calificaciones', 'Regresar a Lista Materias','class="small button"')?>
            </div>
            <hr>
            <div class="large-12 columns">
            <div class="button-bar right">

        
			  <ul class="button-group">
			    <li><?=anchor('oficios/listadeasistencia/'.$clave_materia, 'Lista de Asistencias','target="_blank" class="small button"')?></li>
			    <li><?=anchor('oficios/listaevaluacionespaciales/'.$clave_materia, 'Evaluaciones Parciales','target="_blank" class="small button"')?></li>
			    <li><?=anchor('oficios/formatolistadeevaluacion/'.$clave_materia.'/0', 'Evaluación Final','target="_blank" class="small button"')?></li>

          <li><?=anchor('oficios/formatolistadeevaluacion/'.$clave_materia.'/1', '1°','target="_blank" class="small button"')?></li>
          <li><?=anchor('oficios/formatolistadeevaluacion/'.$clave_materia.'/2', '2°','target="_blank" class="small button"')?></li>
          <li><?=anchor('oficios/formatolistadeevaluacion/'.$clave_materia.'/3', '3°','target="_blank" class="small button"')?></li>
          <?php if ($lic == 55){ ?>
          <li><?=anchor('oficios/formatolistadeevaluacion/'.$clave_materia.'/4', '4°','target="_blank" class="small button"')?></li>
			   <?php } ?>
        </ul>
			</div>
            </div>
            
          <!-- principio de if`s -->            
<table width="100%">
 <thead>
	<tr>
		<th>Matricula</th>
        <th>Alumno</th>
        <th>Evaluación 1</th>
        <th>Evaluación 2</th>
        <th>Evaluación 3</th>
        <?php if ($lic == 55){ $col = 8;?>
        <th>Evaluación 4</th>
        <?php }else{$col = 7;} ?>
        <th>Final</th>
        <th>Calificar Alumno</th>
	</tr>
</thead>
<tbody>
<?php
function licenciatura($id){
	switch ($id) {
    case 1: return "Biología"; break;
	case 2: return "Español"; break;
	case 3: return "Inglés"; break;
	case 4: return "Matemáticas"; break;
	default: "No hay dato"; break;
}
}
if($a_m_calificacion){
foreach($a_m_calificacion as $valor):?>
	<tr>
		<td><?=$valor->matricula ?></td>
        <td><?=$valor->nombre ?> <?=$valor->paterno ?> <?=$valor->materno ?></td>
        <td align="center"><?=$valor->evaluacion1 ?></td>
        <td align="center"><?=$valor->evaluacion2 ?></td>
        <td align="center"><?=$valor->evaluacion3 ?></td>
        <?php if ($lic == 55){ ?>
        <td align="center"><?=$valor->evaluacion4 ?></td>
        <?php } ?>
        <td align="center"><?=$valor->calificacion_final ?></td>
		<td align='center'><?=anchor('academico/calificar_alumno/'.$valor->matricula."/".$valor->materia, 'Calificar','class="small button"')?></td>
	</tr>
<?php endforeach;}else{echo "<tr><td colspan=".$col.">No hay Datos</td></tr>";}?>
</tbody>
</table>

  </div>
</div>
