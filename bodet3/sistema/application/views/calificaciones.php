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
  <li class="unavailable"><a href="#">calificaciones</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('calificaciones/editar','class="custom"'); ?>
      <div class="large-4 columns">
      <label for="Matricula">Matricula del Alumno:</label>
      <br>
      <input type="text" size="10" id="matricula" name="matricula_post" placeholder="Matricula del Alumno"/>
      <span id="msgUsuario"></span>
      </div>
      
      <div class="large-4 columns">
      <label for="Materia">Clave Materia:</label>
      <br>
      <input type="text" size="10" id="clave_materia" name="clave_materia" placeholder="Clave Materia"/>
      </div>
       
 		 <!--//////////////-->
		<div class="large-4 columns"><br /><br />
        <input type="submit" class="button postfix" value=" Buscar Alumno "/>
        </div>
        </form>
</div>