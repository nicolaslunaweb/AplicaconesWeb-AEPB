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
<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="unavailable"><a href="#">Alumno</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open($url,'class="custom"'); ?>
        <div class="large-6 columns">
        
        
        <label for="Matricula">Matricula del Alumno:</label>
      <br>
      <input type="text" size="10" id="matricula_post" name="matricula_post" placeholder="Matricula del Alumno"/>
      <span id="msgUsuario"></span>
        </div>
       
  <!--//////////////-->
<div class="large-6 columns"><br /><br />
        <input type="submit" class="button postfix" value=" Buscar Alumno "/>
        </div>
        </form>
</div>