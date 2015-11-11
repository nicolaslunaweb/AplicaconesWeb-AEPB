<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LIBERACIÓN DE NO ADEUDO</title>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12.5px;
}
</style>
</head>


<body>
<div style="width:800px; height:auto; margin:auto;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="15%">&nbsp;</td>
    <td width="75%" align="center"><p><span style="text-decoration: underline;">SECRETARÍA DE EDUCACIÓN PÚBLICA</span><br />
      DIRECCIÓN GENERAL DE FORMACIÓN Y DESARROLLO DE DOCENTES<br />
      DIRECCIÓN DE FORMACIÓN DOCENTE<br />      
      &quot;<?=$dt_escuela['0']->nom_escuela;?>&quot;</p>
      <p><strong><?=$dt_escuela['0']->tipo;?><br />
        ESPECIALIDAD EN</strong></p></td>
    <td width="15%" align="left">&nbsp;</td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="12%" scope="col"><p>ASIGNATURA:<br />
      CATEDRATICO:</p></td>
    <td width="71%" scope="col"><?=$dt_materia['0']->materia;?><br />
      <?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','nombre');?>
      <?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','paterno');?>
      <?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','materno');?>
      </td>
    <td width="8%" scope="col">&nbsp;</td>
    <td width="5%" scope="col">&nbsp;</td>
    <td width="4%" scope="col">&nbsp;</td>
  </tr>
  <tr>
    <td scope="col">&nbsp;</td>
    <td scope="col">&nbsp;</td>
    <td scope="col"><p>&nbsp;</p></td>
    <td scope="col">&nbsp;</td>
    <td scope="col">&nbsp;</td>
  </tr>
  <tr>
    <td scope="col">&nbsp;</td>
    <td scope="col">&nbsp;</td>
    <td scope="col">HOMBRES:</td>
    <td align="right" scope="col">
	<? if ($a_m_calificacion_sex_h){
    $h = 0; foreach($a_m_calificacion_sex_h as $valor):?>
    <? $valor->nombre ?>
	<?php $h++; endforeach; echo $total1 = $h; 
	}else{echo $total1 = "0";}
	?>
    </td>
    <td scope="col">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2" scope="col"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8%" scope="col">&nbsp;</td>
        <td width="22%" scope="col">&nbsp;</td>
        <td width="12%" scope="col">&nbsp;</td>
        <td width="12%" scope="col">&nbsp;</td>
        <td width="17%" scope="col">&nbsp;</td>
        <td width="29%" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <td>CLAVE:</td>
        <td><?=$dt_escuela['0']->clave;?></td>
        <td>SEMESTRE:</td>
        <td><?=$dt_materia['0']->semestre;?>°</td>
        <td>CICLO  ESCOLAR:</td>
        <td> demo - demo</td>
      </tr>
    </table></td>
    <td scope="col">MUJERES:</td>
    <td align="right" scope="col">
    <? if ($a_m_calificacion_sex_m){
    $m = 0; foreach($a_m_calificacion_sex_m as $valor):?>
    <? $valor->nombre ?>
	<?php $m++; endforeach; echo $total2 = $m; 
	}else{echo $total2 = "0";}
	?>
    </td>
    <td scope="col">&nbsp;</td>
  </tr>
  <tr>
    <td scope="col">TOTAL:</td>
    <td align="right" scope="col"><?= $total1 + $total2;?></td>
    <td scope="col">&nbsp;</td>
  </tr>
</table>
<br />
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <th width="5%" scope="col">No.</th>
    <th width="31%" scope="col">Nombre</th>
    <th colspan="18" align="center" scope="col">SESIONES</th>
    <th width="10%" scope="col">%<br />
      ASISTENCIA</th>
  </tr>
  <?php $n = 1; foreach($a_m_calificacion as $valor):?>
  <tr>
    <td align="center"><?=$n ?></td>
    <td><?=$valor->nombre ?> <?=$valor->paterno ?> <?=$valor->materno ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php $n++; endforeach;?>
</table>

<br />
<div style="clear:both; margin-bottom:4em;"></div>
<div style="border-top:2px solid #000; float:left; width:40%; text-align:center;">
<?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','nombre');?>
      <?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','paterno');?>
      <?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','materno');?>
      <BR>
FIRMA DEL CATEDRÁTICO</div>

</div>
</div>
</body>
</html>