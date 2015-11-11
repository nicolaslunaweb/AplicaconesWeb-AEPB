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
      <h3>Periodo: <?= $periodo; ?> </h3>
      <h4>Especialidad: <?=$this->user->mi_join($especialidad,'especialidades','id','label');?></h4>
      <h5>Semestre: <?=$semestre;?></h5>

      <input type="hidden" value="<?= $periodo; ?>" name="periodo" />
      <input type="hidden" value="<?= $especialidad; ?>" name="especialidad" />
      <input type="hidden" value="<?= $semestre; ?>" name="semestre" />

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
          <td>
            <?php foreach ($horarios as $valorhorarios): 
            $horario = "horario".$i;
            $lunes = "lunes".$i;
            $martes = "martes".$i;
            $miercoles = "miercoles".$i;
            $jueves = "jueves".$i;
            $viernes = "viernes".$i;
            $sabado = "sabado".$i;
            ?>
            <input type="text" size="20" id="horario<?=$i;?>" name="horario<?=$i;?>" value="<?=$valorhorarios->$horario ?>" />
          </td>
          <td>
          <select name="lunes<?=$i ?>" id="lunes<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <option value="" >Ninguno</option>
          <?php foreach ($materias as $valor): ?>
          <option <?=$this->user->mi_select($valorhorarios->$lunes,$valor->clave_especialidad) ?> value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
          <td>
          <select name="martes<?=$i ?>" id="martes<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <option value="" >Ninguno</option>
          <?php foreach ($materias as $valor): ?>
          <option <?=$this->user->mi_select($valorhorarios->$martes,$valor->clave_especialidad) ?> value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
          <td>
          <select name="miercoles<?=$i ?>" id="miercoles<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <option value="" >Ninguno</option>
          <?php foreach ($materias as $valor): ?>
          <option <?=$this->user->mi_select($valorhorarios->$miercoles,$valor->clave_especialidad) ?> value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
          <td>
          <select name="jueves<?=$i ?>" id="jueves<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <option value="" >Ninguno</option>
          <?php foreach ($materias as $valor): ?>
          <option <?=$this->user->mi_select($valorhorarios->$jueves,$valor->clave_especialidad) ?> value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
          <td>
          <select name="viernes<?=$i ?>" id="viernes<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <option value="" >Ninguno</option>
          <?php foreach ($materias as $valor): ?>
          <option <?=$this->user->mi_select($valorhorarios->$viernes,$valor->clave_especialidad) ?> value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
          <td>
          <select name="sabado<?=$i ?>" id="sabado<?=$i ?>">
          <option selected="selected" DISABLED>Seleccionar</option>
          <option value="" >Ninguno</option>
          <?php foreach ($materias as $valor): ?>
          <option <?=$this->user->mi_select($valorhorarios->$sabado,$valor->clave_especialidad) ?> value="<?=$valor->clave_especialidad ?>"><?=$valor->clave_especialidad ?></option>
          <?php endforeach; ?>
          </select>
          </td>
        </tr>
        <?php 
        $i ++;
        endforeach; 
        }?>
      </table>
      


      <br />
      <br />
      <input type="submit"  class="button postfix" value=" Edit Horario "/>  
   
      </form>
</div>