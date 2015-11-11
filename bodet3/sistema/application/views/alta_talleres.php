<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //comprobamos si el usuario existe en la base de datos
    $('#matricula').focusout( function(){
        if( $("#matricula").val().length < 5)
        {
            $('#msgUsuario').html("<span style='color:#f00'>La Matricula tiene carácteres mínimos 8!</span>");
        }else{
            $.ajax({
                type: "POST",
                url: "<?=base_url();?>alumno/comprobar_usuario_ajax2",
                data: "matricula="+$('#matricula').val(),
                beforeSend: function(){
                    $('#msgUsuario').html('<span>Verificando...</span>');
                },
                success: function( respuesta ){
                     if(respuesta != 'midato')
                        $('#msgUsuario').html("<span style='color:rgb(43, 166, 203)'>Usuario: "+respuesta+"</span><br>");
                    else
                        $('#msgUsuario').html('<span style="color:#f00">Usuario no existente</span><br>');
                }
 
            });
            return false;
        }
    });
});
</script>
<!-- calendario -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
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
  <li class="current"><a href="<?=base_url();?>talleres">Talleres</a></li>
  <li class="unavailable"><a href="<?=base_url();?>talleres/alta_talleres">Alta Talleres</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('talleres/sav','class="custom"'); ?>
      <div class="large-4 columns">
      <label for="Matricula">Matricula:</label>
      <br>
      <input type="text" size="15" id="matricula" name="matricula" placeholder="Matricula"/>
      <span id="msgUsuario"></span>
      <br />
      <label for="nivel">Nivel:</label>
      <br>
      <select id="nivel" name="nivel">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Taller</option>
        <option value="2">Diplomado</option>
        <option value="3">Maestría</option>
        <option value="4">Doctorado</option>
      </select>
      <br />
      <label for="fechataller">Fecha de Taller:</label>
      <br>
      <input name="fechataller" type="text" id="datepicker" placeholder="Fecha de Taller" size="20"/>
      <span id="mensaje"></span>
      <br />
      <label for="nombre">Nombre:</label>
      <br>
      <input name="nombre" type="text" id="nombre" placeholder="Nombre" size="20"/>
      <br />
      <label for="institucion">Institución:</label>
      <br>
      <input name="institucion" type="text" id="institucion" placeholder="Institución" size="20"/>
	  </div>
      <div class="large-4 columns">
      <label for="titulo">Titulo:</label>
      <br>
      <input name="titulo" type="text" id="titulo" placeholder="Titulo" size="20"/>
      <br />
      <label for="horas">Horas:</label>
      <br>
      <input name="horas" type="text" id="horas" placeholder="Horas" size="20"/>
      <br />
      <label for="porcentaje_de_avance">Porcentaje de avance:</label>
      <br>
      <input name="porcentaje_de_avance" type="text" id="porcentaje_de_avance" placeholder="Porcentaje de avance" size="20"/>
      <br />
      <label for="linea">Línea:</label>
      <br>
      <input name="linea" type="text" id="linea" placeholder="Línea" size="20"/>
      <br />
      <label for="tematica">Tematica:</label>
      <br>
      <input name="tematica" type="text" id="tematica" placeholder="Tematica" size="20"/>
	  </div>
      <div class="large-4 columns">
      <label for="municipio">Municipio:</label>
      <br>
      <input name="municipio" type="text" id="municipio" placeholder="Municipio" size="20"/>
      <br />
      <label for="ciudad">Estado:</label>
      <br>
      <input type="text" size="20" id="estado" name="ciudad" placeholder="Estado"/>
      <br />
      <label for="beca">Beca:</label>
      <br>
      <select id="beca" name="beca">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1">Si</option>
        <option value="2">No</option>
      </select>
      <br />
      <label for="tipo_de_beca">Tipo de Beca:</label>
      <br>
      <input type="text" size="20" id="tipo_de_beca" name="tipo_de_beca" placeholder="Tipo de Beca"/>
      <br />
      <label for="institucion_que_la_otorga">Institución que la Otorga:</label>
      <br>
      <input type="text" size="20" id="institucion_que_la_otorga" name="institucion_que_la_otorga" placeholder="Institución que la Otorga"/>
	  <br /><br />
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>