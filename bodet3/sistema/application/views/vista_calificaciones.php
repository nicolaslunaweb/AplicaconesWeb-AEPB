<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Calificaciones</a></li>
  <li class="unavailable"><a href="#">Vista Calificaciones</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
            <!-- JavaScript en http://www.pluralidad.com -->
            <?php echo form_open('calificaciones/lista_calificaciones','class="custom"'); ?>
            <input name="matricula_post" type="hidden" id="matricula_post" value="<?=$dt_alumno['0']->matricula;?>" />
            <input type="submit" class="button postfix right large-2" value=" Lista de Materias "/>
            </form>
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
                  <td width="372" bgcolor="#FFFFFF">Clave Docente</td>
                  <td colspan="3" bgcolor="#F9F9F9">
                  <? if ($doncente['0']->clave_docente){ ?>
                  <span data-tooltip class="has-tip" title="
                  <?=$doncente2['0']->nombre." ".$doncente2['0']->paterno." ".$doncente2['0']->materno;?>
                  ">
                  <?=$doncente['0']->clave_docente;?>
                  </span>
                  <? }else{echo "No hay Academico Asignado";} ?>
                  </td>
                </tr>
                  <tr>
                  <td bgcolor="#FFFFFF">Ciclo Escolar</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']->ciclo_escolar;?></td>
                </tr>
              </table>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="372" bgcolor="#FFFFFF">Materia</td>
    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']->materia;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Asistencia General</td>
    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']->asistencia_general;?></td>
  </tr>
  </table>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="25%" bgcolor="#FFFFFF">FECHA</td>
    <td width="25%" bgcolor="#FFFFFF">EVALUACIÓN</td>
    <td width="25%" bgcolor="#FFFFFF">ASISTENCIA</td>
  </tr>
  <tr>
    <td width="25%" bgcolor="#FFFFFF">1er Módulo</td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> fecha1;?></td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> evaluacion1;?></td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> asistencia1;?></td>
  </tr>
  <tr>
    <td width="25%" bgcolor="#FFFFFF">2er Módulo</td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> fecha2;?></td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> evaluacion2;?></td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> asistencia2;?></td>
  </tr>
  <tr>
    <td width="25%" bgcolor="#FFFFFF">3er Módulo</td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> fecha3;?></td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> evaluacion3;?></td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> asistencia3;?></td>
  </tr>
  <? if($dt_calificaciones['0']-> clave_especialidad == 5){ ?>
  <tr>
    <td width="25%" bgcolor="#FFFFFF">4er Módulo</td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> fecha4;?></td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> evaluacion4;?></td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> asistencia4;?></td>
  </tr>
  <?php } ?>
  <tr>
    <td width="25%" bgcolor="#FFFFFF">Promedio General</td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> calificacion_final;?></td>
    <td width="25%" bgcolor="#FFFFFF"></td>
    <td width="25%" bgcolor="#FFFFFF"></td>
    </tr>
</table>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%" bgcolor="#FFFFFF">Tipo de Examen</td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> tipo_examen;?></td>
    <td width="25%" bgcolor="#FFFFFF">Extraordinario</td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> extraordinario;?></td>
  </tr>
  <tr>
    <td width="25%" bgcolor="#FFFFFF">Fecha</td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> fecha;?></td>
    <td width="25%" bgcolor="#FFFFFF">Fecha</td>
    <td width="25%" bgcolor="#F9F9F9"><?=$dt_calificaciones['0']-> fecha_extra;?></td>
  </tr>
  </table>
<br />
              <table width="800" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="400"></td>
                  <td width="400"><?php echo form_open('calificaciones/editar','class="custom"'); ?>
                  <input name="matricula_post" id="matricula_post" type="hidden" value="<?=$dt_alumno['0']->matricula;?>" />
                  <input name="clave_materia" id="clave_materia" type="hidden" value="<?=$dt_calificaciones['0']->materia;?>" />
                  <input type="submit"  class="button postfix" value=" Editar Calificaciones del Alumno "/>  </form></td>
                </tr>
              </table>
              
              </td>
            </tr>
          </table>
        </div>
     
</div>