<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Horarios</a></li>
  <li class="current"><a href="#">Alta Horarios</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('horarios/sav','class="custom"'); ?>
      
      <div class="large-4 columns">
      
      <label for="periodo">Ciclo Escolar:</label>
      <br>
       <select id="periodo" name="periodo" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="2012-2013">2012-2013</option>
        <option value="2013-2014">2013-2014</option>
        <option value="2014-2015">2014-2015</option>
        <option value="2015-2016">2015-2016</option>
        <option value="2016-2017">2016-2017</option>
        <option value="2017-2018">2017-2018</option>
        <option value="2018-2019">2018-2019</option>
        <option value="2019-2020">2019-2020</option>
      </select>
      
      </div>

      <div class="large-4 columns">
      
      <label for="clave_especialidad">Especialidades:</label>
  <br>
  <select name="clave_especialidad" id="clave_especialidad">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <?php foreach ($especialidades as $valor): ?>
        <option value="<?=$valor->id?>"><?=$valor->label?></option>
        <?php endforeach; ?>
  </select>
      
      </div>

      <div class="large-4 columns">
      
      <label for="Matricula">Semestre:</label>
  <br>
  <select id="semestre" name="semestre" class="medium">
        <option selected="selected" DISABLED>Seleccionar Semestre</option>
        <option value="1">1er. Semestre</option>
        <option value="2">2do. Semestre</option>
        <option value="3">3er. Semestre</option>
        <option value="4">4to. Semestre</option>
        <option value="5">5to. Semestre</option>
        <option value="6">6to. Semestre</option>
        <option value="7">7mo. Semestre</option>
        <option value="8">8vo. Semestre</option>
  </select>
      
      </div>


      <hr>
      

      <input type="submit"  class="button postfix" value=" Alta Horario "/>  
   
      </form>
</div>