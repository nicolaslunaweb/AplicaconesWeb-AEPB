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
    <td align="right"><img src="<?=base_url();?>common/img/sep.jpg"/></td>
    <td align="center">SECRETARÍA DE EDUACIÓN PÚBLICA<br />
SUBSECRETARÍA DE EDUCACIÓN SUPERIOR<br />
DIRECCIÓN GENERAL DE FORMACIÓN Y DESARROLLO DE DOCENTES<br />
DIRECCIÓN DE FORMACIÓN DE DOCENTE<br />
<strong><?=$dt_escuela['0']->tipo;?><br />
&quot;<?=$dt_escuela['0']->nom_escuela;?>&quot;<br />
CLAVE: <?=$dt_escuela['0']->clave;?> </strong></td>
    <td align="left"><img src="<?=base_url();?>common/img/logo.jpg"/></td>
  </tr>
</table>
<br /><br />
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td align="center"><strong>LIBERACIÓN DE NO ADEUDO</strong></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td><strong style="float:right; padding-top:1.2em;">Puebla, Pue., a <?php echo date("j")." de ".fecha(date("n"))." de ".date("Y"); ?> </strong>
      <div style="clear:both; padding-bottom:2em;"></div>
    Por este medio hacemos constar que el (a) alumno (a);
    <div style="border-bottom:2px solid #000; margin:auto; width:100%; margin-top:2em; margin-bottom:1.5em;">
    <?=$dt_alumno['0']->nombre;?> <?=$dt_alumno['0']->paterno;?> <?=$dt_alumno['0']->materno;?>
    </div>
    <div style="clear:both;"></div>
    <div style="float:left; height:auto; width:50%;">del "Instituto Jaime Torres Bodet", inscritos (a) en el ciclo escolar</div>
    <div style="float:left; height:auto; width:50%; border-bottom:1px solid #000; text-align:center;"><?=$dt_alumno['0']->ciclo_escolar;?></div>
    <div style="clear:both; padding-bottom:.8em;"></div>
    
    <div style="clear:both;"></div>
    <div style="float:left; height:auto; width:10%;">hasta el</div>
    <div style="float:left; height:auto; width:23%; border-bottom:1px solid #000; text-align:center;"><?=$dt_alumno['0']->semestre;?></div>
    <div style="float:left; height:auto; width:35%; text-align:center;">semestre de la especialidad de</div>
    <div style="float:left; height:auto; width:25%; border-bottom:1px solid #000; text-align:center;"><?=$this->user->mi_join($dt_alumno['0']->clave_especialidad,'especialidades','id','label');?></div>
    <div style="float:left; height:auto; width:6%; text-align:right;">, que no</div>
    <div style="clear:both; padding-bottom:.8em;"></div>
    tiene adeudos con nuestra institución.
    <div style="padding-top:7em; padding-bottom:5em;"><strong>ATENTAMENTE</strong></div>
    <div style="clear:both;"></div>
    
    <div style="float:left; height:auto; width:32%; text-align:center; border-top:solid #000 1px; padding-top:4px;">PREFECTA DE NUESTRA INSTITUCIÓN</div>
    <div style="float:left; height:auto; width:32%; text-align:center; border-top:solid #000 1px; padding-top:4px; margin-left:2%; margin-right:2%;">RESPONSABLE DE LA BIBLIOTECA</div>
    <div style="float:left; height:auto; width:32%; text-align:center; border-top:solid #000 1px; padding-top:4px;">RESPONSABLE DE MANTENIMIENTO</div>
    <div style="clear:both; margin-bottom:8em;"></div>
    
    <div style="float:left; height:auto; width:27%; margin-right:23%; border-top:solid #000 1px; padding-top:4px;"><strong><?=$dt_escuela['0']->subdirector;?><br /> 
    SUBDIRECTOR ADMINISTRATIVO</strong></div>
    <div style="float:left; height:auto; width:30%; border-top:solid #000 1px; padding-top:4px;">
    <strong>NOMBRE DEL ASESOR DEL GRUPO </strong><br />
    <div style="float:left; width:40%;"><strong>SEMESTRE</strong></div><div style="width:60%; float:left; border-bottom:#000 solid 1px; text-align:center;"> <?=$dt_alumno['0']->semestre;?> </div>
</div>
    
    <div style="clear:both; padding-bottom:6em;"></div>  
    Estoy consciente que al retirar mi documentación el instituto se desliga de responsablidad en mi formación académica.
    <div style="clear:both; padding-bottom:5em;"></div> 
    
    
    
    <div style="float:left; height:auto; width:27%; margin-right:23%; padding-bottom:6em;">Atentamente</div>
    <div style="float:left; height:auto; width:33%; text-align:center;  padding-bottom:6em;"><strong>Vo. Bo.</strong></div>
    
    
    <div style="clear:both;"></div>
    <div style="float:left; height:auto; width:27%; margin-right:23%; border-top:solid #000 1px; padding-top:4px;">Nombre y firma del Alumno (a)</div>
    <div style="float:left; height:auto; width:33%; border-top:solid #000 1px; padding-top:4px;">
    <strong><?=$dt_escuela['0']->director;?><br />
Director</strong>
</div>
    
    <div style="clear:both;"></div> 
    <br />
    </td>
  </tr>
</table>
<br />
<div style="border-top:2px solid #000; margin:auto; width:70%; text-align:center;">
<div style="padding-top:3px;"></div>
<?=$dt_escuela['0']->direccion;?><br />
E-mail:ijtb</div>
</div>
</body>
</html>