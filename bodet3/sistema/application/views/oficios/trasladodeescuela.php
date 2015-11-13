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
    <td align="center"><p><strong>SISTEMA EDUCATIVO NACIONAL<br />
    </strong><strong>SOLICITUD DE BAJA POR CAMBIO DE ESCUELA</strong></p></td>
    <td align="left"><img src="<?=base_url();?>common/img/sep_.png"/></td>
  </tr>
</table>
<br />
<div style="float:left;"><strong>REGISTRO DEL MES:</strong></div><div style="float:left; margin-left:.5em; text-align:center; width:10em; border-bottom:solid #000 1px;"><?=$this->input->post('registro_mes')?></div>
<br /><br />
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td align="center"><p>NOMBRE DEL PLANTEL</p>
      <p><?=$dt_escuela['0']->nom_escuela;?></p></td>
    <td align="center"><p>CLAVE DEL C.T.</p>
      <p><?=$dt_escuela['0']->clave;?></p></td>
    <td align="center"><p>LOCALIDAD</p>
      <p>PUEBLA, PUE.</p></td>
  </tr>
  </table>
  <br />
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td align="center"><p>NOMBRE DEL (A) ALUMNO (A) </p>
      <p><?=$dt_alumno['0']->nombre;?> <?=$dt_alumno['0']->paterno;?> <?=$dt_alumno['0']->materno;?></p></td>
    <td align="center"><p>NO. DE MATRÍCULA</p>
      <p><?=$dt_alumno['0']->matricula;?></p></td>
    </tr>
</table>
<br />
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td><p style="float:left;">LICENCIATURA:</p> <p style="float:left; padding-left:2em;"><?=$this->user->mi_join($dt_alumno['0']->clave_especialidad,'especialidades','id','label');?></p></td>
  </tr>
</table>
<br />
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td align="left"><p style="float:left;">MOTIVO DEL CAMBIO:</p><p style="float:left; padding-left:2em;"><?=$this->input->post('motivo_cambio')?></p></td>
    <td align="left"><p style="float:left;">FECHA DE LA BAJA:</p><p style="float:left; padding-left:2em;"><?php echo date("j")." de ".fecha(date("n"))." de ".date("Y"); ?></p></td>
  </tr>
</table>
<div style="width:100%; text-align:center; padding-top:1.5em; padding-bottom:.3em;"><strong>ALTA POR CAMBIO</strong></div>
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td align="center"><p>NOMBRE DEL PLANTEL</p>
      <p><?=$this->input->post('nombre_plantel')?></p></td>
    <td align="center"><p> CLAVE</p>
      <p><?=$this->input->post('clave_plantel')?></p></td>
    <td align="center"><p>LOCALIDAD<br />
    </p>
      <p><?=$this->input->post('localidad_plantel')?></p></td>
  </tr>
</table>
<br />
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td align="center"><br /><br />FIRMA DEL (A) ALUMNO (A)</td>
    <td align="center"><p>FECHA</p>
      <p><span style="width:33.3%; float:left;"><?php echo date("Y"); ?><br />AÑO</span> <span style="width:33.3%;  float:left;"><?php echo date("n"); ?><br />MES </span> <span style="width:33.3%; float:left;"><?php echo date("j"); ?><br />DíA</span></p></td>
  </tr>
</table>
<br />
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="2" align="left"><p style="font-size:.9em;">LA SITUACIÓN ACADÉMICA DEL ALUMNO O ALUMNA ES REGULAR Y PROCEDE EL  TRÁMITE DE CAMBIO, SOLICITA EL:                            SEMESTRE</p></td>
    </tr>
  <tr>
    <td align="center"><p><?=$dt_escuela['0']->director;?></p>
      <p><strong>EL DIRECTOR DEL PLANTEL DE ORIGEN</strong></p></td>
    <td align="center"><p><?=$this->input->post('nombre_director')?></p>
      <p><strong>EL DIRECTOR DEL PLANTEL RECEPTOR</strong></p></td>
  </tr>
</table>
<div style="width:100%; text-align:center; padding-top:1.5em; padding-bottom:.3em;"><strong>PARA SER LLENADO POR CONTROL ESCOLAR</strong></div>
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td>
    <br />
    <span style="width:33.3%;  float:left;">SE AUTORIZA CAMBIO</span><span style="width:33.3%;  float:left;"><table width="50%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8%">SI&nbsp;</td>
        <td width="34%" style="border:#000 solid 1px; text-align:center;">&nbsp;</td>
        <td width="21%">&nbsp;NO</td>
        <td width="37%" style="border:#000 solid 1px; text-align:center;">&nbsp;</td>
      </tr>
    </table></span><span style="width:33.3%;  float:left;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8%">Noº</td>
        <td width="92%" style="border-bottom:#000 solid 1px; padding-left:1em;">&nbsp;</td>
      </tr>
    </table></span>
    <div style="clear:both;"></div>
    <p style="float:left;">FECHA DE AUTORIZACIÓN:</p> <p style="float:left; padding-left:2em; border-bottom:1px solid #000; width:50%;">&nbsp;</p>
    <div style="clear:both;"></div>
    <p style="text-align:center;"><strong>AUTORIZA</strong><br />DIRECTORA GENERAL DE PLANEACION EDUCATIVA<br><br>
CITLALI AGUILAR HERNÁNDEZ</p></td>
  </tr>
</table>
<span style="font-size:.9em;"><p>NOTA: Este documento tiene vigencia en tanto no se agote el tiempo reglamentario para darse de alta</p></span>
</div>
</body>
</html>