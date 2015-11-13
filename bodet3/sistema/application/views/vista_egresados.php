<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>egresados">Egresados</a></li>
  <li class="unavailable"><a href="#">Vista Egresados</a></li>
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
                  <td width="372" bgcolor="#FFFFFF">Fecha</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_egresados['0']->fecha;?></td>
                </tr>
                <tr>
                  <td width="372" bgcolor="#FFFFFF">Semestres Cursados</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_egresados['0']->semestrescursados;?></td>
                </tr>
                  <tr>
                  <td bgcolor="#FFFFFF">E-mail</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_egresados['0']->email;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Teléfono</td>
                  <td width="428" bgcolor="#F9F9F9"><?=$dt_egresados['0']->telefono;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Celular</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_egresados['0']->celular;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Empleo</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_egresados['0']->empleo;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Institución</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_egresados['0']->institucion;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Tipo</td>
                  <td colspan="3" bgcolor="#F9F9F9">
				  <? if($dt_egresados['0']->tipo == 1){echo "Privada";} ?>
                  <? if($dt_egresados['0']->tipo == 2){echo "Publica";} ?>
                  <? if($dt_egresados['0']->tipo == 3){echo "Otras";} ?>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Dirección</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_egresados['0']->direccion;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Director</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_egresados['0']->director;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Puesto</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_egresados['0']->puesto;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">¿Tienes horas frente a grupo?</td>
                  <td colspan="3" bgcolor="#F9F9F9"><? if($dt_egresados['0']->hrs_grupo == 1){echo "Si";}else{echo "No";}?></td>
                </tr>
              </table>
<br />
              <table width="800" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="400"></td>
                  <td width="400"><?php echo form_open('egresados/editar','class="custom"'); ?><input name="mat_post" id="mat_post" type="hidden" value="<?=$dt_alumno['0']->matricula;?>" /><input type="submit"  class="button postfix" value=" Editar Egresado "/>  </form></td>
                </tr>
              </table>
              
              </td>
            </tr>
          </table>
        </div>
     
</div>