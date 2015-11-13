<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>academico/calificaciones">Calificaciones</a></li>
  <li class="unavailable"><a href="#">Lista de MAterias Profesor</a></li>
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
<h4> Lista de Materias Profesor </h4>
          <!-- principio de if`s -->            
<table width="100%">
 <thead>
	<tr>
		<th>Licenciatura</th>
        <th>Clave Especialidad</th>
        <th>Materia</th>
        <th>Semestre</th>
        <th>Horario</th>
        <th>Salón</th>
        <th>Listar Alumnos</th>
	</tr>
</thead>
<tbody>
<?php if($d_materias){
foreach($d_materias as $valor):?>
	<tr>
		<td><?=$this->user->mi_join($valor->licenciatura,'especialidades','id','label') ?></td>
        <td><?=$valor->clave_especialidad ?></td>
        <td><?=$valor->materia ?></td>
        <td align="center"><?=$valor->semestre ?></td>
        <td><?=$valor->horario ?></td>
        <td align="center"><?=$valor->salon ?></td>
		<td align='center'><?=anchor('academico/lista_alumnos_materia/'.$valor->clave_especialidad.'/'.$valor->semestre, 'Alumnos Materia','class="small button"')?></td>
	</tr>
<?php endforeach; }else{
echo "No hay datos";
}?>
</tbody>
</table>

  </div>
</div>
