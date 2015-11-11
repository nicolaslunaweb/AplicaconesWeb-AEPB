<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="#">Indicadores</a></li>
  <li class="unavailable"><a href="#">Consulta por Cohorte</a></li>
</ul>
</div></div>
<!-- breadcrumbs  -->
<div class="row">
<div class="large-12 columns">

<h4>Datos de la cohorte <strong><?=$cortec?></strong></h4>
<hr />




<div style="display:none;">
<hr />
<h2>Lista de alumnos</h2>
<br>
<table width="100%">
 <thead>
	<tr>
		<th>Matrícula</th>
        <th>Nombre</th>
        <th>Especialidad</th>
        <th>Ciclo escolar</th>
        <th>Semestre</th>
        <th>Sexo</th>
        <th>estatus</th>
	</tr>
</thead>
<tbody>
<?php if($d_lista_alumnos){
function sexo($s){
	switch ($s) {
    case 1:
        $sexo = "Hombre";
        break;
	case 2:
        $sexo = "Mujer";
        break;
	case 3:
        $sexo = "Otro";
        break;
}
	return $sexo;
}
$i = 0;
$b = 0;
$ac = 0;
foreach($d_lista_alumnos as $valor):
if(substr($valor->matricula, 0,2) == $corte){
?>
	<tr>
		<td><?=$valor->matricula ?></td>
        <td><?=$valor->nombre ?> <?=$valor->paterno ?> <?=$valor->materno ?></td>
        <td><?=$this->user->mi_join($valor->clave_especialidad,'especialidades','id','label');?></td>
        <td><?=$valor->ciclo_escolar ?></td>
        <td align='center'><?=$valor->semestre ?></td>
        <td align='center'><?=sexo($valor->sexo); ?></td>
        <td>
            <? if($valor->estatus == 1){echo $valor->estatus; $b ++;}else{echo $valor->estatus;} ?>
            <? if($valor->estatus == 0){$ac ++;} ?>
        </td>
	</tr>
<?php  $i ++; } endforeach;}else{
?>	
<tr>
<td rowspan="6" align="center">No hay datos! o la consulta esta mal...</td>
</tr>
<?php	
}?>
</tbody>
</table>
</div>



<div style="display:none;">
<hr />
<h2>generacion anterior</h2>
<br>
<table width="100%">
 <thead>
    <tr>
        <th>Matrícula</th>
        <th>Nombre</th>
        <th>Especialidad</th>
        <th>Ciclo escolar</th>
        <th>Semestre</th>
    </tr>
</thead>
<tbody>
<?php if($d_corteanterior){
$tp = 0;
foreach($d_corteanterior as $valor):
if(substr($valor->matricula, 0,2) == $corteanterior){
?>
    <tr>
        <td><?=$valor->matricula ?></td>
        <td><?=$valor->nombre ?> <?=$valor->paterno ?> <?=$valor->materno ?></td>
        <td><?=$this->user->mi_join($valor->clave_especialidad,'especialidades','id','label');?></td>
        <td><?=$valor->ciclo_escolar ?></td>
        <td align='center'><?=$valor->semestre ?></td>
    </tr>
<?php  $tp ++; } endforeach;}else{
?>  
<tr>
<td rowspan="6" align="center">No hay datos! o la consulta esta mal...</td>
</tr>
<?php   
}?>
</tbody>
</table>
</div>





<div style="display:none;">
<table width="100%">
 <thead>
	<tr>
		<th>Matrícula</th>
        <th>tema</th>
	</tr>
</thead>
<tbody>
<?php if($d_lista_titulados){
$t = 0;
foreach($d_lista_titulados as $valor):
if(substr($valor->matricula, 0,2) == $corte){
?>
	<tr>
		<td><?=$valor->matricula ?></td>
        <td><?=$valor->tema ?></td>
	</tr>
<?php  $t ++; } endforeach;}else{ ?>	
<tr>
<td rowspan="6" align="center">No hay datos! o la consulta esta mal...</td>
</tr>
<?php $t = 0; } ?>
</tbody>
</table>
</div>



<div style="display:none;">
<table width="100%">
 <thead>
    <tr>
        <th>Matrícula</th>
        <th>fecha</th>
    </tr>
