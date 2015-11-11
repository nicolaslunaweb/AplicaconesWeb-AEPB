<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Documentacion</a></li>
  <li class="unavailable"><a href="#">Vista Documentacion</a></li>
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
            </table>
            </td>
          </tr>
          <tr>
         <td colspan="2" align="center" bgcolor="#FFFFFF"><table width="800" border="0" cellspacing="0" cellpadding="0">
              <tr>
            </table>
             
              <table width="100%" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Comprobante de pago Bancario</td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->comprobante_de_pago_bancario  == 1){echo "style=\"color:#900;\"";}?>>Original</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->comprobante_de_pago_bancario  == 2){echo "style=\"color:#900;\"";}?>>Copia </span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->comprobante_de_pago_bancario  == 3){echo "style=\"color:#900;\"";}?>>Ambos</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->comprobante_de_pago_bancario  == 4){echo "style=\"color:#900;\"";}?>>Prestado</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->comprobante_de_pago_bancario  == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span> <? if($dt_documentacion['0']->comprobante_de_pago_bancario  != 0) {?><a href="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/1.jpg" target="_blank">Ver</a><?php }else{echo"Sin Documento";}?></span></td>
                </tr>         
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Acta de Nacimiento </td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->acta_de_nacimiento == 1){echo "style=\"color:#900;\"";}?>>Original</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->acta_de_nacimiento == 2){echo "style=\"color:#900;\"";}?>>Copia </span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->acta_de_nacimiento == 3){echo "style=\"color:#900;\"";}?>>Ambos</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->acta_de_nacimiento == 4){echo "style=\"color:#900;\"";}?>>Prestado</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->acta_de_nacimiento == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span> <? if($dt_documentacion['0']->acta_de_nacimiento  != 0) {?><a href="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/2.jpg" target="_blank">Ver</a><?php }else{echo"Sin Documento";}?></span></td>
                </tr>        
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Certificado de Secundaria</td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_secundaria  == 1){echo "style=\"color:#900;\"";}?>>Original</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_secundaria  == 2){echo "style=\"color:#900;\"";}?>>Copia </span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_secundaria  == 3){echo "style=\"color:#900;\"";}?>>Ambos</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_secundaria  == 4){echo "style=\"color:#900;\"";}?>>Prestado</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_secundaria  == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span> <? if($dt_documentacion['0']->certificado_de_secundaria  != 0) {?><a href="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/3.jpg" target="_blank">Ver</a><?php }else{echo"Sin Documento";}?></span></td>
                </tr>        
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Certificado de Bachillerato</td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_bachillerato   == 1){echo "style=\"color:#900;\"";}?>>Original</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_bachillerato   == 2){echo "style=\"color:#900;\"";}?>>Copia </span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_bachillerato   == 3){echo "style=\"color:#900;\"";}?>>Ambos</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_bachillerato   == 4){echo "style=\"color:#900;\"";}?>>Prestado</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_bachillerato   == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span> <? if($dt_documentacion['0']->certificado_de_bachillerato  != 0) {?><a href="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/4.jpg" target="_blank">Ver</a><?php }else{echo"Sin Documento";}?></span></td>
                </tr>         
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Carta de Buena Conducta</td>
                 <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->carta_de_buena_conducta    == 1){echo "style=\"color:#900;\"";}?>>Original</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->carta_de_buena_conducta    == 2){echo "style=\"color:#900;\"";}?>>Copia </span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->carta_de_buena_conducta    == 3){echo "style=\"color:#900;\"";}?>>Ambos</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->carta_de_buena_conducta  == 4){echo "style=\"color:#900;\"";}?>>Prestado</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->carta_de_buena_conducta    == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span> <? if($dt_documentacion['0']->carta_de_buena_conducta  != 0) {?><a href="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/5.jpg" target="_blank">Ver</a><?php }else{echo"Sin Documento";}?></span></td>
                </tr>        
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Certificado de Salud</td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_salud == 1){echo "style=\"color:#900;\"";}?>>Original</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_salud == 2){echo "style=\"color:#900;\"";}?>>Copia </span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_salud == 3){echo "style=\"color:#900;\"";}?>>Ambos</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_salud  == 4){echo "style=\"color:#900;\"";}?>>Prestado</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->certificado_de_salud == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span> <? if($dt_documentacion['0']->certificado_de_salud  != 0) {?><a href="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/6.jpg" target="_blank">Ver</a><?php }else{echo"Sin Documento";}?></span></td>
                </tr>         
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Fotografias </td>
                  <td width="143" align="center" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span <? if($dt_documentacion['0']->fotografias_infantil == 1){echo "style=\"color:#900;\"";}?>>Completas</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span <? if($dt_documentacion['0']->fotografias_infantil == 2){echo "style=\"color:#900;\"";}?>>Incompletas</span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"></td>
                  <td width="143" align="center" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->fotografias_infantil == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF">No documentos</td>
                </tr>         
                <tr>
                  <td width="219" bgcolor="#FFFFFF">CURP</td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->curp == 1){echo "style=\"color:#900;\"";}?>>Original</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->curp == 2){echo "style=\"color:#900;\"";}?>>Copia </span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->curp == 3){echo "style=\"color:#900;\"";}?>>Ambos</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->curp  == 4){echo "style=\"color:#900;\"";}?>>Prestado</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->curp == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span> <? if($dt_documentacion['0']->curp  != 0) {?><a href="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/7.jpg" target="_blank">Ver</a><?php }else{echo"Sin Documento";}?></span></td>
                </tr>         
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Boleta de calificaciones</td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->boleta_de_calificaciones  == 1){echo "style=\"color:#900;\"";}?>>Original</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->boleta_de_calificaciones  == 2){echo "style=\"color:#900;\"";}?>>Copia </span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->boleta_de_calificaciones  == 3){echo "style=\"color:#900;\"";}?>>Ambos</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->boleta_de_calificaciones  == 4){echo "style=\"color:#900;\"";}?>>Prestado</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->boleta_de_calificaciones  == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span> <? if($dt_documentacion['0']->boleta_de_calificaciones  != 0) {?><a href="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/8.jpg" target="_blank">Ver</a><?php }else{echo"Sin Documento";}?></span></td>
                </tr>        
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Otros</td>
                  <td colspan="2" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    <?=$dt_documentacion['0']->otros;?>                  </td>
                  <td bgcolor="#FFFFFF">
                  </td>
                  <td bgcolor="#FFFFFF"></td>
                  <td bgcolor="#FFFFFF">
                  </td>
                <td align="center" bgcolor="#FFFFFF">
                No documentos
                </td>
                </tr>
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Carta de Pasante</td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->carta_pasante   == 1){echo "style=\"color:#900;\"";}?>>Original</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->carta_pasante   == 2){echo "style=\"color:#900;\"";}?>>Copia </span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->carta_pasante   == 3){echo "style=\"color:#900;\"";}?>>Ambos</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->carta_pasante  == 4){echo "style=\"color:#900;\"";}?>>Prestado</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->carta_pasante   == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span> <? if($dt_documentacion['0']->carta_pasante  != 0) {?><a href="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/9.jpg" target="_blank">Ver</a><?php }else{echo"Sin Documento";}?></span></td>
                </tr>         
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Acta de Examen Profesional</td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->acta_de_examen_profesional == 1){echo "style=\"color:#900;\"";}?>>Original</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->acta_de_examen_profesional == 2){echo "style=\"color:#900;\"";}?>>Copia </span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->acta_de_examen_profesional == 3){echo "style=\"color:#900;\"";}?>>Ambos</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->acta_de_examen_profesional  == 4){echo "style=\"color:#900;\"";}?>>Prestado</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->acta_de_examen_profesional == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span> <? if($dt_documentacion['0']->acta_de_examen_profesional  != 0){?><a href="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/10.jpg" target="_blank">Ver</a><?php }else{echo "Sin Documento";} ?></span></td>
                </tr> 
                <tr>
                  <td width="219" bgcolor="#FFFFFF">Credencial</td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->credencial == 1){echo "style=\"color:#900;\"";}?>>Original</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->credencial == 2){echo "style=\"color:#900;\"";}?>>Copia </span></td>
                  <td width="152" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->credencial == 3){echo "style=\"color:#900;\"";}?>>Ambos</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->credencial  == 4){echo "style=\"color:#900;\"";}?>>Prestado</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span <? if($dt_documentacion['0']->credencial == 0){echo "style=\"color:#900;\"";}?>>Ninguno</span></td>
                  <td width="143" align="center" bgcolor="#FFFFFF"><span> <? if($dt_documentacion['0']->credencial  != 0) {?><a href="<?=base_url();?>common/documentos/<?=$dt_alumno['0']->matricula;?>/11.jpg" target="_blank">Ver</a><?php }else{echo"Sin Documento";}?></span></td>
                </tr>         
                <tr>
                
                  <td width="219"></td>
                  <td colspan="6">
				  <? if($idsession >= "3"){ ?>
				  <?php echo form_open('documentacion/editar','class="custom"'); ?><input name="mat_post" id="mat_post" type="hidden" value="<?=$dt_alumno['0']->matricula;?>" /><input type="submit"  class="button postfix" value=" Editar Documentación del Alumno "/>  </form>
                  <? } ?> 
                  </td>
                </tr>
              </table>
            </td>
            </tr>
          </table>
        </div>
     
</div>