<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>admin">Personal</a></li>
  <li class="current"><a href="#">Profesores</a></li>
  <li class="unavailable"><a href="#">Vista Talleres Profesor</a></li>
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
            <td width="68%" align="center"><table width="800" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="78" bgcolor="#FFFFFF">Clave Profesor:</td>
                <td width="222" bgcolor="#F9F9F9"><?=$dt_prof['0']->clave_docente;?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Cedula:</td>
                <td bgcolor="#F9F9F9"><?=$dt_prof['0']->cedula;?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Tipo:</td>
                <td bgcolor="#F9F9F9"><?=$dt_prof['0']->tipo;?></td>
              </tr>
              </table>
              <table width="800" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_prof['0']->paterno;?></td>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_prof['0']->materno;?></td>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_prof['0']->nombre;?></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF">Paterno</td>
                <td align="center" bgcolor="#FFFFFF">Materno</td>
                <td align="center" bgcolor="#FFFFFF">Nombre</td>
              </tr>
            </table>
              <table width="800" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_prof['0']->curp;?></td>
                <td align="center" bgcolor="#F9F9F9"><? if($dt_prof['0']->sexo == 1){echo "Hombre";} if($dt_prof['0']->sexo == 2){echo "Mujer";} if($dt_prof['0']->sexo == 3){echo "Otros";}?></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF">CURP</td>
                <td align="center" bgcolor="#FFFFFF">SEXO</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#FFFFFF">
<table width="800" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#FFFFFF">Nivel</td>
                    <td colspan="3" bgcolor="#F9F9F9">
					<?
                  switch ($dt_talleres_prof['0']->nivel) {
								case 1: echo "Taller"; break;
								case 2: echo "Diplomado"; break;
								case 3: echo "Seminario"; break;
								case 4: echo "Técnico"; break;
								case 5: echo "Licenciatura"; break;
                case 6: echo "Maestria"; break;
                case 7: echo "Doctorado"; break;
								default: echo "No hay dato en DB"; break;
							}
				  ?></td>
                  </tr>
                  <tr>
                  <td bgcolor="#FFFFFF">Nombre</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->nombre;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Institución</td>
                  <td width="428" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->institucion;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Titulo</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->titulo;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Sedula Profecional</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->sedulaprofecional;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Horas</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->horas;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Porcentaje de Avance</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->porcentaje_de_avance;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Linea</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->linea;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Temática</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->tematica;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Municipio</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->municipio;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Ciudad</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->ciudad;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Beca</td>
                  <td colspan="3" bgcolor="#F9F9F9">
				  <?
                  switch ($dt_talleres_prof['0']->beca) {
								case 1: echo "Si"; break;
								case 2: echo "No"; break;
								default: echo "No hay dato en DB"; break;
							}
				  ?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Tipo de Beca</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->tipo_de_beca;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Institución que la Otorga</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres_prof['0']->institucion_que_la_otorga;?></td>
                </tr>
                

              </table>
<br />
              <table width="800" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="400">
                  <?php echo form_open('admin/profesor_tipo','class="custom"'); ?>
                  <input name="clave_tipo" id="clave_tipo" type="hidden" value="<?=$dt_prof['0']->clave_docente;?>" />
                  <input name="tipo_vista" id="tipo_vista" type="hidden" value="3" />
                  <input type="submit"  class="button postfix" value=" Regresar - Lista Talleres "/>  </form>
                  </td>
                  <td width="400">
				  <?php echo form_open('admin/edit_talleres_profesor','class="custom"'); ?>
                  <input name="idre" id="idre" type="hidden" value="<?=$dt_talleres_prof['0']->IDre;?>" />
                  <input name="clave_docente" id="clave_docente" type="hidden" value="<?=$dt_prof['0']->clave_docente;?>" />
                  <input type="submit"  class="button postfix" value=" Editar Taller del Profesor "/>
                  </form>
                  </td>
                </tr>
              </table>
              
            </td>
            </tr>
          </table>
        </div>
     
</div>