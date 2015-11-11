<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>alumno">Documentacion</a></li>
  <li class="unavailable"><a href="#">Edit Documentacion</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
       <?php echo form_open('documentacion/edit_sav_documentacion','class="custom"'); ?>
        
    <div class="large-6 columns">            
    <label for="Otros">Matricula:</label>
      <br>
      <input name="matricula" type="text" id="matricula" placeholder="Matricula" value="<?=$dt_documentacion['0']->matricula;?>" size="12" readonly="readonly"/>
      <br />
	<label for="status">Comprobante de pago Bancario:</label>
      
    <br />
    <select id="comprobante_de_pago_bancario" name="comprobante_de_pago_bancario" class="medium">
      <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->comprobante_de_pago_bancario == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->comprobante_de_pago_bancario == 1){echo "selected=\"selected\"";}?>>Original</option>
        <option value="2" <? if($dt_documentacion['0']->comprobante_de_pago_bancario == 2){echo "selected=\"selected\"";}?>>Copia</option>
        <option value="3" <? if($dt_documentacion['0']->comprobante_de_pago_bancario == 3){echo "selected=\"selected\"";}?>>Ambos</option>
        <option value="4" <? if($dt_documentacion['0']->comprobante_de_pago_bancario == 4){echo "selected=\"selected\"";}?>>Prestamo alumno</option>
      </select>
      <br />
          
    <label for="status">Acta de nacimiento:</label>
      
    <br />
    <select id="acta_de_nacimiento" name="acta_de_nacimiento" class="medium">
      <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->acta_de_nacimiento == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->acta_de_nacimiento == 1){echo "selected=\"selected\"";}?>>Original</option>
        <option value="2" <? if($dt_documentacion['0']->acta_de_nacimiento == 2){echo "selected=\"selected\"";}?>>Copia</option>
        <option value="3" <? if($dt_documentacion['0']->acta_de_nacimiento == 3){echo "selected=\"selected\"";}?>>Ambos</option>
        <option value="4" <? if($dt_documentacion['0']->acta_de_nacimiento == 4){echo "selected=\"selected\"";}?>>Prestamo alumno</option>
      </select>
      <br />
      <label for="status">Certificado de Secundaria:</label>
       
      <br />
      <select id="certificado_de_secundaria" name="certificado_de_secundaria" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->certificado_de_secundaria == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->certificado_de_secundaria == 1){echo "selected=\"selected\"";}?>>Original</option>
        <option value="2" <? if($dt_documentacion['0']->certificado_de_secundaria == 2){echo "selected=\"selected\"";}?>>Copia</option>
        <option value="3" <? if($dt_documentacion['0']->certificado_de_secundaria == 3){echo "selected=\"selected\"";}?>>Ambos</option>
        <option value="4" <? if($dt_documentacion['0']->certificado_de_secundaria == 4){echo "selected=\"selected\"";}?>>Prestamo alumno</option>
      </select>
      <br />
    <label for="status">Certificado de Bachillerato:</label>
    <br />
       
      <select id="certificado_de_bachillerato" name="certificado_de_bachillerato" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->certificado_de_bachillerato == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->certificado_de_bachillerato == 1){echo "selected=\"selected\"";}?>>Original</option>
        <option value="2" <? if($dt_documentacion['0']->certificado_de_bachillerato == 2){echo "selected=\"selected\"";}?>>Copia</option>
        <option value="3" <? if($dt_documentacion['0']->certificado_de_bachillerato == 3){echo "selected=\"selected\"";}?>>Ambos</option>
        <option value="4" <? if($dt_documentacion['0']->certificado_de_bachillerato == 4){echo "selected=\"selected\"";}?>>Prestamo alumno</option>
      </select>
      <br />
    <label for="status">Carta de Buena Conducta:</label>
       
      <br />
      <select id="carta_de_buena_conducta" name="carta_de_buena_conducta" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->carta_de_buena_conducta == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->carta_de_buena_conducta == 1){echo "selected=\"selected\"";}?>>Original</option>
        <option value="2" <? if($dt_documentacion['0']->carta_de_buena_conducta == 2){echo "selected=\"selected\"";}?>>Copia</option>
        <option value="3" <? if($dt_documentacion['0']->carta_de_buena_conducta == 3){echo "selected=\"selected\"";}?>>Ambos</option>
        <option value="4" <? if($dt_documentacion['0']->carta_de_buena_conducta == 4){echo "selected=\"selected\"";}?>>Prestamo alumno</option>
      </select>
      <br />
     
     <label for="status">Certificado de Salud:</label>
       
      <br />
      <select id="certificado_de_salud" name="certificado_de_salud" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->certificado_de_salud == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->certificado_de_salud == 1){echo "selected=\"selected\"";}?>>Original</option>
        <option value="2" <? if($dt_documentacion['0']->certificado_de_salud == 2){echo "selected=\"selected\"";}?>>Copia</option>
        <option value="3" <? if($dt_documentacion['0']->certificado_de_salud == 3){echo "selected=\"selected\"";}?>>Ambos</option>
        <option value="4" <? if($dt_documentacion['0']->certificado_de_salud == 4){echo "selected=\"selected\"";}?>>Prestamo alumno</option>
      </select>


      
  </div>
      
    <div class="large-6 columns">
       <label for="status">Fotografias Tamaño Infantil:</label>
       <br />
      <select id="fotografias_infantil" name="fotografias_infantil" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->fotografias_infantil == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->fotografias_infantil == 1){echo "selected=\"selected\"";}?>>Completas</option>
        <option value="2" <? if($dt_documentacion['0']->fotografias_infantil == 2){echo "selected=\"selected\"";}?>>Incompletas</option>
      </select>
      <br />
      
      <label for="status">CURP:</label>
       
      <br />
      <select id="curp" name="curp" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->curp == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->curp == 1){echo "selected=\"selected\"";}?>>Original</option>
        <option value="2" <? if($dt_documentacion['0']->curp == 2){echo "selected=\"selected\"";}?>>Copia</option>
        <option value="3" <? if($dt_documentacion['0']->curp == 3){echo "selected=\"selected\"";}?>>Ambos</option>
        <option value="4" <? if($dt_documentacion['0']->curp == 4){echo "selected=\"selected\"";}?>>Prestamo alumno</option>
      </select>
      <br />
     
     <label for="status">Boleta de calificacinoes:</label>
       
      <br />
      <select id="boleta_de_calificaciones" name="boleta_de_calificaciones" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->boleta_de_calificaciones == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->boleta_de_calificaciones == 1){echo "selected=\"selected\"";}?>>Original</option>
        <option value="2" <? if($dt_documentacion['0']->boleta_de_calificaciones == 2){echo "selected=\"selected\"";}?>>Copia</option>
        <option value="3" <? if($dt_documentacion['0']->boleta_de_calificaciones == 3){echo "selected=\"selected\"";}?>>Ambos</option>
        <option value="4" <? if($dt_documentacion['0']->boleta_de_calificaciones == 4){echo "selected=\"selected\"";}?>>Prestamo alumno</option>
      </select>
      <br />
      
      
    <label for="Otros">Otros:</label>
      <br>
      <input name="otros" type="text" id="otros" placeholder="Otros" value="<?=$dt_documentacion['0']->otros;?>" size="10"/>
      <br />
      
      
     <label for="status">Carta de Pasante:</label>
       
      <br />
      <select id="carta_pasante" name="carta_pasante" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->carta_pasante == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->carta_pasante == 1){echo "selected=\"selected\"";}?>>Original</option>
        <option value="2" <? if($dt_documentacion['0']->carta_pasante == 2){echo "selected=\"selected\"";}?>>Copia</option>
        <option value="3" <? if($dt_documentacion['0']->carta_pasante == 3){echo "selected=\"selected\"";}?>>Ambos</option>
        <option value="4" <? if($dt_documentacion['0']->carta_pasante == 4){echo "selected=\"selected\"";}?>>Prestamo alumno</option>
      </select>
      <br />
      
      
     <label for="status">Acta de Examen Profesional:</label>
       
      <br />
      <select id="acta_de_examen_profesional" name="acta_de_examen_profesional" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->acta_de_examen_profesional == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->acta_de_examen_profesional == 1){echo "selected=\"selected\"";}?>>Original</option>
        <option value="2" <? if($dt_documentacion['0']->acta_de_examen_profesional == 2){echo "selected=\"selected\"";}?>>Copia</option>
        <option value="3" <? if($dt_documentacion['0']->acta_de_examen_profesional == 3){echo "selected=\"selected\"";}?>>Ambos</option>
        <option value="4" <? if($dt_documentacion['0']->acta_de_examen_profesional == 4){echo "selected=\"selected\"";}?>>Prestamo alumno</option>
      </select>
      <br />
      

      
      
     <label for="status">Credencial:</label>
       
      <br />
      <select id="credencial" name="credencial" class="medium">
        <option DISABLED>Seleccionar opción</option>
        <option value="0" <? if($dt_documentacion['0']->credencial == 0){echo "selected=\"selected\"";}?>>Ninguno</option>
        <option value="1" <? if($dt_documentacion['0']->credencial == 1){echo "selected=\"selected\"";}?>>Original</option>
        <option value="2" <? if($dt_documentacion['0']->credencial == 2){echo "selected=\"selected\"";}?>>Copia</option>
        <option value="3" <? if($dt_documentacion['0']->credencial == 3){echo "selected=\"selected\"";}?>>Ambos</option>
        <option value="4" <? if($dt_documentacion['0']->credencial == 4){echo "selected=\"selected\"";}?>>Prestamo alumno</option>
      </select>
      <br />
      
      
     
      
      <input type="submit" class="button postfix" value=" Guardar "/>  
  </div>
      </form>
      </div>