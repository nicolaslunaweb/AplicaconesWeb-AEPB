<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Alumno</a></li>
  <li class="unavailable"><a href="#">Vista Preinscripcion</a></li>
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
            <td width="100%" colspan="2" align="center" bgcolor="#FFFFFF">
             
              
              
                  <div style=" text-align:left; margin:auto; margin-left:75px;">
                  <table width="300" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="144" bgcolor="#FFFFFF">Numero de Ficha:</td>
                <td width="156" bgcolor="#F9F9F9"><?=$dt_alumno['0']->ficha;?></td>
              </tr>
              <tr>
                <td width="144" bgcolor="#FFFFFF">Especialidad</td>
                <td width="156" bgcolor="#F9F9F9"><?=$this->user->mi_join($dt_alumno['0']->clave_especialidad,'especialidades','id','label');?></td>
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
            </table>
                  </div>
                  <table width="800" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="164" bgcolor="#FFFFFF">Dirección</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_alumno['0']->domicilio;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Municipio</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_alumno['0']->municipio;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Estado</td>
                  <td width="416" bgcolor="#F9F9F9"><?=$dt_alumno['0']->estado;?></td>
                  <td width="110" bgcolor="#FFFFFF">C.P.</td>
                  <td width="110" bgcolor="#F9F9F9"><?=$dt_alumno['0']->cp;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Teléfono Particular</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_alumno['0']->telefono_casa;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Celular</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_alumno['0']->telefono_cel;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">E-Mail</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_alumno['0']->email;?></td>
                </tr>
              </table>
              <br />
              <table width="800" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="400"></td>
                  <td width="400"><?php echo form_open('alumno/editar_preinscripcion','class="custom"'); ?><input name="ficha_post" id="ficha_post" type="hidden" value="<?=$dt_alumno['0']->ficha;?>" /><input type="submit"  class="button postfix" value=" Editar Datos del Alumno "/>  </form></td>
                </tr>
              </table>
              </td>
            </tr>
          </table>
        </div>
     
</div>