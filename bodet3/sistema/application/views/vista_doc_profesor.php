<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>admin">Personal</a></li>
  <li class="current"><a href="#">Profesores</a></li>
  <li class="unavailable"><a href="#">Vista Documentos Profesor</a></li>
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

            <?php if($dt_doc_prof['0']){ ?>
            <table width="800" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#FFFFFF">RFC</td>
                    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->rfc;?></td>
                  </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Ingreso SEP</td>
                  <td width="428" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->ingreso_sep;?></td>
                </tr>
              </table>

            <table width="800" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td bgcolor="#FFFFFF">Tipo Nombramiento</td>
                  <td colspan="3" bgcolor="#F9F9F9">
				  <?
                switch ($dt_doc_prof['0']->tiponombramiento1) {
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
                  <td bgcolor="#FFFFFF">Clave Presupuestal</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->clavepresupuestal1;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Categoria / Puesto</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->categoriapuesto1;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Horas Clave</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->horasclave1;?></td>
                </tr>
                
              </table>


              <table width="800" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td bgcolor="#FFFFFF">Tipo Nombramiento</td>
                  <td colspan="3" bgcolor="#F9F9F9">
          <?
                switch ($dt_doc_prof['0']->tiponombramiento2) {
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
                  <td bgcolor="#FFFFFF">Clave Presupuestal</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->clavepresupuestal2;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Categoria / Puesto</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->categoriapuesto2;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Horas Clave</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->horasclave2;?></td>
                </tr>
                
              </table>

              <table width="800" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td bgcolor="#FFFFFF">Tipo Nombramiento</td>
                  <td colspan="3" bgcolor="#F9F9F9">
          <?
                switch ($dt_doc_prof['0']->tiponombramiento3) {
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
                  <td bgcolor="#FFFFFF">Clave Presupuestal</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->clavepresupuestal3;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Categoria / Puesto</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->categoriapuesto3;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Horas Clave</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->horasclave3;?></td>
                </tr>
                
              </table>

              <table width="800" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td bgcolor="#FFFFFF">Tipo Nombramiento</td>
                  <td colspan="3" bgcolor="#F9F9F9">
          <?
                switch ($dt_doc_prof['0']->tiponombramiento4) {
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
                  <td bgcolor="#FFFFFF">Clave Presupuestal</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->clavepresupuestal4;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Categoria / Puesto</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->categoriapuesto4;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Horas Clave</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_doc_prof['0']->horasclave4;?></td>
                </tr>
                
              </table>

              <?php }else{
				  ?>
                  <h4 align="center">No hay registros en Documentación de este Academico</h4>
                  <?php } ?>

<br />
<? if($idsession != "2"){ ?>
              <table width="800" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="400"></td>
                  <td width="400"><?php echo form_open('admin/editar_doc_profesor','class="custom"'); ?><input name="clave_docente" id="clave_docente" type="hidden" value="<?=$dt_prof['0']->clave_docente;?>" /><input type="submit"  class="button postfix" value=" Editar Perfil del Profesor "/>  </form></td>
                </tr>
              </table>
<? } ?>              
            </td>
            </tr>
          </table>
        </div>
     
</div>