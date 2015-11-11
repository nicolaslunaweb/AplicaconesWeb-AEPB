<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LIBERACIÓN DE NO ADEUDO</title>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.texem7 {
	font-size:.7em;
}
</style>
</head>

<body>
<div style="width:800px; height:auto; margin:auto;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="15%"><img src="<?=base_url();?>common/img/sepa.png"/></td>
    <td width="75%" align="center"><p>&quot;<?=$dt_escuela['0']->nom_escuela;?>&quot;<br />
      <?=$dt_escuela['0']->tipo;?><br />
      ESPECIALIDAD: demo<br />
        CLAVE: <?=$dt_escuela['0']->clave;?><br />
      <strong>BOLETA DE CALIFICACIONES</strong></p></td>
    <td width="15%" align="left"><img src="<?=base_url();?>common/img/logoc.jpg"/></td>
  </tr>
</table>




<?php if($alumnos){
foreach ($alumnos as $valor): ?>

<? $dt_alumno = $this->alumnos->vista_dt_alumonos($valor->matricula); ?>

<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td width="19%">NOMBRE:</td>
    <td width="19%"><?=$dt_alumno['0']->paterno;?></td>
    <td width="19%"><?=$dt_alumno['0']->materno;?></td>
    <td width="43%"><?=$dt_alumno['0']->nombre;?></td>
  </tr>
  <tr>
    <td colspan="2">CICLO ESCOLAR DE INGRESO: </td>
    <td><?=$dt_alumno['0']->ciclo_escolar;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>MATRICULA:</td>
    <td><?=$dt_alumno['0']->matricula;?></td>
    <td colspan="2">CURP: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$dt_alumno['0']->curp;?></td>
    </tr>
  <tr>
    <td>FECHA: </td>
    <td><?php echo date("j/n/Y"); ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br />


<?php $datasemestre = $this->m_calificaciones->listar_materias($valor->matricula,$semestre) ?>
<!--   separador -->
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <th align="center" style="border-bottom:2px #000000 solid; border-top:solid #000 1px;">SEM</th>
    <th align="left" style="border-bottom:2px #000000 solid; border-top:solid #000 1px;">MATERIA</th>
    <th style="border-bottom:2px #000000 solid; border-top:solid #000 1px;">E1</th>
    <th style="border-bottom:2px #000000 solid; border-top:solid #000 1px;">%A1</th>
    <th style="border-bottom:2px #000000 solid; border-top:solid #000 1px;">E2</th>
    <th style="border-bottom:2px #000000 solid; border-top:solid #000 1px;">%A2 </th>
    <th style="border-bottom:2px #000000 solid; border-top:solid #000 1px;" >E3</th>
    <th style="border-bottom:2px #000000 solid; border-top:solid #000 1px;">%A3 </th>
    <th style="border-bottom:2px #000000 solid; border-top:solid #000 1px;">EF</th>
    <th style="border-bottom:2px #000000 solid; border-top:solid #000 1px;">%AG</th>
    <th style="border-bottom:2px #000000 solid; border-top:solid #000 1px;">FECHA </th>
    <th style="border-bottom:2px #000000 solid; border-top:solid #000 1px;">T.E.</th>
  </tr>
  <tr>
    <td height="30" align="center"><?= $semestre ?></td>
    <td colspan="11"><strong>CICLO ESCOLAR:     <?=$dt_alumno['0']->ciclo_escolar;?></strong></td>
    </tr>
    <?php $n = 0; $cal = 0;
foreach($datasemestre as $valor):?>
    <tr>
    <td>&nbsp;</td>
    <td class="texem7"><?=$valor->materia ?></td>
    <td align="center"><?=$valor->evaluacion1 ?></td>
    <td align="center"><?=$valor->asistencia1 ?></td>
    <td align="center"><?=$valor->evaluacion2 ?></td>
    <td align="center"><?=$valor->asistencia2 ?></td>
    <td align="center"><?=$valor->evaluacion3 ?></td>
    <td align="center"><?=$valor->asistencia3 ?></td>
    <td align="right" bgcolor="#CCCCCC"><? $cal += $valor->calificacion_final ?><?=$valor->calificacion_final ?></td>
    <td align="right" bgcolor="#CCCCCC"><?=$valor->asistencia_general ?></td>
    <td align="center"><? date("j/n/Y"); ?><?=$valor->fecha ?></td>
    <td align="center">ORD</td>
  </tr>
  <?php $n ++; endforeach;?>
  <tr>
    <td colspan="12"></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="texem7">&nbsp;</td>
    <td colspan="6" align="center" style="border:#000 solid 1px;"><strong>PROMEDIO SEMESTRAL</strong></td>
    <td align="right" style="border:#000 solid 1px;"><?= round($cal / $n, 1); ?></td>
    <td colspan="3" align="right">&nbsp;</td>
    </tr>
</table>
<div style="clear:both; padding-bottom:400px;"></div>
<!--   separador -->


<div style="text-align:center; padding-bottom:.5em; padding-top:.3em; width:40%; margin:auto; border-top:1px solid #000;"><strong><?=$dt_escuela['0']->director;?></strong></div>
<div style="text-align:center; padding-bottom:3em;"><strong>DIRECTOR</strong></div>
<div style="background:#CCC; padding:2px; text-align:center; width:80%; margin:auto;">Nota: En caso de tener una calificación mal registrada dirigirse al Departamento Administrativo</div>


<div style="clear:both; padding-bottom:200px;"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="15%"><img src="<?=base_url();?>common/img/sepa.png"/></td>
    <td width="75%" align="center"><p>&quot;<?=$dt_escuela['0']->nom_escuela;?>&quot;<br />
      <?=$dt_escuela['0']->tipo;?><br />
      ESPECIALIDAD: demo<br />
        CLAVE: <?=$dt_escuela['0']->clave;?><br />
      <strong>BOLETA DE CALIFICACIONES</strong></p></td>
    <td width="15%" align="left"><img src="<?=base_url();?>common/img/logoc.jpg"/></td>
  </tr>
</table>

<?php endforeach; }else{echo "<center><h1>No hay datos</h1></center>";} ?>

</div>
</body>
</html>