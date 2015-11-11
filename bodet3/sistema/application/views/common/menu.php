<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
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
    
    <? if($idsession >= 3){ ?>
    <li class="has-dropdown"><a href="#">Escolar</a>
    <ul class="dropdown">
        <li class="has-dropdown"><a href="<?=base_url();?>alumno">Alumno</a>
            <ul class="dropdown">
            	<li class="has-dropdown"><a href="<?=base_url();?>alumno/preinscripcion">Alta Pre-Inscripción</a>
                <ul class="dropdown">
                <li><a href="<?=base_url();?>alumno/limpiar_preinscripcion">Limpiar Pre-Inscripción</a></li>
                </ul>
                </li>
            	<li><a href="<?=base_url();?>alumno/alta_alumno">Alta Inscripción</a></li>
                <li><a href="<?=base_url();?>alumno/reinscripcion">Re-Inscripción</a></li>
                <li><a href="<?=base_url();?>alumno/cobranza">Donaciones</a></li>
            </ul>
        </li>
        
        <li class="has-dropdown"><a href="<?=base_url();?>documentacion">Documentación</a>
            <ul class="dropdown">
            	<li><a href="<?=base_url();?>documentacion/alta_documentacion">Alta Documentación</a></li>
                <li class="divider"></li>
                <li><a href="<?=base_url();?>alumno/alta_foto_alumno">&rarr; Alta de Documentos</a></li>
            </ul>
        </li>
        
        <li class="has-dropdown"><a href="<?=base_url();?>historial">Historial</a>
            <ul class="dropdown">
            	<li><a href="<?=base_url();?>historial/alta_historial">Alta Historial</a></li>
            </ul>
        </li>
        
        <li class="has-dropdown"><a href="<?=base_url();?>ceneval">Ceneval</a>
            <ul class="dropdown">
            	<li><a href="<?=base_url();?>ceneval/alta_ceneval">Alta Ceneval</a></li>
            </ul>
        </li>
        
        <li class="has-dropdown"><a href="<?=base_url();?>titulacion">Titulación</a>
            <ul class="dropdown">
            	<li><a href="<?=base_url();?>titulacion/alta_titulacion">Alta Titulación</a></li>
            </ul>
        </li>
        
        <li class="has-dropdown"><a href="<?=base_url();?>egresados">Egresados</a>
            <ul class="dropdown">
            	<li><a href="<?=base_url();?>egresados/alta_egresados">Alta Egresados</a></li>
            </ul>
        </li>
        
        <li class="has-dropdown"><a href="<?=base_url();?>talleres">Talleres</a>
            <ul class="dropdown">
            	<li><a href="<?=base_url();?>talleres/alta_talleres">Alta Talleres</a></li>
            </ul>
        </li>
        
        <li class="has-dropdown"><a href="<?=base_url();?>calificaciones">Calificaciones</a>
            <ul class="dropdown">
            	<li><a href="<?=base_url();?>calificaciones/alta_calificaciones">Alta Calificaciones</a></li>
            </ul>
        </li>
        
        <? if($idsession >= 3){ ?>
        <li class="divider"></li>
      <li class="has-dropdown"><a href="#" data-reveal-id="myModal_ofi">Reportes</a>
        <ul class="dropdown">
          <li><a href="#" data-reveal-id="myModal_grupales">Grupales</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <? } ?>
            
    </ul>
    </li>
    <li class="divider"></li>
    <? } ?> 
      
      <li class="has-dropdown"><a href="#">Académico</a>
        <ul class="dropdown">
          <? if($idsession == 2){ ?>
          <li><a href="<?=base_url();?>academico/perfil">Perfil</a></li>
          <li><a href="<?=base_url();?>academico/doc_profesor">Documentación</a></li>
          <li><a href="<?=base_url();?>academico/historial_profesor">Historial</a></li>
          <li><a href="<?=base_url();?>academico/talleres_profesor">Talleres</a></li>
          <li class="divider"></li>
          <li><a href="<?=base_url();?>academico/calificaciones">Calificaciones</a></li>
          <? } ?>
          <? if($idsession >= 3){ ?>
          <li class="divider"></li>
          <li class="has-dropdown"><a href="<?=base_url();?>admin">Personal</a>
          <ul class="dropdown">
          <li class="has-dropdown"><a href="<?=base_url();?>admin/profesor">Profesores</a>
          <ul class="dropdown">
          <li><a href="<?=base_url();?>admin/alta_profesor">Alta Profesor</a></li>
          <li><a href="<?=base_url();?>admin/listar_profesores">Listar Profesores</a></li>
          <li class="divider"></li>
          <li><a href="<?=base_url();?>admin/alta_historial_profesor">Alta Historial Profesor</a></li>
          <li><a href="<?=base_url();?>admin/alta_doc_profesor">Alta Documentación Profesor</a></li>
          <li><a href="<?=base_url();?>admin/alta_talleres_profesor">Actualización Curricular</a></li>
          </ul>
          </li>
            
          <li class="has-dropdown"><a href="#">Administrativos</a>
          <ul class="dropdown">
          <li><a href="<?=base_url();?>admin/alta_administrativo">Alta Administrativo</a></li>
            <li><a href="<?=base_url();?>admin/listar_administrativos">Listar Administrativos</a></li>
          </ul>
          </li>
                      
          </ul>
          </li>
          <? } ?>
        </ul>
      </li>
      <li class="divider"></li>
      
      
      <? if($idsession == 2){ ?>
      <li class="has-dropdown"><a href="#">Datos del Alumno</a>
        <ul class="dropdown">
          <li><a href="#" data-reveal-id="myModal_alumnoperfil">Perfil</a></li>
          <li><a href="#" data-reveal-id="myModal_alumnodoc">Documentación</a></li>
          <li><a href="#" data-reveal-id="myModal_alumnohist">Historial</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <? } ?>
      
      <? if($idsession >= 3){ ?>
      <li class="has-dropdown"><a href="#">Especialidades</a>
        <ul class="dropdown">
          <li><a href="#" data-reveal-id="myModal_esp">Asignaturas</a></li>
          <li class="has-dropdown"><a href="<?=base_url();?>horarios">Horarios</a>
          <ul class="dropdown">
          <li><a href="<?=base_url();?>horarios/alta_horarios">Alta Horario</a></li>
          </ul>
          </li>
        </ul>
      </li>
      <li class="divider"></li>
      <? } ?>

		<li class="has-dropdown"><a href="#">Parámetros</a>
        <ul class="dropdown">
        <li class="has-dropdown"><a href="#">Clave de Acceso</a>
        	<ul class="dropdown">
            	<li><a href="#" data-reveal-id="myModal_clavesup">&rarr; Cambio de Clave</a></li>
        	</ul>
        </li>
          <? if($idsession >= 3){ ?>
          <li class="divider"></li>
          <? if($idsession == 4){ ?><li><a href="#" data-reveal-id="myModal_datosescuela">Datos Institución</a></li><? } ?>
          <li class="divider"></li>
          <li><a href="#" data-reveal-id="myModal_clavealu">Restaurar Alumno</a></li>
          <li><a href="#" data-reveal-id="myModal_clavemae">Restaurar Profesor</a></li>
          <? if($idsession == 4){ ?>
          <li><a href="#" data-reveal-id="myModal_claveadm">Restaurar Administrativo</a></li>
          <? } ?>
          
          <? if($idsession == 4){ ?><li class="divider"></li><li><a href="<?=base_url();?>parametros/backup">Backup Sistema</a></li><? } ?>
          <li class="divider"></li>
          <li><a href="#" data-reveal-id="myModal_fechas_calificaciones">Apertura Fechas Calificaciones</a></li>
          <li class="divider"></li>
          <li class="has-dropdown"><a href="#">Exportar Datos</a>
        	<ul class="dropdown">
            <li><a href="#" data-reveal-id="myModal2">&rarr; Alumnos</a></li>
            <li><a href="<?=base_url();?>parametros/documentacion">&rarr; Documentación</a></li>
            <li><a href="<?=base_url();?>parametros/cobranza">&rarr; Donaciones</a></li>
            <li><a href="#" data-reveal-id="myModal_seml">&rarr; Registro de Escolaridad</a></li>
            <li><a href="<?=base_url();?>parametros/plantillapersonal">&rarr; Plantilla de Academicos</a></li>
        	</ul>
            </li>
          <? } ?>   
        </ul>
      </li>
      <li class="divider"></li>

      <? if($idsession >= 3){ ?>
      <li><a href="<?=base_url();?>apuntadores">Indicadores</a>
      <!-- class="has-dropdown"
        <ul class="dropdown">
          <li><a href=""></a></li>
        </ul>
      -->
      </li>
      <li class="divider"></li>
      <? } ?>  

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



