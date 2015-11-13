<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LIBERACIÓN DE NO ADEUDO</title>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.rota
{
	width:200px;
	height:70px;
	margin-left:-60px;
	margin-top:75px;
	border:1px #000000 solid;
	font-size:7em;
      transform: rotate(-90deg);
      -webkit-transform: rotate(-90deg);
      -moz-transform: rotate(-90deg);
      -o-transform: rotate(-90deg);
}
.nobor{
	border:1px #FFFFFF solid;
}
.chica td{
	font-size:.7em;
}
.mediana{
	font-size:.8em;
}
.iz{
	float:left; width:715px; height:100%;
}
.de{
	float:left; width:85px; height:100%;
}
.tb{width:30px; height:20px;}
.sb{width:55px; height:20px;}
.cb{width:315px; height:23px;}

.vista{ display:block;}
.oculto{display:none;}
.print{ width:100%; height:260px;}
.printh{ width:100%; height:220px;}

</style>
</head>

<body onload="window.print(),setTimeout(window.close, 500);">
<div style="width:800px; height:auto; margin:auto;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%"><img src="<?=base_url();?>common/img/sep_.png"/></td>
    <td width="60%" align="center"><strong style="font-size:1.2em;">SISTEMA EDUCATIVO NACIONAL</strong><br />
      KARDEX DEL ALUMNO DE EDUCACIÓN NORMAL</td>
    <td width="20%" align="left">&nbsp;</td>
  </tr>
</table>
<div style="clear:both;"></div>
<div style="border:#000 solid 1px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="26" align="center" valign="bottom">NOMBRE DE LA ESCUELA:</td>
    <td colspan="2" align="center" valign="bottom" style="border-bottom:#000 solid 2px;">&quot;<?=$dt_escuela['0']->nom_escuela;?>&quot;</td>
    <td align="center" valign="bottom" style="border-bottom:#000 solid 2px;"><?=$dt_escuela['0']->clave;?></td>
  </tr>
  <tr>
    <td height="16">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="top" style="font-size:7px;">CLAVE DEL C C T</td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="border-bottom:#000 solid 1px;"><?=$dt_alumno['0']->municipio;?> </td>
    <td align="center" style="border-bottom:#000 solid 1px;"><?=$dt_alumno['0']->estado;?></td>
    <td align="center" style="border-bottom:#000 solid 1px;"><?=$dt_alumno['0']->curp;?></td>
  </tr>
  <tr class="chica">
    <td height="17" colspan="2" align="center" valign="top">MUNICIPIO O DELEGACIÓN POLÍTICA </td>
    <td align="center" valign="top">ENTIDAD FEDERATIVA </td>
    <td align="center" valign="top">CLAVE ÚNICA DE REGISTRO DE POBLACIÓN(CURP)</td>
  </tr>
  <tr>
    <td height="17" colspan="2" align="center" valign="bottom" style="border-bottom:#000 solid 1px;"><?=$dt_alumno['0']->paterno;?></td>
    <td align="center" valign="bottom" style="border-bottom:#000 solid 1px;"><?=$dt_alumno['0']->materno;?></td>
    <td align="center" valign="bottom" style="border-bottom:#000 solid 1px;"><?=$dt_alumno['0']->nombre;?></td>
  </tr>
  <tr class="chica">
    <td colspan="2" align="center">PRIMER APELLIDO</td>
    <td align="center">SEGUNDO APELLIDO</td>
    <td align="center"> NOMBRE(S)</td>
  </tr>
  <tr>
    <td colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="70%" height="19" align="center" valign="bottom"  style="border-bottom:#000 solid 1px;">LICENCIATURA EN EDUCACIÓN SECUNDARIA EN LA ESPECIALIDAD DE <?=$this->user->mi_join($dt_alumno['0']->clave_especialidad,'especialidades','id','label');?></td>
        <td width="18%" align="center" valign="bottom"  style="border-bottom:#000 solid 1px;">ESCOLARIZADA</td>
        <td width="12%" align="center" valign="bottom"  style="border-bottom:#000 solid 1px;"><?=$dt_alumno['0']->matricula;?></td>
      </tr>
      <tr class="chica">
        <td colspan="2" align="center">LICENCIATURA Y MODALIDAD</td>
        <td align="center">MATRICULA</td>
      </tr>
    </table></td>
    </tr>
</table></div>
<div style="clear:both; padding-bottom:10px;"></div>

