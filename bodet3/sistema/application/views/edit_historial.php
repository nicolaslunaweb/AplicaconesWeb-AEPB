<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Historial</a></li>
  <li class="unavailable"><a href="#">Edit Historial</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('historial/edit_sav_historial','class="custom"'); ?>
      
      <div class="large-12 columns">
      <label for="Matricula">Matricula:</label>
      <br>
      <input name="matricula" type="text" class="large-4 columns" id="matricula" placeholder="Matricula" value="<?=$dt_historial['0']->matricula;?>" size="10" readonly="readonly"/><br />
      </div>
        
      <div class="large-6 columns">
      
      <label for="Nombre de Secundaria">Nombre de Secundaria:</label>
	  <br />
      <input name="nombre_sec" type="text" id="nombre_sec" placeholder="Nombre de Secundaria" value="<?=$dt_historial['0']->nombre_sec;?>" size="20"/>
      <br />
      <label for="Certificado de Secundaria">Certificado de Secundaria:</label>
      <br>
      <input name="certificado_sec" type="text" id="certificado_sec" placeholder="Certificado de Secundaria" value="<?=$dt_historial['0']->certificado_sec;?>" size="20"/>
      <br />
      <label for="Periodo de Secundaria">Periodo de Secundaria:</label>
      <br>
      <input name="periodo_sec" type="text" id="periodo_sec" placeholder="Periodo de Secundaria" value="<?=$dt_historial['0']->periodo_sec;?>" size="20"/>
      <br />
      <label for="Municipio de Secundaria">Municipio de Secundaria:</label>
      <br>
      <input name="municipio_sec" type="text" id="municipio_sec" placeholder="Municipio de Secundaria" value="<?=$dt_historial['0']->municipio_sec;?>" size="20"/>
      <br />
      <label for="Estado de Secundaria">Estado de Secundaria:</label>
      <br>
      <input name="estado_sec" type="text" id="estado_sec" placeholder="Estado de Secundaria" value="<?=$dt_historial['0']->estado_sec;?>" size="20"/>
      <br />
      <label for="Promedio de Secundaria">Promedio de Secundaria:</label>
      <br>
      <input name="promedio_sec" type="text" id="promedio_sec" placeholder="Promedio de Secundaria" value="<?=$dt_historial['0']->promedio_sec;?>" size="20"/>
     
      </div>
      <div class="large-6 columns">
     
      <label for="Nombre de Preparatoria o Bachillerato">Nombre de Preparatoria o Bachillerato:</label>
      <br>
      <input name="nombre_prep" type="text" id="nombre_prep" placeholder="Nombre de Preparatoria o Bachillerato" value="<?=$dt_historial['0']->nombre_prep;?>" size="20"/>
      <br />
      <label for="Certificado de Preparatoria o Bachillerato">Certificado de Preparatoria o Bachillerato:</label>
      <br>
      <input name="certificado_prep" type="text" id="certificado_prep" placeholder="Certificado de Preparatoria o Bachillerato" value="<?=$dt_historial['0']->certificado_prep;?>" size="20"/>
      <br />
      <label for="Periodo de Preparatoria o Bachillerato">Periodo de Preparatoria o Bachillerato:</label>
      <br>
      <input name="periodo_prep" type="text" id="periodo_prep" placeholder="Periodo de Preparatoria o Bachillerato" value="<?=$dt_historial['0']->periodo_prep;?>" size="20"/>
      <br />
      <label for="Municipio de Preparatoria o Bachillerato">Municipio de Preparatoria o Bachillerato:</label>
      <br>
      <input name="municipio_prep" type="text" id="municipio_prep" placeholder="Municipio de Preparatoria o Bachillerato" value="<?=$dt_historial['0']->municipio_prep;?>" size="20"/>
      <br />
      <label for="Estado de Preparatoria o Bachillerato">Estado de Preparatoria o Bachillerato:</label>
      <br>
      <input name="estado_prep" type="text" id="estado_prep" placeholder="Estado de Preparatoria o Bachillerato" value="<?=$dt_historial['0']->estado_prep;?>" size="20"/>
      <br />
      <label for="Promedio de Preparatoria o Bachillerato">Promedio de Preparatoria o Bachillerato:</label>
      <br>
      <input name="promedio_prep" type="text" id="promedio_prep" placeholder="Promedio de Preparatoria o Bachillerato" value="<?=$dt_historial['0']->promedio_prep;?>" size="20"/>
      <br />
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>