</thead>
<tbody>
<?php if($d_lista_egresados){
$e = 0;
foreach($d_lista_egresados as $valor):
if(substr($valor->matricula, 0,2) == $corte){
?>
    <tr>
        <td><?=$valor->matricula ?></td>
        <td><?=$valor->fecha ?></td>
    </tr>
<?php  $e ++; } endforeach;}else{ ?>    
<tr>
<td rowspan="6" align="center">No hay datos! o la consulta esta mal...</td>
</tr>
<?php $e = 0; } ?>
</tbody>
</table>
</div>






<blockquote>
<strong>1.- Eficiencia Terminal</strong>
<br>

<?php if($i){ ?>

Numero de Alumnos Inscritos: <strong><?=$i; ?></strong>
<br>

Numero de Alumnos Titulados: <strong><?=$t; ?></strong>
<br>
<br>

<p><strong>Eficiencia Terminal</strong> / <?=$et = number_format(($t * 100)/ $i, 2, '.', ''); ?>%</p>

<div class="progress large-12 success round"><span class="meter" style="width: <?=number_format(($t * 100)/ $i, 2, '.', ''); ?>%"></span></div>

<?php }else{echo "No hay datos...";} ?>
</blockquote>



<blockquote>
<strong>2.- Eficiencia de Egreso</strong>
<br>

<?php if($i){ ?>

Numero de Alumnos Inscritos: <strong><?=$i; ?></strong>
<br>

Numero de Alumnos Egresados: <strong><?=$e; ?></strong>
<br>
<br>

<p><strong>Eficiencia Terminal</strong> / <?=$ee = number_format(($e * 100)/ $i, 2, '.', ''); ?>%</p>

<div class="progress large-12 success round"><span class="meter" style="width: <?=number_format(($e * 100)/ $i, 2, '.', ''); ?>%"></span></div>

<?php }else{echo "No hay datos...";} ?>
</blockquote>


<blockquote>
<strong>3.- Rezago Educativo</strong>
<br>
Rezago de Alumnos: <strong><?=$e - $t;?></strong>
<br>
<br>

<p><strong>Rezago Educativo</strong> / <?=$ee - $et;?>%</p>
<div class="progress large-12 success round"><span class="meter" style="width: <?=$ee - $et;?>%"></span></div>

</blockquote>





<blockquote>
<strong>4.- Tasa de Promoción</strong>
<br>
Numero de Alumnos Inscritos en <?=$cortec;?>: <strong><?=$i;?></strong>
<br>
Numero de Alumnos Inscritos en <?=$cortec - 1;?>: <strong><?=$tp;?></strong>
<br>
<br>

<?php if($tp == 0){ ?>
<p><strong>Tasa de Promoción</strong> / 0%</p>
<?php } else { ?>
<p><strong>Tasa de Promoción</strong> / <?=number_format(($i * 100)/ $tp, 2, '.', ''); ?>%</p>
<?php } ?>
<hr />
</blockquote>



<blockquote>
<strong>5.- Tasa de Deserción</strong>
<br>
Numero de Alumnos Inscritos: <strong><?=$i;?></strong>
<br>
Numero de Alumnos Baja: <strong><?=$b;?></strong>
<br>
<br>

<p><strong>Tasa de Deserción</strong> / <?=number_format(($b * 100)/ $i, 2, '.', ''); ?>%</p>
<div class="progress large-12 success round"><span class="meter" style="width: <?=number_format(($b * 100)/ $i, 2, '.', ''); ?>%"></span></div>
</blockquote>


<blockquote>
<strong>6.- Tasa de Retención</strong>
<br>
Numero de Alumnos Inscritos: <strong><?=$i;?></strong>
<br>
Numero de Alumnos Activos: <strong><?=$ac;?></strong>
<br>
<br>

<p><strong>Tasa de Retención</strong> / <?=number_format(($ac * 100)/ $i, 2, '.', ''); ?>%</p>
<div class="progress large-12 success round"><span class="meter" style="width: <?=number_format(($ac * 100)/ $i, 2, '.', ''); ?>%"></span></div>
</blockquote>



<blockquote>
<strong>7.- Tiempos Medios de Egreso</strong>
<br><br>
<!-- accordion -->
<div class="section-container accordion" data-section="accordion">
  <section>
    <p class="title" data-section-title><a href="#">Ver datos de la consulta</a></p>
    <div class="content" data-section-content>
    <!-- datos de la consunta -->
    <table width="100%">
 <thead>
    <tr>
        <th>No.</th>
        <th>Matrícula</th>
        <th>Fecha de Ingreso</th>
        <th>Fecha de Egreso</th>
        <th>Semestres Cursados</th>
    </tr>