<!---------------------------------------- separacion de semestres-------------------------------------------------->
<div class="iz">
<!---col1-->
      <table width="100%" border="1" cellspacing="0" cellpadding="0" class="chica">
        <tr>
          <td colspan="4" class="nobor">&nbsp;</td>
          <td colspan="6" class="nobor">FECHA DE BAJA</td>
          </tr>
        <tr>
          <td colspan="2" class="nobor">I SEMESTRE   PERIODO ESCOLAR <?=$dt_alumno['0']->ciclo_escolar;?></td>
          <td align="center" class="nobor">GRUPO</td>
          <td align="center" class="nobor"><strong>&quot;A&quot;</strong></td>
          <td colspan="3">TEMPORAL</td>
          <td colspan="3">DEFINITIVA</td>
          </tr>
        <tr>
          <td rowspan="2" align="center">CLAVE</td>
          <td rowspan="2" align="center">ASIGNATURAS</td>
          <td rowspan="2" align="center">CALIFI<br />
            CACIÓN<br />
            FINAL</td>
          <td rowspan="2" align="center">%  DE<br />
            ASIST.</td>
          <td colspan="6" align="center">PERIODO DE REGULARIZACIÓN</td>
          </tr>
        <tr>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          </tr>
          <?php
foreach($m_primer as $valor):?>
          <tr>
          <td align="center"><div class="tb"><?=$valor->clave_especialidad ?></div></td>
          <td><div class="cb"><?=$valor->materia ?></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          </tr>
          <?php endforeach;?>
  </table>
      <!---col1-->
</div>
<div class="de">
	  <!---col2-->
      <div class="rota">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="3" align="center" style="font-size:7px;">REVISADO Y CONFRONTADO</td>
        </tr>
        <tr>
          <td colspan="3"><div style="padding-top:2em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"><div style="border-bottom:#000 solid 1px; margin-left:1em; margin-right:1em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">AÑO</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">MES</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">DÍA</td>
          </tr>
      </table>
      </div>
      <!---col2-->
</div>
<div style="clear:both;"></div>
<!---------------------------------------- separacion de semestres-------------------------------------------------->



<!---------------------------------------- separacion de semestres-------------------------------------------------->
<div class="iz">
<!---col1-->
      <table width="100%" border="1" cellspacing="0" cellpadding="0" class="chica">
        <tr>
          <td colspan="4" class="nobor">&nbsp;</td>
          <td colspan="6" class="nobor">FECHA DE BAJA</td>
          </tr>
        <tr>
          <td colspan="2" class="nobor">II SEMESTRE   PERIODO ESCOLAR <?=$dt_alumno['0']->ciclo_escolar;?></td>
          <td align="center" class="nobor">GRUPO</td>
          <td align="center" class="nobor"><strong>&quot;A&quot;</strong></td>
          <td colspan="3">TEMPORAL</td>
          <td colspan="3">DEFINITIVA</td>
          </tr>
        <tr>
          <td rowspan="2" align="center">CLAVE</td>
          <td rowspan="2" align="center">ASIGNATURAS</td>
          <td rowspan="2" align="center">CALIFI<br />
            CACIÓN<br />
            FINAL</td>
          <td rowspan="2" align="center">%  DE<br />
            ASIST.</td>
          <td colspan="6" align="center">PERIODO DE REGULARIZACIÓN</td>
          </tr>
        <tr>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          </tr>
          <?php
foreach($m_segundo as $valor):?>
          <tr>
          <td align="center"><div class="tb"><?=$valor->clave_especialidad ?></div></td>
          <td><div class="cb"><?=$valor->materia ?></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          </tr>
          <?php endforeach;?>
  </table>
      <!---col1-->
</div>
<div class="de">
	  <!---col2-->
      <div class="rota">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="3" align="center" style="font-size:7px;">REVISADO Y CONFRONTADO</td>
        </tr>
        <tr>
          <td colspan="3"><div style="padding-top:2em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"><div style="border-bottom:#000 solid 1px; margin-left:1em; margin-right:1em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">AÑO</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">MES</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">DÍA</td>
          </tr>
      </table>
      </div>
      <!---col2-->
</div>
<div style="clear:both;"></div>
<!---------------------------------------- separacion de semestres-------------------------------------------------->


<!---------------------------------------- separacion de semestres-------------------------------------------------->
<div class="iz">
<!---col1-->
      <table width="100%" border="1" cellspacing="0" cellpadding="0" class="chica">
        <tr>
          <td colspan="4" class="nobor">&nbsp;</td>
          <td colspan="6" class="nobor">FECHA DE BAJA</td>
          </tr>
        <tr>
          <td colspan="2" class="nobor">III SEMESTRE   PERIODO ESCOLAR <?=$dt_alumno['0']->ciclo_escolar;?></td>
          <td align="center" class="nobor">GRUPO</td>
          <td align="center" class="nobor"><strong>&quot;A&quot;</strong></td>
          <td colspan="3">TEMPORAL</td>
          <td colspan="3">DEFINITIVA</td>
          </tr>
        <tr>
          <td rowspan="2" align="center">CLAVE</td>
          <td rowspan="2" align="center">ASIGNATURAS</td>
          <td rowspan="2" align="center">CALIFI<br />
            CACIÓN<br />
            FINAL</td>
          <td rowspan="2" align="center">%  DE<br />
            ASIST.</td>
          <td colspan="6" align="center">PERIODO DE REGULARIZACIÓN</td>
          </tr>
        <tr>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          </tr>
          <?php
