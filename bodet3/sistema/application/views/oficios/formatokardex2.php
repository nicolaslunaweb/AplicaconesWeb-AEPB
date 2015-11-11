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

.hea{ width:100%; height:74px;}
.hea2{ width:100%; height:63px;}


.print{ width:100%; height:260px;}
.printh{ width:100%; height:220px;}

table td{border:#fff solid 1px;}
</style>
</head>

<body onload="window.print(),setTimeout(window.close, 500);">
<div style="width:800px; height:auto; margin:auto;">
<div style="clear:both; padding-bottom:200px;"></div>

<? if($sem == 1){ ?>
<!---------------------------------------- separacion de semestres-------------------------------------------------->
<div class="iz">
<!---col1-->
<div class="hea"></div>
<table width="100%" cellspacing="0" cellpadding="0" class="chica">
          <?php
foreach($m_primer as $valor):?>
          <tr>
          <td align="center"><div class="tb"></div></td>
          <td><div class="cb"></div></td>
          <td align="center"><div class="tb"><?=$valor->calificacion_final ?></div></td>
          <td align="center"><div class="tb"><?=$valor->asistencia_general ?></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha1 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion1 ?> --></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha2 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion2 ?> --></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha3 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion3 ?> --></div></td>
          </tr>
          <?php endforeach;?>
  </table>      
<!---col1-->
</div>
<div style="clear:both;"></div>
<!---------------------------------------- separacion de semestres-------------------------------------------------->
<? }else{ ?>
  <div style="width:100%; height: 219px;"></div>
<? } ?>


<? if($sem == 2){ ?>
<!---------------------------------------- separacion de semestres-------------------------------------------------->
<div class="iz">
<!---col1-->
<div style="padding-bottom:60px;"></div>
      <table width="100%" cellspacing="0" cellpadding="0" class="chica">
          <?php
foreach($m_segundo as $valor):?>
          <tr>
          <td align="center"><div class="tb"></div></td>
          <td><div class="cb"></div></td>
          <td align="center"><div class="tb"><?=$valor->calificacion_final ?></div></td>
          <td align="center"><div class="tb"><?=$valor->asistencia_general ?></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha1 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion1 ?> --></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha2 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion2 ?> --></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha3 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion3 ?> --></div></td>
          </tr>
          <?php endforeach;?>
  </table>
      <!---col1-->
</div>
<div style="clear:both;"></div>
<!---------------------------------------- separacion de semestres-------------------------------------------------->
<? }else{ ?>
  <div style="width:100%; height: 236px;"></div>
<? } ?>


<? if($sem == 3){ ?>
<!---------------------------------------- separacion de semestres-------------------------------------------------->
<div class="iz">
<!---col1-->
<div style="padding-bottom:55px;"></div>
      <table width="100%" cellspacing="0" cellpadding="0" class="chica">
          <?php
foreach($m_terser as $valor):?>
          <tr>
          <td align="center"><div class="tb"></div></td>
          <td><div class="cb"></div></td>
          <td align="center"><div class="tb"><?=$valor->calificacion_final ?></div></td>
          <td align="center"><div class="tb"><?=$valor->asistencia_general ?></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha1 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion1 ?> --></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha2 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion2 ?> --></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha3 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion3 ?> --></div></td>
          </tr>
          <?php endforeach;?>
  </table>
      <!---col1-->
</div>
<div style="clear:both;"></div>
<!---------------------------------------- separacion de semestres-------------------------------------------------->
<? }else{ ?>
  <div style="width:100%; height: 233px;"></div>
<? } ?>


<? if($sem == 4){ ?>
<!---------------------------------------- separacion de semestres-------------------------------------------------->
<div class="iz">
<!---col1-->
<div style="padding-bottom:66px;"></div>
      <table width="100%" cellspacing="0" cellpadding="0" class="chica">
          <?php
foreach($m_cuarto as $valor):?>
          <tr>
          <td align="center"><div class="tb"></div></td>
          <td><div class="cb"></div></td>
          <td align="center"><div class="tb"><?=$valor->calificacion_final ?></div></td>
          <td align="center"><div class="tb"><?=$valor->asistencia_general ?></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha1 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion1 ?> --></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha2 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion2 ?> --></div></td>
          <td align="center"><div class="sb"><!-- < ? =$valor->fecha3 ?> --></div></td>
          <td align="center"><div class="tb"><!-- < ? =$valor->evaluacion3 ?> --></div></td>
          </tr>
          <?php endforeach;?>
  </table>
      <!---col1-->
</div>
<!---------------------------------------- separacion de semestres-------------------------------------------------->
<? } ?>


</div>
</body>
</html>