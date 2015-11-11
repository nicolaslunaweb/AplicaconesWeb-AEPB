<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Horarios</a></li>
  <li class="current"><a href="#">Alta Horario</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
        
        
        <?php echo form_open('horarios/edit','class="custom"'); ?>

      <hr>
      <h3>Periodo: <?= $this->uri->segment(3); ?> </h3>
      <h4>Especialidad: <?=$this->user->mi_join($this->uri->segment(4),'especialidades','id','label');?></h4>
      <h5>Semestre: <?=$this->uri->segment(5);?></h5>

      <input type="hidden" value="<?= $this->uri->segment(3); ?>" name="periodo" />
      <input type="hidden" value="<?= $this->uri->segment(4); ?>" name="especialidad" />
      <input type="hidden" value="<?= $this->uri->segment(5); ?>" name="semestre" />

      <table width=100%>
        <tr>
          <td>Horarios</td>
          <td>Lunes</td>
          <td>Martes</td>
          <td>Miercoles</td>
          <td>Jueves</td>
          <td>Viernes</td>
          <td>Sabado</td>
        </tr>
        <?php 
        $i = 1;
        while ($i <= 9)
        {
        ?>
        <tr>
          <td><input type="text" size="20" id="horario<?=$i;?>" name="horario<?=$i;?>" placeholder="Horario <?=$i;?>"/></td>
          <td>
          <select name="lunes<?=$i ?>" id="lunes<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <?php foreach ($materias as $valor): ?>
          <option value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
          <td>
          <select name="martes<?=$i ?>" id="martes<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <?php foreach ($materias as $valor): ?>
          <option value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
          <td>
          <select name="miercoles<?=$i ?>" id="miercoles<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <?php foreach ($materias as $valor): ?>
          <option value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
          <td>
          <select name="jueves<?=$i ?>" id="jueves<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <?php foreach ($materias as $valor): ?>
          <option value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
          <td>
          <select name="viernes<?=$i ?>" id="viernes<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <?php foreach ($materias as $valor): ?>
          <option value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
          <td>
          <select name="sabado<?=$i ?>" id="sabado<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <?php foreach ($materias as $valor): ?>
          <option value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
        </tr>
        <?php 
        $i ++;
        }?>
      </table>
      


      <br />
      <br />
      <input type="submit"  class="button postfix" value=" Alta Horario "/>  
   
      </form>
</div>