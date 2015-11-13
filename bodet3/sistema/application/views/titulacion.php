<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="unavailable"><a href="#">titulacion</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('titulacion/vista_titulacion','class="custom"'); ?>
        <div class="large-6 columns">
        
        
        <label for="Matricula">Matricula del Alumno:</label>
      <br>
      <input type="text" size="10" id="matricula_post" name="matricula_post" placeholder="Matricula del Alumno"/>
      
        </div>
       
  <!--//////////////-->
<div class="large-6 columns"><br /><br />
        <input type="submit" class="button postfix" value=" Buscar Alumno "/>
        </div>
        </form>
</div>