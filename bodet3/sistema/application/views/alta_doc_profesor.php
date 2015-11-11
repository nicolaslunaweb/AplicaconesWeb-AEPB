<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //comprobamos si el usuario existe en la base de datos
    $('#clave_docente').focusout( function(){
        if( $("#clave_docente").val().length < 5)
        {
            $('#msgUsuario').html("<span style='color:#f00'>La clave docente tiene carácteres mínimos 8!</span>");
        }else{
            $.ajax({
                type: "POST",
                url: "<?=base_url();?>admin/comprobar_usuario_ajax2",
                data: "clave_docente="+$('#clave_docente').val(),
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
<script>
/*
function mas(dato){
  mass = parseFloat(document.getElementById(dato).value);
  tota = parseFloat(document.getElementById('tatoldehoras').value);
  if(tota){
     total = tota + mass;
    document.getElementById("tatoldehoras").value = total;
  }else{
    document.getElementById("tatoldehoras").value = mass;
  }
}
*/
</script>
<!-- calendario -->
<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>admin">Personal</a></li>
  <li class="current"><a href="#">Profesores</a></li>
  <li class="unavailable"><a href="<?=base_url();?>admin/alta_profesor">Alta Documentos Profesor</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('admin/sav_doc_profesor','class="custom"'); ?>

      <div class="large-4 columns">
      <label for="clave_docente">Clave Docente:</label>
      <input type="text" size="10" id="clave_docente" name="clave_docente" placeholder="Clave Docente"/>
      <span id="msgUsuario"></span>
      </div>

      <div class="large-4 columns">
      <label for="rfc">RFC:</label>
      <input name="rfc" type="text" id="rfc" placeholder="RFC" size="20"/>
      </div>


      <div class="large-4 columns">
      <label for="ingreso_sep">Ingreso SEP:</label>
      <input name="ingreso_sep" type="text" id="datepicker" placeholder="Ingreso SEP" size="20"/>
	    </div>
      

<hr>
<div class="large-3 columns">
      <label for="tiponombramiento1">Tipo Nombramiento:</label>
      <br>
      <select id="tiponombramiento1" name="tiponombramiento1" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Tiempo Completo</option>
        <option value="2">Medio Tiempo</option>
        <option value="3">3/4 Tiempo Asiciado B</option>
        <option value="4">3/4 Tiempo Asociado C</option>
        <option value="5">Horas Asignatura B</option>
        <option value="6">Horas Asignatura C</option>
        <option value="7">Interinos</option>
        <option value="8">Recursos propios</option>
      </select>
      <br />
      <label for="clavepresupuestal1">Clave Presupuestal:</label>
      <br>
      <input name="clavepresupuestal1" type="text" id="clavepresupuestal1" placeholder="Clave Presupuestal" size="20"/>
      <br />
      <label for="categoriapuesto1">Categoria / Puesto:</label>
      <br>
      <input name="categoriapuesto1" type="text" id="categoriapuesto1" placeholder="Categoria / Puesto" size="20"/>
	    <br>
      <label for="horasclave1">Horas Clave:</label>
      <br>
      <input name="horasclave1" type="text" id="horasclave1" placeholder="Horas Clave" size="20" onchange="mas('horasclave1')"/>
</div>

<div class="large-3 columns">
      <label for="tiponombramiento2">Tipo Nombramiento:</label>
      <br>
      <select id="tiponombramiento2" name="tiponombramiento2" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Tiempo Completo</option>
        <option value="2">Medio Tiempo</option>
        <option value="3">3/4 Tiempo Asiciado B</option>
        <option value="4">3/4 Tiempo Asociado C</option>
        <option value="5">Horas Asignatura B</option>
        <option value="6">Horas Asignatura C</option>
        <option value="7">Interinos</option>
        <option value="8">Recursos propios</option>
      </select>
      <br />
      <label for="clavepresupuestal2">Clave Presupuestal:</label>
      <br>
      <input name="clavepresupuestal2" type="text" id="clavepresupuestal2" placeholder="Clave Presupuestal" size="20"/>
      <br />
      <label for="categoriapuesto2">Categoria / Puesto:</label>
      <br>
      <input name="categoriapuesto2" type="text" id="categoriapuesto2" placeholder="Categoria / Puesto" size="20"/>
      <br>
      <label for="horasclave2">Horas Clave:</label>
      <br>
      <input name="horasclave2" type="text" id="horasclave2" placeholder="Horas Clave" size="20" onchange="mas('horasclave2')"/>
</div>

<div class="large-3 columns">
      <label for="tiponombramiento3">Tipo Nombramiento:</label>
      <br>
      <select id="tiponombramiento3" name="tiponombramiento3" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Tiempo Completo</option>
        <option value="2">Medio Tiempo</option>
        <option value="3">3/4 Tiempo Asiciado B</option>
        <option value="4">3/4 Tiempo Asociado C</option>
        <option value="5">Horas Asignatura B</option>
        <option value="6">Horas Asignatura C</option>
        <option value="7">Interinos</option>
        <option value="8">Recursos propios</option>
      </select>
      <br />
      <label for="clavepresupuestal3">Clave Presupuestal:</label>
      <br>
      <input name="clavepresupuestal3" type="text" id="clavepresupuestal3" placeholder="Clave Presupuestal" size="20"/>
      <br />
      <label for="categoriapuesto3">Categoria / Puesto:</label>
      <br>
      <input name="categoriapuesto3" type="text" id="categoriapuesto3" placeholder="Categoria / Puesto" size="20"/>
      <br>
      <label for="horasclave3">Horas Clave:</label>
      <br>
      <input name="horasclave3" type="text" id="horasclave3" placeholder="Horas Clave" size="20" onchange="mas('horasclave3')"/>
</div>

<div class="large-3 columns">
      <label for="tiponombramiento4">Tipo Nombramiento:</label>
      <br>
      <select id="tiponombramiento4" name="tiponombramiento4" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Tiempo Completo</option>
        <option value="2">Medio Tiempo</option>
        <option value="3">3/4 Tiempo Asiciado B</option>
        <option value="4">3/4 Tiempo Asociado C</option>
        <option value="5">Horas Asignatura B</option>
        <option value="6">Horas Asignatura C</option>
        <option value="7">Interinos</option>
        <option value="8">Recursos propios</option>
      </select>
      <br />
      <label for="clavepresupuestal4">Clave Presupuestal:</label>
      <br>
      <input name="clavepresupuestal4" type="text" id="clavepresupuestal4" placeholder="Clave Presupuestal" size="20"/>
      <br />
      <label for="categoriapuesto4">Categoria / Puesto:</label>
      <br>
      <input name="categoriapuesto4" type="text" id="categoriapuesto4" placeholder="Categoria / Puesto" size="20"/>
      <br>
      <label for="horasclave4">Horas Clave:</label>
      <br>
      <input name="horasclave4" type="text" id="horasclave4" placeholder="Horas Clave" size="20" onchange="mas('horasclave4')"/>
</div>
      
      <div class="large-4 columns">
      <label for="tatoldehoras">Total de Horas:</label>
      <br>
      <input name="tatoldehoras" type="text" id="tatoldehoras" placeholder="Total de Horas" size="20"/>
      <br />
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>