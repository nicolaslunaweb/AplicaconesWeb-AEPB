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
    $('#fecha_nacimiento').datepicker({changeMonth: true, changeYear: true, yearRange: '-100:+0'});
  });
  $(document).ready(function(){
   $("#fecha_ingreso").datepicker({
      buttonImage: 'calendar.png',
      buttonImageOnly: true,
      changeYear: true,
      numberOfMonths: 1
   });
})
  </script>
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
    $( "#estado" ).autocomplete({
      source: availableTags
    });
  });

 $(function() {
    var availableTags2 = [
"Acateno",
"Acatlán",
"Acatzingo",
"Acteopan",
"Ahuacatlán",
"Ahuatlán",
"Ahuazotepec",
"Ahuehuetitla",
"Ajalpan",
"Albino Zertuche",
"Aljojuca",
"Altepexi",
"Amixtlán",
"Amozoc",
"Aquixtla",
"Atempan",
"Atexcal",
"Atlequizayan",
"Atlixco",
"Atoyatempan",
"Atzala",
"Atzitzihuacán",
"Atzitzintla",
"Axutla",
"Ayotoxco de Guerrero",
"Calpan",
"Caltepec",
"Camocuautla",
"Cañada Morelos",
"Caxhuacan",
"Chalchicomula de Sesma",
"Chapulco",
"Chiautla",
"Chiautzingo",
"Chichiquila",
"Chiconcuautla",
"Chietla",
"Chigmecatitlán",
"Chignahuapan",
"Chignautla",
"Chila",
"Chila de la Sal",
"Chilchotla",
"Chinantla",
"Coatepec",
"Coatzingo",
"Cohetzala",
"Cohuecán",
"Coronango",
"Coxcatlán",
"Coyomeapan",
"Coyotepec",
"Cuapiaxtla de Madero",
"Cuautempan",
"Cuautinchán",
"Cuautlancingo",
"Cuayuca de Andrade",
"Cuetzalan del Progreso",
"Cuyoaco",
"Domingo Arenas",
"Eloxochitlán",
"Epatlán",
"Esperanza",
"Francisco Z. Mena",
"General Felipe ?ngeles",
"Guadalupe",
"Guadalupe Victoria",
"Hermenegildo Galeana",
"Honey",
"Huaquechula",
"Huatlatlauca",
"Huauchinango",
"Huehuetla",
"Huehuetlán el Chico",
"Huehuetlán el Grande",
"Huejotzingo",
"Hueyapan",
"Hueytamalco",
"Hueytlalpan",
"Huitzilan de Serdán",
"Huitziltepec",
"Ixcamilpa de Guerrero",
"Ixcaquixtla",
"Ixtacamaxtitlán",
"Ixtepec",
"Izúcar de Matamoros",
"Jalpan",
"Jolalpan",
"Jonotla",
"Jopala",
"Juan C. Bonilla",
"Juan Galindo",
"Juan N. Méndez",
"La Magdalena Tlatlauquitepec",
"Lafragua",
"Libres",
"Los Reyes de Juárez",
"Mazapiltepec de Juárez",
"Mixtla",
"Molcaxac",
"Naupan",
"Nauzontla",
"Nealtican",
"Nicolás Bravo",
"Nopalucan",
"Ocotepec",
"Ocoyucan",
"Olintla",
"Oriental",
"Pahuatlán",
"Palmar de Bravo",
"Pantepec",
"Petlalcingo",
"Piaxtla",
"Puebla",
"Quecholac",
"Quimixtlán",
"Rafael Lara Grajales",
"San Andrés Cholula",
"San Antonio Cañada",
"San Diego la Mesa Tochimiltzingo",
"San Felipe Teotlalcingo",
"San Felipe Tepatlán",
"San Gabriel Chilac",
"San Gregorio Atzompa",
"San Jerónimo Tecuanipan",
"San Jerónimo Xayacatlán",
"San José Chiapa",
"San José Miahuatlán",
"San Juan Atenco",
"San Juan Atzompa",
"San Martín Texmelucan",
"San Martín Totoltepec",
"San Matías Tlalancaleca",
"San Miguel Ixitlán",
"San Miguel Xoxtla",
"San Nicolás Buenos Aires",
"San Nicolás de los Ranchos",
"San Pablo Anicano",
"San Pedro Cholula",
"San Pedro Yeloixtlahuaca",
"San Salvador el Seco",
"San Salvador el Verde",
"San Salvador Huixcolotla",
"San Sebastián Tlacotepec",
"Santa Catarina Tlaltempan",
"Santa Inés Ahuatempan",
"Santa Isabel Cholula",
"Santiago Miahuatlán",
"Santo Tomás Hueyotlipan",
"Soltepec",
"Tecali de Herrera",
"Tecamachalco",
"Tecomatlán",
"Tehuacán",
"Tehuitzingo",
"Tenampulco",
"Teopantlán",
"Teotlalco",
"Tepanco de López",
"Tepango de Rodríguez",
"Tepatlaxco de Hidalgo",
"Tepeaca",
"Tepemaxalco",
"Tepeojuma",
"Tepetzintla",
"Tepexco",
"Tepexi de Rodríguez",
"Tepeyahualco",
"Tepeyahualco de Cuauhtémoc",
"Tetela de Ocampo",
"Teteles de Avila Castillo",
"Teziutlán",
"Tianguismanalco",
"Tilapa",
"Tlachichuca",
"Tlacotepec de Benito Juárez",
"Tlacuilotepec",
"Tlahuapan",
"Tlaltenango",
"Tlanepantla",
"Tlaola",
"Tlapacoya",
"Tlapanalá",
"Tlatlauquitepec",
"Tlaxco",
"Tochimilco",
"Tochtepec",
"Totoltepec de Guerrero",
"Tulcingo",
"Tuzamapan de Galeana",
"Tzicatlacoyan",
"Venustiano Carranza",
"Vicente Guerrero",
"Xayacatlán de Bravo",
"Xicotepec",
"Xicotlán",
"Xiutetelco",
"Xochiapulco",
"Xochiltepec",
"Xochitlán de Vicente Suárez",
"Xochitlán Todos Santos",
"Yaonáhuac",
"Yehualtepec",
"Zacapala",
"Zacapoaxtla",
"Zacatlán",
"Zapotitlán",
"Zapotitlán de Méndez",
"Zaragoza",
"Zautla",
"Zihuateutla",
"Zinacatepec",
"Zongozotla",
"Zoquiapan",
"Zoquitlán"
];
    $( "#municipio" ).autocomplete({
      source: availableTags2
    });
  });
  </script>
