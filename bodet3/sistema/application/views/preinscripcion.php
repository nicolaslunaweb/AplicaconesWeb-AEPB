<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Alumno</a></li>
  <li class="unavailable"><a href="#">Alta Pre-Inscripción</a></li>
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
        
        <?php echo form_open('alumno/sav_ficha_numero','class="custom"'); ?>
      
        
      <div class="large-4 columns">
        
      <label for="ficha_numero"><?php if(form_error('ficha_numero') == true){echo form_error('ficha_numero');}else{echo "Ficha Número:";} ?></label>
      <br>
      <input name="ficha_numero" type="text" id="ficha_numero" placeholder="Ficha Número" value="<? if($ficha != "x"){echo $ficha;}else{echo $this->input->post('ficha_numero');}?>" size="10" readonly="readonly"/>
      <br />
      <label for="CURP"><?php if(form_error('curp') == true){echo form_error('curp');}else{echo "CURP:";} ?></label>
      <br>
      <input name="curp" type="text" id="curp" placeholder="CURP" value="<?php echo $this->input->post('curp'); ?>" size="20"/>
      <br />
      <label for="Nombre"><?php if(form_error('nombre') == true){echo form_error('nombre');}else{echo "Nombre:";} ?></label>
      <br>
      <input type="text" size="20" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $this->input->post('nombre'); ?>"/>
      <br />
      <label for="Apellid Paterno"><?php if(form_error('paterno') == true){echo form_error('paterno');}else{echo "Apellido Paterno:";} ?></label>
      <br>
      <input type="text" size="20" id="paterno" name="paterno" placeholder="Apellido Paterno" value="<?php echo $this->input->post('paterno'); ?>"/>
      <br />
      <label for="Apellido Materno"><?php if(form_error('materno') == true){echo form_error('materno');}else{echo "Apellido Materno:";} ?></label>
      <br>
      <input type="text" size="20" id="materno" name="materno" placeholder="Apellido Materno" value="<?php echo $this->input->post('materno'); ?>"/>
      </div>
        
      <div class="large-4 columns">
     <label for="status"><?php if(form_error('sexo') == true){echo form_error('sexo');}else{echo "Sexo:";} ?></label>
      <br>
      <select id="sexo" name="sexo" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($this->input->post('sexo') == 1){echo "selected=\"selected\"";}?>>Hombre</option>
        <option value="2" <? if($this->input->post('sexo') == 2){echo "selected=\"selected\"";}?>>Mujer</option>
        <option value="3" <? if($this->input->post('sexo') == 3){echo "selected=\"selected\"";}?>>Otros</option>
      </select>
      <br />
      <label for="Clave de Especialidad"><?php if(form_error('clave_especialidad') == true){echo form_error('clave_especialidad');}else{echo "Especialidad:";} ?></label>
      <br>      
      <select name="clave_especialidad" id="clave_especialidad">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <?php foreach ($especialidades as $valor): ?>
        <option value="<?=$valor->id?>" <?=$this->user->mi_select($valor->id, $this->input->post('clave_especialidad'))?>><?=$valor->label?></option>
        <?php endforeach; ?>
      </select>
      
      <br />
      <label for="Domicilio">Domicilio:</label>
      <br>
      <input type="text" size="20" id="domicilio" name="domicilio" placeholder="Domicilio" value="<?php echo $this->input->post('domicilio'); ?>"/>
      <br />
      <label for="Municipio">Municipio:</label>
      <br>
      <input type="text" size="20" id="municipio" name="municipio" placeholder="Municipio" value="<?php echo $this->input->post('municipio'); ?>"/>
      <br />
      <label for="Estado">Estado:</label>
      <br>
      <input type="text" size="20" id="estado" name="estado" placeholder="Estado" value="<?php echo $this->input->post('estado'); ?>"/>
  </div>
  
  <div class="large-4 columns">
   <label for="C.P">C.P.:</label>
      <br>
      <input type="text" size="20" id="cp" name="cp" placeholder="C.P." value="<?php echo $this->input->post('cp'); ?>"/>
      <br />
      <label for="Telefono de Casa">Teléfono de Casa:</label>
      <br>
      <input type="text" size="20" id="telefono_casa" name="telefono_casa" placeholder="Telefono de Casa" value="<?php echo $this->input->post('telefono_casa'); ?>"/>
      <br />
      <label for="Telefono Celular">Teléfono Celular:</label>
      <br>
      <input type="text" size="20" id="telefono_cel" name="telefono_cel" placeholder="Telefono Celular" value="<?php echo $this->input->post('telefono_cel'); ?>"/>
      <br />
      <label for="Email">Email:</label>
      <br>
      <input type="text" size="20" id="email" name="email" placeholder="Email" value="<?php echo $this->input->post('email'); ?>"/>
      <br /><br /><br />
      <input type="submit"  class="button postfix" value=" Alta Pre-Inscripción "/>  
      </div>
      </form>
      </div>