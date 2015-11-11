<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno/cobranza">Donaciones</a></li>
  <li class="unavailable"><a href="#">Alta Donaciones</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('alumno/cobranza_edit_sav','class="custom"'); ?>
      
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
              <? if($dt_alumno['0']->semestre != 1){ ?>
              <tr>
                <td>REINSCRIPCIÓN</td>
                <td>&nbsp;</td>
                <td><input name="reinscripcion" type="text" id="reinscripcion" onchange="myFunction('fecha_reinscripcion')" placeholder="Reinscripción" value="<?=$cobranza['0']->reinscripcion;?>" size="15" /></td>
                <td><input name="fecha_reinscripcion" type="text" id="fecha_reinscripcion" placeholder="Fecha Reinscripción" value="<?=$cobranza['0']->fecha_reinscripcion;?>" size="15" readonly="readonly" /></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <? } ?>
              <tr>
                <td>EXAMEN</td>
                <td>&nbsp;</td>
                <td><input name="examen" type="text" id="examen" placeholder="Examen" onchange="myFunction('fecha_examen')" value="<?=$cobranza['0']->examen;?>" size="15"/></td>
                <td><input name="fecha_examen" type="text" id="fecha_examen" placeholder="Fecha Examen" value="<?=$cobranza['0']->fecha_examen;?>" size="15" readonly="readonly"/></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <? if($dt_alumno['0']->semestre == 1){ ?>
              <tr>
                <td>INSCRIPCIÓN</td>
                <td>&nbsp;</td>
                <td><input name="inscripcion" type="text" id="inscripcion" onchange="myFunction('fecha_inscripcion')" placeholder="Inscripción" value="<?=$cobranza['0']->inscripcion;?>" size="15"/></td>
                <td><input name="fecha_inscripcion" type="text" id="fecha_inscripcion" placeholder="Fecha Inscripción" value="<?=$cobranza['0']->fecha_inscripcion;?>" size="15" readonly="readonly"/></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <? } ?>
              <tr>
                <td>MENSUALIDAD 1</td>
                <td>&nbsp;</td>
                <td><input name="mens1a" type="text" id="mens1a" onchange="myFunction('fecha1a')" placeholder="Mensualidad 1" value="<?=$cobranza['0']->mens1a;?>" size="15"/></td>
                <td><input name="fecha1a" type="text" id="fecha1a" placeholder="Fecha Mensualidad 1" value="<?=$cobranza['0']->fecha1a;?>" size="15" readonly="readonly"/></td>
                <td>&nbsp;</td>
                <td><input name="mens1b" type="text" id="mens1b" onchange="myFunction('fecha1b')" placeholder="Mensualidad 1" value="<?=$cobranza['0']->mens1b;?>" size="15"/></td>
                <td><input name="fecha1b" type="text" id="fecha1b" placeholder="Fecha Mensualidad 1" value="<?=$cobranza['0']->fecha1b;?>" size="15" readonly="readonly"/></td>
              </tr>
              <tr>
                <td>MENSUALIDAD 2</td>
                <td>&nbsp;</td>
                <td><input name="mens2a" type="text" id="mens2a" onchange="myFunction('fecha2a')" placeholder="Mensualidad 2" value="<?=$cobranza['0']->mens2a;?>" size="15"/></td>
                <td><input name="fecha2a" type="text" id="fecha2a" placeholder="Fecha Mensualidad 2" value="<?=$cobranza['0']->fecha2a;?>" size="15" readonly="readonly"/></td>
                <td>&nbsp;</td>
                <td><input name="mens2b" type="text" id="mens2b" onchange="myFunction('fecha2b')" placeholder="Mensualidad 2" value="<?=$cobranza['0']->mens2b;?>" size="15"/></td>
                <td><input name="fecha2b" type="text" id="fecha2b" placeholder="Fecha Mensualidad 2" value="<?=$cobranza['0']->fecha2b;?>" size="15" readonly="readonly"/></td>
              </tr>
              <tr>
                <td>MENSUALIDAD 3</td>
                <td>&nbsp;</td>
                <td><input name="mens3a" type="text" id="mens3a" onchange="myFunction('fecha3a')" placeholder="Mensualidad 3" value="<?=$cobranza['0']->mens3a;?>" size="15"/></td>
                <td><input name="fecha3a" type="text" id="fecha3a" placeholder="Fecha Mensualidad 3" value="<?=$cobranza['0']->fecha3a;?>" size="15" readonly="readonly"/></td>
                <td>&nbsp;</td>
                <td><input name="mens3b" type="text" id="mens3b" onchange="myFunction('fecha3b')" placeholder="Mensualidad 3" value="<?=$cobranza['0']->mens3b;?>" size="15"/></td>
                <td><input name="fecha3b" type="text" id="fecha3b" placeholder="Fecha Mensualidad 3" value="<?=$cobranza['0']->fecha3b;?>" size="15" readonly="readonly"/></td>
              </tr>
              <tr>
                <td>MENSUALIDAD 4</td>
                <td>&nbsp;</td>
                <td><input name="mens4a" type="text" id="mens4a" onchange="myFunction('fecha4a')" placeholder="Mensualidad 4" value="<?=$cobranza['0']->mens4a;?>" size="15"/></td>
                <td><input name="fecha4a" type="text" id="fecha4a" placeholder="Fecha Mensualidad 4" value="<?=$cobranza['0']->fecha4a;?>" size="15" readonly="readonly"/></td>
                <td>&nbsp;</td>
                <td><input name="mens4b" type="text" id="mens4b" onchange="myFunction('fecha4b')" placeholder="Mensualidad 4" value="<?=$cobranza['0']->mens4b;?>" size="15"/></td>
                <td><input name="fecha4b" type="text" id="fecha4b" placeholder="Fecha Mensualidad 4" value="<?=$cobranza['0']->fecha4b;?>" size="15" readonly="readonly"/></td>
              </tr>
              <tr>
                <td>MENSUALIDAD 5</td>
                <td>&nbsp;</td>
                <td><input name="mens5a" type="text" id="mens5a" onchange="myFunction('fecha5a')" placeholder="Mensualidad 5" value="<?=$cobranza['0']->mens5a;?>" size="15"/></td>
                <td><input name="fecha5a" type="text" id="fecha5a" placeholder="Fecha Mensualidad 5" value="<?=$cobranza['0']->fecha5a;?>" size="15" readonly="readonly"/></td>
                <td>&nbsp;</td>
                <td><input name="mens5b" type="text" id="mens5b" onchange="myFunction('fecha5b')" placeholder="Mensualidad 5" value="<?=$cobranza['0']->mens5b;?>" size="15"/></td>
                <td><input name="fecha5b" type="text" id="fecha5b" placeholder="Fecha Mensualidad 5" value="<?=$cobranza['0']->fecha5b;?>" size="15" readonly="readonly"/></td>
              </tr>
              <tr>
                <td>MENSUALIDAD 6</td>
                <td>&nbsp;</td>
                <td><input name="mens6a" type="text" id="mens6a" onchange="myFunction('fecha6a')" placeholder="Mensualidad 6" value="<?=$cobranza['0']->mens6a;?>" size="15"/></td>
                <td><input name="fecha6a" type="text" id="fecha6a" placeholder="Fecha Mensualidad 6" value="<?=$cobranza['0']->fecha6a;?>" size="15" readonly="readonly"/></td>
                <td>&nbsp;</td>
                <td><input name="mens6b" type="text" id="mens6b" onchange="myFunction('fecha6b')" placeholder="Mensualidad 6" value="<?=$cobranza['0']->mens6b;?>" size="15"/></td>
                <td><input name="fecha6b" type="text" id="fecha6b" placeholder="Fecha Mensualidad 6" value="<?=$cobranza['0']->fecha6b;?>" size="15" readonly="readonly"/></td>
              </tr>
            </table>              <br /></td>
          </tr>
        </table>
        <input name="matricula_post" type="hidden" value="<?=$dt_alumno['0']->matricula;?>" />
        <input name="semestre" type="hidden" value="<?=$dt_alumno['0']->semestre;?>" />
        <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>