foreach($m_terser as $valor):?>
          <tr>
          <td align="center"><div class="tb"><?=$valor->clave_especialidad ?></div></td>
          <td><div class="cb"><?=$valor->materia ?></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          </tr>
          <?php endforeach;?>
  </table>
      <!---col1-->
</div>
<div class="de">
	  <!---col2-->
      <div class="rota">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="3" align="center" style="font-size:7px;">REVISADO Y CONFRONTADO</td>
        </tr>
        <tr>
          <td colspan="3"><div style="padding-top:2em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"><div style="border-bottom:#000 solid 1px; margin-left:1em; margin-right:1em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">AÑO</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">MES</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">DÍA</td>
          </tr>
      </table>
      </div>
      <!---col2-->
</div>
<div style="clear:both;"></div>
<!---------------------------------------- separacion de semestres-------------------------------------------------->



<!---------------------------------------- separacion de semestres-------------------------------------------------->
<div class="iz">
<!---col1-->
      <table width="100%" border="1" cellspacing="0" cellpadding="0" class="chica">
        <tr>
          <td colspan="4" class="nobor">&nbsp;</td>
          <td colspan="6" class="nobor">FECHA DE BAJA</td>
          </tr>
        <tr>
          <td colspan="2" class="nobor">IV SEMESTRE   PERIODO ESCOLAR <?=$dt_alumno['0']->ciclo_escolar;?></td>
          <td align="center" class="nobor">GRUPO</td>
          <td align="center" class="nobor"><strong>&quot;A&quot;</strong></td>
          <td colspan="3">TEMPORAL</td>
          <td colspan="3">DEFINITIVA</td>
          </tr>
        <tr>
          <td rowspan="2" align="center">CLAVE</td>
          <td rowspan="2" align="center">ASIGNATURAS</td>
          <td rowspan="2" align="center">CALIFI<br />
            CACIÓN<br />
            FINAL</td>
          <td rowspan="2" align="center">%  DE<br />
            ASIST.</td>
          <td colspan="6" align="center">PERIODO DE REGULARIZACIÓN</td>
          </tr>
        <tr>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          </tr>
          <?php
foreach($m_cuarto as $valor):?>
          <tr>
          <td align="center"><div class="tb"><?=$valor->clave_especialidad ?></div></td>
          <td><div class="cb"><?=$valor->materia ?></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          </tr>
          <?php endforeach;?>
  </table>
      <!---col1-->
</div>
<div class="de">
	  <!---col2-->
      <div class="rota">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="3" align="center" style="font-size:7px;">REVISADO Y CONFRONTADO</td>
        </tr>
        <tr>
          <td colspan="3"><div style="padding-top:2em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"><div style="border-bottom:#000 solid 1px; margin-left:1em; margin-right:1em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">AÑO</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">MES</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">DÍA</td>
          </tr>
      </table>
      </div>
      <!---col2-->
</div>
<div style="clear:both; padding-bottom:30px;"></div>
<!---------------------------------------- separacion de semestres-------------------------------------------------->


<!---------------------------------------- separacion de semestres-------------------------------------------------->
<div class="iz">
<!---col1-->
      <table width="100%" border="1" cellspacing="0" cellpadding="0" class="chica">
        <tr>
          <td colspan="4" class="nobor">&nbsp;</td>
          <td colspan="6" class="nobor">FECHA DE BAJA</td>
          </tr>
        <tr>
          <td colspan="2" class="nobor">V SEMESTRE   PERIODO ESCOLAR <?=$dt_alumno['0']->ciclo_escolar;?></td>
          <td align="center" class="nobor">GRUPO</td>
          <td align="center" class="nobor"><strong>&quot;A&quot;</strong></td>
          <td colspan="3">TEMPORAL</td>
          <td colspan="3">DEFINITIVA</td>
          </tr>
        <tr>
          <td rowspan="2" align="center">CLAVE</td>
          <td rowspan="2" align="center">ASIGNATURAS</td>
          <td rowspan="2" align="center">CALIFI<br />
            CACIÓN<br />
            FINAL</td>
          <td rowspan="2" align="center">%  DE<br />
            ASIST.</td>
          <td colspan="6" align="center">PERIODO DE REGULARIZACIÓN</td>
          </tr>
        <tr>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          </tr>
          <?php
