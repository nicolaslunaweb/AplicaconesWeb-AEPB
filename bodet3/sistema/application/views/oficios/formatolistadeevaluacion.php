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
      case "1" : return "ENERO";
            break;
      case "2" : return "FEBRERO";
            break;
      case "3" : return "MARZO";
            break;
      case "4" : return "ABRIL";
            break;
      case "5" : return "MAYO";
            break;
      case "6" : return "JUNIO";
            break;
      case "7" : return "JULIO";
            break;
      case "8" : return "AGOSTO";
            break;
      case "9" : return "SEPTIEMBRE";
            break;
      case "10" : return "OCTUBRE";
            break;
      case "11" : return "NOVIEMBRE";
            break;
      case "12" : return "DICIEMBRE";
            break;
        }}
        ///  separador de funciones
function letras($cal){
  switch(strlen($cal)) {
  case "1" :
    return de1a9($cal);
    break;
  case "2" :
    return "Diez";
    break;
  case "3" :
    return de1a9(substr($cal, 0,-2)).".".de1a9(substr($cal, 2));
    break;
  }///fin switch
}//fin funcion
        ///  separador de funciones
function de1a9($cal){
  switch($cal) {
  case "1" :
    return "Uno";
    break;
  case "2" :
    return "Dos";
    break;
  case "3" :
    return "Tres";
    break;
  case "4" :
    return "Cuatro";
    break;
  case "5" :
    return "Cinco";
    break;
  case "6" :
    return "Seis";
    break;
  case "7" :
    return "Siete";
    break;
  case "8" :
    return "Ocho";
    break;
  case "9" :
    return "Nueve";
    break;
  }///fin switch
}//fin funcion
/////       
?>
<div style="width:800px; height:auto; margin:auto;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="15%">&nbsp;</td>
    <td width="75%" align="center">
    <p><strong>
      SISTEMA EDUCATIVO NACIONAL <br>ACREDITACIÓN Y CERTIFICACIÓN DE EDUCACIÓN NORMAL <br>ACTA DE RESULTADOS DE EVALUACIÓN </strong>
    </p>
      </td>
    <td width="15%" align="left">&nbsp;</td>
  </tr>
</table>
<br />

<div style="border-left: solid 1px #000;
  border-top: solid 1px #000;
  border-bottom: solid 1px #000;
  border-right: solid 1px #000;padding: 10px;">

<table border="0" bordercolor="" style="background-color:" width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td>NOMBRE DEL PLANTEL:</td>
    <td colspan="4" align="center"><?=$dt_escuela['0']->nom_escuela;?></td>
    <td> </td>
  </tr>
  <tr>
    <td>CLAVE DEL C.T.:</td>
    <td colspan="4" align="center"><?=$dt_escuela['0']->clave;?></td>
    <td> </td>
  </tr>
  <tr>
    <td>LICENCIATURA EN:</td>
    <td colspan="4">
    <strong>EDUCACIÓN SECUNDARIA EN LA ESPECIALIDAD DE <?=$this->user->mi_join($dt_materia['0']->licenciatura,'especialidades','id','label');?></strong>
    </td>
    <td> </td>
  </tr>
  <tr>
    <td>NOMBRE DE MATERIA:</td>
    <td colspan="4"><?=$dt_materia['0']->materia;?> / CLAVE MATERIA: <?=$dt_materia['0']->clave_especialidad;?></td>
    <td> </td>
  </tr>
  <tr>
    <td> &nbsp;</td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>
  <tr>
    <td>ACREDETACIÓN</td>
    <td><div style="border-left: solid 1px #000;
  border-top: solid 1px #000;
  border-bottom: solid 1px #000;
  border-right: solid 1px #000;margin-right: 1em;">&nbsp;</div></td>
    <td>GRUPO: </td>
    <td></td>
    <td><div style="float:left;">HOMBRES:</div> <div div style="float: left; width: 20px; border-left: solid 1px #000; border-top: solid 1px #000; border-bottom: solid 1px #000;
  border-right: solid 1px #000; text-align: center;padding-left: 5px;
  padding-right: 5px; margin-left: 11px; ">
  <? if ($a_m_calificacion_sex_h){
    $h = 0; foreach($a_m_calificacion_sex_h as $valor):?>
    <? $valor->nombre ?>
  <?php $h++; endforeach; echo $total1 = $h; 
  }else{echo $total1 = "0";}
  ?></div></td>
    <td> </td>
  </tr>
  <tr>
    <td>REGULARIZACIÓN</td>
    <td><div style="border-left: solid 1px #000;
  border-top: solid 1px #000;
  border-bottom: solid 1px #000;
  border-right: solid 1px #000;margin-right: 1em;">&nbsp;</div></td>
    <td>TURNO:</td>
    <td></td>
    <td><div style="float:left;">MUJERES:</div> <div style="float: left; width: 20px; border-left: solid 1px #000; border-top: solid 1px #000; border-bottom: solid 1px #000;
  border-right: solid 1px #000; text-align: center;padding-left: 5px;
  padding-right: 5px; margin-left: 15px;">
  <? if ($a_m_calificacion_sex_m){
    $m = 0; foreach($a_m_calificacion_sex_m as $valor):?>
    <? $valor->nombre ?>
  <?php $m++; endforeach; echo $total2 = $m; 
  }else{echo $total2 = "0";}
  ?></div></td>
    <td> </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>SEMESTRE: <?=$dt_materia['0']->semestre;?>°</td>
    <td></td>
    <td><div style="float:left;">TOTAL:</div> <div  style="float: left; width: 20px; border-left: solid 1px #000; border-top: solid 1px #000; border-bottom: solid 1px #000;
  border-right: solid 1px #000; text-align: center;padding-left: 5px;
  padding-right: 5px; margin-left: 37px;">
      <?= $total1 + $total2;?></div></td>
    <td> </td>
  </tr>
