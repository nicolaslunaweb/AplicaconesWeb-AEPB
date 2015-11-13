<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>talleres">Talleres</a></li>
  <li class="unavailable"><a href="#">Lista Talleres</a></li>
</ul>
</div></div>
<!---- breadcrumbs  --->

<div class="row">
		<div class="large-12 columns">
            <hr />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="32%" align="center"><?php if ($dt_alumno['0']->foto == 1){ ?>
      <img src="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/foto.jpg" width="150" height="180" />
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

<!---- principio de if`s---->            
<table width="100%">
 <thead>
	<tr>
		<th>Nivel</th>
        <th>Nombre</th>
        <th>Institución</th>
        <th>Titulo</th>
        <th>Porcentaje de Avance</th>
        <th>Beca</th>
        <th>Consultar Taller</th>
	</tr>
</thead>
<tbody>
<?php
///
function minivel($dato){
	switch ($dato) {
    case 1:
        $nivel = "Taller";
        break;
	case 2:
        $nivel = "Diplomado";
        break;
	case 3:
        $nivel = "Maestría";
        break;
	case 4:
        $nivel = "Doctorado";
        break;
}
	return $nivel;
}
///
foreach($d_talleres as $valor):?>
	<tr>
		<td><?=minivel($valor->nivel) ?></td>
        <td><?=$valor->nombre ?></td>
        <td><?=$valor->institucion ?></td>
        <td><?=$valor->titulo ?></td>
        <td align='center'><?=$valor->porcentaje_de_avance ?></td>
        <td align='center'><? if($valor->beca == 1){echo "Si";}else{echo "No";} ?></td>
		<td align='center'><?=anchor('talleres/vista_talleres/'.$id_matricula.'/'.$valor->IDre, 'Ver Datos','class="small button"')?></td>
	</tr>
<?php endforeach;?>
</tbody>
</table>

  </div>
</div>
