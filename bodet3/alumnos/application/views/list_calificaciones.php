<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Calificacion</a></li>
  <li class="unavailable"><a href="#">Lista Calificacion</a></li>
</ul>
</div></div>
<!-- breadcrumbs  -->

<div class="row">
  <div class="large-12 columns">
            <hr />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="32%" align="center"><?php if ($dt_alumno['0']->foto == 1){ ?>
      <img src="../sistema/common/documentos/<?=$dt_alumno['0']->matricula;?>/foto.jpg" width="150" height="180" />
      <?php }else{ ?>
      <img src="http://placehold.it/150x180" width="150" height="180" />
      <?php }?></td>
            <td width="68%"><table width="300" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="78" bgcolor="#FFFFFF">Matricula:</td>
                <td width="222" bgcolor="#F9F9F9"><?=$dt_alumno['0']->matricula;?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Ficha:</td>
                <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->ficha;?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Semestre:</td>
                <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->semestre;?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Especialidad:</td>
                <td bgcolor="#F9F9F9"><?=$this->user->mi_join($dt_alumno['0']->clave_especialidad,'especialidades','id','label');?></td>
              </tr>
            </table>
              <table width="500" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_alumno['0']->paterno;?></td>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_alumno['0']->materno;?></td>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_alumno['0']->nombre;?></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF">Paterno</td>
                <td align="center" bgcolor="#FFFFFF">Materno</td>
                <td align="center" bgcolor="#FFFFFF">Nombre</td>
              </tr>
            </table>
              <table width="500" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_alumno['0']->curp;?></td>
                <td align="center" bgcolor="#F9F9F9"><? if($dt_alumno['0']->sexo == 1){echo "Hombre";} if($dt_alumno['0']->sexo == 2){echo "Mujer";} if($dt_alumno['0']->sexo == 3){echo "Otros";}?></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF">CURP</td>
                <td align="center" bgcolor="#FFFFFF">SEXO</td>
              </tr>
            </table>
            </td>
  </tr>
</table>

<?php if ($dt_alumno['0']->clave_especialidad == 5) {
$suf = "Eval";
}else{
$suf = "Evaluación";
} ?>