<!-- /// para especialidades malla de calificaciones //// -->
<div id="myModal_esp" class="reveal-modal">
<h2>Asignaturas por Especialidades</h2>
<?php echo form_open('calificaciones/malla_materias','class="custom"'); ?>
  <div class="large-4 columns">
  <label for="Matricula">Por Especialidades:</label>
  <br>
  <select name="clave_especialidad_malla" id="clave_especialidad_malla">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <?php foreach ($especialidades as $valor): ?>
        <option value="<?=$valor->id?>"><?=$valor->label?></option>
        <?php endforeach; ?>
  </select>
  </div>
  <div class="large-8 columns"><br /><br />
   <input type="submit" class="button postfix" value=" Ir a Consulta "/>
  </div>
</form>
<a class="close-reveal-modal">&#215;</a>
</div>
<!-- /// para especialidades malla de calificaciones //// -->



<div id="myModal_grupales" class="reveal-modal">
<h2>Reportes Grupales Escolares</h2>
<?php echo form_open('oficios','class="custom" target="_blank"'); ?>


<div class="large-4 columns">
  <label for="Matricula">Tipo Reporte:</label>
  <br>
  <select name="oficiosgrupo" class="medium">
      <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="11">Formato de boleta</option>
        <option value="12">Listado de alumnos</option>
  </select>
  </div>

