<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>titulacion">titulacion</a></li>
  <li class="unavailable"><a href="#">Vista titulacion</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        
        <div class="large-12 columns">
        
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="32%" align="center"><?php if ($dt_alumno['0']->foto == 1){ ?>
      <img src="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/foto.jpg" width="150" height="180" />
      <?php }else{ ?>
      <img src="http://placehold.it/150x180" width="150" height="180" />
      <?php }?></td>
            <td width="68%"><table width="300" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="78" bgcolor="#FFFFFF">Matricula:</td>
                <td width="222" bgcolor="#F9F9F9"><?=$dt_alumno['0']->matricula;?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Ficha:</td>
                <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->ficha;?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Semestre:</td>
                <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->semestre;?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Especialidad:</td>
                <td bgcolor="#F9F9F9"><?=$this->user->mi_join($dt_alumno['0']->clave_especialidad,'especialidades','id','label');?></td>
              </tr>
            </table>
              <table width="500" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_alumno['0']->paterno;?></td>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_alumno['0']->materno;?></td>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_alumno['0']->nombre;?></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF">Paterno</td>
                <td align="center" bgcolor="#FFFFFF">Materno</td>
                <td align="center" bgcolor="#FFFFFF">Nombre</td>
              </tr>
            </table>
              <table width="500" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_alumno['0']->curp;?></td>
                <td align="center" bgcolor="#F9F9F9"><? if($dt_alumno['0']->sexo == 1){echo "Hombre";} if($dt_alumno['0']->sexo == 2){echo "Mujer";} if($dt_alumno['0']->sexo == 3){echo "Otros";}?></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF">CURP</td>
                <td align="center" bgcolor="#FFFFFF">SEXO</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="2" align="center" bgcolor="#FFFFFF">
<table width="800" border="0" cellspacing="0" cellpadding="0">
				<tr>
                  <td width="372" bgcolor="#FFFFFF">Tema</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->tema;?></td>
                </tr>
                <tr>
                  <td width="372" bgcolor="#FFFFFF">Línea Temática</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->linea_tematica;?></td>
                </tr>
                <tr>
                  <td width="372" bgcolor="#FFFFFF">Presidente</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->presidente;?></td>
                </tr>
                <tr>
                  <td width="372" bgcolor="#FFFFFF">Cedula Presidente</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->cedulapresidente;?></td>
                </tr>
                  <tr>
                  <td bgcolor="#FFFFFF">Secretario</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->secretario;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Cedula Secretario</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->cedulasecretario;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Vocal</td>
                  <td width="428" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->vocal;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Cedula Vocal</td>
                  <td width="428" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->cedulavocal;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Suplente</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->suplente;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Cedula Suplente</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->cedulasuplente;?></td>
                </tr>
              </table>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="372" bgcolor="#FFFFFF">No. Autorización</td>
    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->no_autorizacion;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Veredicto</td>
    <td colspan="3" bgcolor="#F9F9F9">
	<?
    switch ($dt_titulacion['0']->veredicto) {
    case 1:
        echo "Unanimidad";
        break;
    case 2:
        echo "Unanimidad con Mención Honorífica";
        break;
	case 3:
        echo "Unanimidad con Felicitación";
        break;
	case 4:
        echo "Mayoría";
        break;
	case 5:
        echo "Pendiente";
        break;
	}
	?>
    </td>
  </tr>
  <?php if ($dt_titulacion['0']->veredicto == 5){ ?>
  <tr>
    <td bgcolor="#FFFFFF">Fecha Pendiente</td>
    <td width="428" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->fechapendiente;?></td>
  </tr>
  <?php }?>
  <tr>
    <td bgcolor="#FFFFFF">Promedio</td>
    <td width="428" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->promedio;?></td>
  </tr>
  </table>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="372" bgcolor="#FFFFFF">Hora</td>
    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->hora;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Salón</td>
    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->salon;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Generación</td>
    <td width="428" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->generacion;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Fecha de Titulación</td>
    <td width="428" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->fechatitulacion;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Asesor</td>
    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->asesor;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Documento</td>
    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->documento;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Ciclo Escolar</td>
    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->ciclo_escolar;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">No.Titulo</td>
    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_titulacion['0']->no_titulo;?></td>
  </tr>
</table>
<br />
              <table width="800" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="400"></td>
                  <td width="400"><?php echo form_open('titulacion/editar','class="custom"'); ?><input name="mat_post" id="mat_post" type="hidden" value="<?=$dt_alumno['0']->matricula;?>" /><input type="submit"  class="button postfix" value=" Editar Historial del Alumno "/>  </form></td>
                </tr>
              </table>
              
              </td>
            </tr>
          </table>
        </div>
     
</div>