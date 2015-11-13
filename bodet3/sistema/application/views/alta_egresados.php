<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //comprobamos si el usuario existe en la base de datos
    $('#matricula').focusout( function(){
        if( $("#matricula").val().length < 5)
        {
            $('#msgUsuario').html("<span style='color:#f00'>La Matricula tiene carácteres mínimos 8!</span>");
        }else{
            $.ajax({
                type: "POST",
                url: "<?=base_url();?>alumno/comprobar_usuario_ajax2",
                data: "matricula="+$('#matricula').val(),
                beforeSend: function(){
                    $('#msgUsuario').html('<span>Verificando...</span>');
                },
                success: function( respuesta ){
                     if(respuesta != 'midato')
                        $('#msgUsuario').html("<span style='color:rgb(43, 166, 203)'>Usuario: "+respuesta+"</span><br>");
                    else
                        $('#msgUsuario').html('<span style="color:#f00">Usuario no existente</span><br>');
                }
 
            });
            return false;
        }
    });
});
</script>
<!-- calendario -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
jQuery(function($){
   $.datepicker.regional['es'] = {
      closeText: 'Cerrar',
      prevText: '<Ant',
      nextText: 'Sig>',
      currentText: 'Hoy',
      monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
      dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
      dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
      dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
      weekHeader: 'Sm',
      dateFormat: 'dd/mm/yy',
      firstDay: 1,
      isRTL: false,
      showMonthAfterYear: false,
      yearSuffix: ''};
   $.datepicker.setDefaults($.datepicker.regional['es']);
}); 
$(document).ready(function(){
   $("#datepicker").datepicker({
      buttonImage: 'calendar.png',
      buttonImageOnly: true,
      changeYear: true,
      numberOfMonths: 1
   });
})
</script>
<!-- calendario -->
<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>egresados">Egresados</a></li>
  <li class="unavailable"><a href="<?=base_url();?>egresados/alta_egresados">Alta Egresados</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('egresados/sav','class="custom"'); ?>
                  
      <div class="large-12 columns">
      <label for="Matricula">Matricula:</label>
      <br>
      <input class="large-4 columns" type="text" size="10" id="matricula" name="matricula" placeholder="Matricula"/>
      <span id="msgUsuario"></span>
      <br />
      </div>

      <div class="large-4 columns">
      <label for="Fecha">Fecha de Egreso:</label>
      <br>
      <input name="fecha" type="text" id="datepicker" placeholder="Fecha de Egreso" size="20"/>
      <br />  
      <label for="semestrescursados">Semestres Cursados:</label>
      <br>
      <input name="semestrescursados" type="text" id="semestrescursados" placeholder="Semestres Cursados" size="20"/>
      <br />
      <label for="email">E-mail:</label>
      <br>
      <input name="email" type="text" id="email" placeholder="E-mail" size="20"/>
      <br />
      <label for="Telefono">Teléfono:</label>
      <br>
      <input name="telefono" type="text" id="telefono" placeholder="Teléfono" size="20"/>
	  </div>
      <div class="large-4 columns">
      <label for="Celular">Celular:</label>
      <br>
      <input type="text" size="20" id="celular" name="celular" placeholder="Celular"/>
      <br />
      <label for="Empleo">Empleo:</label>
      <br>
      <input type="text" size="20" id="empleo" name="empleo" placeholder="Empleo"/>
      <br />
      <label for="Institucion">Institución:</label>
      <br>
      <input type="text" size="20" id="institucion" name="institucion" placeholder="Institución"/>
      <br />
      <label for="Tipo">Tipo:</label>
      <br>
      <select id="tipo" name="tipo" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Privada</option>
        <option value="2">Publica</option>
        <option value="3">Otras</option>
      </select>
  </div>
      <div class="large-4 columns"> 
      <label for="Dirección">Dirección:</label>
      <br>
      <input type="text" size="20" id="direccion" name="direccion" placeholder="Dirección"/>
      <br />
      <label for="Director">Director:</label>
      <br>
      <input type="text" size="20" id="director" name="director" placeholder="Director"/>
      <br />
      <label for="Puesto">Puesto:</label>
      <br>
      <input type="text" size="20" id="puesto" name="puesto" placeholder="Puesto"/>
	  <br />
      <label for="¿Tienes horas frente a grupo?">¿Tienes horas frente a grupo?:</label>
      <br>
      <select id="hrs_grupo" name="hrs_grupo" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
      </select>
      <br />
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>