<div class="large-4 columns">
  <label>Por Especialidades:</label>
  <br>
  <select name="clave_especialidad">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <?php foreach ($especialidades as $valor): ?>
        <option value="<?=$valor->id?>"><?=$valor->label?></option>
        <?php endforeach; ?>
  </select>
  </div>

<div class="large-4 columns">
  <label for="semestre">Semestre:</label>
  <br>
  <select id="semestre" name="semestre" class="medium">
      <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">1er. Semestre</option>
        <option value="2">2do. Semestre</option>
        <option value="3">3er. Semestre</option>
        <option value="4">4to. Semestre</option>
        <option value="5">5to. Semestre</option>
        <option value="6">6to. Semestre</option>
        <option value="7">7mo. Semestre</option>
        <option value="8">8vo. Semestre</option>
  </select>
  </div>



<input type="submit" name="Submit"  class="button postfix" value=" Consulta " > 




</form>
<a class="close-reveal-modal">&#215;</a>
</div>




<!-- /// para oficios //// -->
<div id="myModal_ofi" class="reveal-modal">
<script>
function active_b()
{	
	if(document.getElementById("matricula_post_oficio").value == '')
		{ 
	document.getElementById("oficios").disabled=true;
		}else
		{
	document.getElementById("oficios").disabled=false;
		}
}
////
function active()
{	
	if(document.getElementById("matricula_post_oficio").value == '')
		{ 
	document.frm.Submit.disabled=true;
		}else
		{
	document.frm.Submit.disabled=false;
		}
		
		///// para activar o desactivar el div de inscripcion o reinscripcion
        var option = document.getElementById("oficios").value;
        if(option == "3"){
            document.getElementById("ins_reins").style.display ="block";
        }
        else
		{
            document.getElementById("ins_reins").style.display ="none";
		}
		////
		if(option == "7"){
            document.getElementById("translado").style.display ="block";
        }
        else
		{
            document.getElementById("translado").style.display ="none";
		}
		////
		if(option == "8"){
            document.getElementById("kardex").style.display ="block";
        }
        else
		{
            document.getElementById("kardex").style.display ="none";
		}
    /////
    if(option == "6"){
            document.getElementById("formatoboleta").style.display ="block";
        }
        else
    {
            document.getElementById("formatoboleta").style.display ="none";
    }
}
</script> 
  <h2>Reportes Escolares</h2>
  <?php echo form_open('oficios','class="custom" target="_blank" name="frm"'); ?>
  <div class="large-4 columns">
  <label for="Matricula">Matricula del Alumno:</label>
  <br>
  <input type="text" size="10" id="matricula_post_oficio" name="matricula_post" placeholder="Matricula del Alumno" onchange="active_b()"/>
  </div>
  <div class="large-4 columns">
  <label for="Matricula">Tipo Reporte:</label>
  <br>
  <select id="oficios" name="oficios" class="medium" onchange="active()" disabled>
  		<option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Liberación de adeudo</option>
        <option value="3">Comprobante de inscripción y reinscripción</option>
        <option value="5">Lista de asistencia</option>
        <option value="6">Formato de boleta</option>
        <option value="7">Traslado de escuela</option>
        <option value="8">Formato kardex</option>
        <option value="9">Constancia de calificaciones</option>
        <option value="10">Baja definitiva</option>
  </select>
  </div>
  <div class="large-4 columns">
  <br /><br />
  <input type="submit" name="Submit"  class="button postfix" value=" Crear Directorio " disabled > 
  </div>
  <div style="clear:both;"></div>
  <!--inscripcion reinscripcion -->
  <div id="ins_reins" style="display:none;">
  <hr />
  <div class="large-4 columns">
  <label for="Matricula">Inscripción o Reinscripción:</label>
  <br>
  <select id="ins_rei" name="ins_rei" class="medium">
  		<option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Inscripción</option>
        <option value="2">Reinscripción</option>
  </select>
  </div></div>
  <!--inscripcion reinscripcion -->

  <!-- formatoboleta -->
  <div id="formatoboleta" style="display:none;">
  <hr />
  <div class="large-4 columns">
  <label for="Matricula">Tipo de reporte:</label>
  <br>
  <select id="formaboleta" name="formaboleta" class="medium">
      <option selected="selected" DISABLED>Seleccionar opción</option>
      <option value="todo">Todos los semestres</option>
        <option value="1">1er. Semestre</option>
        <option value="2">2do. Semestre</option>
        <option value="3">3er. Semestre</option>
        <option value="4">4to. Semestre</option>
        <option value="5">5to. Semestre</option>
        <option value="6">6to. Semestre</option>
        <option value="7">7mo. Semestre</option>
        <option value="8">8vo. Semestre</option>
  </select>
  </div>
  </div>
  <!-- formatoboleta -->

  <!-- translado de escuela -->
  <div id="translado" style="display:none;">
  <hr />
  <div class="large-4 columns">
  <label for="Registro del Mes">Registro del Mes:</label>
  <br>
  <input type="text" size="10" id="registro_mes" name="registro_mes" placeholder="Registro del Mes" />
  </div>
  <div class="large-4 columns">
  <label for="Motivo del Cambio">Motivo del Cambio:</label>
  <br>
  <input type="text" size="10" id="motivo_cambio" name="motivo_cambio" placeholder="Motivo del Cambio" />
  </div>
  <div class="large-4 columns">
  <label for="Nombre del Plantel">Nombre del Plantel:</label>
  <br>
  <input type="text" size="10" id="nombre_plantel" name="nombre_plantel" placeholder="Nombre del Plantel" />
  </div>
  <div class="large-4 columns">
  <label for="Clave del Plantel">Clave del Plantel:</label>
  <br>
  <input type="text" size="10" id="clave_plantel" name="clave_plantel" placeholder="Clave del Plantel" />
  </div>
  <div class="large-4 columns">
  <label for="Localidad del Plantel">Localidad del Plantel:</label>
  <br>
  <input type="text" size="10" id="localidad_plantel" name="localidad_plantel" placeholder="Localidad del Plantel" />
  </div>
  <div class="large-4 columns">
  <label for="Nombre del Director">Nombre del Director:</label>
  <br>
  <input type="text" size="10" id="nombre_director" name="nombre_director" placeholder="Nombre del Director" />
  </div>
  </div>
  <!-- translado de escuela -->
  
  <!--inscripcion reinscripcion -->
  <div id="kardex" style="display:none;">
  <hr />
  <div class="large-4 columns">
  <label for="Matricula">A que nivel imprimir:</label>
  <br>
  <select id="semestrekardex" name="semestrekardex" class="medium">
  		<option selected="selected" DISABLED>Seleccionar opción</option>
  		<option value="todo">Imprimir Malla Curricular</option>
        <option value="1">1er. Semestre</option>
        <option value="2">2do. Semestre</option>
        <option value="3">3er. Semestre</option>
        <option value="4">4to. Semestre</option>
        <option value="5">5to. Semestre</option>
        <option value="6">6to. Semestre</option>
        <option value="7">7mo. Semestre</option>
        <option value="8">8vo. Semestre</option>
  </select>
  </div></div>
  <!--inscripcion reinscripcion -->
  
  
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!-- /// para oficios //// -->