</table>



</div>
<br />
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th rowspan="2" scope="col"><p>Núm.</p></th>
    <th rowspan="2" scope="col"><p>MATRICULA</p></th>
    <th rowspan="2" scope="col"><p>APELLIDO <br>PATERNO</p></th>
    <th rowspan="2" scope="col"><p>APELLIDO <br>MATERNO</p></th>
    <th rowspan="2" scope="col"><p>NOMBRE</p></th>
    <th colspan="2" align="center" scope="col">CALIFICACIÓN</th>
    <th rowspan="2" scope="col">% DE<br />
      ASIST.</th>
    <th rowspan="2" scope="col"><span style="font-size:9px;">ACRE-<br>DITADO</span></th>
    <th rowspan="2" scope="col"><span style="font-size:9px;">NO ACRE-<br>DITADO</span></th>
    </tr>
  <tr>
    <td width="9%" align="center"><strong>NÚMERO</strong></td>
    <td width="9%" align="center"><strong>LETRA</strong></td>
  </tr>
  <?php $n = 1; foreach($a_m_calificacion as $valor):

  switch ($eva) {
    case '0':
      $calificacion = $valor->calificacion_final;
      $asistencia = $valor->asistencia_general;
      break;
    case '1':
      $calificacion = $valor->evaluacion1;
      $asistencia = $valor->asistencia1;
      break;
    case '2':
      $calificacion = $valor->evaluacion2;
      $asistencia = $valor->asistencia2;
      break;
    case '3':
      $calificacion = $valor->evaluacion3;
      $asistencia = $valor->asistencia3;
      break;
    case '4':
      $calificacion = $valor->evaluacion4;
      $asistencia = $valor->asistencia4;
      break;

      
  }

  ?>
  <tr>
    <td align="center"><?=$n ?></td>
    <td align="center"><?=$valor->matricula ?></td>
    <td align="left">&nbsp;<?=$valor->paterno ?></td>
    <td align="left">&nbsp;<?=$valor->materno ?></td>
    <td align="left">&nbsp;<?=$valor->nombre ?></td>
    <td align="center"><?=$calificacion ?></td>
    <td align="center" style="font-size:9px;"><?= letras($calificacion); ?></td>
    <td align="center"><?=$asistencia ?></td>
    <td align="center"><? if($calificacion >= 6){echo "X";} ?></td>
    <td align="center"><? if($calificacion <= 5.9){echo "X";} ?></td>
    </tr>
    <?php $n++; endforeach;?>
</table>
<br />
<div style="clear:both; margin-bottom:1em;"></div> 
<div style="margin:auto; width:70%; text-align:center; text-transform:uppercase; font-size:11px;"><div style="padding-top:3px;"></div>
   CUAUTLANCINGO, PUEBLA., A&nbsp;<?php echo date("j")." DE ".fecha(date("n"))." DE ".date("Y"); ?></div>


<div style="text-align:center; width: 380px; float: left;">
<div style="clear:both; margin-bottom:3em;"></div>
<?=$dt_escuela['0']->responsable_control_escolar;?>
<div style="clear:both; margin-bottom:.3em;"></div>
<div style="border-top:2px solid #000; float:left; width:100%; text-align:center;">
RESPONSABLE DE CONTROL ESCOLAR
</div>
</div>

<div style="text-align:center; width: 380px; float: right;">
<div style="clear:both; margin-bottom:3em;"></div>
 <?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','nombre');?>
      <?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','paterno');?>
      <?=$this->user->mi_join($dt_materia['0']->clave_docente,'profesores','clave_docente','materno');?>
<div style="clear:both; margin-bottom:.3em;"></div>
<div style="border-top:2px solid #000; float:left; width:100%; text-align:center;">
PROFESOR (A)
</div>
</div>


<div style="text-align:center; width: 400px; margin: auto;">
<div style="clear:both; margin-bottom:3em;"></div>
<?=$dt_escuela['0']->director;?>
<div style="clear:both; margin-bottom:.3em;"></div>

<div style="border-top:2px solid #000; float:left; width:100%; text-align:center;">
DIRECTOR DEL PLANTEL
</div>
</div>


</div>
</div>
</body>
</html>