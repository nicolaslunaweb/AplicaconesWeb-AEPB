<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>talleres">Talleres</a></li>
  <li class="unavailable"><a href="#">Vista Talleres</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
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
                  <td width="372" bgcolor="#FFFFFF">Nivel</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?
				  switch ($dt_talleres['0']->nivel) {
						case 1:
							echo "Taller";
							break;
						case 2:
							echo "Diplomado";
							break;
						case 3:
							echo "Maestría";
							break;
						case 4:
							echo "Doctorado";
							break;
					}
				  ?></td>
                </tr>
                <tr>
                	<td bgcolor="#FFFFFF">Fecha de Taller:</td>
                    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres['0']->fechataller;?></td>
                </tr>
                  <tr>
                  <td bgcolor="#FFFFFF">Nombre</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres['0']->nombre;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Institución</td>
                  <td width="428" bgcolor="#F9F9F9"><?=$dt_talleres['0']->institucion;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Titulo</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres['0']->titulo;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Horas</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres['0']->horas;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Porcentaje de Avance</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres['0']->porcentaje_de_avance;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Linea</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres['0']->linea;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Tematica</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres['0']->tematica;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Municipio</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres['0']->municipio;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Ciudad</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres['0']->ciudad;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Beca</td>
                  <td colspan="3" bgcolor="#F9F9F9"><? if($dt_talleres['0']->beca == 1){echo "Si";}else{echo "No";}?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Tipo de Beca</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres['0']->tipo_de_beca;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Institución que la Otorga</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_talleres['0']->institucion_que_la_otorga;?></td>
                </tr>
              </table>
<br />
              <table width="800" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="400">
                  <?php echo form_open('talleres/lista_talleres','class="custom"'); ?>
                  <input name="matricula_post" id="matricula_post" type="hidden" value="<?=$dt_alumno['0']->matricula;?>" />
                  <input type="submit"  class="button postfix" value=" Regresar - Lista Talleres "/>  </form>
                  </td>
                  <td width="400"><?php echo form_open('talleres/editar','class="custom"'); ?>
                  <input name="mat_post" id="mat_post" type="hidden" value="<?=$dt_alumno['0']->matricula;?>" />
                  <input name="relacion" id="relacion" type="hidden" value="<?=$relacion?>" />
                  <input type="submit"  class="button postfix" value=" Editar Taller del Alumno "/>  </form></td>
                </tr>
              </table>
              
              </td>
            </tr>
          </table>
        </div>
     
</div>