<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Parámetros</a></li>
  <li class="current"><a href="<?=base_url();?>admin">Personal</a></li>
  <li class="unavailable"><a href="#">Edit Profesor</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('admin/sav_editar_profesor','class="custom"'); ?>
       	 	 	 	 	 	

      <div class="large-4 columns">
      <label for="clave_docente">Clave Docente:</label>
      <br>
      <input name="clave_docente" type="text" id="clave_docente" placeholder="Clave Docente" value="<?=$dt_prof['0']->clave_docente;?>" size="20" readonly="readonly" />
      <br />
      <label for="nombre">Nombre:</label>
      <br>
      <input type="text" size="20" id="nombre" name="nombre" placeholder="Nombre" value="<?=$dt_prof['0']->nombre;?>" />
      <br />
      <label for="paterno">Paterno:</label>
      <br>
      <input type="text" size="20" id="paterno" name="paterno" placeholder="Paterno" value="<?=$dt_prof['0']->paterno;?>" />
      <br />
      <label for="materno">Materno:</label>
      <br>
      <input type="text" size="20" id="materno" name="materno" placeholder="Materno" value="<?=$dt_prof['0']->materno;?>" />
      <br />
      <label for="cedula">Cedula:</label>
      <br>
      <input type="text" size="20" id="cedula" name="cedula" placeholder="Cedula" value="<?=$dt_prof['0']->cedula;?>" />
      <br />
      <label for="tipo">Tipo:</label>
      <br>
      <input type="text" size="20" id="tipo" name="tipo" placeholder="Tipo" value="<?=$dt_prof['0']->tipo;?>" />
      <br />
      <label for="domicilio">Domicilio:</label>
      <br>
      <input type="text" size="20" id="domicilio" name="domicilio" placeholder="Domicilio" value="<?=$dt_prof['0']->domicilio;?>" />
      <br />
      <label for="municipio">Municipio:</label>
      <br>
      <input type="text" size="20" id="municipio" name="municipio" placeholder="Municipio" value="<?=$dt_prof['0']->municipio;?>" />
	  <br>
      <label for="estado">Estado:</label>
      <br>
      <input type="text" size="20" id="estado" name="estado" placeholder="Estado" value="<?=$dt_prof['0']->estado;?>" />
      <br />
      <label for="telefono_casa">Teléfono Casa:</label>
      <br>
      <input type="text" size="20" id="telefono_casa" name="telefono_casa" placeholder="Teléfono Casa" value="<?=$dt_prof['0']->telefono_casa;?>" />
      
      </div>	 	 	 	 	 	 	
      <div class="large-4 columns">
      
      <label for="telefono_cel">Teléfono Cel:</label>
      <br>
      <input type="text" size="20" id="telefono_cel" name="telefono_cel" placeholder="Teléfono Cel" value="<?=$dt_prof['0']->telefono_cel;?>" />
      <br />
      <label for="email">Email:</label>
      <br>
      <input type="text" size="20" id="email" name="email" placeholder="Email" value="<?=$dt_prof['0']->email;?>" />
      <br />
      <label for="fecha_nacimiento">Fecha Nacimiento:</label>
      <br>
      <input type="text" size="20" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha Nacimiento" value="<?=$dt_prof['0']->fecha_nacimiento;?>" />
      <br />
      <label for="sexo">Sexo:</label>
      <br>
      <select id="sexo" name="sexo" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_prof['0']->sexo == 1){echo "selected=\"selected\"";}?>>Hombre</option>
        <option value="2" <? if($dt_prof['0']->sexo == 2){echo "selected=\"selected\"";}?>>Mujer</option>
        <option value="3" <? if($dt_prof['0']->sexo == 3){echo "selected=\"selected\"";}?>>Otros</option>
      </select>
      <br />
      <label for="estado_civil">Estado Civil:</label>
      <br>
      <select id="estado_civil" name="estado_civil" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_prof['0']->estado_civil == 1){echo "selected=\"selected\"";}?>>Soltero</option>
        <option value="2" <? if($dt_prof['0']->estado_civil == 2){echo "selected=\"selected\"";}?>>Casado</option>
        <option value="3" <? if($dt_prof['0']->estado_civil == 3){echo "selected=\"selected\"";}?>>Divorciado</option>
        <option value="4" <? if($dt_prof['0']->estado_civil == 4){echo "selected=\"selected\"";}?>>Viudo</option>
      </select>
      <br />
      <label for="colonia">Colonia:</label>
      <br>
      <input type="text" size="20" id="colonia" name="colonia" placeholder="Colonia" value="<?=$dt_prof['0']->colonia;?>" />
	  <br>
      <label for="telefono_trabajo">Teléfono Trabajo:</label>
      <br>
      <input type="text" size="20" id="telefono_trabajo" name="telefono_trabajo" placeholder="Teléfono Trabajo" value="<?=$dt_prof['0']->telefono_trabajo;?>" />
      <br />
      <label for="perfil">Perfil:</label>
      <br>
      <input type="text" size="20" id="perfil" name="perfil" placeholder="Perfil" value="<?=$dt_prof['0']->perfil;?>" />
      <br />
      <label for="curp">Curp:</label>
      <br>
      <input type="text" size="20" id="curp" name="curp" placeholder="Curp" value="<?=$dt_prof['0']->curp;?>" />
      <br />
      <label for="fecha_ingreso">Fecha Ingreso:</label>
      <br>
      <input type="text" size="20" id="fecha_ingreso" name="fecha_ingreso" placeholder="Fecha Ingreso" value="<?=$dt_prof['0']->fecha_ingreso;?>" />
      
      </div>	 	 	 	 	 	 	
      <div class="large-4 columns">
      
      <label for="horario_laboral">Horario Laboral:</label>
      <br>
      <input type="text" size="20" id="horario_laboral" name="horario_laboral" placeholder="Horario Laboral" value="<?=$dt_prof['0']->horario_laboral;?>" />
      <br />
      <label for="funciones">Funciones:</label>
      <br>
      <input type="text" size="20" id="funciones" name="funciones" placeholder="Funciones" value="<?=$dt_prof['0']->funciones;?>" />
      <br />
      <label for="lengua">Lengua:</label>
      <br>
      <input type="text" size="20" id="lengua" name="lengua" placeholder="Lengua" value="<?=$dt_prof['0']->lengua;?>" />
      <br />
      <br />
      <label for="rfc">R.F.C.:</label>
      <br>
      <input type="text" size="20" id="rfc" name="rfc" placeholder="R.F.C." value="<?=$dt_prof['0']->rfc;?>" />
      <br />
      <label for="clave_presupuestal">Clave Presupuestal:</label>
      <br>
      <input type="text" size="20" id="clave_presupuestal" name="clave_presupuestal" placeholder="Clave Presupuestal" value="<?=$dt_prof['0']->clave_presupuestal;?>" />
      <br />
      <label for="tipo_nombramiento">Tipo de Nombramiento:</label>
      <br>
      <select id="tipo_nombramiento" name="tipo_nombramiento" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_prof['0']->tipo_nombramiento == 1){echo "selected=\"selected\"";}?>>Tiempo Completo</option>
        <option value="2" <? if($dt_prof['0']->tipo_nombramiento == 2){echo "selected=\"selected\"";}?>>Medio Tiempo</option>
        <option value="3" <? if($dt_prof['0']->tipo_nombramiento == 3){echo "selected=\"selected\"";}?>>3/4 Tiempo Asiciado B</option>
        <option value="4" <? if($dt_prof['0']->tipo_nombramiento == 4){echo "selected=\"selected\"";}?>>3/4 Tiempo Asociado C</option>
        <option value="5" <? if($dt_prof['0']->tipo_nombramiento == 5){echo "selected=\"selected\"";}?>>Horas Asignatura B</option>
        <option value="6" <? if($dt_prof['0']->tipo_nombramiento == 6){echo "selected=\"selected\"";}?>>Horas Asignatura C</option>
        <option value="7" <? if($dt_prof['0']->tipo_nombramiento == 7){echo "selected=\"selected\"";}?>>Interinos</option>
        <option value="8" <? if($dt_prof['0']->tipo_nombramiento == 8){echo "selected=\"selected\"";}?>>Recursos propios</option>
      </select>
      <br />
      <label for="categoria">Categoría y/o Puesto:</label>
      <br>
      <input type="text" size="20" id="categoria" name="categoria" placeholder="Categoría y/o Puesto" value="<?=$dt_prof['0']->categoria;?>" />
      <br />
      <label for="grado">Grado:</label>
      <br>
      <input type="text" size="20" id="grado" name="grado" placeholder="Grado" value="<?=$dt_prof['0']->grado;?>" />
      <br />
      <label for="grupo">Grupo:</label>
      <br>
      <input type="text" size="20" id="grupo" name="grupo" placeholder="Grupo" value="<?=$dt_prof['0']->grupo;?>" />
      <br />
      <label for="escolaridad">Máxima Escolaridad:</label>
      <br>
      <input type="text" size="20" id="escolaridad" name="escolaridad" placeholder="Máxima Escolaridad" value="<?=$dt_prof['0']->escolaridad;?>" />
      <br>
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>