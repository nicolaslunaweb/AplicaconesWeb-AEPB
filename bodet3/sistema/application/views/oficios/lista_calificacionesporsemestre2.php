<?php
  switch ($especialidad) {
  case 1:
    $pref = "B";
    break;
  case 2:
    $pref = "E";
    break;
  case 3:
    $pref = "I";
    break;
  case 4:
    $pref = "M";
    break;
  case 5:
    $pref = "EI";
    break;
}

  switch ($semestre) {
  case 7:
    $s = "7";
    break;
  case 8:
    $s = "8";
    break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>REGISTRO DE ESCOLARIDAD</title>
<style>
.chica{
  font-size:9px;
}
</style>
</head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td rowspan="2" class="chica">NUMERO PROGRESIVO</td>
    <td colspan="2">ANTECEDENTES</td>
    <td rowspan="2" align="center"><p>CLAVE ÚNICA DE<br />
      REGISTRO DE<br />
      POBLACIÓN<br />
    (CURP)</p></td>
    <td rowspan="2" align="center"><p>NOMBRE DEL ALUMNO</p>
      <p>PRIMER APELLIDO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEGUNDO APELLIDO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOMBRE(S)<br />
    </p></td>
    <td rowspan="2" class="chica">SEXO H o M</td>
    <td colspan="9" align="center">CALIFICACIÓN FINAL</td>
    <td colspan="12" align="center">CALIFICACIÓN DE REGULARIZACIÓN</td>
    <td rowspan="2" class="chica">ASIGNATURAS NO ACREDITADAS</td>
    <td rowspan="2" class="chica">ASIGNATURAS ACREDITADAS</td>
    <td rowspan="2" class="chica">SITUACIÓN ESCOLAR</td>
  </tr>
  <tr class="chica">
    <td>ASIGNATURAS NO ACREDITADAS</td>
    <td>SITUACIÓN ESCOLAR</td>
    <td align="center"><?=$this->user->mi_join($pref.$s."1",'materias','clave_especialidad','materia');?></td>
    <td align="center"><?=$this->user->mi_join($pref.$s."2",'materias','clave_especialidad','materia');?></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">CLAVE DE LA<br />
ASIGNATURA</td>
    <td align="center">CALIFICACIÓN</td>
    <td align="center">CLAVE DE LA<br />
ASIGNATURA</td>
	<td align="center">CALIFICACIÓN</td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>    
  </tr>
  <?php
  $n = 1;
  if($dt_escolaridad){
foreach($dt_escolaridad as $valor):?>
  <tr>
    <td><?=$n ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?=$this->user->mi_join($valor->matricula,'alumnos','matricula','curp');?></td>
    <td><?=$this->user->mi_join($valor->matricula,'alumnos','matricula','paterno');?> <?=$this->user->mi_join($valor->matricula,'alumnos','matricula','materno');?> <?=$this->user->mi_join($valor->matricula,'alumnos','matricula','nombre');?></td>
    <td><?if($this->user->mi_join($valor->matricula,'alumnos','matricula','sexo') == 1){echo "H";}else{echo "M";}?></td>
    <td><?=$this->user->mi_join_m($valor->matricula,$pref.$s."1",'calificaciones','matricula','materia','calificacion_final');?></td>
    <td><?=$this->user->mi_join_m($valor->matricula,$pref.$s."2",'calificaciones','matricula','materia','calificacion_final');?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><? if($this->user->mi_join_m($valor->matricula,$pref.$s."1",'calificaciones','matricula','materia','calificacion_final') <= 5){echo $pref.$s."1";}?></td>
    <td><? if($this->user->mi_join_m($valor->matricula,$pref.$s."1",'calificaciones','matricula','materia','calificacion_final') <= 5){echo $this->user->mi_join_m($valor->matricula,$pref.$s."1",'calificaciones','matricula','materia','extraordinario');}?></td>
    <td><? if($this->user->mi_join_m($valor->matricula,$pref.$s."2",'calificaciones','matricula','materia','calificacion_final') <= 5){echo $pref.$s."2";}?></td>
    <td><? if($this->user->mi_join_m($valor->matricula,$pref.$s."2",'calificaciones','matricula','materia','calificacion_final') <= 5){echo $this->user->mi_join_m($valor->matricula,$pref.$s."2",'calificaciones','matricula','materia','extraordinario');}?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<?php $n++; endforeach;}else{
?>  
<tr>
<td colspan="24" align="center">No hay datos! o la consulta esta mal...</td>
</tr>
<?php 
}?>
</table>
<?php /*
if($dt_escolaridad){
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=Registro-de-Escolaridad.xls");
header("Content-Transfer-Encoding: binary");
header("Content-Type: application/octet-stream");
} */
?>
</body>
</html>