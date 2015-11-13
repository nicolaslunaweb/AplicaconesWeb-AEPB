<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //comprobamos si el usuario existe en la base de datos
    $('#matricula').focusout( function(){
        if( $("#matricula").val().length < 5)
        {
            $('#msgUsuario').html("<span style='color:#f00'>La Matricula tiene carácteres mínimos 5!</span><br /><br />");
        }else{
            $.ajax({
                type: "POST",
                url: "http://localhost/sistem_sep/CodeIgniter_2.0.2/alumno/comprobar_usuario_ajax",
                data: "matricula="+$('#matricula').val(),
                beforeSend: function(){
                    $('#msgUsuario').html('<span>Verificando...</span><br /><br />');
                },
                success: function( respuesta ){
                     if(respuesta != '<div style="display:none">1</div>')
                        $('#msgUsuario').html("<span style='color:rgb(43, 166, 203)'>Matricula existente</span><br /><br />");
                    else
                        $('#msgUsuario').html('<span style="color:#f00">Matricula no existente</span><br /><br />');
                }
 
            });
            return false;
        }
    });
});
//////////// para clave docente
$(document).ready(function(){
    //comprobamos si el usuario existe en la base de datos
    $('#clave_docente').focusout( function(){
        if( $("#clave_docente").val().length < 5)
        {
            $('#msgUsuario2').html("<span style='color:#f00'>La Matricula Docente tiene carácteres mínimos 5!</span>");
        }else{
            $.ajax({
                type: "POST",
                url: "http://localhost/sistem_sep/CodeIgniter_2.0.2/alumno/comprobar_docente_ajax",
                data: "clave_docente="+$('#clave_docente').val(),
                beforeSend: function(){
                    $('#msgUsuario2').html('<span>Verificando...</span><br /><br />');
                },
                success: function( respuesta ){
                     if(respuesta != '<div style="display:none">1</div>')
                        $('#msgUsuario2').html("<span style='color:rgb(43, 166, 203)'>Matricula docente existente</span><br />");
                    else
                        $('#msgUsuario2').html('<span style="color:#f00">Matricula docente no existente</span><br />');
                }
 
            });
            return false;
        }
    });
});
//////////// para materia
$(document).ready(function(){
    //comprobamos si el usuario existe en la base de datos
    $('#materia').focusout( function(){
        if( $("#materia").val().length < 3)
        {
            $('#msgUsuario3').html("<span style='color:#f00'>La Materia tiene carácteres mínimos 3!</span>");
        }else{
            $.ajax({
                type: "POST",
                url: "http://localhost/sistem_sep/CodeIgniter_2.0.2/calificaciones/comprobar_materia_ajax",
                data: "materia="+$('#materia').val(),
                beforeSend: function(){
                    $('#msgUsuario3').html('<span>Verificando...</span><br /><br />');
                },
                success: function( respuesta ){
                     if(respuesta != '<div style="display:none">1</div>')
                        $('#msgUsuario3').html("<span style='color:rgb(43, 166, 203)'>Materia existente</span><br />");
                    else
                        $('#msgUsuario3').html('<span style="color:#f00">Materia no existente</span><br />');
                }
 
            });
            return false;
        }
    });
});
//////
function aMayusculas(obj,id){
    obj = obj.toUpperCase();
    document.getElementById(id).value = obj;
}
</script>
<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Historial</a></li>
  <li class="unavailable"><a href="<?=base_url();?>alumno/alta_historial">Alta Historial</a></li>
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
        
        
        <?php echo form_open('calificaciones/sav','class="custom"'); ?>
      
      <div class="large-12 columns">
      <label for="Matricula"><?php if(form_error('matricula') == true){echo form_error('matricula');}else{echo "Matricula:";} ?></label>
      <br>
      <input name="matricula" type="text" class="large-4 columns" id="matricula" placeholder="Matricula" value="<?php echo $this->input->post('matricula'); ?>" size="10"/>
      <br clear="all" />
      <span id="msgUsuario"></span>
      </div>
        
      <div class="large-4 columns">
      
      <label for="Clave Docente"><?php if(form_error('clave_docente') == true){echo form_error('clave_docente');}else{echo "Clave Docente:";} ?></label>
      <br>
      <input name="clave_docente" type="text" id="clave_docente" placeholder="Clave Docente" value="<?php echo $this->input->post('clave_docente'); ?>" size="20"/>
      <span id="msgUsuario2"></span>
      <br />
      
      <label for="Materia"><?php if(form_error('materia') == true){echo form_error('materia');}else{echo "Materia:";} ?></label>
      <br>
      <input name="materia" type="text" id="materia" onblur="aMayusculas(this.value,this.id)" placeholder="Materia" value="<?php echo $this->input->post('materia'); ?>" size="20"/>
      <span id="msgUsuario3"></span>
      <br />
      
      <label for="Ciclo Escolar">Ciclo Escolar:</label>
      <br>
      <input name="ciclo_escolar" type="text" id="ciclo_escolar" placeholder="Ciclo Escolar" value="<?php echo $this->input->post('ciclo_escolar'); ?>" size="20"/>
      <br />
      
      <label for="Asistencia 1">Asistencia 1:</label>
      <br>
      <input name="asistencia1" type="text" id="asistencia1" placeholder="Asistencia 1" value="<?php echo $this->input->post('asistencia1'); ?>" size="20"/>
      <br />
      
      <label for="Evaluacion 1">Evaluacion 1:</label>
      <br>
      <input name="evaluacion1" type="text" id="evaluacion1" placeholder="Evaluación 1" value="<?php echo $this->input->post('evaluacion1'); ?>" size="20"/>
      <br />
      
      <label for="Fecha 1">Fecha 1:</label>
      <br>
      <input name="fecha1" type="text" id="fecha1" placeholder="Fecha 1" value="<?php echo $this->input->post('fecha1'); ?>" size="20"/>

	  </div>
      <div class="large-4 columns">
      
      <label for="Asistencia 2">Asistencia 2:</label>
      <br>
      <input name="asistencia2" type="text" id="asistencia2" placeholder="Asistencia 2" value="<?php echo $this->input->post('asistencia2'); ?>" size="20"/>
      <br />
      
      <label for="Evaluación 2">Evaluación 2:</label>
      <br>
      <input name="evaluacion2" type="text" id="evaluacion2" placeholder="Evaluación 2" value="<?php echo $this->input->post('evaluacion2'); ?>" size="20"/>
      <br />
      
      <label for="Fecha 2">Fecha 2:</label>
      <br>
      <input name="fecha2" type="text" id="fecha2" placeholder="Fecha 2" value="<?php echo $this->input->post('fecha2'); ?>" size="20"/>
      <br />
      
      <label for="Asistencia 3">Asistencia 3:</label>
      <br>
      <input name="asistencia3" type="text" id="asistencia3" placeholder="Asistencia 3" value="<?php echo $this->input->post('asistencia3'); ?>" size="20"/>
      <br />
      
      <label for="Evaluación 3">Evaluación 3:</label>
      <br>
      <input name="evaluacion3" type="text" id="evaluacion3" placeholder="Evaluación 3" value="<?php echo $this->input->post('evaluacion3'); ?>" size="20"/>
      <br />
      
      <label for="Fecha 3">Fecha 3:</label>
      <br>
      <input name="fecha3" type="text" id="fecha3" placeholder="Fecha 3" value="<?php echo $this->input->post('fecha3'); ?>" size="20"/>

      </div>
      <div class="large-4 columns">
     
      <label for="Asistencia General">Asistencia General:</label>
      <br>
      <input name="asistencia_general" type="text" id="asistencia_general" placeholder="Asistencia General" value="<?php echo $this->input->post('asistencia_general'); ?>" size="20"/>
      <br />
      
      <label for="Calificación Final">Calificación Final:</label>
      <br>
      <input name="calificacion_final" type="text" id="calificacion_final" placeholder="Calificación Final" value="<?php echo $this->input->post('calificacion_final'); ?>" size="20"/>
      <br />
      
      <label for="Fecha">Fecha:</label>
      <br>
      <input name="fecha" type="text" id="fecha" placeholder="Fecha" value="<?php echo $this->input->post('fecha'); ?>" size="20"/>
      <br />

      <label for="Tipo Examen">Tipo Examen:</label>
      <br>
      <input name="tipo_examen" type="text" id="tipo_examen" placeholder="Tipo Examen" value="<?php echo $this->input->post('tipo_examen'); ?>" size="20"/>
      <br />
      
      <label for="Extraordinario">Extraordinario:</label>
      <br>
      <input name="extraordinario" type="text" id="extraordinario" placeholder="Extraordinario" value="<?php echo $this->input->post('extraordinario'); ?>" size="20"/>
      <br />
      
      <label for="Fecha Extra">Fecha Extra:</label>
      <br>
      <input name="fecha_extra" type="text" id="fecha_extra" placeholder="Fecha Extra" value="<?php echo $this->input->post('fecha_extra'); ?>" size="20"/>
      <br />
     
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>