<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>admin">Personal</a></li>
  <li class="current"><a href="#">Profesores</a></li>
  <li class="unavailable"><a href="<?=base_url();?>admin/alta_profesor">Alta Profesor</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('admin/sav','class="custom"'); ?>
       	 	 	 	 	 	

      <div class="large-4 columns">
      <label for="clave_docente"><?php if(form_error('clave_docente') == true){echo form_error('clave_docente');}else{echo "Clave Docente:";} ?></label>
      <br>
      <input type="text" size="20" id="clave_docente" name="clave_docente" placeholder="Clave Docente" value="<?php echo $this->input->post('clave_docente'); ?>" />
      <br />
      <label for="nombre"><?php if(form_error('nombre') == true){echo form_error('nombre');}else{echo "Nombre:";} ?></label>
      <br>
      <input type="text" size="20" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $this->input->post('nombre'); ?>" />
      <br />
      <label for="paterno"><?php if(form_error('paterno') == true){echo form_error('paterno');}else{echo "Paterno:";} ?></label>
      <br>
      <input type="text" size="20" id="paterno" name="paterno" placeholder="Paterno" value="<?php echo $this->input->post('paterno'); ?>" />
      <br />
      <label for="materno"><?php if(form_error('materno') == true){echo form_error('materno');}else{echo "Materno:";} ?></label>
      <br>
      <input type="text" size="20" id="materno" name="materno" placeholder="Materno" value="<?php echo $this->input->post('materno'); ?>" />
      <br />
      <label for="cedula"><?php if(form_error('cedula') == true){echo form_error('cedula');}else{echo "Cedula:";} ?></label>
      <br>
      <input type="text" size="20" id="cedula" name="cedula" placeholder="Cedula" value="<?php echo $this->input->post('cedula'); ?>" />
      <br />
      <label for="tipo"><?php if(form_error('tipo') == true){echo form_error('tipo');}else{echo "Tipo:";} ?></label>
      <br>
      <input type="text" size="20" id="tipo" name="tipo" placeholder="Tipo" value="<?php echo $this->input->post('tipo'); ?>" />
      <br />
      <label for="domicilio"><?php if(form_error('domicilio') == true){echo form_error('domicilio');}else{echo "Domicilio:";} ?></label>
      <br>
      <input type="text" size="20" id="domicilio" name="domicilio" placeholder="Domicilio" value="<?php echo $this->input->post('domicilio'); ?>" />
      <br />
      <label for="municipio">Municipio:</label>
      <br>
      <input type="text" size="20" id="municipio" name="municipio" placeholder="Municipio" value="<?php echo $this->input->post('municipio'); ?>" />
      <br>
      <label for="estado">Estado:</label>
      <br>
      <input type="text" size="20" id="estado" name="estado" placeholder="Estado" value="<?php echo $this->input->post('estado'); ?>" />
      <br />
      <label for="telefono_casa">Teléfono Casa:</label>
      <br>
      <input type="text" size="20" id="telefono_casa" name="telefono_casa" placeholder="Teléfono Casa" value="<?php echo $this->input->post('telefono_casa'); ?>" />
      
      </div>	 	 	 	 	 	 	
      <div class="large-4 columns">
      
      <label for="telefono_cel"><?php if(form_error('telefono_cel') == true){echo form_error('telefono_cel');}else{echo "Teléfono Cel:";} ?></label>
      <br>
      <input type="text" size="20" id="telefono_cel" name="telefono_cel" placeholder="Teléfono Cel" value="<?php echo $this->input->post('telefono_cel'); ?>" />
      <br />
      <label for="email">Email:</label>
      <br>
      <input type="text" size="20" id="email" name="email" placeholder="Email" value="<?php echo $this->input->post('email'); ?>" />
      <br />
      <label for="fecha_nacimiento">Fecha Nacimiento:</label>
      <br>
      <input type="text" size="20" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha Nacimiento" value="<?php echo $this->input->post('fecha_nacimiento'); ?>" />
      <br />
      <label for="sexo"><?php if(form_error('sexo') == true){echo form_error('sexo');}else{echo "Sexo:";} ?></label>
      <br>
      <select id="sexo" name="sexo" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($this->input->post('sexo') == 1){echo "selected=\"selected\"";}?>>Hombre</option>
        <option value="2" <? if($this->input->post('sexo') == 2){echo "selected=\"selected\"";}?>>Mujer</option>
        <option value="3" <? if($this->input->post('sexo') == 3){echo "selected=\"selected\"";}?>>Otros</option>
      </select>
      <br />
      <label for="estado_civil"><?php if(form_error('estado_civil') == true){echo form_error('estado_civil');}else{echo "Estado Civil:";} ?></label>
      <br>
      <select id="estado_civil" name="estado_civil" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($this->input->post('estado_civil') == 1){echo "selected=\"selected\"";}?>>Soltero</option>
        <option value="2" <? if($this->input->post('estado_civil') == 2){echo "selected=\"selected\"";}?>>Casado</option>
        <option value="3" <? if($this->input->post('estado_civil') == 3){echo "selected=\"selected\"";}?>>Divorciado</option>
        <option value="4" <? if($this->input->post('estado_civil') == 4){echo "selected=\"selected\"";}?>>Viudo</option>
      </select>
      <br />
      <label for="colonia">Colonia:</label>
      <br>
      <input type="text" size="20" id="colonia" name="colonia" placeholder="Colonia" value="<?php echo $this->input->post('colonia'); ?>" />
      <br>
      <label for="telefono_trabajo">Teléfono Trabajo:</label>
      <br>
      <input type="text" size="20" id="telefono_trabajo" name="telefono_trabajo" placeholder="Teléfono Trabajo" value="<?php echo $this->input->post('telefono_trabajo'); ?>" />
      <br />
      <label for="perfil">Perfil:</label>
      <br>
      <input type="text" size="20" id="perfil" name="perfil" placeholder="Perfil" value="<?php echo $this->input->post('perfil'); ?>" />
      <br />
      <label for="curp">Curp:</label>
      <br>
      <input type="text" size="20" id="curp" name="curp" placeholder="Curp" value="<?php echo $this->input->post('curp'); ?>" />
      <br />
      <label for="fecha_ingreso">Fecha Ingreso:</label>
      <br>
      <input type="text" size="20" id="fecha_ingreso" name="fecha_ingreso" placeholder="Fecha Ingreso" value="<?php echo $this->input->post('fecha_ingreso'); ?>" />
      
      </div> 	 	 	 	 	 	 	 	
      <div class="large-4 columns">


      <label for="horario_laboral">Horario Laboral:</label>
      <br>
      <input type="text" size="20" id="horario_laboral" name="horario_laboral" placeholder="Horario Laboral" value="<?php echo $this->input->post('horario_laboral'); ?>" />
      <br />
      <label for="funciones">Funciones:</label>
      <br>
      <input type="text" size="20" id="funciones" name="funciones" placeholder="Funciones" value="<?php echo $this->input->post('funciones'); ?>" />
      <br />
      <label for="lengua">Lengua:</label>
      <br>
      <input type="text" size="20" id="lengua" name="lengua" placeholder="Lengua" value="<?php echo $this->input->post('lengua'); ?>" />
      <br />
      <label for="rfc">R.F.C.:</label>
      <br>
      <input type="text" size="20" id="rfc" name="rfc" placeholder="R.F.C." value="<?php echo $this->input->post('rfc'); ?>" />
      <br />
      <label for="clave_presupuestal">Clave Presupuestal:</label>
      <br>
      <input type="text" size="20" id="clave_presupuestal" name="clave_presupuestal" placeholder="Clave Presupuestal" value="<?php echo $this->input->post('clave_presupuestal'); ?>" />
      <br />
      <label for="tipo_nombramiento">Tipo de Nombramiento:</label>
      <br>
      <select id="tipo_nombramiento" name="tipo_nombramiento" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Tiempo Completo</option>
        <option value="2">Medio Tiempo</option>
        <option value="3">3/4 Tiempo Asiciado B</option>
        <option value="4">3/4 Tiempo Asociado C</option>
        <option value="5">Horas Asignatura B</option>
        <option value="6">Horas Asignatura C</option>
        <option value="7">Interinos</option>
        <option value="8">Recursos propios</option>
      </select>
      <br />
      <label for="categoria">Categoría y/o Puesto:</label>
      <br>
      <input type="text" size="20" id="categoria" name="categoria" placeholder="Categoría y/o Puesto" value="<?php echo $this->input->post('categoria'); ?>" />
      <br />
      <label for="grado">Grado:</label>
      <br>
      <input type="text" size="20" id="grado" name="grado" placeholder="Grado" value="<?php echo $this->input->post('grado'); ?>" />
      <br />
      <label for="grupo">Grupo:</label>
      <br>
      <input type="text" size="20" id="grupo" name="grupo" placeholder="Grupo" value="<?php echo $this->input->post('grupo'); ?>" />
      <br />
      <label for="escolaridad">Máxima Escolaridad:</label>
      <br>
      <input type="text" size="20" id="escolaridad" name="escolaridad" placeholder="Máxima Escolaridad" value="<?php echo $this->input->post('escolaridad'); ?>" />
 
      <br /> 	
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>