<!-- /// para crear directorios //// -->
<div id="myModal" class="reveal-modal">
  <h2>Alta de Directorio</h2>
  <?php echo form_open('documentacion/alta_directorio','class="custom"'); ?>
  <div class="large-6 columns">
  <label for="Matricula">Matricula del Alumno:</label>
  <br>
  <input type="text" size="10" id="matricula_post" name="matricula_post" placeholder="Matricula del Alumno"/>
  </div>
  <div class="large-6 columns">
  <br /><br />
  <input type="submit" class="button postfix" value=" Crear Directorio "/>
  </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!-- /// para crear directorios //// -->


<!-- /// para las tablas CSV //// -->
<div id="myModal2" class="reveal-modal">
  <h2>Filtro para alumnos</h2>
  <?php echo form_open('parametros/alumnos','class="custom"'); ?>
  <div class="large-4 columns">
  <label for="Matricula">Por Especialidades:</label>
  <br>
  <select name="clave_especialidad" id="clave_especialidad">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="0">- Todas -</option>
        <?php foreach ($especialidades as $valor): ?>
        <option value="<?=$valor->id?>"><?=$valor->label?></option>
        <?php endforeach; ?>
  </select>
  </div>
  <div class="large-4 columns">
  <label for="Matricula">Por Sexos:</label>
  <br>
  <select id="sexo" name="sexo" class="medium">
        <option selected="selected" DISABLED>Seleccionar Sexo</option>
        <option value="0">- Todos -</option>
        <option value="1">Hombres</option>
        <option value="2">Mujeres</option>
        <option value="3">Otros</option>
  </select>
  </div>
  <div class="large-4 columns">
  <label for="Matricula">Por Semestre:</label>
  <br>
  <select id="semestre" name="semestre" class="medium">
        <option selected="selected" DISABLED>Seleccionar Semestre</option>
        <option value="0">- Todos -</option>
        <option value="1">1er. Semestre</option>
        <option value="2">2do. Semestre</option>
        <option value="3">3er. Semestre</option>
        <option value="4">4to. Semestre</option>
        <option value="5">5to. Semestre</option>
        <option value="6">6to. Semestre</option>
        <option value="7">7mo. Semestre</option>
        <option value="8">8vo. Semestre</option>
  </select>
  </div>
  <div class="large-12 columns">
  <input type="submit" class="button postfix" value=" Descargar Consulta en CSV de Alumnos "/>
  </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!-- /// para las tablas CSV //// -->


