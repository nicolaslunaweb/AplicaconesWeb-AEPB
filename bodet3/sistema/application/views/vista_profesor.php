<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>admin">Personal</a></li>
  <li class="current"><a href="#">Profesores</a></li>
  <li class="unavailable"><a href="#">Vista Profesor</a></li>
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
                  <td width="372" bgcolor="#FFFFFF">Domicilio</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->domicilio;?></td>
                </tr>
                  <tr>
                    <td bgcolor="#FFFFFF">Colonia</td>
                    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->colonia;?></td>
                  </tr>
                  <tr>
                  <td bgcolor="#FFFFFF">Municipio</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->municipio;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Estado</td>
                  <td width="428" bgcolor="#F9F9F9"><?=$dt_prof['0']->estado;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Teléfono de Casa</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->telefono_casa;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Teléfono Cel.</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->telefono_cel;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Email</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->email;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Fecha de Nacimiento</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->fecha_nacimiento;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Estado Civil</td>
                  <td colspan="3" bgcolor="#F9F9F9">
				  <?
                  switch ($dt_prof['0']->estado_civil) {
								case 1:
									echo "Soltero";
									break;
								case 2:
									echo "Casado";
									break;
								case 3:
									echo "Divorciado";
									break;
								case 4:
									echo "Viudo";
									break;
								default:
									echo "No hay dato en DB";
									break;
							}
				  ?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Teléfono Trabajo</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->telefono_trabajo;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Perfil</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->perfil;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Fecha Ingreso</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->fecha_ingreso;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Horario Laboral</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->horario_laboral;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Funciones</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->funciones;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Lengua</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->lengua;?></td>
                </tr>
                
                <tr>
                  <td bgcolor="#FFFFFF">R.F.C.</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->rfc;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Clave Presupuestal</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->clave_presupuestal;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Tipo Nombramiento</td>
                  <td colspan="3" bgcolor="#F9F9F9">
                    <?
                switch ($dt_prof['0']->tipo_nombramiento) {
                case 1: echo "Tiempo Completo"; break;
                case 2: echo "Medio Tiempo"; break;
                case 3: echo "3/4 Tiempo Asiciado B"; break;
                case 4: echo "3/4 Tiempo Asociado C"; break;
                case 5: echo "Horas Asignatura B"; break;
                case 6: echo "Horas Asignatura C"; break;
                case 7: echo "Interinos"; break;
                case 8: echo "Recursos propios"; break;
                default: echo "No hay dato en DB"; break;
              }
          ?>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Categoría</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->categoria;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Grado</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->grado;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Grupo</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->grupo;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Escolaridad</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_prof['0']->escolaridad;?></td>
                </tr>
                
              </table>
<br /> 	
<? if($idsession >= "3"){ ?>
              <table width="800" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="400"></td>
                  <td width="400"><?php echo form_open('admin/editar_profesor','class="custom"'); ?><input name="clave_docente" id="clave_docente" type="hidden" value="<?=$dt_prof['0']->clave_docente;?>" /><input type="submit"  class="button postfix" value=" Editar Perfil del Profesor "/>  </form></td>
                </tr>
              </table>
<? }?>              
            </td>
            </tr>
          </table>
        </div>
     
</div>