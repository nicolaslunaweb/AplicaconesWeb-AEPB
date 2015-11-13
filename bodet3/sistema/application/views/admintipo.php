<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //comprobamos si el usuario existe en la base de datos
    $('#matricula_post').focusout( function(){
        if( $("#matricula_post").val().length < 6)
        {
            $('#msgUsuario').html("<span style='color:#f00'>La Matricula tiene carácteres mínimos 8!</span>");
        }else{
            $.ajax({
                type: "POST",
                url: "http://localhost/sistem_sep/CodeIgniter_2.0.2/alumno/comprobar_usuario_ajax",
                data: "matricula_post="+$('#matricula_post').val(),
                beforeSend: function(){
                    $('#msgUsuario').html('<span>Verificando...</span>');
                },
                success: function( respuesta ){
                     if(respuesta != '<div style="display:none">1</div>')
                        $('#msgUsuario').html("<span style='color:rgb(43, 166, 203)'>Usuario existente</span>");
                    else
                        $('#msgUsuario').html('<span style="color:#f00">Usuario no existente</span>');
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
  <li class="current"><a href="#">Académicos</a></li>
  <li class="unavailable"><a href="#">Personal</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('admin/vista_tipo_personal','class="custom"'); ?>
        <div class="large-4 columns">
        <label for="Tipo Personal">Tipo Personal:</label>
        <br />
        <select id="tipo_personal" name="tipo_personal" class="medium">
      <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Profesor</option>
        <option value="2">Administrativo</option>
      </select>
        </div>
        <div class="large-4 columns">
        <label for="clave_tipo">Clave:</label>
      <br>
      <input type="text" size="10" id="clave_tipo" name="clave_tipo" placeholder="Clave Tipo Personal"/>
      <span id="msgUsuario"></span>
        </div>
       
  <!--//////////////-->
<div class="large-4 columns"><br /><br />
        <input type="submit" class="button postfix" value=" Hacer Consulta "/>
        </div>
        </form>
</div>