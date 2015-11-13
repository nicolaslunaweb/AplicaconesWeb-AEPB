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
.bor{
	border:#000 solid 1px;
}
.borb{
	border-bottom:#000 solid 1px;
}
.tachado{text-decoration:line-through;}
</style>
</head>

<body>
<div style="width:800px; height:auto; margin:auto;">
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="142" align="right"><img src="<?=base_url();?>common/img/sep.jpg"/></td>
    <td align="center"><p>SECRETARÍA DE EDUACIÓN PÚBLICA<br />
      SUBSECRETARÍA DE EDUCACIÓN SUPERIOR<br />
      DIRECCIÓN GENERAL DE FORMACIÓN Y DESARROLLO DE DOCENTES<br />
      DIRECCIÓN DE FORMACIÓN DE DOCENTE<br />
  <strong><?=$dt_escuela['0']->tipo;?><br />
  &quot;<?=$dt_escuela['0']->nom_escuela;?>&quot;<br />
    CLAVE: <?=$dt_escuela['0']->clave;?></strong></p></td>
    <td align="left"><img src="<?=base_url();?>common/img/logoc.jpg"/></td>
  </tr>
</table>
<p align="center"><strong>COMPROBANTE DE INSCRIPCIÓN Y REINSCRIPCIÓN</strong></p>
<p align="center">&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td width="11%" valign="bottom">NOMBRE:</td>
    <td colspan="2" align="center" valign="bottom" class="borb"><?=$dt_alumno['0']->paterno;?></td>
    <td width="25%" align="center" valign="bottom" class="borb"><?=$dt_alumno['0']->materno;?></td>
    <td width="20%" align="center" valign="bottom" class="borb"><?=$dt_alumno['0']->nombre;?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="2" align="center" valign="top">APELLIDO PATERNO </td>
    <td align="center" valign="top">APELLIDO  MATERNO</td>
    <td align="center" valign="top">NOMBRE(S)</td>
  </tr>
  <tr>
    <td valign="bottom">DOMICILIO:</td>
    <td colspan="3" align="center" valign="bottom" class="borb"><?=$dt_alumno['0']->domicilio;?></td>
    <td align="center" valign="bottom" class="borb"><?=$dt_alumno['0']->estado;?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td width="22%" align="center" valign="top">CALLE</td>
    <td width="22%" align="center" valign="top"> COLONIA </td>
    <td align="center" valign="top">NÚMERO</td>
    <td align="center" valign="top">ENTIDAD  FEDERATIVA</td>
  </tr>
  <tr>
    <td height="24" valign="bottom">TELÉFONO:</td>
    <td align="center" valign="bottom" class="borb"><?=$dt_alumno['0']->telefono_cel;?></td>
    <td valign="bottom">NOMBRE  DE  LOS  PADRES:</td>
    <td colspan="2" valign="bottom" class="borb"><?=$dt_alumno['0']->nombre_tutor;?></td>
    </tr>
  <tr>
    <td height="28" colspan="2" valign="bottom">DOMICILIO  DE LOS PADRES  Y TELÉFONO:</td>
    <td colspan="3" valign="bottom" class="borb"><?=$dt_alumno['0']->domicilio_tutor;?> / <?=$dt_alumno['0']->telefono_tutor;?></td>
    </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td width="7%" height="27" valign="bottom">E- MAIL:</td>
    <td colspan="2" align="center" valign="bottom" class="borb"><?=$dt_alumno['0']->email;?></td>
    <td width="33%" align="center" valign="bottom">TEL. EN CASO DE EMERGENCIA:</td>
    <td colspan="2" align="center" valign="bottom" class="borb"><?=$dt_alumno['0']->telemergencia;?></td>
    </tr>
  <tr>
    <td height="27" valign="bottom">FECHA:</td>
    <td width="15%" align="center" valign="bottom" class="borb"><?php echo date("j")." de ".date("n")." de ".date("Y"); ?></td>
    <td colspan="2" align="center" valign="bottom">¿CUENTA CON ALGUNADISCAPACIDAD? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span <? if($dt_alumno['0']->enfermedades){echo 'class="tachado"';}?> >(SI)</span>&nbsp;&nbsp;&nbsp;<span <? if($dt_alumno['0']->enfermedades == ""){echo 'class="tachado"';}?> >(NO)</span></td>
    <td width="8%" align="center" valign="bottom">¿CUAL?</td>
    <td width="24%" align="center" valign="bottom" class="borb"><? if($dt_alumno['0']->enfermedades){echo $dt_alumno['0']-> capacidad_diferente;}?></td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="17%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="18%"> &nbsp;&nbsp;INSCRIPCIÓN</td>
    <td width="14%" align="center" class="bor"><? if($re_in == 1){echo "X";}else{echo " ";}?></td>
    <td width="23%">&nbsp;&nbsp;REINSCRIPCIÓN</td>
    <td width="13%" align="center" class="bor"><? if($re_in == 2){echo "X";}else{echo " ";}?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>ESPECIALIDAD:</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;BIOLOGÍA</td>
    <td align="center" class="bor"><? if($dt_alumno['0']->clave_especialidad  == 1){echo "X";}?></td>
    <td>&nbsp;&nbsp;ESPAÑOL</td>
    <td align="center" class="bor"><? if($dt_alumno['0']->clave_especialidad  == 2){echo "X";}?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> &nbsp;&nbsp;INGLÉS</td>
    <td align="center" class="bor"><? if($dt_alumno['0']->clave_especialidad  == 3){echo "X";}?></td>
    <td>&nbsp;&nbsp;MATEMÁTICAS</td>
    <td align="center" class="bor"><? if($dt_alumno['0']->clave_especialidad  == 4){echo "X";}?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>PRIMER  AÑO</td>
    <td align="center" class="bor"><? if($dt_alumno['0']->semestre  == 1 || $dt_alumno['0']->semestre == 2){echo "X";}?></td>
    <td> &nbsp;&nbsp;SEGUNDO  AÑO</td>
    <td align="center" class="bor"><? if($dt_alumno['0']->semestre  == 3 || $dt_alumno['0']->semestre == 4){echo "X";}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>TERCER  AÑO</td>
    <td align="center" class="bor"><? if($dt_alumno['0']->semestre  == 5 || $dt_alumno['0']->semestre == 6){echo "X";}?></td>
    <td> &nbsp;&nbsp;CUARTO  AÑO</td>
    <td align="center" class="bor"><? if($dt_alumno['0']->semestre  == 7 || $dt_alumno['0']->semestre == 8){echo "X";}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40%" height="31">&nbsp;</td>
    <td colspan="4"><strong>DOCUMENTOS  EN ORIGINAL Y COPIA</strong></td>
    </tr>
  <tr>
    <td>COMPROBANTE   DE  PAGO BANCARIO</td>
    <td width="10%" align="center" class="bor"><? if($dt_documento['0']->comprobante_de_pago_bancario == 3){echo "X";}?></td>
    <td width="5%">&nbsp;</td>
    <td width="35%">COPIA DE ACTA DE NACIMIENTO</td>
    <td width="10%" align="center" class="bor"><? if($dt_documento['0']-> acta_de_nacimiento  == 3){echo "X";}?></td>
  </tr>
  <tr>
    <td>ACTA   DE  NACIMIENTO  ORIGINAL</td>
    <td align="center" class="bor"><? if($dt_documento['0']-> acta_de_nacimiento  == 3){echo "X";}?></td>
    <td>&nbsp;</td>
    <td>COPIA  DE  CERTIFICADO  SECUNDARIA</td>
    <td align="center" class="bor"><? if($dt_documento['0']-> certificado_de_secundaria  == 3){echo "X";}?></td>
  </tr>
  <tr>
    <td>CERTIFICADO  DE SECUNDARIA  ORIGINAL</td>
    <td align="center" class="bor"><? if($dt_documento['0']-> certificado_de_secundaria  == 3){echo "X";}?></td>
    <td>&nbsp;</td>
    <td> COPIA  CERTIFICADO  BACHILLERATO</td>
    <td align="center" class="bor"><? if($dt_documento['0']-> certificado_de_bachillerato  == 3){echo "X";}?></td>
  </tr>
  <tr>
    <td>CERTIFICADO  DE BACHILLERATO  ORIGINAL</td>
    <td align="center" class="bor"><? if($dt_documento['0']-> certificado_de_bachillerato  == 3){echo "X";}?></td>
    <td>&nbsp;</td>
    <td> COPIA  CARTA  DE  BUENA  CONDUCTA</td>
    <td align="center" class="bor"><? if($dt_documento['0']-> carta_de_buena_conducta  == 3){echo "X";}?></td>
  </tr>
  <tr>
    <td>CARTA   DE  BUENA  CONDUCTA</td>
    <td align="center" class="bor"><? if($dt_documento['0']-> carta_de_buena_conducta  == 3){echo "X";}?></td>
    <td>&nbsp;</td>
    <td>COPIA   CURP</td>
    <td align="center" class="bor"><? if($dt_documento['0']->curp == 3){echo "X";}?></td>
  </tr>
  <tr>
    <td>CERTIFICADO  DE  BUENA  SALUD</td>
    <td align="center" class="bor"><? if($dt_documento['0']-> certificado_de_salud  == 3){echo "X";}?></td>
    <td>&nbsp;</td>
    <td>BOLETA   DE  CALIFICACIONES</td>
    <td align="center" class="bor"><? if($dt_documento['0']-> boleta_de_calificaciones  == 3){echo "X";}?></td>
  </tr>
  <tr>
    <td>FOTOGRAFIAS   TAMAÑO  INFANTIL</td>
    <td align="center" class="bor"><? if($dt_documento['0']-> fotografias_infantil  == 1){echo "X";}?></td>
    <td>&nbsp;</td>
    <td>OTROS</td>
    <td align="center" class="bor"><? if($dt_documento['0']->otros){echo "X";}?></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="41" colspan="5" align="center">Recibí  reglamento interior del IJTB, Normas de regularización y Acuerdo 261</td>
    </tr>
  <tr>
    <td height="58">&nbsp;</td>
    <td width="28%" align="center" valign="top" style="border-bottom:#000 solid 1px;">Recibió</td>
    <td width="5%" align="center" valign="top">&nbsp;</td>
    <td width="28%" align="center" valign="top" style="border-bottom:#000 solid 1px;">Recibió</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">Nombre  y  Firma  del  Alumno </td>
    <td align="center">&nbsp;</td>
    <td align="center">Nombre Completo  y Firma</td>
    <td align="center">&nbsp;</td>
  </tr>
</table>
</div>
</body>
</html>