<!-- /// para lista por semestre //// -->
<div id="myModal_seml" class="reveal-modal">
  <h2>Registro de Escolaridad</h2>
  <?php echo form_open('oficios/registrodeescolaridad','class="custom" target="_blank"'); ?>
  <div class="large-3 columns">
  <label for="ciclo_escolar">Ciclo Escolar:</label>
  <br>
  <input type="text" size="10" id="ciclo_escolar" name="ciclo_escolar" placeholder="Ciclo Escolar"/>
  </div>
  
  <div class="large-3 columns">
  <label for="Matricula">Por Semestre:</label>
  <br>
  <select id="semestre" name="semestre" class="medium">
        <option selected="selected" DISABLED>Seleccionar Semestre</option>
        <option value="1">1er. Semestre</option>
        <option value="2">2do. Semestre</option>
        <option value="3">3er. Semestre</option>
        <option value="4">4to. Semestre</option>
        <option value="5">5to. Semestre</option>
        <option value="6">6to. Semestre</option>
        <option value="7">7mo. Semestre</option>
        <option value="8">8vo. Semestre</option>
  </select>
  </div>
  
  <div class="large-3 columns">
  <label for="clave_especialidad">Por Especialidades:</label>
  <br>
  <select name="clave_especialidad" id="clave_especialidad">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <?php foreach ($especialidades as $valor): ?>
        <option value="<?=$valor->id?>"><?=$valor->label?></option>
        <?php endforeach; ?>
  </select>
  </div>

  <div class="large-3 columns">
  <br /><br />
  <input type="submit" name="Submit"  class="button postfix" value=" Listas Semestrales " > 
  </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!-- /// para lista por semestre //// -->