<!-- principio de if`s -->            
<blockquote>Materias Primer Semestre</blockquote>
<?php if($m_primer){?>
<table width="100%">
 <thead>
	<tr>
		<th>Clave Materia</th>
        <th>Evaluación-1</th>
        <th>Fecha-1</th>
        <th>Evaluación-2</th>
        <th>Fecha-2</th>
        <th>Evaluación-3</th>
        <th>Fecha3</th>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <th><?=$suf;?>4</th>
        <th>Fecha4</th>
        <?php } ?>
        <th>Calificación Final</th>
		</tr>
</thead>
<tbody>
<?php 
foreach($m_primer as $valor):?>
	<tr>
		<td align='center'><span data-tooltip class="has-tip" title="<?=$valor->materia ?>"><?=$valor->clave_especialidad ?></span></td>
        <td align='center'><?=$valor->evaluacion1 ?></td>
        <td align='center'><?=$valor->fecha1 ?></td>
        <td align='center'><?=$valor->evaluacion2 ?></td>
        <td align='center'><?=$valor->fecha2 ?></td>
        <td align='center'><?=$valor->evaluacion3 ?></td>
        <td align='center'><?=$valor->fecha3 ?></td>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <td align='center'><?=$valor->evaluacion4 ?></td>
        <td align='center'><?=$valor->fecha4 ?></td>
        <?php } ?>
        <td align='center'><?=$valor->calificacion_final ?></td>
		</tr>
<?php endforeach; } else {echo '<tr><th colspan="8"><center>No hay Calificaciones</center></th></tr>';} ?>
</tbody>
</table>

<br />

<blockquote>Materias Segundo Semestre</blockquote>
<?php if($m_segundo){?>
<table width="100%">
 <thead>
	<tr>
		<th>Clave Materia</th>
        <th>Evaluación-1</th>
        <th>Fecha-1</th>
        <th>Evaluación-2</th>
        <th>Fecha-2</th>
        <th>Evaluación-3</th>
        <th>Fecha3</th>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <th><?=$suf;?>4</th>
        <th>Fecha4</th>
        <?php } ?>
        <th>Calificación Final</th>
		</tr>
</thead>
<tbody>
<?php 
foreach($m_segundo as $valor):?>
	<tr>
		<td align='center'><span data-tooltip class="has-tip" title="<?=$valor->materia ?>"><?=$valor->clave_especialidad ?></span></td>
        <td align='center'><?=$valor->evaluacion1 ?></td>
        <td align='center'><?=$valor->fecha1 ?></td>
        <td align='center'><?=$valor->evaluacion2 ?></td>
        <td align='center'><?=$valor->fecha2 ?></td>
        <td align='center'><?=$valor->evaluacion3 ?></td>
        <td align='center'><?=$valor->fecha3 ?></td>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <td align='center'><?=$valor->evaluacion4 ?></td>
        <td align='center'><?=$valor->fecha4 ?></td>
        <?php } ?>
        <td align='center'><?=$valor->calificacion_final ?></td>
		</tr>
<?php endforeach; } else {echo '<tr><th colspan="8"><center>No hay Calificaciones</center></th></tr>';} ?>
</tbody>
</table>

<br />

<blockquote>Materias Terser Semestre</blockquote>
<?php if($m_terser){?>
<table width="100%">
 <thead>
	<tr>
		<th>Clave Materia</th>
        <th>Evaluación-1</th>
        <th>Fecha-1</th>
        <th>Evaluación-2</th>
        <th>Fecha-2</th>
        <th>Evaluación-3</th>
        <th>Fecha3</th>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <th><?=$suf;?>4</th>
        <th>Fecha4</th>
        <?php } ?>
        <th>Calificación Final</th>
		</tr>
</thead>
<tbody>
<?php 
foreach($m_terser as $valor):?>
	<tr>
		<td align='center'><span data-tooltip class="has-tip" title="<?=$valor->materia ?>"><?=$valor->clave_especialidad ?></span></td>
        <td align='center'><?=$valor->evaluacion1 ?></td>
        <td align='center'><?=$valor->fecha1 ?></td>
        <td align='center'><?=$valor->evaluacion2 ?></td>
        <td align='center'><?=$valor->fecha2 ?></td>
        <td align='center'><?=$valor->evaluacion3 ?></td>
        <td align='center'><?=$valor->fecha3 ?></td>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <td align='center'><?=$valor->evaluacion4 ?></td>
        <td align='center'><?=$valor->fecha4 ?></td>
        <?php } ?>
        <td align='center'><?=$valor->calificacion_final ?></td>
		</tr>
<?php endforeach; } else {echo '<tr><th colspan="8"><center>No hay Calificaciones</center></th></tr>';} ?>
</tbody>
</table>

<br />

<blockquote>Materias Cuarto Semestre</blockquote>
<?php if($m_cuarto){?>
<table width="100%">
 <thead>
	<tr>
		<th>Clave Materia</th>
        <th>Evaluación-1</th>
        <th>Fecha-1</th>
        <th>Evaluación-2</th>
        <th>Fecha-2</th>
        <th>Evaluación-3</th>
        <th>Fecha3</th>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <th><?=$suf;?>4</th>
        <th>Fecha4</th>
        <?php } ?>
        <th>Calificación Final</th>
		</tr>
</thead>
<tbody>
<?php 
foreach($m_cuarto as $valor):?>
	<tr>
		<td align='center'><span data-tooltip class="has-tip" title="<?=$valor->materia ?>"><?=$valor->clave_especialidad ?></span></td>	
        <td align='center'><?=$valor->evaluacion1 ?></td>
        <td align='center'><?=$valor->fecha1 ?></td>
        <td align='center'><?=$valor->evaluacion2 ?></td>
        <td align='center'><?=$valor->fecha2 ?></td>
        <td align='center'><?=$valor->evaluacion3 ?></td>
        <td align='center'><?=$valor->fecha3 ?></td>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <td align='center'><?=$valor->evaluacion4 ?></td>
        <td align='center'><?=$valor->fecha4 ?></td>
        <?php } ?>
        <td align='center'><?=$valor->calificacion_final ?></td>
		</tr>
<?php endforeach; } else {echo '<tr><th colspan="8"><center>No hay Calificaciones</center></th></tr>';} ?>
</tbody>
</table>


<br />

<blockquote>Materias Quinto Semestre</blockquote>
<?php if($m_quinto){?>
<table width="100%">
 <thead>
	<tr>
		<th>Clave Materia</th>
        <th>Evaluación-1</th>
        <th>Fecha-1</th>
        <th>Evaluación-2</th>
        <th>Fecha-2</th>
        <th>Evaluación-3</th>
        <th>Fecha3</th>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <th><?=$suf;?>4</th>
        <th>Fecha4</th>
        <?php } ?>
        <th>Calificación Final</th>
		</tr>
</thead>
<tbody>
<?php 
foreach($m_quinto as $valor):?>
	<tr>
		<td align='center'><span data-tooltip class="has-tip" title="<?=$valor->materia ?>"><?=$valor->clave_especialidad ?></span></td>
        <td align='center'><?=$valor->evaluacion1 ?></td>
        <td align='center'><?=$valor->fecha1 ?></td>
        <td align='center'><?=$valor->evaluacion2 ?></td>
        <td align='center'><?=$valor->fecha2 ?></td>
        <td align='center'><?=$valor->evaluacion3 ?></td>
        <td align='center'><?=$valor->fecha3 ?></td>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <td align='center'><?=$valor->evaluacion4 ?></td>
        <td align='center'><?=$valor->fecha4 ?></td>
        <?php } ?>
        <td align='center'><?=$valor->calificacion_final ?></td>
		</tr>
<?php endforeach; } else {echo '<tr><th colspan="8"><center>No hay Calificaciones</center></th></tr>';} ?>
</tbody>
</table>



<br />

<blockquote>Materias Sexto Semestre</blockquote>
<?php if($m_sexto){?>
<table width="100%">
 <thead>
	<tr>
		<th>Clave Materia</th>
        <th>Evaluación-1</th>
        <th>Fecha-1</th>
        <th>Evaluación-2</th>
        <th>Fecha-2</th>
        <th>Evaluación-3</th>
        <th>Fecha3</th>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <th><?=$suf;?>4</th>
        <th>Fecha4</th>
        <?php } ?>
        <th>Calificación Final</th>
		</tr>
</thead>
<tbody>
<?php 
foreach($m_sexto as $valor):?>
	<tr>
		<td align='center'><span data-tooltip class="has-tip" title="<?=$valor->materia ?>"><?=$valor->clave_especialidad ?></span></td>
        <td align='center'><?=$valor->evaluacion1 ?></td>
        <td align='center'><?=$valor->fecha1 ?></td>
        <td align='center'><?=$valor->evaluacion2 ?></td>
        <td align='center'><?=$valor->fecha2 ?></td>
        <td align='center'><?=$valor->evaluacion3 ?></td>
        <td align='center'><?=$valor->fecha3 ?></td>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <td align='center'><?=$valor->evaluacion4 ?></td>
        <td align='center'><?=$valor->fecha4 ?></td>
        <?php } ?>
        <td align='center'><?=$valor->calificacion_final ?></td>
		</tr>
<?php endforeach; } else {echo '<tr><th colspan="8"><center>No hay Calificaciones</center></th></tr>';} ?>
</tbody>
</table>


<br />

<blockquote>Materias Septimo Semestre</blockquote>
<?php if($m_septimo){?>
<table width="100%">
 <thead>
	<tr>
		<th>Clave Materia</th>
        <th>Evaluación-1</th>
        <th>Fecha-1</th>
        <th>Evaluación-2</th>
        <th>Fecha-2</th>
        <th>Evaluación-3</th>
        <th>Fecha3</th>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <th><?=$suf;?>4</th>
        <th>Fecha4</th>
        <?php } ?>
        <th>Calificación Final</th>
		</tr>
</thead>
<tbody>
<?php 
foreach($m_septimo as $valor):?>
	<tr>
		<td align='center'><span data-tooltip class="has-tip" title="<?=$valor->materia ?>"><?=$valor->clave_especialidad ?></span></td>
        <td align='center'><?=$valor->evaluacion1 ?></td>
        <td align='center'><?=$valor->fecha1 ?></td>
        <td align='center'><?=$valor->evaluacion2 ?></td>
        <td align='center'><?=$valor->fecha2 ?></td>
        <td align='center'><?=$valor->evaluacion3 ?></td>
        <td align='center'><?=$valor->fecha3 ?></td>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <td align='center'><?=$valor->evaluacion4 ?></td>
        <td align='center'><?=$valor->fecha4 ?></td>
        <?php } ?>
        <td align='center'><?=$valor->calificacion_final ?></td>
		</tr>
<?php endforeach; } else {echo '<tr><th colspan="8"><center>No hay Calificaciones</center></th></tr>';} ?>
</tbody>
</table>

<br />

<blockquote>Materias Octavo Semestre</blockquote>
<?php if($m_octavo){?>
<table width="100%">
 <thead>
	<tr>
		<th>Clave Materia</th>
        <th>Evaluación-1</th>
        <th>Fecha-1</th>
        <th>Evaluación-2</th>
        <th>Fecha-2</th>
        <th>Evaluación-3</th>
        <th>Fecha3</th>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <th><?=$suf;?>4</th>
        <th>Fecha4</th>
        <?php } ?>
        <th>Calificación Final</th>
		</tr>
</thead>
<tbody>
<?php 
foreach($m_octavo as $valor):?>
	<tr>
		<td align='center'><span data-tooltip class="has-tip" title="<?=$valor->materia ?>"><?=$valor->clave_especialidad ?></span></td>
        <td align='center'><?=$valor->evaluacion1 ?></td>
        <td align='center'><?=$valor->fecha1 ?></td>
        <td align='center'><?=$valor->evaluacion2 ?></td>
        <td align='center'><?=$valor->fecha2 ?></td>
        <td align='center'><?=$valor->evaluacion3 ?></td>
        <td align='center'><?=$valor->fecha3 ?></td>
        <?php if ($dt_alumno['0']->clave_especialidad == 5){ ?>
        <td align='center'><?=$valor->evaluacion4 ?></td>
        <td align='center'><?=$valor->fecha4 ?></td>
        <?php } ?>
        <td align='center'><?=$valor->calificacion_final ?></td>
		</tr>
<?php endforeach; } else {echo '<tr><th colspan="8"><center>No hay Calificaciones</center></th></tr>';} ?>
</tbody>
</table>

  </div>
</div>
