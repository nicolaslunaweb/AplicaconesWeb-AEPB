<!-- calendario -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
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
    $( "#ciudad" ).autocomplete({
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
   <!-- calendario -->
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
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>admin">Personal</a></li>
  <li class="current"><a href="#">Profesores</a></li>
  <li class="unavailable"><a href="<?=base_url();?>admin/alta_profesor">Alta Historial Profesor</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('admin/sav_historial_profesor','class="custom"'); ?>

      <div class="large-4 columns">
      <label for="clave_docente">Clave Docente:</label>
      <br>
      <input type="text" size="10" id="clave_docente" name="clave_docente" placeholder="Clave Docente"/>
      <br />
      <label for="nivel">Nivel:</label>
      <br>
      <select id="nivel" name="nivel" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Taller</option>
        <option value="2">Diplomado</option>
        <option value="3">Seminario</option>
        <option value="4">Técnico</option>
        <option value="5">Licenciatura</option>
        <option value="6">Maestria</option>
        <option value="7">Doctorado</option>
      </select>
      <br />
      <label for="nombre">Nombre:</label>
      <br>
      <input type="text" size="10" id="nombre" name="nombre" placeholder="Nombre"/>
      <br />
      <label for="institucion">Institución:</label>
      <br>
      <input type="text" size="10" id="institucion" name="institucion" placeholder="Institución"/>
      <br />
      <label for="titulo">Titulo:</label>
      <br>
      <input type="text" size="10" id="titulo" name="titulo" placeholder="Titulo"/>
	  </div>
      
      <div class="large-4 columns">
      <label for="horas">Horas:</label>
      <br>
      <input type="text" size="10" id="horas" name="horas" placeholder="Horas"/>
      <br />
      <label for="porcentaje_de_avance">Porcentaje de Avance:</label>
      <br>
      <input type="text" size="10" id="porcentaje_de_avance" name="porcentaje_de_avance" placeholder="Porcentaje de Avance"/>
      <br />
      <label for="linea">Línea:</label>
      <br>
      <input type="text" size="10" id="linea" name="linea" placeholder="Línea"/>
      <br />
      <label for="tematica">Temática:</label>
      <br>
      <input type="text" size="10" id="tematica" name="tematica" placeholder="Temática"/>
      <br />
      <label for="municipio">Municipio:</label>
      <br>
      <input type="text" size="10" id="municipio" name="municipio" placeholder="Municipio"/>
	  </div>
      
      <div class="large-4 columns">
      <label for="ciudad">Ciudad:</label>
      <br>
      <input type="text" size="10" id="ciudad" name="ciudad" placeholder="Ciudad"/>
      <br />
      <label for="beca">Beca:</label>
      <br>
      <select id="beca" name="beca" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
      </select>
      <br />
      <label for="tipo_de_beca">Tipo de Beca:</label>
      <br>
      <input type="text" size="10" id="tipo_de_beca" name="tipo_de_beca" placeholder="Tipo de Beca"/>
      <br />
      <label for="institucion_que_la_otorga">Institución que la Otorga:</label>
      <br>
      <input type="text" size="10" id="institucion_que_la_otorga" name="institucion_que_la_otorga" placeholder="Institución que la Otorga"/>
      <br />
      <label for="fecha">Fecha:</label>
      <br>
      <input type="text" size="10" id="fecha" name="fecha" placeholder="Fecha"/>
      <br />

      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>