foreach($m_quinto as $valor):?>
          <tr>
          <td align="center"><div class="tb"><?=$valor->clave_especialidad ?></div></td>
          <td><div class="cb"><?=$valor->materia ?></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          </tr>
          <?php endforeach;?>
  </table>
      <!---col1-->
</div>
<div class="de">
	  <!---col2-->
      <div class="rota">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="3" align="center" style="font-size:7px;">REVISADO Y CONFRONTADO</td>
        </tr>
        <tr>
          <td colspan="3"><div style="padding-top:2em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"><div style="border-bottom:#000 solid 1px; margin-left:1em; margin-right:1em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">AÑO</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">MES</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">DÍA</td>
          </tr>
      </table>
      </div>
      <!---col2-->
</div>
<div style="clear:both;"></div>
<!---------------------------------------- separacion de semestres-------------------------------------------------->



<!---------------------------------------- separacion de semestres-------------------------------------------------->
<div class="iz">
<!---col1-->
      <table width="100%" border="1" cellspacing="0" cellpadding="0" class="chica">
        <tr>
          <td colspan="4" class="nobor">&nbsp;</td>
          <td colspan="6" class="nobor">FECHA DE BAJA</td>
          </tr>
        <tr>
          <td colspan="2" class="nobor">VI SEMESTRE   PERIODO ESCOLAR <?=$dt_alumno['0']->ciclo_escolar;?></td>
          <td align="center" class="nobor">GRUPO</td>
          <td align="center" class="nobor"><strong>&quot;A&quot;</strong></td>
          <td colspan="3">TEMPORAL</td>
          <td colspan="3">DEFINITIVA</td>
          </tr>
        <tr>
          <td rowspan="2" align="center">CLAVE</td>
          <td rowspan="2" align="center">ASIGNATURAS</td>
          <td rowspan="2" align="center">CALIFI<br />
            CACIÓN<br />
            FINAL</td>
          <td rowspan="2" align="center">%  DE<br />
            ASIST.</td>
          <td colspan="6" align="center">PERIODO DE REGULARIZACIÓN</td>
          </tr>
        <tr>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          <td align="center">FECHA</td>
          <td align="center">CALIF.</td>
          </tr>
          <?php
foreach($m_sexto as $valor):?>
          <tr>
          <td align="center"><div class="tb"><?=$valor->clave_especialidad ?></div></td>
          <td><div class="cb"><?=$valor->materia ?></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          <td align="center"><div class="sb"></div></td>
          <td align="center"><div class="tb"></div></td>
          </tr>
          <?php endforeach;?>
  </table>
      <!---col1-->
</div>
<div class="de">
	  <!---col2-->
      <div class="rota">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="3" align="center" style="font-size:7px;">REVISADO Y CONFRONTADO</td>
        </tr>
        <tr>
          <td colspan="3"><div style="padding-top:2em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
          <td width="33%" align="center" style="font-size:7px;">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"><div style="border-bottom:#000 solid 1px; margin-left:1em; margin-right:1em;"></div></td>
        </tr>
        <tr>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">AÑO</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">MES</td>
          <td width="33%" align="center" style="padding-top:.2em; font-size:7px;">DÍA</td>
          </tr>
      </table>
      </div>
      <!---col2-->
</div>
<div style="clear:both;"></div>
<!---------------------------------------- separacion de semestres-------------------------------------------------->


<!---------------------------------------- separacion de semestres-------------------------------------------------->

<!---------------------------------------- separacion de semestres-------------------------------------------------->

<!----- fin para firma y sello--->
<div style="clear:both; padding-bottom:2em;"></div>
<div style="float:left; width:40%; margin-left:2%; margin-right:2%; height:50px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">MTRO. DANTE NEFTALI NOLASCO HERNANDEZ</td>
  </tr>
  <tr>
    <td align="center" style="border-top:1px #000000 solid;">DIRECTOR DE LA ESCUELA</td>
  </tr>
</table>
</div>
<div style="float:left; width:18%; margin-right:2%; height:50px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="border-bottom:#000 solid 1px; border-left:#000 solid 1px; height:40px;">&nbsp;</td>
    <td width="40%" align="center" valign="bottom"> SELLO </td>
    <td style="border-bottom:#000 solid 1px; border-right:#000 solid 1px; height:40px;">&nbsp;</td>
  </tr>
</table>
</div>
<div style="float:left; width:36%; height:50px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="55%">PROMEDIO GENERAL<br />
DE APROVECHAMIENTO</td>
    <td align="center" style="border:1px #000 solid;">demo</td>
  </tr>
</table>
</div>
<div style="clear:both;"></div>
<!----- fin para firma y sello--->


</div>
</body>
</html>