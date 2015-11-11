<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Alumno</a></li>
  <li class="unavailable"><a href="#">Edit Pre-Inscripción</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('alumno/edit_sav_preinscripcion','class="custom"'); ?>
      
        
      <div class="large-4 columns">
      <label for="ficha_numero">Ficha Número:</label>
      <br>
      <input name="ficha_numero" type="text" id="ficha_numero" value="<?=$dt_alumno['0']->ficha;?>" size="10" readonly="readonly"/>
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
      </div>
        
      <div class="large-4 columns">
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
  </div>
  
  <div class="large-4 columns">
  <label for="C.P">C.P.:</label>
      <br>
      <input name="cp" type="text" id="cp" placeholder="C.P." value="<?=$dt_alumno['0']->cp;?>" size="20"/>
      <br />
  <label for="Telefono de Casa">Telefono de Casa:</label>
      <br>
      <input name="telefono_casa" type="text" id="telefono_casa" placeholder="Telefono de Casa" value="<?=$dt_alumno['0']->telefono_casa;?>" size="20"/>
      <br />
      <label for="Telefono Celular">Telefono Celular:</label>
      <br>
      <input name="telefono_cel" type="text" id="telefono_cel" placeholder="Telefono Celular" value="<?=$dt_alumno['0']->telefono_cel;?>" size="20"/>
      <br />
      <label for="Email">Email:</label>
      <br>
      <input name="email" type="text" id="email" placeholder="Email" value="<?=$dt_alumno['0']->email;?>" size="20"/>
      <br />
      <br />
      <br />
      <input type="submit"  class="button postfix" value=" Editar Pre-Inscripción "/>  
      </div>
      </form>
      </div>