<!---  /// para la clave del super admin /// -->
<div id="myModal_clavesup" class="reveal-modal">
<h2>Cambio de clave.</h2>
  <?php echo form_open('parametros/superadmin_general_clave','class="custom"'); ?>
  <div class="large-6 columns">
  <label for="clave_nueva">Nueva Clave:</label>
  <br>
  <input type="password" size="30" id="clave_nueva" name="clave_nueva" placeholder="Nueva Clave"/>
  </div>
  <div class="large-6 columns"><br /><br />
  <input type="submit" class="button postfix" value=" Alta Nueva Clave "/>
  </div>
  </form>
<a class="close-reveal-modal">&#215;</a>
</div>
<!---  /// para la clave del super admin /// -->

<!---  /// para la clave del alumno /// -->
<div id="myModal_clavealu" class="reveal-modal">
<h2>Cambio de clave.</h2>
  <?php echo form_open('parametros/alumnoclave','class="custom"'); ?>
  <div class="large-6 columns">
  <label for="clave_nueva">Matricula del Alumno:</label>
  <br>
  <input type="text" size="30" id="clave_nueva" name="clave_nueva" placeholder="Matricula del Alumno"/>
  </div>
  <div class="large-6 columns"><br /><br />
  <input type="submit" class="button postfix" value=" Restaurar Clave "/>
  </div>
  </form>
<a class="close-reveal-modal">&#215;</a>
</div>
<!---  /// para la clave del alumno /// -->

<!---  /// para la clave del maestro /// -->
<div id="myModal_clavemae" class="reveal-modal">
<h2>Cambio de clave.</h2>
  <?php echo form_open('parametros/maestroclave','class="custom"'); ?>
  <div class="large-6 columns">
  <label for="clave_nueva">Matricula del Maestro:</label>
  <br>
  <input type="text" size="30" id="clave_nueva" name="clave_nueva" placeholder="Matricula del Maestro"/>
  </div>
  <div class="large-6 columns"><br /><br />
  <input type="submit" class="button postfix" value=" Restaurar Clave "/>
  </div>
  </form>
<a class="close-reveal-modal">&#215;</a>
</div>
<!---  /// para la clave del maestro /// -->

