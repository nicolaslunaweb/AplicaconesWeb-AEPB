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
   $("#fechatitulacion").datepicker({
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
  <li class="current"><a href="<?=base_url();?>titulacion">titulacion</a></li>
  <li class="unavailable"><a href="#">edit titulación</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('titulacion/edit_sav_titulacion','class="custom"'); ?>
      
      <div class="large-12 columns">
      <label for="Matricula">Matricula:</label>
      <br>
      <input name="matricula" type="text" class="large-4 columns" id="matricula" placeholder="Matricula" value="<?=$dt_titulacion['0']->matricula;?>" size="10" readonly="readonly"/><br />
      </div>
        
      <div class="large-4 columns">
      <label for="tema">Tema:</label>
      <br>
      <input type="text" size="20" id="tema" name="tema" placeholder="Tema" value="<?=$dt_titulacion['0']->tema;?>"/>
      <br />
      <label for="Línea Temática">Línea Temática:</label>
      <br>
      <input type="text" size="20" id="linea_tematica" name="linea_tematica" placeholder="Línea Temática" value="<?=$dt_titulacion['0']->linea_tematica;?>"/>
      <br />
      
      <label for="Presidente">Presidente:</label>
      <br>
      <input name="presidente" type="text" id="presidente" placeholder="Presidente" value="<?=$dt_titulacion['0']->presidente;?>" size="20"/>
      <br />
      
      <label for="cedulapresidente">Cedula Presidente:</label>
      <br>
      <input type="text" size="20" id="cedulapresidente" name="cedulapresidente" placeholder="Cedula Presidente" value="<?=$dt_titulacion['0']->cedulapresidente;?>"/>
      <br />
      
      <label for="Secretario">Secretario:</label>
      <br>
      <input name="secretario" type="text" id="secretario" placeholder="Secretario" value="<?=$dt_titulacion['0']->secretario;?>" size="20"/>
      <br />
      
      <label for="cedulasecretario">Cedula Secretario:</label>
      <br>
      <input type="text" size="20" id="cedulasecretario" name="cedulasecretario" placeholder="Cedula Secretario" value="<?=$dt_titulacion['0']->cedulasecretario;?>"/>
      <br />
      
      <label for="Vocal">Vocal:</label>
      <br>
      <input name="vocal" type="text" id="vocal" placeholder="Vocal" value="<?=$dt_titulacion['0']->vocal;?>" size="20"/>
      <br />
      
      <label for="cedulavocal">Cedula Vocal:</label>
      <br>
      <input type="text" size="20" id="cedulavocal" name="cedulavocal" placeholder="Cedula Vocal" value="<?=$dt_titulacion['0']->cedulavocal;?>"/>
      </div>
	  
      <div class="large-4 columns"> 
      
      <label for="Suplente">Suplente:</label>
      <br>
      <input name="suplente" type="text" id="suplente" placeholder="Suplente" value="<?=$dt_titulacion['0']->suplente;?>" size="20"/>
      <br />
	  
	  <label for="cedulasuplente">Cedula Suplente:</label>
      <br>
      <input type="text" size="20" id="cedulasuplente" name="cedulasuplente" placeholder="Cedula Suplente" value="<?=$dt_titulacion['0']->cedulasuplente;?>"/>
	  <br />
	  
      <label for="No. Autorización">No. Autorización:</label>
      <br>
      <input name="no_autorizacion" type="text" id="no_autorizacion" placeholder="No. Autorización" value="<?=$dt_titulacion['0']->no_autorizacion;?>" size="20"/>
      <br />
      <label for="Veredicto">Veredicto:</label>
      <br>
      <select id="veredicto" name="veredicto" class="medium" onchange="if(this.value=='5'){document.getElementById('datepicker').disabled = false}else{document.getElementById('datepicker').disabled = true}">
      <option DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_titulacion['0']->veredicto == 1){echo "selected=\"selected\"";}?>>Unanimidad</option>
        <option value="2" <? if($dt_titulacion['0']->veredicto == 2){echo "selected=\"selected\"";}?>>Unanimidad con Mención Honorífica</option>
        <option value="3" <? if($dt_titulacion['0']->veredicto == 3){echo "selected=\"selected\"";}?>>Unanimidad con Felicitación</option>
        <option value="4" <? if($dt_titulacion['0']->veredicto == 4){echo "selected=\"selected\"";}?>>Mayoría</option>
        <option value="5" <? if($dt_titulacion['0']->veredicto == 5){echo "selected=\"selected\"";}?>>Pendiente</option>
      </select>
      <br />
      <label for="fechapendiente">Fecha Pendiente:</label>
      <br>
      <input type="text" size="20" id="datepicker" name="fechapendiente" placeholder="Fecha Pendiente" value="<?=$dt_titulacion['0']->fechapendiente;?>" <?php if($dt_titulacion['0']->veredicto != 5){ ?>disabled="disabled"<?php }?>/>
      <br />
      <label for="Promedio">Promedio:</label>
      <br>
      <input name="promedio" type="text" id="promedio" placeholder="Promedio" value="<?=$dt_titulacion['0']->promedio;?>" size="20"/>
      <br />
      
      <label for="Hora">Hora:</label>
      <br>
      <input name="hora" type="text" id="hora" placeholder="Hora" value="<?=$dt_titulacion['0']->hora;?>" size="20"/>
      <br />
      
      <label for="Salón">Salón:</label>
      <br>
      <input name="salon" type="text" id="salon" placeholder="Salón" value="<?=$dt_titulacion['0']->salon;?>" size="20"/>

      </div>
      <div class="large-4 columns">
     <label for="Generación">Generación:</label>
      <br>
      <input name="generacion" type="text" id="generacion" placeholder="Generación" value="<?=$dt_titulacion['0']->generacion;?>" size="20"/>
      <br />

      <label for="Fecha de Titulación">Fecha de Titulación:</label>
      <br>
      <input type="text" size="20" id="fechatitulacion" name="fechatitulacion" placeholder="Fecha de Titulación"  value="<?=$dt_titulacion['0']->fechatitulacion;?>" />
      <br />

      <label for="Asesor">Asesor:</label>
      <br>
      <input name="asesor" type="text" id="asesor" placeholder="Asesor" value="<?=$dt_titulacion['0']->asesor;?>" size="20"/>
      <br />
      
      <label for="Documento">Documento:</label>
      <br>
      <input name="documento" type="text" id="documento" placeholder="Documento" value="<?=$dt_titulacion['0']->documento;?>" size="20"/>
      <br />
      
      <label for="Ciclo Escolar">Ciclo Escolar:</label>
      <br>
      <input name="ciclo_escolar" type="text" id="ciclo_escolar" placeholder="Ciclo Escolar" value="<?=$dt_titulacion['0']->ciclo_escolar;?>" size="20"/>
      <br />
      
      <label for="No. Titulo">No. Titulo:</label>
      <br>
      <input name="no_titulo" type="text" id="no_titulo" placeholder="No. Titulo" value="<?=$dt_titulacion['0']->no_titulo;?>" size="20"/>
      <br />
      <br />
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>