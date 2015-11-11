<div class="row">
		<div class="large-12 columns">
<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name"></li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->


    <ul class="left">
    <li class="active"><a href="<?=base_url();?>home">Inicio</a></li>
    <li class="divider"></li>
    
    <li><a href="<?=base_url();?>perfil">Perfil</a></li>
    <li class="divider"></li>
    <li><a href="<?=base_url();?>calificaciones">Calificaciones</a></li>
    <li class="divider"></li>
    <li><a href="<?=base_url();?>documentacion">Documentación</a></li>
    <li class="divider"></li>
    <li><a href="<?=base_url();?>historial">Historial</a></li>
    <li class="divider"></li>
    <li><a href="<?=base_url();?>talleres">Talleres</a></li>
    <li class="divider"></li>
    <li class="has-dropdown"><a href="#">Avanzado</a>
    <ul class="dropdown">
    <li><a href="#" data-reveal-id="myModal_1">Contraseña</a></li>
    <li><a href="#" data-reveal-id="myModal_2">Datos Personales</a></li>
    </ul>
    </li>
    <li class="divider"></li>
      
    </ul>

    <!-- Right Nav Section -->
    <ul class="right">
      <li class="divider"></li>

      <li class="divider show-for-small"></li>
      <li class="has-form">
        <a class="button" href="<?=base_url();?>home/logout">Logout</a>
      </li>
    </ul>
  </section>
</nav>


<div id="myModal_1" class="reveal-modal">
<?php echo form_open('avanzado/contrasena','class="custom"'); ?>
  <h2>Crear Nueva Contraseña</h2>
  <div class="large-6 columns">
  <label for="contrasena">Nueva Contraseña:</label>
  <br>
  <input type="password" size="15" id="contrasena" name="contrasena" placeholder="Nueva Contraseña" />
  </div>
  <div class="large-6 columns">
  <br /><br />
  <input type="submit" class="button postfix" value=" Alta Contraseña "/>
  </div>
</form>  
<a class="close-reveal-modal">&#215;</a>
</div>
</div>


<div id="myModal_2" class="reveal-modal">
<?php echo form_open('avanzado/datospersonales','class="custom"'); ?>
  <h2>Datos Personales</h2>
  <div class="large-4 columns">
  <label for="telcasaalumno">Teléfono Particular Alumno:</label>
  <br>
  <input type="text" id="telcasaalumno" name="telcasaalumno" placeholder="Teléfono Particular Alumno" value="<?=$dt_alumno['0']->telefono_casa;?>" />
  <br />
  <label for="celalumno">Cel Alumno:</label>
  <br>
  <input type="text" id="celalumno" name="celalumno" placeholder="Cel Alumno" value="<?=$dt_alumno['0']->telefono_cel;?>" />
  </div>
  
  <div class="large-4 columns">
  <label for="mailalumno">E-Mail Alumno:</label>
  <br>
  <input type="text"  id="mailalumno" name="mailalumno" placeholder="E-Mail Alumno" value="<?=$dt_alumno['0']->email;?>" />
  <br />
  <label for="telcasatutor">Teléfono Particular Tutor:</label>
  <br>
  <input type="text" id="telcasatutor" name="telcasatutor" placeholder="Teléfono Particular Tutor" value="<?=$dt_alumno['0']->telefono_tutor;?>" />
  </div>
  
  <div class="large-4 columns">
  <label for="mailtutor">E-Mail Tutor:</label>
  <br>
  <input type="text"  id="mailtutor" name="mailtutor" placeholder="E-Mail Tutor" value="<?=$dt_alumno['0']->email_tutor;?>" />
  <br />
  <label for="telemergencia">Tel. en caso de emergencia:</label>
  <br>
  <input name="telemergencia" type="text"  id="telemergencia" placeholder="Tel. en caso de emergencia" value="<?=$dt_alumno['0']->telemergencia;?>" />
  <br /><br />
  <input type="submit" class="button postfix" value=" Alta Datos Personales "/>
  </div>
</form>  
<a class="close-reveal-modal">&#215;</a>
</div>



</div>