<!---  /// para la clave del administrador /// -->
<div id="myModal_claveadm" class="reveal-modal">
<h2>Cambio de clave.</h2>
  <?php echo form_open('parametros/administradorclave','class="custom"'); ?>
  <div class="large-6 columns">
  <label for="clave_nueva">Matricula del Administrador:</label>
  <br>
  <input type="text" size="30" id="clave_nueva" name="clave_nueva" placeholder="Matricula del Administrador"/>
  </div>
  <div class="large-6 columns"><br /><br />
  <input type="submit" class="button postfix" value=" Restaurar Clave "/>
  </div>
  </form>
<a class="close-reveal-modal">&#215;</a>
</div>
<!---  /// para la clave del administrador /// -->



<? if($idsession >= 3){ ?>
<!---  /// para las aperturas de las fechas calificaciones /// -->
<div id="myModal_fechas_calificaciones" class="reveal-modal">
<h2>Fechas Calificaciones / 1,2,3 Evalución</h2>
  <?php echo form_open('parametros/fechas_apertura','class="custom"'); ?>
  <?php $data['dt_fa'] = $this->user->fecha_apertura(); ?>
  <div class="large-3 columns">
  <label for="checkbox1"><input type="checkbox" id="checkbox1" name="ev1" <? if($data['dt_fa'][0]->primera_e == 1){echo "CHECKED";} ?> style="display: none;"><span class="custom checkbox checked"></span> 1ª Evaluación</label>
  </div>
  <div class="large-3 columns">
  <label for="checkbox2"><input type="checkbox" id="checkbox2" name="ev2" <? if($data['dt_fa'][0]->segunda_e == 1){echo "CHECKED";} ?> style="display: none;"><span class="custom checkbox checked"></span> 2ª Evaluación</label>
  </div>
  <div class="large-3 columns">
  <label for="checkbox3"><input type="checkbox" id="checkbox3" name="ev3" <? if($data['dt_fa'][0]->tercera_e == 1){echo "CHECKED";} ?> style="display: none;"><span class="custom checkbox checked"></span> 3ª Evaluación</label>
  </div>
  <div class="large-3 columns">
  <label for="checkbox3"><input type="checkbox" id="checkbox3" name="ev4" <? if($data['dt_fa'][0]->cuarta_e == 1){echo "CHECKED";} ?> style="display: none;"><span class="custom checkbox checked"></span> 4ª Evaluación</label>
  </div>
  <div class="large-12 columns">
  <br><p><input type="submit" class="button postfix" value=" Aperturas Calificaciones "/></p>
  <p>!La X Indica que esta activo¡</p>
  </div>
  </form>
<a class="close-reveal-modal">&#215;</a>
</div>
<!---  /// para las aperturas de las fechas calificaciones /// -->
<?php } ?>


