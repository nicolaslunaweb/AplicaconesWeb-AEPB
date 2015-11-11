<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno/cobranza">Cobranza</a></li>
  <li class="unavailable"><a href="#">Alta Cobranza</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        
      
<script>
function myFunction(inputname)
{
var f = new Date();
document.getElementById(inputname).value = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
}
</script> 
        
     
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
                <td bgcolor="#FFFFFF">Especialidad:</td>
                <td bgcolor="#F9F9F9"><?=$this->user->mi_join($dt_alumno['0']->clave_especialidad,'especialidades','id','label');?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Semestre:</td>
                <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->semestre;?></td>
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
            <td colspan="2" align="center" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">IMPORTE</td>
                <td align="center">FECHA</td>
                <td>&nbsp;</td>
                <td align="center">IMPORTE</td>
                <td align="center">FECHA</td>
              </tr>
              <tr>
                <td>REINSCRIPCIÓN</td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->reinscripcion;?></td>
                <td><?=$cobranza['0']->fecha_reinscripcion;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>EXAMEN</td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->examen;?></td>
                <td><?=$cobranza['0']->fecha_examen;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>INSCRIPCIÓN</td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->inscripcion;?></td>
                <td><?=$cobranza['0']->fecha_inscripcion;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>MENSUALIDAD 1</td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens1a;?></td>
                <td><?=$cobranza['0']->fecha1a;?></td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens1b;?></td>
                <td><?=$cobranza['0']->fecha1b;?></td>
              </tr>
              <tr>
                <td>MENSUALIDAD 2</td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens2a;?></td>
                <td><?=$cobranza['0']->fecha2a;?></td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens2b;?></td>
                <td><?=$cobranza['0']->fecha2b;?></td>
              </tr>
              <tr>
                <td>MENSUALIDAD 3</td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens3a;?></td>
                <td><?=$cobranza['0']->fecha3a;?></td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens3b;?></td>
                <td><?=$cobranza['0']->fecha3b;?></td>
              </tr>
              <tr>
                <td>MENSUALIDAD 4</td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens4a;?></td>
                <td><?=$cobranza['0']->fecha4a;?></td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens4b;?></td>
                <td><?=$cobranza['0']->fecha4b;?></td>
              </tr>
              <tr>
                <td>MENSUALIDAD 5</td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens5a;?></td>
                <td><?=$cobranza['0']->fecha5a;?></td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens5b;?></td>
                <td><?=$cobranza['0']->fecha5b;?></td>
              </tr>
              <tr>
                <td>MENSUALIDAD 6</td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens6a;?></td>
                <td><?=$cobranza['0']->fecha6a;?></td>
                <td>&nbsp;</td>
                <td><?=$cobranza['0']->mens6b;?></td>
                <td><?=$cobranza['0']->fecha6b;?></td>
              </tr>
            </table>              <br /></td>
          </tr>
        </table>
        <?php echo form_open('alumno/cobranza_edit','class="custom"'); ?>
        <input name="matricula_post" type="hidden" value="<?=$dt_alumno['0']->matricula;?>" />
        <input type="submit"  class="button postfix" value=" Editar Datos "/>  
      </div>
      </form>
</div>