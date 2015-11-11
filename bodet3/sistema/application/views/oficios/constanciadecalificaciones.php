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
.chica td{
	font-size:9px;
}
</style>
</head>

<body>
<?php
function fecha($mes){
	switch($mes) {
			case "1" : return "Enero";
						break;
			case "2" : return "Febrero";
						break;
			case "3" : return "Marzo";
						break;
			case "4" : return "Abril";
						break;
			case "5" : return "Mayo";
						break;
			case "6" : return "Junio";
						break;
			case "7" : return "Julio";
						break;
			case "8" : return "Agosto";
						break;
			case "9" : return "Septiembre";
						break;
			case "10" : return "Octubre";
						break;
			case "11" : return "Noviembre";
						break;
			case "12" : return "Diciembre";
						break;
				}}
?>
<div style="width:800px; height:auto; margin:auto;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="15%" align="left"><img src="<?=base_url();?>common/img/sep.jpg"/></td>
    <td width="70%" align="center"><p>DIRECCIÓN GENERAL DE FORMACIÓN  Y DESARROLLO DE DOCENTES<br />
      SECRETARÍA DE EDUCACIÓN PÚBLICA<br />
      SUBSECRETARÍA DE EDUCACIÓN SUPERIOR<br />
      DIRECCIÓN DE FORMACIÓN DE DOCENTE<br />
      <strong><?=$dt_escuela['0']->tipo;?><br />
      “<?=$dt_escuela['0']->nom_escuela;?>”<br />
      CLAVE: <?=$dt_escuela['0']->clave;?></strong></p></td>
    <td width="15%" align="right"><img src="<?=base_url();?>common/img/logo.jpg"/></td>
  </tr>
  <tr>
    <td colspan="3" align="right"><p>&nbsp;</p>
      <p><strong>ASUNTO:</strong> Constancia de Estudio.</p></td>
    </tr>
</table>
<br />
<p>A QUIEN CORRESPONDA:</p>
<p>Según consta en el archivo del  “<?=$dt_escuela['0']->nom_escuela;?>”.</p>
<p>El (a) Alumno (a):  <strong><?=$dt_alumno['0']->nombre;?> <?=$dt_alumno['0']->paterno;?> <?=$dt_alumno['0']->materno;?></strong></p>
<p>Se encuentra cursando la Licenciatura en Educación Secundaria en la Especialidad de <?=$this->user->mi_join($dt_alumno['0']->clave_especialidad,'especialidades','id','label');?> en esta Institución, obteniendo los resultados siguientes:</p>
<p>
<div style="width:400px; float:left; height:auto;">
  <table width="100%" border="1" cellpadding="2" cellspacing="0" class="chica">
    <tr>
      <th colspan="2">PRIMER  SEMESTRE      ( 2007 - 2008 )</th>
      </tr>
      <?php 
foreach($m_primer as $valor):?>
    <tr>
      <td width="92%"><?=$valor->materia ?></td>
      <td width="8%" align="center"><?=$valor->calificacion_final ?></td>
    </tr>
    <?php endforeach;?>
  </table>
  <table width="100%" border="1" cellpadding="2" cellspacing="0" class="chica">
    <tr>
      <th colspan="2">SEGUNDO  SEMESTRE      ( 2007 - 2008 )</th>
    </tr>
    <?php 
foreach($m_segundo as $valor):?>
    <tr>
      <td width="92%"><?=$valor->materia ?></td>
      <td width="8%" align="center"><?=$valor->calificacion_final ?></td>
    </tr>
    <?php endforeach;?>
  </table>
  <table width="100%" border="1" cellpadding="2" cellspacing="0" class="chica">
    <tr>
      <th colspan="2">TERCER  SEMESTRE  ( 2008 - 2009)</th>
    </tr>
    <?php 
foreach($m_terser as $valor):?>
    <tr>
      <td width="92%"><?=$valor->materia ?></td>
      <td width="8%" align="center"><?=$valor->calificacion_final ?></td>
    </tr>
    <?php endforeach;?>
  </table>
  <table width="100%" border="1" cellpadding="2" cellspacing="0" class="chica">
    <tr>
      <th colspan="2">CUARTO  SEMESTRE  ( 2008 - 2009 )</th>
    </tr>
    <?php 
