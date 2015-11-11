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
<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Documentacion</a></li>
  <li class="unavailable"><a href="<?=base_url();?>alumno/alta_documentacion">Alta Documentacion</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('documentacion/sav','class="custom"'); ?>
      
        
    <div class="large-6 columns">            
    <label for="Otros">Matricula:</label>
      <br>
      <input type="text" size="12" id="matricula" name="matricula" placeholder="Matricula"/><span id="msgUsuario"></span>
      <br />
	<label for="status">Comprobante de pago Bancario:</label>
      
    <br />
    <select id="comprobante_de_pago_bancario" name="comprobante_de_pago_bancario" class="medium">
      <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Original</option>
        <option value="2">Copia</option>
        <option value="3">Ambos</option>
        <option value="4">Prestamo alumno</option>
      </select>
      <br />
          
    <label for="status">Acta de nacimiento:</label>
      
    <br />
    <select id="acta_de_nacimiento" name="acta_de_nacimiento" class="medium">
      <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Original</option>
        <option value="2">Copia</option>
        <option value="3">Ambos</option>
        <option value="4">Prestamo alumno</option>
      </select>
      <br />
      <label for="status">Certificado de Secundaria:</label>
       
      <br />
      <select id="certificado_de_secundaria" name="certificado_de_secundaria" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Original</option>
        <option value="2">Copia</option>
        <option value="3">Ambos</option>
        <option value="4">Prestamo alumno</option>
      </select>
      <br />
    <label for="status">Certificado de Bachillerato:</label>
    <br />
       
      <select id="certificado_de_bachillerato" name="certificado_de_bachillerato" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Original</option>
        <option value="2">Copia</option>
        <option value="3">Ambos</option>
        <option value="4">Prestamo alumno</option>
      </select>
      <br />
    <label for="status">Carta de Buena Conducta:</label>
       
      <br />
      <select id="carta_de_buena_conducta" name="carta_de_buena_conducta" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Original</option>
        <option value="2">Copia</option>
        <option value="3">Ambos</option>
        <option value="4">Prestamo alumno</option>
      </select>
      <br />
     
     <label for="status">Certificado de Salud:</label>
       
      <br />
      <select id="certificado_de_salud" name="certificado_de_salud" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Original</option>
        <option value="2">Copia</option>
        <option value="3">Ambos</option>
        <option value="4">Prestamo alumno</option>
      </select>


      
  </div>
      
    <div class="large-6 columns">
       <label for="status">Fotografias Tamaño Infantil:</label>
       <br />
      <select id="fotografias_infantil" name="fotografias_infantil" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Completas</option>
        <option value="2">Incompletas</option>
      </select>
      <br />
      
      <label for="status">CURP:</label>
       
      <br />
      <select id="curp" name="curp" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Original</option>
        <option value="2">Copia</option>
        <option value="3">Ambos</option>
        <option value="4">Prestamo alumno</option>
      </select>
      <br />
     
     <label for="status">Boleta de calificaciones:</label>
       
      <br />
      <select id="boleta_de_calificaciones" name="boleta_de_calificaciones" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Original</option>
        <option value="2">Copia</option>
        <option value="3">Ambos</option>
        <option value="4">Prestamo alumno</option>
      </select>
      <br />
      
      
    <label for="Otros">Otros:</label>
      <br>
      <input type="text" size="10" id="otros" name="otros" placeholder="Otros"/>
      <br />
      
      
     <label for="status">Carta de Pasante:</label>
       
      <br />
      <select id="carta_pasante" name="carta_pasante" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Original</option>
        <option value="2">Copia</option>
        <option value="3">Ambos</option>
        <option value="4">Prestamo alumno</option>
      </select>
      <br />
      
      
     <label for="status">Acta de Examen Profesional:</label>
       
      <br />
      <select id="acta_de_examen_profesional" name="acta_de_examen_profesional" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Original</option>
        <option value="2">Copia</option>
        <option value="3">Ambos</option>
        <option value="4">Prestamo alumno</option>
      </select>
      <br />
      

      
      
     <label for="status">Credencial:</label>
       
      <br />
      <select id="credencial" name="credencial" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0">Ninguno</option>
        <option value="1">Original</option>
        <option value="2">Copia</option>
        <option value="3">Ambos</option>
        <option value="4">Prestamo alumno</option>
      </select>
      <br />
      
      
     
      
      <input type="submit" class="button postfix" value=" Guardar "/>  
  </div>
      </form>
      </div>