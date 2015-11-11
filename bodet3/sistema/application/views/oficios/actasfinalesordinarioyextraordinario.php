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
    <td width="15%"><img src="<?=base_url();?>common/img/sep_.png"/></td>
    <td width="75%" align="center"><p><strong>SISTEMA EDUCATIVO NACIONAL<br />
      ACREDITACIÓN Y CERTIFICACIÓN NORMAL<br />
      ACTA DE RESULTADOS DE EVALUACIÓN</strong></p></td>
    <td width="15%" align="left">&nbsp;</td>
  </tr>
</table>
<br />
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><p><strong>NOMBRE DEL PLANTEL:<br />
          CLAVE DEL C.T.:<br />
          LICENCIATURA EN:<br />
            NOMBRE DE LA MATERIA:</strong></p></td>
        <td align="center"><p><strong>&quot;<?=$dt_escuela['0']->nom_escuela;?>&quot;<br />
          <?=$dt_escuela['0']->clave;?><br />
          demo<br />
          </strong>demo</p></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <br />
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="14%">ACREDITACIÓN:</td>
          <td width="2%">&nbsp;</td>
          <td width="7%" align="center"  style="border:1px #000 solid;">x</td>
          <td width="4%">&nbsp;</td>
          <td width="48%">GRUPO: &quot;demo&quot;</td>
          <td width="12%">CLAVEMATERIA:</td>
          <td width="2%">&nbsp;</td>
          <td width="11%">demo</td>
        </tr>
        <tr>
          <td>REGULARIZACIÓN:</td>
          <td>&nbsp;</td>
          <td align="center" style="border:1px #000 solid;">&nbsp;</td>
          <td>&nbsp;</td>
          <td>TURNO: demo</td>
          <td>HOMBRES:</td>
          <td>&nbsp;</td>
          <td>demo</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>MUJERES:</td>
          <td>&nbsp;</td>
          <td>demo</td>
        </tr>
        <tr>
          <td colspan="3" align="right">SEMESTRE:</td>
          <td>&nbsp;</td>
          <td>demoº</td>
          <td>TOTAL:</td>
          <td>&nbsp;</td>
          <td>demo</td>
        </tr>
      </table>
      </td>
  </tr>
  </table><br />
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th width="6%" rowspan="2" scope="col"><p>No.<br />
      Progr.</p></th>
    <th width="12%" rowspan="2" scope="col">MATRICULA</th>
    <th width="41%" rowspan="2" scope="col"><p>APELLIDO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APELLIDO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
      PATERNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MATERNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOMBRE (S)</p></th>
    <th colspan="2" align="center" scope="col">CALIFICACIÓN</th>
    <th width="6%" rowspan="2" scope="col">% DE<br />
      ASIST.</th>
    <th width="7%" rowspan="2" scope="col">ACRE-<br />
      DITADO</th>
    <th width="10%" rowspan="2" scope="col">NO ACRE-<br />
      DITADO</th>
  </tr>
  <tr>
    <td width="9%" align="center"><strong>NÚMERO</strong></td>
    <td width="9%" align="center"><strong>LETRA</strong></td>
    </tr>
  <tr>
    <td align="center">1</td>
    <td align="center">122107800000</td>
    <td align="left"> &nbsp;AGUILAR MORA VALERIA</td>
    <td align="center">7.7</td>
    <td>SIETE,SIETE</td>
    <td align="center">93</td>
    <td align="center">X</td>
    <td align="center">&nbsp;</td>
  </tr>
</table>
<div style="clear:both; margin-bottom:1em;"></div> 
<div style="margin:auto; width:70%; text-align:center;"><div style="padding-top:3px;"></div><?=$dt_escuela['0']->direccion;?> a <?php echo date("j")." de ".fecha(date("n"))." de ".date("Y"); ?></div>
<div style="clear:both; margin-bottom:3em;"></div> 
<div style="float:left; height:auto; width:50%; padding-bottom:4px; text-align:center;"><?=$dt_escuela['0']->responsable_control_escolar;?>
  <div style="height:auto; width:65%; margin:auto; border-top:solid #000 1px; padding-top:4px; text-align:center;">Responsable de Control Escolar</div></div>
<div style="float:left; height:auto; width:50%; padding-bottom:4px; text-align:center;">&nbsp;
<div style="height:auto; width:65%; margin:auto; border-top:solid #000 1px; padding-top:4px; text-align:center;">Profr (a)</div></div>

<div style="clear:both; margin-bottom:2.5em;"></div>
<div style="border-top:2px solid #000; margin:auto; width:45%; text-align:center;"><?=$dt_escuela['0']->director;?></div>

</div>
</div>
</body>
</html>