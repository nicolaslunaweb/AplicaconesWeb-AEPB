<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="unavailable"><a href="#">Alta Foto Alumno</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->

<div class="row">
  <div class="large-12 columns">
            <hr />
            <?php if($error == "No ha seleccionado un archivo para cargar."){?>
<div data-alert class="alert-box alert">
              <?php echo $error;?>
              <a href="#" class="close">&times;</a>
</div>
<br /><br />
			<?php }?>
<?php echo form_open_multipart('alumno/do_upload','class="custom"');?>
<label for="matricula"><?php if(form_error('matricula') == true){echo form_error('matricula');}else{echo "Matricula:";} ?></label>
      <br>
<input name="matricula" type="text" class="large-4" id="matricula" placeholder="Matricula" value="<?php if($matricula){echo $matricula;}?>" size="20"/>
<br /><br />
<label for="tipo_documentos"><?php if(form_error('tipo_documentos') == true){echo form_error('tipo_documentos');}else{echo "Tipo de Documento:";} ?></label>
    <br />
    <select id="tipo_documentos" name="tipo_documentos" class="medium">
      <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="foto">Foto Alumno - Perfil</option>
        <option value="1">Comprobante de pago Bancario</option>      
<option value="2">Acta de Nacimiento</option>
<option value="3">Certificado de Secundaria</option>
<option value="4">Certificado de Bachillerato</option>
<option value="5">Carta de Buena Conducta</option>
<option value="6">Certificado de Salud</option>
<option value="7">CURP</option>
<option value="8">Boleta de calificaciones</option>
<option value="9">Carta de Pasante</option>
<option value="10">Acta de Examen Profesional</option>
<option value="11">Credencial</option>
      </select>
<br /><br />
<input type="file" name="userfile" size="20" />
<br />
Tipo:  jpg  &nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; Peso: 1Mb
<br /><br />
<input name="subir" type="submit" class="button postfix large-2" id="subir" value="Subir Foto" />

</form>
</div></div>