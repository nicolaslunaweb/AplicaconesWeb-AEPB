<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Alumno</a></li>
  <li class="unavailable"><a href="#">Vista Alumno</a></li>
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
                <td bgcolor="#FFFFFF">FICHA:</td>
                <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->ficha;?></td>
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
              <tr>
                <td align="center" bgcolor="#FFFFFF">SEMESTRE</td>
                <td align="center" bgcolor="#F9F9F9">
				<?php echo form_open('alumno/editar_reinscripcion_sav','class="custom"'); ?>
                <select id="semestre" name="semestre" class="medium">
                <option <? if($dt_alumno['0']->semestre == 0){echo "selected=\"selected\"";}?> DISABLED>Seleccionar Semestre</option>
                <option value="1" <? if($dt_alumno['0']->semestre == 1){echo "selected=\"selected\"";}?>>1er. Semestre</option>
                <option value="2" <? if($dt_alumno['0']->semestre == 2){echo "selected=\"selected\"";}?>>2do. Semestre</option>
                <option value="3" <? if($dt_alumno['0']->semestre == 3){echo "selected=\"selected\"";}?>>3er. Semestre</option>
                <option value="4" <? if($dt_alumno['0']->semestre == 4){echo "selected=\"selected\"";}?>>4to. Semestre</option>
                <option value="5" <? if($dt_alumno['0']->semestre == 5){echo "selected=\"selected\"";}?>>5to. Semestre</option>
                <option value="6" <? if($dt_alumno['0']->semestre == 6){echo "selected=\"selected\"";}?>>6to. Semestre</option>
                <option value="7" <? if($dt_alumno['0']->semestre == 7){echo "selected=\"selected\"";}?>>7mo. Semestre</option>
                <option value="8" <? if($dt_alumno['0']->semestre == 8){echo "selected=\"selected\"";}?>>8vo. Semestre</option>
                </select>
                </td>
              </tr>
              <tr>
              	<td align="center" bgcolor="#FFFFFF">Ciclo Escolar</td>
              	<td align="center" bgcolor="#F9F9F9">
      <select id="ciclo_escolar" name="ciclo_escolar" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="2012-2013" <? if($dt_alumno['0']->ciclo_escolar == '2012-2013'){echo "selected=\"selected\"";}?>>2012-2013</option>
        <option value="2013-2014" <? if($dt_alumno['0']->ciclo_escolar == '2013-2014'){echo "selected=\"selected\"";}?>>2013-2014</option>
        <option value="2014-2015" <? if($dt_alumno['0']->ciclo_escolar == '2014-2015'){echo "selected=\"selected\"";}?>>2014-2015</option>
        <option value="2015-2016" <? if($dt_alumno['0']->ciclo_escolar == '2015-2016'){echo "selected=\"selected\"";}?>>2015-2016</option>
        <option value="2016-2017" <? if($dt_alumno['0']->ciclo_escolar == '2016-2017'){echo "selected=\"selected\"";}?>>2016-2017</option>
        <option value="2017-2018" <? if($dt_alumno['0']->ciclo_escolar == '2017-2018'){echo "selected=\"selected\"";}?>>2017-2018</option>
        <option value="2018-2019" <? if($dt_alumno['0']->ciclo_escolar == '2018-2019'){echo "selected=\"selected\"";}?>>2018-2019</option>
        <option value="2019-2020" <? if($dt_alumno['0']->ciclo_escolar == '2019-2020'){echo "selected=\"selected\"";}?>>2019-2020</option>
      </select>
              </tr>
              <tr>
                <td colspan="2" align="center" bgcolor="#FFFFFF">
                <input name="matricula_post" id="matricula_post" type="hidden" value="<?=$dt_alumno['0']->matricula;?>" />
                <input type="submit"  class="button postfix" value=" Editar Datos del Alumno "/>
                </form>
                </td>
                </tr>
            </table></td>
          </tr>
          </table>
        </div>
     
</div>