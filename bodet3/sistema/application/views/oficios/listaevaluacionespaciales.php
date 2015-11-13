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
      DIRECCIÓN DE FORMACIÓN DOCENTE<br />      &quot;<?=$dt_escuela['0']->nom_escuela;?>&quot;</p>
      <p><strong><?=$dt_escuela['0']->tipo;?><br />
        ESPECIALIDAD EN <?=$this->user->mi_join($dt_materia['0']->licenciatura,'especialidades','id','label');?></strong></p></td>
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
    <td scope="col"><div style="border-top: solid 1px #000;
  border-left: solid 1px #000;
  border-bottom: solid 1px #000;">&nbsp;HOMBRES:</div></td>
    <td align="right" scope="col">
      <div style="border-top: solid 1px #000;
  border-bottom: solid 1px #000;
  border-right: solid 1px #000;">
  <? if ($a_m_calificacion_sex_h){
    $h = 0; foreach($a_m_calificacion_sex_h as $valor):?>
    <? $valor->nombre ?>
  <?php $h++; endforeach; echo $total1 = $h; 
  }else{echo $total1 = "0";}
  ?> &nbsp;</div>
    </td>
    <td scope="col">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2" scope="col"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8%" scope="col">CLAVE:</td>
        <td width="22%" scope="col"><?=$dt_escuela['0']->clave;?></td>
        <td width="12%" scope="col">&nbsp;</td>
        <td width="12%" scope="col">&nbsp;</td>
        <td width="17%" scope="col">&nbsp;</td>
        <td width="29%" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <td>GRADO:</td>
        <td>demo</td>
        <td>SEMESTRE:</td>
        <td><?=$dt_materia['0']->semestre;?>°</td>
        <td>CICLO  ESCOLAR:</td>
        <td> demo - demo</td>
      </tr>
    </table></td>
    <td scope="col"><div style="border-top: solid 1px #000;
  border-left: solid 1px #000;
  border-bottom: solid 1px #000;">&nbsp;MUJERES:</div></td>
    <td align="right" scope="col">
      <div style="border-top: solid 1px #000;
  border-bottom: solid 1px #000;
  border-right: solid 1px #000;">
  <? if ($a_m_calificacion_sex_m){
    $m = 0; foreach($a_m_calificacion_sex_m as $valor):?>
    <? $valor->nombre ?>
  <?php $m++; endforeach; echo $total2 = $m; 
  }else{echo $total2 = "0";}
  ?>&nbsp;</div>
    </td>
    <td scope="col">&nbsp;</td>
  </tr>
  <tr>
    <td scope="col"><div style="border-top: solid 1px #000;
  border-left: solid 1px #000;
  border-bottom: solid 1px #000;">&nbsp;TOTAL:</div></td>
    <td align="right" scope="col">
<div style="border-top: solid 1px #000;
  border-bottom: solid 1px #000;
  border-right: solid 1px #000;">
      <?= $total1 + $total2;?>
    &nbsp;</div></td>
    <td scope="col">&nbsp;</td>
  </tr>
</table>
<br />
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th width="6%" rowspan="2" scope="col"><p>Núm.</p></th>
    <th width="12%" rowspan="2" scope="col">MATRICULA</th>
    <th width="41%" rowspan="2" scope="col"><p>NOMBRE</p></th>
    <th colspan="2" align="center" scope="col">CALIFICACIÓN</th>
    <th width="6%" rowspan="2" scope="col">%<br />ASISTENCIA</th>
    <th  rowspan="2" scope="col">FIRMA DE <br>ENTERADO DEL <br>ALUMNO </th>
    </tr>
  <tr>
    <td width="9%" align="center"><strong>NÚMERO</strong></td>
    <td width="9%" align="center"><strong>LETRA</strong></td>
  </tr>
  <?php $n = 1; foreach($a_m_calificacion as $valor):?>
  <tr>
    <td align="center"><?=$n ?></td>
    <td align="center"><?=$valor->matricula ?></td>
    <td align="left">&nbsp;<?=$valor->nombre ?> <?=$valor->paterno ?> <?=$valor->materno ?></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
  </tr>
    <?php $n++; endforeach;?>
</table>
<br />
<div style="clear:both; margin-bottom:1em;"></div> 
<div style="clear:both; margin-bottom:1.5em;"></div>
<div style="border-top:2px solid #000; float:left; width:45%; text-align:center;">
FECHA
</div>
<div style="clear:both; margin-bottom:1.5em;"></div>


<br />
<div style="clear:both; margin-bottom:1em;"></div> 
<div style="clear:both; margin-bottom:1.5em;"></div>
<div style="border-top:2px solid #000; float:left; width:45%; text-align:center;">
<?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','nombre');?>
      <?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','paterno');?>
      <?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','materno');?>
      <BR>
        Firma del Catedrático</div>

</div>
</div>
</body>
</html>