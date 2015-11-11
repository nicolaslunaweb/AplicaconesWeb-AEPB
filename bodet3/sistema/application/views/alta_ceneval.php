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
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript">
jQuery(function($){
  $.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '&#x3c;Ant',
    nextText: 'Sig&#x3e;',
    currentText: 'Hoy',
    monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
    'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
    'Jul','Ago','Sep','Oct','Nov','Dic'],
    dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
    dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
    weekHeader: 'Sm',
    dateFormat: 'dd/mm/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''};
  $.datepicker.setDefaults($.datepicker.regional['es']);
});
  $(function() {
    $('#fecha').datepicker({changeMonth: true, changeYear: true, yearRange: '-100:+0'});
  });
  </script>
<!-- calendario -->
<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>caneval">Ceneval</a></li>
  <li class="unavailable"><a href="<?=base_url();?>caneval/alta_caneval">Alta Ceneval</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('ceneval/sav','class="custom"'); ?>
      

      <div class="large-4 columns">
      <label for="Matricula">Matricula:</label>
      <br>
      <input type="text" size="10" id="matricula" name="matricula" placeholder="Matricula"/>
      <span id="msgUsuario"></span>
      <br />
      
      <label for="Fecha">Examen de admisión:</label>
      <br>
      <input name="examen_admision" type="text" id="examen_admision" placeholder="Examen de admisión" size="20"/>
      <br />
      <label for="Fecha">Fecha:</label>
      <br>
      <input name="fecha" type="text" id="fecha" placeholder="Fecha" size="20"/>
      <br />
      <label for="Examen">Examen:</label>
      <br>
      <input type="text" size="20" id="examen" name="examen" placeholder="Examen"/>
	  </div>
      
      <div class="large-4 columns">
      <label for="puntuaciondeexamen">Puntuación Examen:</label>
      <br>
      <input type="text" size="20" id="puntuaciondeexamen" name="puntuaciondeexamen" placeholder="Puntuación Examen"/>
      <br />
      <label for="Programa">Programa:</label>
      <br>
      <input type="text" size="20" id="programa" name="programa" placeholder="Programa"/>
      <br />
      <label for="Aplicador">Aplicador:</label>
      <br>
      <input type="text" size="20" id="aplicador" name="aplicador" placeholder="Aplicador"/>
      <br />
      <label for="Grupo">Grupo:</label>
      <br>
      <input type="text" size="20" id="grupo" name="grupo" placeholder="Grupo"/>
	  </div>
      
      <div class="large-4 columns">
      <label for="Folio">Folio:</label>
      <br>
      <input type="text" size="20" id="folio" name="folio" placeholder="Folio"/>
      <br />
      <label for="Versión Selección">Versión Selección:</label>
      <br>
      <input type="text" size="20" id="verision_seleccion" name="verision_seleccion" placeholder="Versión Selección"/>
      <br />
      <label for="Versión Diagnóstico">Versión Diagnóstico:</label>
      <br>
      <input type="text" size="20" id="version_diagnostico" name="version_diagnostico" placeholder="Versión Diagnóstico"/>
      <br />
      <label for="Responsable">Responsable:</label>
      <br>
      <input type="text" size="20" id="responsable" name="responsable" placeholder="Responsable"/>
	  <br />
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>