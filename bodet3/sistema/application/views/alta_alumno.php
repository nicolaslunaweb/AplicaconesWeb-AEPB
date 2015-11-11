<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //comprobamos si el usuario existe en la base de datos
    $('#matricula').focusout( function(){
        if( $("#matricula").val().length < 6)
        {
            $('#msgUsuario').html("<span style='color:#f00'>La Matricula tiene carácteres mínimos 8!</span>");
        }else{
            $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>alumno/comprobar_usuario_ajax",
                data: "matricula="+$('#matricula').val(),
                beforeSend: function(){
                    $('#msgUsuario').html('<span>Verificando...</span>');
                },
                success: function( respuesta ){
                     if(respuesta != '<div style="display:none">1</div>')
                        $('#msgUsuario').html("<span style='color:#f00'>Usuario existente</span>");
                    else
                        $('#msgUsuario').html('<span style="color:rgb(43, 166, 203)">Usuario disponible</span>');
                }
 
            });
            return false;
        }
    });
});
</script>
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
  <li class="unavailable"><a href="<?=base_url();?>alumno/alta_alumno">Alta Alumno</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
            <?php if($error == "si"){ ?>
            <div data-alert class="alert-box alert">
              Nota: Hay campos si llenar.
              <a href="#" class="close">&times;</a>
            </div>
            <?php } ?>
		</div>
        
        
        <div class="large-12 columns">
        <?php echo form_open('alumno/alta_alumno_pre','class="custom"'); ?>
        <div class="large-2 columns">
        <label for="ficha_numero">Número de Ficha: </label>
        </div>
        <div class="large-3 columns">
        <input name="ficha_numero" type="text" id="ficha_numero" placeholder="Ficha Número" size="10"/>
        </div>
        <div class="large-2 columns">
        <input type="submit"  class="button postfix" value=" Buscar Ficha "/>  
        </div>
        <div class="large-5 columns"></div>
        </form>
        <hr />
        </div>
        
        
        
        <?php echo form_open('alumno/sav','class="custom"'); ?>
      
        
      <div class="large-4 columns">
        
      <label for="Matricula"><?php if(form_error('matricula') == true){echo form_error('matricula');}else{echo "Matricula:";} ?></label><span id="msgUsuario"></span>
      <br>
      <input name="matricula" type="text" id="matricula" placeholder="Matricula" value="<?php echo $this->input->post('matricula'); ?>" size="10"/>
      <br />
      <label for="CURP"><?php if(form_error('curp') == true){echo form_error('curp');}else{echo "CURP:";} ?></label>
      <br>
      <input name="curp" type="text" id="curp" placeholder="CURP" value="<?php echo $this->input->post('curp'); ?>" size="20"/>
      <br />
      <label for="Nombre"><?php if(form_error('nombre') == true){echo form_error('nombre');}else{echo "Nombre:";} ?></label>
      <br>
      <input type="text" size="20" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $this->input->post('nombre'); ?>"/>
      <br />
      <label for="Apellid Paterno"><?php if(form_error('paterno') == true){echo form_error('paterno');}else{echo "Apellido Paterno:";} ?></label>
      <br>
      <input type="text" size="20" id="paterno" name="paterno" placeholder="Apellido Paterno" value="<?php echo $this->input->post('paterno'); ?>"/>
      <br />
      <label for="Apellido Materno"><?php if(form_error('materno') == true){echo form_error('materno');}else{echo "Apellido Materno:";} ?></label>
      <br>
      <input type="text" size="20" id="materno" name="materno" placeholder="Apellido Materno" value="<?php echo $this->input->post('materno'); ?>"/>
      <br />
      <label for="Fecha de Nacimiento del Alumno"><?php if(form_error('fecha_nacimiento') == true){echo form_error('fecha_nacimiento');}else{echo "Fecha de Nacimiento del Alumno:";} ?></label>
      <br />
      <input type="text" size="20" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento del Alumn" value="<?php echo $this->input->post('fecha_nacimiento'); ?>" readonly/>
      <br />
        <label for="status"><?php if(form_error('sexo') == true){echo form_error('sexo');}else{echo "Sexo:";} ?></label>
      <br>
      <select id="sexo" name="sexo" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($this->input->post('sexo') == 1){echo "selected=\"selected\"";}?>>Hombre</option>
        <option value="2" <? if($this->input->post('sexo') == 2){echo "selected=\"selected\"";}?>>Mujer</option>
        <option value="3" <? if($this->input->post('sexo') == 3){echo "selected=\"selected\"";}?>>Otros</option>
      </select>
      <br />
      <label for="status"><?php if(form_error('semestre') == true){echo form_error('semestre');}else{echo "Semestre:";} ?></label>
      <br />
      <select id="semestre" name="semestre" class="medium">
        <option selected="selected" DISABLED>Seleccionar Semestre</option>
        <option value="1" <? if($this->input->post('semestre') == 1){echo "selected=\"selected\"";}?>>1er. Semestre</option>
        <option value="2" <? if($this->input->post('semestre') == 2){echo "selected=\"selected\"";}?>>2do. Semestre</option>
        <option value="3" <? if($this->input->post('semestre') == 3){echo "selected=\"selected\"";}?>>3er. Semestre</option>
        <option value="4" <? if($this->input->post('semestre') == 4){echo "selected=\"selected\"";}?>>4to. Semestre</option>
        <option value="5" <? if($this->input->post('semestre') == 5){echo "selected=\"selected\"";}?>>5to. Semestre</option>
        <option value="6" <? if($this->input->post('semestre') == 6){echo "selected=\"selected\"";}?>>6to. Semestre</option>
        <option value="7" <? if($this->input->post('semestre') == 7){echo "selected=\"selected\"";}?>>7mo. Semestre</option>
        <option value="8" <? if($this->input->post('semestre') == 8){echo "selected=\"selected\"";}?>>8vo. Semestre</option>
      </select>
      <br />
      <label for="Clave de Especialidad"><?php if(form_error('clave_especialidad') == true){echo form_error('clave_especialidad');}else{echo "Especialidad:";} ?></label>
      <br>      
      <select name="clave_especialidad" id="clave_especialidad">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <?php foreach ($especialidades as $valor): ?>
        <option value="<?=$valor->id?>" <?=$this->user->mi_select($valor->id, $this->input->post('clave_especialidad'))?>><?=$valor->label?></option>
        <?php endforeach; ?>
      </select>
      <br />
      <label for="Ciclo Escolar">Ciclo Escolar:</label>
      <br>
      <select id="ciclo_escolar" name="ciclo_escolar" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="2012-2013" <? if($this->input->post('ciclo_escolar') == '2012-2013'){echo "selected=\"selected\"";}?>>2012-2013</option>
        <option value="2013-2014" <? if($this->input->post('ciclo_escolar') == '2013-2014'){echo "selected=\"selected\"";}?>>2013-2014</option>
        <option value="2014-2015" <? if($this->input->post('ciclo_escolar') == '2014-2015'){echo "selected=\"selected\"";}?>>2014-2015</option>
        <option value="2015-2016" <? if($this->input->post('ciclo_escolar') == '2015-2016'){echo "selected=\"selected\"";}?>>2015-2016</option>
        <option value="2016-2017" <? if($this->input->post('ciclo_escolar') == '2016-2017'){echo "selected=\"selected\"";}?>>2016-2017</option>
        <option value="2017-2018" <? if($this->input->post('ciclo_escolar') == '2017-2018'){echo "selected=\"selected\"";}?>>2017-2018</option>
        <option value="2018-2019" <? if($this->input->post('ciclo_escolar') == '2018-2019'){echo "selected=\"selected\"";}?>>2018-2019</option>
        <option value="2019-2020" <? if($this->input->post('ciclo_escolar') == '2019-2020'){echo "selected=\"selected\"";}?>>2019-2020</option>
      </select>
      <br>
      <label for="generacion">Generación:</label>
      <br>
      <input type="text" size="100" id="generacion" name="generacion" placeholder="Generación" value="<?php echo $this->input->post('generacion'); ?>"/>
      </div>
      
      <div class="large-4 columns">
      <label for="Estadodeprocedencia">Estado de procedencia:</label>
      <br>
      <input type="text" size="20" id="estadodeprocedencia" name="estadodeprocedencia" placeholder="Estado de procedencia" value="<?php echo $this->input->post('estadodeprocedencia'); ?>"/>
      <br />
      <label for="Municipiodeprocedencia">Municipio de procedencia:</label>
      <br>
      <input type="text" size="20" id="municipiodeprocedencia" name="municipiodeprocedencia" placeholder="Municipio de procedencia" value="<?php echo $this->input->post('municipiodeprocedencia'); ?>"/>
      <br />
      <label for="Observaciones">Observaciones:</label>
      <br>
      <input type="text" size="20" id="observaciones" name="observaciones" placeholder="Observaciones" value="<?php echo $this->input->post('observaciones'); ?>no"/>
      <br />
      <label for="Domicilio">Domicilio:</label>
      <br>
      <input type="text" size="20" id="domicilio" name="domicilio" placeholder="Domicilio" value="<?php echo $this->input->post('domicilio'); ?>"/>
      <br />
      <label for="Estado">Estado:</label>
      <br>
      <input type="text" size="20" id="estado" name="estado" placeholder="Estado" value="<?php echo $this->input->post('estado'); ?>"/>
      <br />
      <label for="Municipio">Municipio:</label>
      <br>
      <input type="text" size="20" id="municipio" name="municipio" placeholder="Municipio" value="<?php echo $this->input->post('municipio'); ?>"/>
      <br />
      <label for="C.P">C.P.:</label>
      <br>
      <input type="text" size="20" id="cp" name="cp" placeholder="C.P." value="<?php echo $this->input->post('cp'); ?>"/>
      <br />
      <label for="Telefono de Casa">Teléfono de Casa:</label>
      <br>
      <input type="text" size="20" id="telefono_casa" name="telefono_casa" placeholder="Telefono de Casa" value="<?php echo $this->input->post('telefono_casa'); ?>no"/>
      <br />
      <label for="Telefono Celular">Teléfono Celular:</label>
      <br />
      <input type="text" size="20" id="telefono_cel" name="telefono_cel" placeholder="Telefono Celular" value="<?php echo $this->input->post('telefono_cel'); ?>"/>
      <br />
      <label for="Email">Email:</label>
      <br />
      <input type="text" size="20" id="email" name="email" placeholder="Email" value="<?php echo $this->input->post('email'); ?>no"/>
      <br />
      <label for="Tipo de Sangre"><?php if(form_error('tipo_sangre') == true){echo form_error('tipo_sangre');}else{echo "Tipo de Sangre:";} ?></label>
      <br />
      <select id="tipo_sangre" name="tipo_sangre" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($this->input->post('tipo_sangre') == 1){echo "selected=\"selected\"";}?>>0+</option>
        <option value="2" <? if($this->input->post('tipo_sangre') == 2){echo "selected=\"selected\"";}?>>0-</option>
        <option value="3" <? if($this->input->post('tipo_sangre') == 3){echo "selected=\"selected\"";}?>>A+</option>
        <option value="4" <? if($this->input->post('tipo_sangre') == 4){echo "selected=\"selected\"";}?>>A-</option>
        <option value="5" <? if($this->input->post('tipo_sangre') == 5){echo "selected=\"selected\"";}?>>B+</option>
        <option value="6" <? if($this->input->post('tipo_sangre') == 6){echo "selected=\"selected\"";}?>>B-</option>
        <option value="7" <? if($this->input->post('tipo_sangre') == 7){echo "selected=\"selected\"";}?>>AB+</option>
        <option value="8" <? if($this->input->post('tipo_sangre') == 8){echo "selected=\"selected\"";}?>>AB-</option>
      </select>
  </div>
  
  <div class="large-4 columns">
    <label for="Enfermedades">Enfermedades:</label>
      <br>
      <input type="text" size="20" id="enfermedades" name="enfermedades" placeholder="Enfermedades" value="<?php echo $this->input->post('enfermedades'); ?>"/>
      <br />
      <label for="Capacidades Diferente">Capacidades Diferentes:</label>
      <br>
      <input type="text" size="20" id="capacidad_diferente" name="capacidad_diferente" placeholder="Capacidades Diferente" value="<?php echo $this->input->post('capacidad_diferente'); ?>no"/>
      <br>
      <label for="cuentaconbeca">¿Cuenta con Beca?:</label>
      <br>
      <input type="text" size="20" id="cuentaconbeca" name="cuentaconbeca" placeholder="¿Cuenta con Beca?" value="<?php echo $this->input->post('cuentaconbeca'); ?>no"/>
      <br />
      <label for="tipobeca">Tipo de Beca:</label>
      <br>
      <input type="text" size="20" id="tipobeca" name="tipobeca" placeholder="Tipo de Beca" value="<?php echo $this->input->post('tipobeca'); ?>no"/>
      <br />
      <label for="Nombre del Tutor">Nombre del Padre o Tutor:</label>
      <br>
      <input type="text" size="20" id="nombre_tutor" name="nombre_tutor" placeholder="Nombre del Tutor" value="<?php echo $this->input->post('nombre_tutor'); ?>no"/>
      <br />
      <label for="Domicilio del Tutor">Domicilio del Padre o Tutor:</label>
      <br>
      <input type="text" size="20" id="domicilio_tutor" name="domicilio_tutor" placeholder="Domicilio del Tutor" value="<?php echo $this->input->post('domicilio_tutor'); ?>no"/>
      <br />
      <label for="Telefono del Tutor">Teléfono del Padre o Tutor:</label>
      <br>
      <input type="text" size="20" id="telefono_tutor" name="telefono_tutor" placeholder="Telefono del Tutor" value="<?php echo $this->input->post('telefono_tutor'); ?>no"/>
      <br />
      <label for="Email del Tutor">Email del Padre o Tutor:</label>
      <br>
      <input type="text" size="20" id="email_tutor" name="email_tutor" placeholder="Email del Tutor" value="<?php echo $this->input->post('email_tutor'); ?>no"/>
      <br />
      <label for="Telefono de Emergencia">Teléfono de Emergencia:</label>
      <br>
      <input type="text" size="20" id="telemergencia" name="telemergencia" placeholder="Telefono de Emergencia" value="<?php echo $this->input->post('telemergencia'); ?>no"/>
      <br />
      <label for="Clave Asesor">Clave Asesor:</label>
      <br>
      <input name="clave_asesor" type="text" id="clave_asesor" placeholder="Clave Asesor" value="<?php echo $this->input->post('clave_asesor'); ?>" size="20" /> 
    <br /><br />
      <input type="submit"  class="button postfix" value=" Alta de Alumno "/>  
      </div>
      </form>
      </div>




 