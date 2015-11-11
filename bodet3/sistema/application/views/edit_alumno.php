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
    $( "#estado" ).autocomplete({
      source: availableTags
    });
    $( "#estadodeprocedencia" ).autocomplete({
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
    $( "#municipiodeprocedencia" ).autocomplete({
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
    $('#fecha_nacimiento').datepicker({changeMonth: true, changeYear: true, yearRange: '-100:+0'});
  });
  </script>
<!-- calendario -->
<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Alumno</a></li>
  <li class="unavailable"><a href="#">Edit Inscripción</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('alumno/edit_sav_alumno','class="custom"'); ?>
      
        
      <div class="large-4 columns">
        
      <label for="Matricula">Matricula:</label>
      <br>
      <input name="matricula" type="text" id="matricula" placeholder="Matricula" value="<?=$dt_alumno['0']->matricula;?>" size="10"/>
      <br />
      <label for="Matricula">Ficha Número:</label>
      <br>
      <input name="ficha_numero" type="text" id="ficha_numero" placeholder="Ficha Número" value="<?=$dt_alumno['0']->ficha;?>" size="10" readonly="readonly"/>
      <br />
      <label for="CURP">CURP:</label>
      <br>
      <input name="curp" type="text" id="curp" placeholder="CURP" value="<?=$dt_alumno['0']->curp;?>" size="20"/>
      <br />
      <label for="Nombre">Nombre:</label>
      <br>
      <input name="nombre" type="text" id="nombre" placeholder="Nombre" value="<?=$dt_alumno['0']->nombre;?>" size="20"/>
      <br />
      <label for="Apellid Paterno">Apellido Paterno:</label>
      <br>
      <input name="paterno" type="text" id="paterno" placeholder="Apellido Paterno" value="<?=$dt_alumno['0']->paterno;?>" size="20"/>
      <br />
      <label for="Apellido Materno">Apellido Materno:</label>
      <br>
      <input name="materno" type="text" id="materno" placeholder="Apellido Materno" value="<?=$dt_alumno['0']->materno;?>" size="20"/>
      <br />
      <label for="Fecha de Nacimiento del Alumno">Fecha de Nacimiento del Alumno:</label>
      <br />
      <input type="text" size="20" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento del Alumno" value="<?=$dt_alumno['0']->fecha_nacimiento;?>"/>
      <br />
        <label for="status">Sexo:</label>
      <br>
      <select id="sexo" name="sexo" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_alumno['0']->sexo == 1){echo "selected=\"selected\"";}?>>Hombre</option>
        <option value="2" <? if($dt_alumno['0']->sexo == 2){echo "selected=\"selected\"";}?>>Mujer</option>
        <option value="3" <? if($dt_alumno['0']->sexo == 3){echo "selected=\"selected\"";}?>>Otros</option>
      </select>
      <br />
      <label for="status">Semestre:</label>
      <br />
      <select id="semestre" name="semestre" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_alumno['0']->semestre == 1){echo "selected=\"selected\"";}?>>1er. Semestre</option>
        <option value="2" <? if($dt_alumno['0']->semestre == 2){echo "selected=\"selected\"";}?>>2do. Semestre</option>
        <option value="3" <? if($dt_alumno['0']->semestre == 3){echo "selected=\"selected\"";}?>>3er. Semestre</option>
        <option value="4" <? if($dt_alumno['0']->semestre == 4){echo "selected=\"selected\"";}?>>4to. Semestre</option>
        <option value="5" <? if($dt_alumno['0']->semestre == 5){echo "selected=\"selected\"";}?>>5to. Semestre</option>
        <option value="6" <? if($dt_alumno['0']->semestre == 6){echo "selected=\"selected\"";}?>>6to. Semestre</option>
        <option value="7" <? if($dt_alumno['0']->semestre == 7){echo "selected=\"selected\"";}?>>7mo. Semestre</option>
        <option value="8" <? if($dt_alumno['0']->semestre == 8){echo "selected=\"selected\"";}?>>8vo. Semestre</option>
      </select>
      <br />
      <label for="Clave de Especialidad">Especialidad:</label>
      <br>      
      <select name="clave_especialidad" id="clave_especialidad">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <?php foreach ($especialidades as $valor): ?>
        <option value="<?=$valor->id?>" <?=$this->user->mi_select($valor->id,$dt_alumno['0']->clave_especialidad)?>><?=$valor->label?></option>
        <?php endforeach; ?>
      </select>
      <br>
      <label for="Generación">Generación:</label>
      <br>
      <input name="generacion" type="text" id="generacion" placeholder="Generación" value="<?=$dt_alumno['0']->generacion;?>" size="20"/>
      </div>
        
      <div class="large-4 columns">
      <label for="Estadodeprocedencia">Estado de procedencia:</label>
      <br>
      <input type="text" size="20" id="estadodeprocedencia" name="estadodeprocedencia" placeholder="Estado de procedencia" value="<?=$dt_alumno['0']->estadodeprocedencia;?>"/>
      <br />
      <label for="Municipiodeprocedencia">Municipio de procedencia:</label>
      <br>
      <input type="text" size="20" id="municipiodeprocedencia" name="municipiodeprocedencia" placeholder="Municipio de procedencia" value="<?=$dt_alumno['0']->municipiodeprocedencia;?>"/>
      <br />
      <label for="Ciclo Escolar">Ciclo Escolar:</label>
      <br>
      <input name="ciclo_escolar" type="text" id="ciclo_escolar" placeholder="Ciclo Escolar" value="<?=$dt_alumno['0']->ciclo_escolar;?>" size="20"/>
      <br />
      <label for="Observaciones">Observaciones:</label>
      <br>
      <input name="observaciones" type="text" id="observaciones" placeholder="Observaciones" value="<?=$dt_alumno['0']->observaciones;?>" size="20"/>
      <br />
      <label for="Domicilio">Domicilio:</label>
      <br>
      <input name="domicilio" type="text" id="domicilio" placeholder="Domicilio" value="<?=$dt_alumno['0']->domicilio;?>" size="20"/>
      <br />
      <label for="Municipio">Municipio:</label>
      <br>
      <input name="municipio" type="text" id="municipio" placeholder="Municipio" value="<?=$dt_alumno['0']->municipio;?>" size="20"/>
      <br />
      <label for="Estado">Estado:</label>
      <br>
      <input name="estado" type="text" id="estado" placeholder="Estado" value="<?=$dt_alumno['0']->estado;?>" size="20"/>
      <br />
      <label for="C.P">C.P.:</label>
      <br>
      <input name="cp" type="text" id="cp" placeholder="C.P." value="<?=$dt_alumno['0']->cp;?>" size="20"/>
      <br />
      <label for="Telefono de Casa">Teléfono de Casa:</label>
      <br>
      <input name="telefono_casa" type="text" id="telefono_casa" placeholder="Telefono de Casa" value="<?=$dt_alumno['0']->telefono_casa;?>" size="20"/>
      <br />
      <label for="Telefono Celular">Teléfono Celular:</label>
      <br>
      <input name="telefono_cel" type="text" id="telefono_cel" placeholder="Telefono Celular" value="<?=$dt_alumno['0']->telefono_cel;?>" size="20"/>
      <br />
      <label for="Email">Email:</label>
      <br>
      <input name="email" type="text" id="email" placeholder="Email" value="<?=$dt_alumno['0']->email;?>" size="20"/>
  </div>
  
  <div class="large-4 columns">
       <label for="Tipo de Sangre">Tipo de Sangre:</label>
      <br>
      <select id="tipo_sangre" name="tipo_sangre" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_alumno['0']->tipo_sangre == 1){echo "selected=\"selected\"";}?>>0+</option>
        <option value="2" <? if($dt_alumno['0']->tipo_sangre == 2){echo "selected=\"selected\"";}?>>0-</option>
        <option value="3" <? if($dt_alumno['0']->tipo_sangre == 3){echo "selected=\"selected\"";}?>>A+</option>
        <option value="4" <? if($dt_alumno['0']->tipo_sangre == 4){echo "selected=\"selected\"";}?>>A-</option>
        <option value="5" <? if($dt_alumno['0']->tipo_sangre == 5){echo "selected=\"selected\"";}?>>B+</option>
        <option value="6" <? if($dt_alumno['0']->tipo_sangre == 6){echo "selected=\"selected\"";}?>>B-</option>
        <option value="7" <? if($dt_alumno['0']->tipo_sangre == 7){echo "selected=\"selected\"";}?>>AB+</option>
        <option value="8" <? if($dt_alumno['0']->tipo_sangre == 8){echo "selected=\"selected\"";}?>>AB-</option>
      </select>
      <br />
      <label for="Enfermedades">Enfermedades:</label>
      <br>
      <input name="enfermedades" type="text" id="enfermedades" placeholder="Enfermedades" value="<?=$dt_alumno['0']->enfermedades;?>" size="20"/>
      <br />
      <label for="Capacidades Diferente">Capacidades Diferentes:</label>
      <br>
      <input name="capacidad_diferente" type="text" id="capacidad_diferente" placeholder="Capacidades Diferente" value="<?=$dt_alumno['0']->capacidad_diferente;?>" size="20"/>
      <br>
      <label for="cuentaconbeca">¿Cuenta con Beca?:</label>
      <br>
      <input type="text" size="20" id="cuentaconbeca" name="cuentaconbeca" placeholder="¿Cuenta con Beca?" value="<?=$dt_alumno['0']->cuentaconbeca;?>"/>
      <br />
      <label for="tipobeca">Tipo de Beca:</label>
      <br>
      <input type="text" size="20" id="tipobeca" name="tipobeca" placeholder="Tipo de Beca" value="<?=$dt_alumno['0']->tipobeca;?>"/>
      <br />
      <label for="Nombre del Tutor">Nombre del Padre o Tutor:</label>
      <br>
      <input name="nombre_tutor" type="text" id="nombre_tutor" placeholder="Nombre del Tutor" value="<?=$dt_alumno['0']->nombre_tutor;?>" size="20"/>
      <br />
      <label for="Domicilio del Tutor">Domicilio del Padre o Tutor:</label>
      <br>
      <input name="domicilio_tutor" type="text" id="domicilio_tutor" placeholder="Domicilio del Tutor" value="<?=$dt_alumno['0']->domicilio_tutor;?>" size="20"/>
      <br />
      <label for="Telefono del Tutor">Teléfono del Padre o Tutor:</label>
      <br>
      <input name="telefono_tutor" type="text" id="telefono_tutor" placeholder="Telefono del Tutor" value="<?=$dt_alumno['0']->telefono_tutor;?>" size="20"/>
      <br />
      <label for="Email del Tutor">Email del Padre o Tutor:</label>
      <br>
      <input name="email_tutor" type="text" id="email_tutor" placeholder="Email del Tutor" value="<?=$dt_alumno['0']->email_tutor;?>" size="20"/>
      <br />
      <label for="Telefono de Emergencia">Teléfono de Emergencia:</label>
      <br>
      <input name="telemergencia" type="text" id="telemergencia" placeholder="Telefono de Emergencia" value="<?=$dt_alumno['0']->telemergencia;?>" size="20"/>
      <br />
      <label for="Clave Asesor">Clave Asesor:</label>
      <br>
      <input name="clave_asesor" type="text" id="clave_assesor" placeholder="Clave Asesor" value="<?=$dt_alumno['0']->clave_asesor;?>" size="20"/>
      <br />
      <br />      
      <br />
      <input type="submit"  class="button postfix" value=" Editar Datos de Alumno "/>  
      </div>
      </form>
      </div>