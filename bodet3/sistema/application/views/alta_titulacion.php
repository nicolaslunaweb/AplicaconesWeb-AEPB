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
   $("#fechatitulacion").datepicker({
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
  <li class="current"><a href="<?=base_url();?>titulacion">titulacion</a></li>
  <li class="unavailable"><a href="<?=base_url();?>titulacion/alta_titulacion">Alta titulación</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('titulacion/sav','class="custom"'); ?>
      
      <div class="large-12 columns">
      <label for="Matricula">Matricula:</label>
      <br>
      <input class="large-4 columns" type="text" size="10" id="matricula" name="matricula" placeholder="Matricula"/>
      <div style="clear:both;"></div><span id="msgUsuario"></span>
      <br />
      </div>
        
      <div class="large-4 columns">
      <label for="tema">Tema:</label>
      <br>
      <input type="text" size="20" id="tema" name="tema" placeholder="Tema"/>
      <br />
      <label for="Línea Temática">Línea Temática:</label>
      <br>
      <input type="text" size="20" id="linea_tematica" name="linea_tematica" placeholder="Línea Temática"/>
      <br />
      
      <label for="Presidente">Presidente:</label>
      <br>
      <input type="text" size="20" id="presidente" name="presidente" placeholder="Presidente"/>
      <br />
      
      <label for="cedulapresidente">Cedula Presidente:</label>
      <br>
      <input type="text" size="20" id="cedulapresidente" name="cedulapresidente" placeholder="Cedula Presidente"/>
      <br />
      
      <label for="Secretario">Secretario:</label>
      <br>
      <input type="text" size="20" id="secretario" name="secretario" placeholder="Secretario"/>
      <br />
      
      <label for="cedulasecretario">Cedula Secretario:</label>
      <br>
      <input type="text" size="20" id="cedulasecretario" name="cedulasecretario" placeholder="Cedula Secretario"/>
      <br />

      <label for="Vocal">Vocal:</label>
      <br>
      <input type="text" size="20" id="vocal" name="vocal" placeholder="Vocal"/>
      <br />
      
      <label for="cedulavocal">Cedula Vocal:</label>
      <br>
      <input type="text" size="20" id="cedulavocal" name="cedulavocal" placeholder="Cedula Vocal"/>
      </div>
	  
      <div class="large-4 columns"> 
      <label for="Suplente">Suplente:</label>
      <br>
      <input type="text" size="20" id="suplente" name="suplente" placeholder="Suplente"/>
      <br />
      
      <label for="cedulasuplente">Cedula Suplente:</label>
      <br>
      <input type="text" size="20" id="cedulasuplente" name="cedulasuplente" placeholder="Cedula Suplente"/>
	  <br />

      <label for="No. Autorización">No. Autorización:</label>
      <br>
      <input type="text" size="20" id="no_autorizacion" name="no_autorizacion" placeholder="No. Autorización"/>
      <br />
      <label for="Veredicto">Veredicto:</label>
      <br>
      <select id="veredicto" name="veredicto" class="medium" onchange="if(this.value=='5'){document.getElementById('datepicker').disabled = false}else{document.getElementById('datepicker').disabled = true}">
      <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Unanimidad</option>
        <option value="2">Unanimidad con Mención Honorífica</option>
        <option value="3">Unanimidad con Felicitación</option>
        <option value="4">Mayoría</option>
        <option value="5">Pendiente</option>
      </select>
      <br />
      
      <label for="fechapendiente">Fecha Pendiente:</label>
      <br>
      <input type="text" size="20" id="datepicker" name="fechapendiente" placeholder="Fecha Pendiente" disabled="disabled"/>
      <br />
      
      <label for="Promedio">Promedio:</label>
      <br>
      <input type="text" size="20" id="promedio" name="promedio" placeholder="Promedio"/>
      <br />
      
      <label for="Hora">Hora:</label>
      <br>
      <input type="text" size="20" id="hora" name="hora" placeholder="Hora"/>
      <br />
      
      <label for="Salón">Salón:</label>
      <br>
      <input type="text" size="20" id="salon" name="salon" placeholder="Salón"/>
      </div>
      <div class="large-4 columns">
      
      <label for="Generación">Generación:</label>
      <br>
      <input type="text" size="20" id="generacion" name="generacion" placeholder="Generación"/>
      <br />

      <label for="Fecha de Titulación">Fecha de Titulación:</label>
      <br>
      <input type="text" size="20" id="fechatitulacion" name="fechatitulacion" placeholder="Fecha de Titulación"/>
      <br />

      <label for="Asesor">Asesor:</label>
      <br>
      <input type="text" size="20" id="asesor" name="asesor" placeholder="Asesor"/>
      <br />
      
      <label for="Documento">Documento:</label>
      <br>
      <input type="text" size="20" id="documento" name="documento" placeholder="Documento"/>
      <br />
      
      <label for="Ciclo Escolar">Ciclo Escolar:</label>
      <br>
      <input type="text" size="20" id="ciclo_escolar" name="ciclo_escolar" placeholder="Ciclo Escolar"/>
      <br />
      
      <label for="No. Titulo">No. Titulo:</label>
      <br>
      <input type="text" size="20" id="no_titulo" name="no_titulo" placeholder="No. Titulo"/>
      <br />
      <br />
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>