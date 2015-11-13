<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>admin">personal</a></li>
  <li class="current"><a href="#">Administrativo</a></li>
  <li class="unavailable"><a href="#">Edit Administrativo</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('admin/sav_editadministrativo','class="custom"'); ?>
      
      <div class="large-12 columns">
      <label for="Matricula">Matricula:</label>
      <br>
      <input name="matricula" type="text" class="large-4 columns" id="matricula" placeholder="Matricula" value="<?=$dt_adminis['0']->matricula;?>" size="10" readonly="readonly"/>
      </div>
        
      <div class="large-4 columns">
      <label for="nombre">Nombre:</label>
      <br>
      <input name="nombre" type="text" id="nombre" placeholder="Nombre" value="<?=$dt_adminis['0']->nombre;?>" size="20"/>
      <br />
      <label for="paterno">Paterno:</label>
      <br>
      <input type="text" size="20" id="paterno" name="paterno" value="<?=$dt_adminis['0']->paterno;?>" placeholder="Paterno"/>
      <br />
      <label for="materno">Materno:</label>
      <br>
      <input type="text" size="20" id="materno" name="materno" value="<?=$dt_adminis['0']->materno;?>" placeholder="Materno"/>
  </div>
      
      <div class="large-4 columns">
      <label for="curp">CURP:</label>
      <br>
      <input type="text" size="20" id="curp" name="curp" value="<?=$dt_adminis['0']->curp;?>" placeholder="CURP"/>
      <br />
      <label for="tel">Cel:</label>
      <br>
      <input type="text" size="20" id="tel" name="tel" value="<?=$dt_adminis['0']->tel;?>" placeholder="Cel"/>
      <br />
      <label for="tel_casa">Tel Casa:</label>
      <br>
      <input type="text" size="20" id="tel_casa" name="tel_casa" value="<?=$dt_adminis['0']->tel_casa;?>" placeholder="Tel Casa"/>
	  </div>
      
      <div class="large-4 columns">
      <label for="ciudad">Ciudad:</label>
      <br>
      <input type="text" size="20" id="ciudad" name="ciudad" value="<?=$dt_adminis['0']->ciudad;?>" placeholder="Ciudad"/>
      <br />
      <label for="direccion">Dirección:</label>
      <br>
      <input type="text" size="20" id="direccion" name="direccion" value="<?=$dt_adminis['0']->direccion;?>" placeholder="Dirección"/>
      <br />
      <label for="email">Email:</label>
      <br>
      <input type="text" size="20" id="email" name="email" value="<?=$dt_adminis['0']->email;?>" placeholder="Email"/>
      <br />
      <input type="submit"  class="button postfix" value=" Editar Datos "/>  
      </div>
      </form>
</div>