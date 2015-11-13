<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  
  <li class="current"><a href="#">Alumno</a></li>
  <li class="unavailable"><a href="<?=base_url();?>home/alta_alumno">Alta Alumno</a></li>
</ul>
</div></div>
<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
			<h2>Welcome <?php echo $matricula." ".$nivel_label; ?>!</h2>
            <hr />
		</div>
        
        <?php echo form_open('home/sav','class="custom"'); ?>
        <div class="large-4 columns">
        <label for="Matricula">Matricula:</label>
      <br>
      <input type="text" size="10" id="matricula" name="matricula" placeholder="Matricula"/>
      <br>
      <label for="Password">Password:</label>
      <br>
      <input type="password" size="20" id="password" name="password" placeholder="Password"/>
      
      <label for="Curp">Curp:</label>
      <br>
      <input type="text" size="20" id="curp" name="curp" placeholder="Curp"/>
      <br>
      <label for="Nombre">Nombre:</label>
      <br>
      <input type="text" size="20" id="nombre" name="nombre" placeholder="Nombre"/>
      <br />
      <label for="Paterno">Paterno:</label>
      <br>
      <input type="text" size="20" id="paterno" name="paterno" placeholder="Paterno"/>
      <br />
      <label for="Materno">Materno:</label>
      <br>
      <input type="text" size="20" id="materno" name="materno" placeholder="Materno"/>
      <br />
      <label for="Sexo">Sexo:</label>
      <br>
      <input type="text" size="20" id="sexo" name="nombre" placeholder="Sexo"/>
      <br />
      <label for="Clave Especialidad">Clave Especialidad:</label>
      <br>
      <input type="text" size="20" id="nombre" name="clave_especialidad" placeholder="Clave Especialidad"/>
      <br />
      <label for="Ciclo Escolar">Ciclo Escolar:</label>
      <br>
      <input type="text" size="20" id="ciclo_escolar" name="ciclo_escolar" placeholder="Ciclo Escolar"/>
        </div>
        
        <div class="large-4 columns">
        <label for="status">Estatus:</label>
      <br>
      <select id="status" name="status" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="1">Alta</option>
        <option value="2">Baja</option>
        <option value="3">Baja Temporal</option>
      </select>
      <br>
      <label for="Observaciones">Observaciones:</label>
      <br>
      <input type="text" size="20" id="observaciones" name="observaciones" placeholder="Observaciones"/>
      
      <label for="Domicilio">Domicilio:</label>
      <br>
      <input type="text" size="20" id="domicilio" name="domicilio" placeholder="Domicilio"/>
      <br>
      <label for="Municipio">Municipio:</label>
      <br>
      <input type="text" size="20" id="municipio" name="municipio" placeholder="Municipio"/>
      <br />
      <label for="Estado">Estado:</label>
      <br>
      <input type="text" size="20" id="estado" name="estado" placeholder="Estado"/>
      <br />
      <label for="CP">C.P.:</label>
      <br>
      <input type="text" size="20" id="cp" name="cp" placeholder="C.P."/>
      <br />
      <label for="telefono_de_casa">Telefono de Casa:</label>
      <br>
      <input type="text" size="20" id="telefono_de_casa" name="telefono_de_casa" placeholder="Telefono de Casa"/>
      <br />
      <label for="Telefono Celular">Telefono Celular:</label>
      <br>
      <input type="text" size="20" id="telefono_celular" name="telefono_celular" placeholder="Telefono Celular"/>
      <br />
      <label for="Email">Email:</label>
      <br>
      <input type="text" size="20" id="email" name="email" placeholder="Email"/>
  </div>
        
        <div class="large-4 columns">
        <input type="submit" value=" Alta Alumno "/>
        </div>
        </form>
        
</div>