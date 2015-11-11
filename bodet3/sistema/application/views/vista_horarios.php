<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Especialidades</a></li>
  <li class="current"><a href="#">horarios</a></li>
  <li class="unavailable"><a href="#">Vista Horaio</a></li>
</ul>
</div></div>
<!-- breadcrumbs  -->

<div class="row">
		<div class="large-12 columns">  
        <hr />

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
        	foreach ($horarios as $valor):
        	$horario = "horario".$i;
        	//////
        	$lunes = "lunes".$i;
        	$martes = "martes".$i;
        	$miercoles = "miercoles".$i;
        	$jueves = "jueves".$i;
        	$viernes = "viernes".$i;
        	$sabado = "sabado".$i;
        ?>
        <tr>
          <td>
          <? if($valor-> $horario){echo $valor-> $horario; } ?>
          </td>
          <td>
          <? if($valor-> $lunes){echo $valor-> $lunes; } ?>
          </td>
          <td>
          <? if($valor-> $martes){echo $valor-> $martes; } ?>
          </td>
          <td>
          <? if($valor-> $miercoles){echo $valor-> $miercoles; } ?>
          </td>
          <td>
          <? if($valor-> $jueves){echo $valor-> $jueves; } ?>
          </td>
          <td>
          <? if($valor-> $viernes){echo $valor-> $viernes; } ?>
          </td>
          <td>
          <? if($valor-> $sabado){echo $valor-> $sabado; } ?>
          </td>
        </tr>
        <?php 
        $i ++;
        endforeach;
        }?>
      </table>


<?php echo form_open('horarios/editar','class="custom"'); ?>
<input name="periodo" id="periodo" type="hidden" value="<?=$periodo;?>" />
<input name="especialidad" id="especialidad" type="hidden" value="<?=$especialidad;?>" />
<input name="semestre" id="semestre" type="hidden" value="<?=$semestre;?>" />
<input type="submit"  class="button postfix" value=" Editar  Horario "/>
</form>


 
  </div>
</div>
