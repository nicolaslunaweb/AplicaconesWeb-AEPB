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
    $( "#estado_sec" ).autocomplete({
      source: availableTags
    });
$( "#estado_prep" ).autocomplete({
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
    $( "#municipio_sec" ).autocomplete({
      source: availableTags2
    });
$( "#municipio_prep" ).autocomplete({
      source: availableTags2
    });
  });
  </script>
<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Historial</a></li>
  <li class="unavailable"><a href="<?=base_url();?>alumno/alta_historial">Alta Historial</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('historial/sav','class="custom"'); ?>
      
      <div class="large-12 columns">
      <label for="Matricula">Matricula:</label>
      <br>
      <input class="large-4 columns" type="text" size="10" id="matricula" name="matricula" placeholder="Matricula"/>
      <div style="clear:both;"></div>
      <span id="msgUsuario"></span><br />
      </div>
        

      <div class="large-6 columns">
      
      <label for="Nombre de Secundaria">Nombre de Secundaria:</label>
	  <br />
      <input type="text" size="20" id="nombre_sec" name="nombre_sec" placeholder="Nombre de Secundaria"/>
      <br />
      <label for="Certificado de Secundaria">Certificado de Secundaria:</label>
      <br>
      <input type="text" size="20" id="certificado_sec" name="certificado_sec" placeholder="Certificado de Secundaria"/>
      <br />
      <label for="Periodo de Secundaria">Periodo de Secundaria:</label>
      <br>
      <input type="text" size="20" id="periodo_sec" name="periodo_sec" placeholder="Periodo de Secundaria"/>
      <br />
      <label for="Municipio de Secundaria">Municipio de Secundaria:</label>
      <br>
      <input type="text" size="20" id="municipio_sec" name="municipio_sec" placeholder="Municipio de Secundaria"/>
      <br />
      <label for="Estado de Secundaria">Estado de Secundaria:</label>
      <br>
      <input type="text" size="20" id="estado_sec" name="estado_sec" placeholder="Estado de Secundaria"/>
      <br />
      <label for="Promedio de Secundaria">Promedio de Secundaria:</label>
      <br>
      <input type="text" size="20" id="promedio_sec" name="promedio_sec" placeholder="Promedio de Secundaria"/>
     
      </div>
      <div class="large-6 columns">
     
      <label for="Nombre de Preparatoria o Bachillerato">Nombre de Preparatoria o Bachillerato:</label>
      <br>
      <input type="text" size="20" id="nombre_prep" name="nombre_prep" placeholder="Nombre de Preparatoria o Bachillerato"/>
      <br />
      <label for="Certificado de Preparatoria o Bachillerato">Certificado de Preparatoria o Bachillerato:</label>
      <br>
      <input type="text" size="20" id="certificado_prep" name="certificado_prep" placeholder="Certificado de Preparatoria o Bachillerato"/>
      <br />
      <label for="Periodo de Preparatoria o Bachillerato">Periodo de Preparatoria o Bachillerato:</label>
      <br>
      <input type="text" size="20" id="periodo_prep" name="periodo_prep" placeholder="Periodo de Preparatoria o Bachillerato"/>
      <br />
      <label for="Municipio de Preparatoria o Bachillerato">Municipio de Preparatoria o Bachillerato:</label>
      <br>
      <input type="text" size="20" id="municipio_prep" name="municipio_prep" placeholder="Municipio de Preparatoria o Bachillerato"/>
      <br />
      <label for="Estado de Preparatoria o Bachillerato">Estado de Preparatoria o Bachillerato:</label>
      <br>
      <input type="text" size="20" id="estado_prep" name="estado_prep" placeholder="Estado de Preparatoria o Bachillerato"/>
      <br />
      <label for="Promedio de Preparatoria o Bachillerato">Promedio de Preparatoria o Bachillerato:</label>
      <br>
      <input type="text" size="20" id="promedio_prep" name="promedio_prep" placeholder="Promedio de Preparatoria o Bachillerato"/>
      <br />
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>