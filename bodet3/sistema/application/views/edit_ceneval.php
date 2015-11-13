<!-- calendario -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript">
jQuery(function($){
  $.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '&#x3c;Ant',
    nextText: 'Sig&#x3e;',
    currentText: 'Hoy',
    monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
    'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
    'Jul','Ago','Sep','Oct','Nov','Dic'],
    dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
    dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
    weekHeader: 'Sm',
    dateFormat: 'dd/mm/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''};
  $.datepicker.setDefaults($.datepicker.regional['es']);
});
  $(function() {
    $('#fecha').datepicker({changeMonth: true, changeYear: true, yearRange: '-100:+0'});
  });
  </script>
<!-- calendario -->
<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>caneval">Ceneval</a></li>
  <li class="unavailable"><a href="#">Edit Ceneval</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('ceneval/edit_sav_ceneval','class="custom"'); ?>

      <div class="large-4 columns">
      <label for="Matricula">Matricula:</label>
      <br>
      <input name="matricula" type="text" id="matricula" placeholder="Matricula" value="<?=$dt_ceneval['0']->matricula;?>" size="10" readonly="readonly"/>
      <br />
      <label for="Fecha">Examen de admisión:</label>
      <br>
      <input name="examen_admision" type="text" id="examen_admision" placeholder="Examen de admisión"  value="<?=$dt_ceneval['0']->examen_admision;?>" size="20"/>
      <br />
      <label for="Fecha">Fecha:</label>
      <br>
      <input name="fecha" type="text" id="fecha" placeholder="Fecha" value="<?=$dt_ceneval['0']->fecha;?>" size="20"/>
      <br />
      <label for="Examen">Examen:</label>
      <br>
      <input name="examen" type="text" id="examen" placeholder="Examen" value="<?=$dt_ceneval['0']->examen;?>" size="20"/>
	  </div>
      
      <div class="large-4 columns">
      <label for="puntuaciondeexamen">Puntuación Examen:</label>
      <br>
      <input type="text" size="20" id="puntuaciondeexamen" name="puntuaciondeexamen" placeholder="Puntuación Examen" value="<?=$dt_ceneval['0']->puntuaciondeexamen;?>"/>
      <br />
      <label for="Programa">Programa:</label>
      <br>
      <input name="programa" type="text" id="programa" placeholder="Programa" value="<?=$dt_ceneval['0']->programa;?>" size="20"/>
      <br />
      <label for="Aplicador">Aplicador:</label>
      <br>
      <input name="aplicador" type="text" id="aplicador" placeholder="Aplicador" value="<?=$dt_ceneval['0']->aplicador;?>" size="20"/>
      <br />
      <label for="Grupo">Grupo:</label>
      <br>
      <input name="grupo" type="text" id="grupo" placeholder="Grupo" value="<?=$dt_ceneval['0']->grupo;?>" size="20"/>
	  </div>
      
      <div class="large-4 columns">
      <label for="Folio">Folio:</label>
      <br>
      <input name="folio" type="text" id="folio" placeholder="Folio" value="<?=$dt_ceneval['0']->folio;?>" size="20"/>
      <br />
      <label for="Versión Selección">Versión Selección:</label>
      <br>
      <input name="verision_seleccion" type="text" id="verision_seleccion" placeholder="Versión Selección" value="<?=$dt_ceneval['0']->verision_seleccion;?>" size="20"/>
      <br />
      <label for="Versión Diagnóstico">Versión Diagnóstico:</label>
      <br>
      <input name="version_diagnostico" type="text" id="version_diagnostico" placeholder="Versión Diagnóstico" value="<?=$dt_ceneval['0']->version_diagnostico;?>" size="20"/>
      <br />
      <label for="Responsable">Responsable:</label>
      <br>
      <input name="responsable" type="text" id="responsable" placeholder="Responsable" value="<?=$dt_ceneval['0']->responsable;?>" size="20"/>
	  <br />
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>