<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>cenval">Cenval</a></li>
  <li class="unavailable"><a href="#">Vista Ceneval</a></li>
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
                  <td width="372" bgcolor="#FFFFFF">Examen de admisión</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_ceneval['0']->examen_admision;?></td>
                </tr>
                <tr>
                  <td width="372" bgcolor="#FFFFFF">Fecha</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_ceneval['0']->fecha;?></td>
                </tr>
                  <tr>
                  <td bgcolor="#FFFFFF">Examen</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_ceneval['0']->examen;?></td>
                </tr>
                <tr>
                    <td bgcolor="#FFFFFF">Puntuación Examen</td>
                    <td bgcolor="#F9F9F9"><?=$dt_ceneval['0']->puntuaciondeexamen;?></td>
            </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Programa</td>
                  <td width="428" bgcolor="#F9F9F9"><?=$dt_ceneval['0']->programa;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Aplicador</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_ceneval['0']->aplicador;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Grupo</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_ceneval['0']->grupo;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Folio</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_ceneval['0']->folio;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Versión Selección</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_ceneval['0']->verision_seleccion;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Versión Diagnóstico</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_ceneval['0']->version_diagnostico;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Responsable</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_ceneval['0']->responsable;?></td>
                </tr>
              </table>
<br />
              <table width="800" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="400"></td>
                  <td width="400"><?php echo form_open('ceneval/editar','class="custom"'); ?><input name="mat_post" id="mat_post" type="hidden" value="<?=$dt_alumno['0']->matricula;?>" /><input type="submit"  class="button postfix" value=" Editar Ceneval del Alumno "/>  </form></td>
                </tr>
              </table>
              
            </td>
            </tr>
          </table>
        </div>
     
</div>