foreach($m_cuarto as $valor):?>
    <tr>
      <td width="92%"><?=$valor->materia ?></td>
      <td width="8%" align="center"><?=$valor->calificacion_final ?></td>
    </tr>
    <?php endforeach;?>
  </table>
</div>
<div style="width:400px; float:left; height:auto;">
  <table width="100%" border="1" cellpadding="2" cellspacing="0" class="chica">
    <tr>
      <th colspan="2">QUINTO  SEMESTRE     ( 2010 - 2011 )</th>
    </tr>
    <?php 
foreach($m_quinto as $valor):?>
    <tr>
      <td width="92%"><?=$valor->materia ?></td>
      <td width="8%" align="center"><?=$valor->calificacion_final ?></td>
    </tr>
    <?php endforeach;?>
  </table>
  <table width="100%" border="1" cellpadding="2" cellspacing="0" class="chica">
    <tr>
      <th colspan="2">SEXTO  SEMESTRE      ( 2010 - 2011 )</th>
    </tr>
    <?php 
foreach($m_sexto as $valor):?>
    <tr>
      <td width="92%"><?=$valor->materia ?></td>
      <td width="8%" align="center"><?=$valor->calificacion_final ?></td>
    </tr>
    <?php endforeach;?>
  </table>
  <table width="100%" border="1" cellpadding="2" cellspacing="0" class="chica">
    <tr>
      <th colspan="2">SÉPTIMO  SEMESTRE      ( 2011 - 2012 )</th>
    </tr>
    <?php 
foreach($m_septimo as $valor):?>
    <tr>
      <td width="92%"><?=$valor->materia ?></td>
      <td width="8%" align="center"><?=$valor->calificacion_final ?></td>
    </tr>
    <?php endforeach;?>
  </table>
  <table width="100%" border="1" cellpadding="2" cellspacing="0" class="chica">
    <tr>
      <th colspan="2">OCTAVO  SEMESTRE   ( 2011 - 2012)</th>
    </tr>
    <?php 
foreach($m_octavo as $valor):?>
    <tr>
      <td width="92%"><?=$valor->materia ?></td>
      <td width="8%" align="center"><?=$valor->calificacion_final ?></td>
    </tr>
    <?php endforeach;?>
    
    <tr> <td>&nbsp;</td><td>&nbsp;</td> </tr>
    <tr> <td>&nbsp;</td><td>&nbsp;</td> </tr>
    <tr> <td>&nbsp;</td><td>&nbsp;</td> </tr>
    <tr> <td>&nbsp;</td><td>&nbsp;</td> </tr>
    <tr> <td>&nbsp;</td><td>&nbsp;</td> </tr>
    <tr> <td>&nbsp;</td><td>&nbsp;</td> </tr>
    <tr> <td>&nbsp;</td><td>&nbsp;</td> </tr>
    <tr> <td>&nbsp;</td><td>&nbsp;</td> </tr>
  </table>
</div>
</p>
<div style="clear:both; padding-bottom:1em;"></div>
Promedio General: <strong>
<?php 
//la variable $n es para tener un contador y numero de las materias con calificacion
$nn = 0; 
///$sumador es para sumar las califaciciones y despues dividir por el numero obtenido de $n numero de materias con calificacion
$sumador = 0;
foreach($total as $valor):?>
<? /*es para condicionar que si esta o tiene calificacion haga el conteo y la suma*/ if($valor->calificacion_final): ?>
<? $sumador += $valor->calificacion_final ?>
<? $nn ++; ?>
<?php endif; ?>
<?php endforeach;?>
<? if($sumador > 1){echo round($sumador / $nn, 1);}else{echo "No hay calificación";} ?>
</strong>
<br /><br />
Para los fines legales que el (la) interesado (a) convenga, se expide la presente en Cuautlancingo, Puebla, a <?php echo date("j")." de ".fecha(date("n"))." de ".date("Y"); ?> .
<br /><br /><br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td align="center">A T E N T A M E N T E</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="47">&nbsp;</td>
    <td width="40%" align="center" valign="bottom" style="border-bottom:#000 solid 1px;">
    <?=$dt_escuela['0']->director;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">DIRECTOR</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</body>
</html>