</thead>
<tbody>
<?php if($d_lista_egresados){
$no = 1;
$tme = 0;
$sem = 0;
foreach($d_lista_egresados as $valor):
if(substr($valor->matricula, 0,2) == $corte){
?>
    <tr>
        <td><strong><?=$no?></strong></td>
        <td><?=$valor->matricula ?></td>
        <td><?=$cortec?></td>
        <td><?=substr($valor->fecha, -4) ?></td>
        <td><strong><?=$valor->semestrescursados ?></strong></td>
        <? $sem+= $valor->semestrescursados ?>
    </tr>
<?php  $no ++; $tme ++; } endforeach;}else{ ?>    
<tr>
<td rowspan="6" align="center">No hay datos! o la consulta esta mal...</td>
</tr>
<?php $tme = 0; } ?>
</tbody>
</table>
    <!-- datos de la consunta -->
    </div>
  </section>
</div>
<!-- accordion -->


<p><strong>Tiempos Medios de Egreso</strong> / <?=$sem / $tme;?>%</p>
<div class="progress large-12 success round"><span class="meter" style="width: <?=$sem / $tme;?>%"></span></div>
</blockquote>






<blockquote>
<strong>8.- Tasa de Aprobación</strong>
<br><br>



<?php 
$contamateria = 1;
$materia = "materia".$contamateria;
foreach ($especialidades as $valor): 
$materia = $this->m_calificaciones->lista_materias_edit($valor->id);
?>
<!-- accordion materia-->
<div class="section-container accordion" data-section="accordion">
  <section>
    <p class="title" data-section-title><a href="#">Consulta / <?=$valor->label?></a></p>
    <div class="content" data-section-content>
    <!-- datos de la consunta -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="col">Clave</th>
        <th scope="col">Semestre</th>
        <th>Tasa de Aprobación</th>
        <th>Aprobación</th>
      </tr>
      <?php 
      foreach($materia as $valor):?>
      <tr>
        <td align="center"><span data-tooltip class="has-tip" title="<?=$valor->materia ?>"><?=$valor->clave_especialidad ?></span></td>
        <td align="center"><?=$valor->semestre ?></td>
        <td>
        <!-- datos consulta secundaria -->  
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th>Matricula</th>
        <th>Semestre</th>
        <th>Materia</th>
        <th>Calificacion Final</th>
        <th>Extraordinario</th>
      </tr>
      <?php
      $calificacionmateria = $this->m_apuntadores->pormateriaycohorte($corte,$valor->clave_especialidad);
      if($calificacionmateria){
      $contador = 0;
      $calfin = 0;
      $calex = 0;
      foreach($calificacionmateria as $valor):
      if(substr($valor->matricula, 0,2) == $corte){
      ?>
      <tr>
        <td><?=$valor->matricula ?></td>
        <td><?=$valor->semestre ?></td>
        <td><?=$valor->materia ?></td>
        <td><?if($valor->calificacion_final>=6){$calfin++; echo $valor->calificacion_final;}else{echo $valor->calificacion_final;}?></td>
        <td><?if($valor->extraordinario>=6){$calex++; echo $valor->extraordinario;}else{echo $valor->extraordinario;}?></td>
      </tr>
    <?php $contador++; } endforeach; $key = 1;}else{echo"<tr><td colspan='5'>Consulta sin datos</td></tr>"; $key = 0;} ?>
    </table>  
        <!-- datos consulta secundaria -->
        </td>
        <td><?php if($key == 0) {echo "No hay datos..."; }else{ ?>
            Alumnos Cursados: <?=$contador?>
            <br>
            Alumnos en Ordinario: <?=$calfin?>
            <br>
            Alumnos en Extraordinario: <?=$calex?>
            <br><br>
            <strong>Aprobación en Ordinario:</strong> <?= ($calfin * 100) / $contador;?>%
            <br><br>
            <strong>Aprobaron Asignatura:</strong> <?$aprobados = $calfin + $calex; echo ($aprobados * 100) / $contador?>%
            <?php } ?>
        </td>
      </tr>
    <?php endforeach;?>
    </table>
    <!-- datos de la consunta -->
    </div>
  </section>
</div>
<!-- accordion materia-->
<?php $contamateria++; endforeach; ?>

</blockquote>




</div>
</div>