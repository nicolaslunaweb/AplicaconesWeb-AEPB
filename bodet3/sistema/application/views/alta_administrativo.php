 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script>
  $(function() {
    var availableTags = [
"Aguascalientes",
"Baja California",
"Baja California Sur",
"Campeche",
"Chiapas",
"Chihuahua",
"Coahuila",
"Colima",
"Distrito Federal",
"Durango",
"Estado de México",
"Guanajuato",
"Guerrero",
"Hidalgo",
"Jalisco",
"Michoacán",
"Morelos",
"Nayarit",
"Nuevo León",
"Oaxaca",
"Puebla",
"Querétaro",
"Quintana Roo",
"San Luis Potosí",
"Sinaloa",
"Sonora",
"Tabasco",
"Tamaulipas",
"Tlaxcala",
"Veracruz",
"Yucatán",
"Zacatecas"];
    $( "#ciudad" ).autocomplete({
      source: availableTags
    });
  });
 </script> 
<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>admin">personal</a></li>
  <li class="current"><a href="#">Administrativo</a></li>
  <li class="unavailable"><a href="<?=base_url();?>admin/alta_administrativo">Alta Administrativo</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('admin/sav_administrativo','class="custom"'); ?>
      
      <div class="large-12 columns">
      <label for="Matricula">Matricula:</label>
      <br>
      <input class="large-4 columns" type="text" size="10" id="matricula" name="matricula" placeholder="Matricula"/>
      </div>
        
      <div class="large-4 columns">
      <label for="nombre">Nombre:</label>
      <br>
      <input type="text" size="20" id="nombre" name="nombre" placeholder="Nombre"/>
      <br />
      <label for="paterno">Paterno:</label>
      <br>
      <input type="text" size="20" id="paterno" name="paterno" placeholder="Paterno"/>
      <br />
      <label for="materno">Materno:</label>
      <br>
      <input type="text" size="20" id="materno" name="materno" placeholder="Materno"/>
	  </div>
      
      <div class="large-4 columns">
      <label for="curp">CURP:</label>
      <br>
      <input type="text" size="20" id="curp" name="curp" placeholder="CURP"/>
      <br />
      <label for="tel">Cel:</label>
      <br>
      <input type="text" size="20" id="tel" name="tel" placeholder="Cel"/>
      <br />
      <label for="tel_casa">Tel Casa:</label>
      <br>
      <input type="text" size="20" id="tel_casa" name="tel_casa" placeholder="Tel Casa"/>
	  </div>
      
      <div class="large-4 columns">
      <label for="ciudad">Ciudad:</label>
      <br>
      <input type="text" size="20" id="ciudad" name="ciudad" placeholder="Ciudad"/>
      <br />
      <label for="direccion">Dirección:</label>
      <br>
      <input type="text" size="20" id="direccion" name="direccion" placeholder="Dirección"/>
      <br />
      <label for="email">Email:</label>
      <br>
      <input type="text" size="20" id="email" name="email" placeholder="Email"/>
      <br />
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>