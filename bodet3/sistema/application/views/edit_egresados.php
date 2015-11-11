<!-- calendario -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
jQuery(function($){
   $.datepicker.regional['es'] = {
      closeText: 'Cerrar',
      prevText: '<Ant',
      nextText: 'Sig>',
      currentText: 'Hoy',
      monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
      dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
      dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
      dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
      weekHeader: 'Sm',
      dateFormat: 'dd/mm/yy',
      firstDay: 1,
      isRTL: false,
      showMonthAfterYear: false,
      yearSuffix: ''};
   $.datepicker.setDefaults($.datepicker.regional['es']);
}); 
$(document).ready(function(){
   $("#datepicker").datepicker({
      buttonImage: 'calendar.png',
      buttonImageOnly: true,
      changeYear: true,
      numberOfMonths: 1
   });
})
</script>
<!-- calendario -->
<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>egresados">Egresados</a></li>
  <li class="unavailable"><a href="#">Edit Egresados</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('egresados/edit_sav_egresados','class="custom"'); ?>
      
      <div class="large-12 columns">
      <label for="Matricula">Matricula:</label>
      <br>
      <input class="large-4 columns" name="matricula" type="text" id="matricula" placeholder="Matricula" value="<?=$dt_egresados['0']->matricula;?>" size="10" readonly="readonly"/>
      <br />
      </div>

      <div class="large-4 columns">
      <label for="Fecha">Fecha de Egreso:</label>
      <br>
      <input name="fecha" type="text" id="datepicker" placeholder="Fecha de Egreso" value="<?=$dt_egresados['0']->fecha;?>" size="20"/>
      <br />
      <label for="semestrescursados">Semestres Cursados:</label>
      <br>
      <input name="semestrescursados" type="text" id="semestrescursados" placeholder="Semestres Cursados" value="<?=$dt_egresados['0']->semestrescursados;?>" size="20"/>
      <br />
      <label for="email">E-mail:</label>
      <br>
      <input name="email" type="text" id="email" placeholder="E-mail" value="<?=$dt_egresados['0']->email;?>" size="20"/>
      <br />
      <label for="Telefono">Teléfono:</label>
      <br>
      <input name="telefono" type="text" id="telefono" placeholder="Teléfono" value="<?=$dt_egresados['0']->telefono;?>" size="20"/>
	  </div>
      <div class="large-4 columns">
      <label for="Celular">Celular:</label>
      <br>
      <input name="celular" type="text" id="celular" placeholder="Celular" value="<?=$dt_egresados['0']->celular;?>" size="20"/>
      <br />
      <label for="Empleo">Empleo:</label>
      <br>
      <input name="empleo" type="text" id="empleo" placeholder="Empleo" value="<?=$dt_egresados['0']->empleo;?>" size="20"/>
      <br />
      <label for="Institucion">Institución:</label>
      <br>
      <input name="institucion" type="text" id="institucion" placeholder="Institución" value="<?=$dt_egresados['0']->institucion;?>" size="20"/>
      <br />
      <label for="Tipo">Tipo:</label>
      <br>
      <select id="tipo" name="tipo" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_egresados['0']->tipo == 1){echo "selected=\"selected\"";}?>>Privada</option>
        <option value="2" <? if($dt_egresados['0']->tipo == 2){echo "selected=\"selected\"";}?>>Publica</option>
        <option value="3" <? if($dt_egresados['0']->tipo == 3){echo "selected=\"selected\"";}?>>Otras</option>
      </select>
  </div>
      <div class="large-4 columns"> 
      <label for="Dirección">Dirección:</label>
      <br>
      <input name="direccion" type="text" id="direccion" placeholder="Dirección" value="<?=$dt_egresados['0']->direccion;?>" size="20"/>
      <br />
      <label for="Director">Director:</label>
      <br>
      <input name="director" type="text" id="director" placeholder="Director" value="<?=$dt_egresados['0']->director;?>" size="20"/>
      <br />
      <label for="Puesto">Puesto:</label>
      <br>
      <input name="puesto" type="text" id="puesto" placeholder="Puesto" value="<?=$dt_egresados['0']->puesto;?>" size="20"/>
	  <br />
      <label for="¿Tienes horas frente a grupo?">¿Tienes horas frente a grupo?:</label>
      <br>
      <select id="hrs_grupo" name="hrs_grupo" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_egresados['0']->hrs_grupo == 1){echo "selected=\"selected\"";}?>>Si</option>
        <option value="2" <? if($dt_egresados['0']->hrs_grupo == 2){echo "selected=\"selected\"";}?>>No</option>
      </select>
	  <br />
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>