<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Alumno</a></li>
  <li class="unavailable"><a href="#">Alta Alumno de PRE</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
        	<?php if($error == "si"){ ?>
            <div data-alert class="alert-box alert">
              Nota: Hay campos si llenar.
              <a href="#" class="close">&times;</a>
            </div>
            <?php } ?>
		</div>
        
        
        <?php echo form_open('alumno/sav','class="custom"'); ?>
      
        
      <div class="large-4 columns">
      <label for="Matricula"><?php if(form_error('matricula') == true){echo form_error('matricula');}else{echo "Matricula:";} ?></label>
      <br>
      <input name="matricula" type="text" id="matricula" placeholder="Matricula" value="<?php echo $this->input->post('matricula'); ?>" size="10"/>
      <br />
      <label for="ficha_numero">Ficha Número:</label>
      <br />
      <input name="ficha_numero" type="text" id="ficha_numero" placeholder="Ficha Número" value="<? echo $this->input->post('ficha_numero'); ?>" size="10" readonly="readonly"/>
      <br />
      <label for="CURP">CURP:</label>
      <br>
      <input name="curp" type="text" id="curp" placeholder="CURP" value="<?=$dt_alumno['0']->curp;?>" size="20"/>
      <br />
      <label for="Nombre">Nombre:</label>
      <br>
      <input name="nombre" type="text" id="nombre" placeholder="Nombre" value="<?=$dt_alumno['0']->nombre;?>" size="20"/>
      <br />
      <label for="Apellid Paterno">Apellido Paterno:</label>
      <br>
      <input name="paterno" type="text" id="paterno" placeholder="Apellido Paterno" value="<?=$dt_alumno['0']->paterno;?>" size="20"/>
      <br />
      <label for="Apellido Materno">Apellido Materno:</label>
      <br>
      <input name="materno" type="text" id="materno" placeholder="Apellido Materno" value="<?=$dt_alumno['0']->materno;?>" size="20"/>
      <br />
      <label for="Fecha de Nacimiento del Alumno"><?php if(form_error('fecha_nacimiento') == true){echo form_error('fecha_nacimiento');}else{echo "Fecha de Nacimiento del Alumno:";} ?></label>
      <br />
      <input type="text" size="20" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento del Alumn" value="<?php echo $this->input->post('fecha_nacimiento'); ?>"/>
      <br />
        <label for="status">Sexo:</label>
      <br>
      <select id="sexo" name="sexo" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_alumno['0']->sexo == 1){echo "selected=\"selected\"";}?>>Hombre</option>
        <option value="2" <? if($dt_alumno['0']->sexo == 2){echo "selected=\"selected\"";}?>>Mujer</option>
        <option value="3" <? if($dt_alumno['0']->sexo == 3){echo "selected=\"selected\"";}?>>Otros</option>
      </select>
      <br />
      <label for="Clave de Especialidad">Especialidad:</label>
      <br>      
      <select name="clave_especialidad" id="clave_especialidad">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <?php foreach ($especialidades as $valor): ?>
        <option value="<?=$valor->id?>" <?=$this->user->mi_select($valor->id,$dt_alumno['0']->clave_especialidad)?>><?=$valor->label?></option>
        <?php endforeach; ?>
      </select>
      <br />
      <label for="Ciclo Escolar">Ciclo Escolar:</label>
      <br>
      <input name="ciclo_escolar" type="text" id="ciclo_escolar" placeholder="Ciclo Escolar" size="20" value="<? echo $this->input->post('ciclo_escolar'); ?>"/>
      </div>
        
      <div class="large-4 columns">
      <label for="generacion">Generación:</label>
      <br>
      <input type="text" size="100" id="generacion" name="generacion" placeholder="Generación" value="<?php echo $this->input->post('generacion'); ?>"/>
      <br />
      <label for="Observaciones">Observaciones:</label>
      <br>
      <input name="observaciones" type="text" id="observaciones" placeholder="Observaciones" size="20" value="<? echo $this->input->post('observaciones'); ?>"/>
      <br />
      <label for="Domicilio">Domicilio:</label>
      <br>
      <input name="domicilio" type="text" id="domicilio" placeholder="Domicilio" value="<?=$dt_alumno['0']->domicilio;?>" size="20"/>
      <br />
      <label for="Municipio">Municipio:</label>
      <br>
      <input name="municipio" type="text" id="municipio" placeholder="Municipio" value="<?=$dt_alumno['0']->municipio;?>" size="20"/>
      <br />
      <label for="Estado">Estado:</label>
      <br>
      <input name="estado" type="text" id="estado" placeholder="Estado" value="<?=$dt_alumno['0']->estado;?>" size="20"/>
      <br />
      <label for="C.P">C.P.:</label>
      <br>
      <input name="cp" type="text" id="cp" placeholder="C.P." value="<?=$dt_alumno['0']->cp;?>" size="20"/>
      <br />
      <label for="Telefono de Casa">Teléfono de Casa:</label>
      <br>
      <input name="telefono_casa" type="text" id="telefono_casa" placeholder="Telefono de Casa" value="<?=$dt_alumno['0']->telefono_casa;?>" size="20"/>
      <br />
      <label for="Telefono Celular">Teléfono Celular:</label>
      <br>
      <input name="telefono_cel" type="text" id="telefono_cel" placeholder="Telefono Celular" value="<?=$dt_alumno['0']->telefono_cel;?>" size="20"/>
      <br />
      <label for="Email">Email:</label>
      <br>
      <input name="email" type="text" id="email" placeholder="Email" value="<?=$dt_alumno['0']->email;?>" size="20"/>
      <br />
      <label for="Tipo de Sangre"><?php if(form_error('tipo_sangre') == true){echo form_error('tipo_sangre');}else{echo "Tipo de Sangre:";} ?></label>
      <br>
      <select id="tipo_sangre" name="tipo_sangre" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($this->input->post('tipo_sangre') == 1){echo "selected=\"selected\"";}?>>0+</option>
        <option value="2" <? if($this->input->post('tipo_sangre') == 2){echo "selected=\"selected\"";}?>>0-</option>
        <option value="3" <? if($this->input->post('tipo_sangre') == 3){echo "selected=\"selected\"";}?>>A+</option>
        <option value="4" <? if($this->input->post('tipo_sangre') == 4){echo "selected=\"selected\"";}?>>A-</option>
        <option value="5" <? if($this->input->post('tipo_sangre') == 5){echo "selected=\"selected\"";}?>>B+</option>
        <option value="6" <? if($this->input->post('tipo_sangre') == 6){echo "selected=\"selected\"";}?>>B-</option>
        <option value="7" <? if($this->input->post('tipo_sangre') == 7){echo "selected=\"selected\"";}?>>AB+</option>
        <option value="8" <? if($this->input->post('tipo_sangre') == 8){echo "selected=\"selected\"";}?>>AB-</option>
      </select>
  </div>
  
  <div class="large-4 columns">
      <label for="Enfermedades">Enfermedades:</label>
      <br>
      <input type="text" size="20" id="enfermedades" name="enfermedades" placeholder="Enfermedades" value="<?php echo $this->input->post('enfermedades'); ?>"/>
      <br />
      <label for="Capacidades Diferente">Capacidades Diferentes:</label>
      <br>
      <input type="text" size="20" id="capacidad_diferente" name="capacidad_diferente" placeholder="Capacidades Diferente" value="<?php echo $this->input->post('capacidad_diferente'); ?>"/>
      <br />
      <label for="Nombre del Tutor">Nombre del Padre o Tutor:</label>
      <br>
      <input type="text" size="20" id="nombre_tutor" name="nombre_tutor" placeholder="Nombre del Tutor" value="<?php echo $this->input->post('nombre_tutor'); ?>"/>
      <br />
      <label for="Domicilio del Tutor">Domicilio del Padre o Tutor:</label>
      <br>
      <input type="text" size="20" id="domicilio_tutor" name="domicilio_tutor" placeholder="Domicilio del Tutor" value="<?php echo $this->input->post('domicilio_tutor'); ?>"/>
      <br />
      <label for="Telefono del Tutor">Teléfono del Padre o Tutor:</label>
      <br>
      <input type="text" size="20" id="telefono_tutor" name="telefono_tutor" placeholder="Telefono del Tutor" value="<?php echo $this->input->post('telefono_tutor'); ?>"/>
      <br />
      <label for="Email del Tutor">Email del Padre o Tutor:</label>
      <br>
      <input type="text" size="20" id="email_tutor" name="email_tutor" placeholder="Email del Tutor" value="<?php echo $this->input->post('email_tutor'); ?>"/>
      <br />
      <label for="Telefono de Emergencia">Teléfono de Emergencia:</label>
      <br>
      <input type="text" size="20" id="telemergencia" name="telemergencia" placeholder="Telefono de Emergencia" value="<?php echo $this->input->post('telemergencia'); ?>"/>
      <br />
      <label for="Clave Asesor">Clave Asesor:</label>
      <br>
      <input name="clave_asesor" type="text" id="clave_asesor" placeholder="Clave Asesor" value="<?php echo $this->input->post('clave_asesor'); ?>" size="20" />
      <br /><br />
      <input type="submit"  class="button postfix" value=" Alta de Alumno "/>  
      </div>
      </form>
      </div>