<? if($idsession == 4){ ?>
<!---  /// para los datos de la escuela /// -->
<div id="myModal_datosescuela" class="reveal-modal">
<h2>Datos de la Escuela</h2>
  <?php echo form_open('parametros/escueladatos','class="custom"'); ?>
  <?php $data['dt_e'] = $this->user->d_escuela(); ?>
  <div class="large-4 columns">
  <label for="nom_escuela">Nombre de la Escuela:</label>
  <br>
  <input name="nom_escuela" type="text" id="nom_escuela" placeholder="Nombre de la Escuela" value="<?= $data['dt_e'][0]->nom_escuela; ?>" size="30"/>
  </div>
  <div class="large-4 columns">
  <label for="clave">Clave Escolar</label>
  <br>
  <input name="clave" type="text" id="clave" placeholder="Clave Escolar" value="<?= $data['dt_e'][0]->clave; ?>" size="30"/>
  </div>
  <div class="large-4 columns">
  <label for="direccion">Dirección Escuela:</label>
  <br>
  <input name="direccion" type="text" id="direccion" placeholder="Dirección Escuela" value="<?= $data['dt_e'][0]->direccion; ?>" size="30"/>
  </div>
  
  <div class="large-4 columns">
  <label for="tipo">Tipo:</label>
  <br>
  <input name="tipo" type="text" id="tipo" placeholder="Tipo o Clase de Nombre" value="<?= $data['dt_e'][0]->tipo; ?>" size="30"/>
  </div>
  <div class="large-4 columns">
  <label for="responsable_control_escolar">Responsable Control Escolar:</label>
  <br>
  <input name="responsable_control_escolar" type="text" id="responsable_control_escolar" placeholder="Responsable Control Escolar" value="<?= $data['dt_e'][0]->responsable_control_escolar; ?>" size="30"/>
  </div>
  <div class="large-4 columns">
  <label for="director">Director:</label>
  <br>
  <input name="director" type="text" id="director" placeholder="Director" value="<?= $data['dt_e'][0]->director; ?>" size="30"/>
  </div>
  
  <div class="large-4 columns">
  <label for="subdirector">Subdirector:</label>
  <br>
  <input name="subdirector" type="text" id="subdirector" placeholder="Subdirector" value="<?= $data['dt_e'][0]->subdirector; ?>" size="30"/>
  </div>
  <div class="large-4 columns">
  <label for="cicloescolar">Cliclo Escolar en Curso:</label>
  <br>
  <input name="cicloescolar" type="text" id="cicloescolar" placeholder="Ciclo Escolar en Curso" value="<?= $data['dt_e'][0]->cicloescolar; ?>" size="30"/>
  </div>
  <div class="large-4 columns"><br /><br />
  <input type="submit" class="button postfix" value=" Editar Datos Escolares "/>
  </div>
  </form>
<a class="close-reveal-modal">&#215;</a>
</div>
<!---  /// para los datos de la escuela /// -->
<?php } ?>




<?php if($idsession == 2){ ?>
<!---  /// para maestros - datos alumnos /// -->
<div id="myModal_alumnoperfil" class="reveal-modal">
<h2>Perfil del Alumno</h2>
<?php echo form_open('academico/alumnoperfil','class="custom"'); ?>
	<div class="large-6 columns">
    <label for="matricula">Matricula Alumno:</label>
    <br>
    <input name="matricula" type="text" id="matricula" placeholder="Matricula" size="30"/>
    </div>
	<div class="large-6 columns"><br /><br />
    <input type="submit" class="button postfix" value=" Consultar Perfil "/>
    </div>
</form>
<a class="close-reveal-modal">&#215;</a>
</div>
<!---  /// para maestros - datos alumnos /// -->


<!---  /// para maestros - datos alumnos documentacion/// -->
<div id="myModal_alumnodoc" class="reveal-modal">
<h2>Documentación del Alumno</h2>
<?php echo form_open('academico/alumnodoc','class="custom"'); ?>
	<div class="large-6 columns">
    <label for="matricula">Matricula Alumno:</label>
    <br>
    <input name="matricula" type="text" id="matricula" placeholder="Matricula" size="30"/>
    </div>
	<div class="large-6 columns"><br /><br />
    <input type="submit" class="button postfix" value=" Consultar Documentación "/>
    </div>
</form>
<a class="close-reveal-modal">&#215;</a>
</div>
<!---  /// para maestros - datos alumnos documentacion/// -->


<!---  /// para maestros - datos alumnos historial/// -->
<div id="myModal_alumnohist" class="reveal-modal">
<h2>Historial del Alumno</h2>
<?php echo form_open('academico/alumnohist','class="custom"'); ?>
	<div class="large-6 columns">
    <label for="matricula">Matricula Alumno:</label>
    <br>
    <input name="matricula" type="text" id="matricula" placeholder="Matricula" size="30"/>
    </div>
	<div class="large-6 columns"><br /><br />
    <input type="submit" class="button postfix" value=" Consultar Historial "/>
    </div>
</form>
<a class="close-reveal-modal">&#215;</a>
</div>
<!---  /// para maestros - datos alumnos historial/// -->
<?php } ?>






</div>
</div>