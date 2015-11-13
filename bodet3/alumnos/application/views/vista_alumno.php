<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="<?=base_url();?>perfil">Perfil</a></li>
  <li class="unavailable"><a href="#">Vista Alumno</a></li>
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
      <img src="../sistema/common/documentos/<?=$dt_alumno['0']->matricula;?>/foto.jpg" width="150" height="180" />
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
                <td width="164" bgcolor="#FFFFFF">Fecha de Nacimiento</td>
                <td width="636" bgcolor="#F9F9F9"><?=$dt_alumno['0']->fecha_nacimiento;?></td>
              </tr>
              <tr>
                <td width="164" bgcolor="#FFFFFF">Especialidad</td>
                <td width="636" bgcolor="#F9F9F9"><?=$this->user->mi_join($dt_alumno['0']->clave_especialidad,'especialidades','id','label');?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Ciclo Escolar</td>
                <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->ciclo_escolar;?></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">Generación</td>
                <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->generacion;?></td>
              </tr>
            </table>
             
              <table width="800" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="164" bgcolor="#FFFFFF">Estatus</td>
                  <td width="636" bgcolor="#FFFFFF">&nbsp;<span <? if($dt_alumno['0']->estatus == 0){echo "style=\"color:#900;\"";}?>>Alta</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span <? if($dt_alumno['0']->estatus == 1){echo "style=\"color:#900;\"";}?>>Baja</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span <? if($dt_alumno['0']->estatus == 2){echo "style=\"color:#900;\"";}?>>Baja Temporal</span></td>
                </tr>
              </table>
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
              <table width="800" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="164" bgcolor="#FFFFFF">Tipo Sanguineo</td>
                  <td width="636" bgcolor="#F9F9F9">
				  <? 
				  switch ($dt_alumno['0']->tipo_sangre) {
						case 1:
							echo "0+";
							break;
						case 2:
							echo "0-";
							break;
						case 3:
							echo "A+";
							break;
						case 4:
							echo "A-";
							break;
						case 5:
							echo "B+";
							break;
						case 6:
							echo "B-";
							break;
						case 7:
							echo "AB+";
							break;
						case 8:
							echo "AB-";
							break;
					}
				  ?>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Enfermedades Crónicas</td>
                  <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->enfermedades;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Discapacidad</td>
                  <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->capacidad_diferente;?></td>
                </tr>
              </table>
              <table width="800" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="164" bgcolor="#FFFFFF">Observaciones</td>
                  <td width="636" bgcolor="#F9F9F9"><?=$dt_alumno['0']->observaciones;?></td>
                </tr>
              </table>
              <table width="800" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="166" bgcolor="#FFFFFF">Nombre del Padre o Tutor</td>
                  <td width="634" bgcolor="#F9F9F9"><?=$dt_alumno['0']->nombre_tutor;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Domicilio</td>
                  <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->domicilio_tutor;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Teléfono</td>
                  <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->telefono_tutor;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">E-Mail</td>
                  <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->email_tutor;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Tel. en caso de emergencia</td>
                  <td bgcolor="#F9F9F9"><?=$dt_alumno['0']->telemergencia;?></td>
                </tr>
              </table>
  
              </td>
            </tr>
          </table>
        </div>
     
</div>