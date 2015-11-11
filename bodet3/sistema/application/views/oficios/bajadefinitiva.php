<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Baja definitiva</title>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12.5px;
}
</style>
</head>

<body>
<div style="width:800px; height:auto; margin:auto;">
<br /><br /><br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right"><img src="<?=base_url();?>common/img/sep.jpg"/></td>
    <td align="center">SECRETARÍA DE EDUACIÓN PÚBLICA<br />
SUBSECRETARÍA DE EDUCACIÓN SUPERIOR<br />
DIRECCIÓN GENERAL DE FORMACIÓN Y DESARROLLO DE DOCENTES<br />
DIRECCIÓN DE FORMACIÓN DE DOCENTE<br />
<strong><?=$dt_escuela['0']->tipo;?><br />
&quot;<?=$dt_escuela['0']->nom_escuela;?>&quot;<br />
CLAVE: <?=$dt_escuela['0']->clave;?> </strong></td>
    <td align="left"><img src="<?=base_url();?>common/img/logoc.jpg"/></td>
  </tr>
</table>
<br /><br />
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td align="right"><p>&nbsp;</p>
      <p>ASUNTO: <strong>BAJA DEFINITIVA</strong></p></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td><p style="float:right;">Puebla, Pue., a <?php echo date("j")." de ".date("n")." de ".date("Y"); ?></p>
      <div style="clear:both;"></div>
      <br /><br />
      <p><strong>C. <?=$dt_escuela['0']->director;?><br />
        DIRECTOR DEL &quot;<?=$dt_escuela['0']->nom_escuela;?>&quot;<br />
        PRESENTE</strong></p>
      <div style="clear:both; padding-top:2em; padding-bottom:2em;"></div>
      <div style="float:left; width:81%;">Por motivos personales, solicito mi <strong>baja definitiva</strong> voluntaria del "Instituto Jaime Torres Bodet" donde me inscribí al</div>
      <div style="float:left; width:13%; text-align:center; border-bottom:#000 solid 1px; margin-left:1%;">demo</div>
      <div style="float:left; width:5%; text-align:right;">año,</div>
      <div style="clear:both; padding-bottom:1em;"></div>
      <div style="float:left; width:12%;">del ciclo escolar</div>
      <div style="float:left; width:32%; border-bottom:#000 solid 1px; text-align:center; margin-right:1%;"><?=$dt_alumno['0']->ciclo_escolar;?></div>
      <div style="float:left; width:20%;">habiendo cursado hasta el</div>
      <div style="float:left; width:27%; border-bottom:#000 solid 1px; text-align:center; margin-right:1%;"><?=$dt_alumno['0']->semestre;?></div>
      <div style="float:left; width:4%; text-align:right;">&nbsp;semestre</div>
      <div style="clear:both; padding-bottom:1em;"></div>
      <div style="float:left; width:16%;">de la especialidad de</div>
      <div style="float:left; width:34%; border-bottom:#000 solid 1px; text-align:center; margin-right:1%;"><?=$this->user->mi_join($dt_alumno['0']->clave_especialidad,'especialidades','id','label');?></div>
      <div style="float:left; width:12%;">del ciclo escolar</div>
      <div style="float:left; width:36%; border-bottom:#000 solid 1px; text-align:center;"><?=$dt_alumno['0']->ciclo_escolar;?></div>
      <div style="float:left; width:1%;">.</div>
      
      <div style="clear:both; padding-top:8em;"></div>
      Estoy conciente de que al retirar mi documentación, el Instituto se desliga de toda Responsabilidad en mi formación académica.
      <div style="clear:both; padding-bottom:10em;"></div>
      <div style="width:100%; text-align:center;"><strong>ATENTAMENTE</strong></div>
      <div style="clear:both; padding-bottom:13em;"></div>
      
      
      <div style="float:left; width:30%; margin-left:10%; margin-right:10%; border-top:#000 solid 1px; text-align:center; padding-top:1em;">Nombre y firma del alumno (a)</div>
      
       <div style="float:left; width:38%; margin-left:6%; margin-right:6%; border-top:#000 solid 1px; text-align:center; padding-top:1em; text-transform:capitalize;"><?=$dt_escuela['0']->director;?></div>
    </td>
  </tr>
</table>
</div>
</body>
</html>