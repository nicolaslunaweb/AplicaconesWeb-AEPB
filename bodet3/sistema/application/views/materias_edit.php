<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Especialidades</a></li>
  <li class="current"><a href="#">Asignaturas</a></li>
  <li class="unavailable"><a href="#">Asignaturas de Especialidades</a></li>
</ul>
</div></div>
<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
<br clear="both">



      
            <hr />
            <h4>ASIGNATURAS DE: <?=$this->user->mi_join($que_especialidad,'especialidades','id','label');?></h4>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">Clave</th>
    <th scope="col">Asignatura</th>
    <th scope="col">Semestre</th>
    <th scope="col">Horas</th>
    <th scope="col">Creditos</th>
    <th scope="col">Prioridad</th>
    <th scope="col">Prisemestre</th>
    <th scope="col">Docente</th>
    <th scope="col">Horario</th>
    <th scope="col">Salón</th>
    <th scope="col">Ciclo Escolar</th>
    <th scope="col">- Edit -</th>
  </tr>
  <?php 
  foreach($materias as $valor):?>
  <tr>
    <td><?=$valor->clave_especialidad ?></td>
    <td style="font-size:9px;"><?=$valor->materia ?></td>
    <td><?=$valor->semestre ?></td>
    <td><?=$valor->horas ?></td>
    <td><?=$valor->creditos ?></td>
    <td><?=$valor->prioridad ?></td>
    <td><?=$valor->prisemestre ?></td>
    <td><?=$valor->clave_docente ?></td>
    <td><?=$valor->horario ?></td>
    <td><?=$valor->salon ?></td>
    <td><?=$valor->cicloescolar ?></td>
    <td><?=anchor('calificaciones/edit_materias/'.$que_especialidad.'/'.$valor->clave_especialidad, 'Edit Datos','class="small button"')?></td>
  </tr>
  <?php endforeach;?>
</table>
        </div>
</div>   