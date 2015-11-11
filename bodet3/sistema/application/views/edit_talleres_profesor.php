<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>admin">Personal</a></li>
  <li class="current"><a href="#">Profesores</a></li>
  <li class="unavailable"><a href="<?=base_url();?>admin/alta_profesor">Edit Talleres Profesor</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        <?php echo form_open('admin/sav_edittalleres_profesor','class="custom"'); ?>

      <div class="large-4 columns">
      <input name="idre" type="hidden" id="idre" value="<?=$dt_talleres_prof['0']->IDre;?>" readonly="readonly"/>
      <label for="clave_docente">Clave Docente:</label>
      <br>
      <input name="clave_docente" type="text" id="clave_docente" placeholder="Clave Docente" value="<?=$dt_talleres_prof['0']->clave_docente;?>" size="10" readonly="readonly"/>
      <br />
      <label for="nivel">Nivel:</label>
      <br>
      <select id="nivel" name="nivel" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_talleres_prof['0']->nivel == 1){echo "selected=\"selected\"";}?>>Taller</option>
        <option value="2" <? if($dt_talleres_prof['0']->nivel == 2){echo "selected=\"selected\"";}?>>Diplomado</option>
        <option value="3" <? if($dt_talleres_prof['0']->nivel == 3){echo "selected=\"selected\"";}?>>Seminario</option>
        <option value="4" <? if($dt_talleres_prof['0']->nivel == 4){echo "selected=\"selected\"";}?>>Técnico</option>
        <option value="5" <? if($dt_talleres_prof['0']->nivel == 5){echo "selected=\"selected\"";}?>>Licenciatura</option>
        <option value="6" <? if($dt_talleres_prof['0']->nivel == 6){echo "selected=\"selected\"";}?>>Maestria</option>
        <option value="7" <? if($dt_talleres_prof['0']->nivel == 7){echo "selected=\"selected\"";}?>>Diplomado</option>
      </select>
      <br />
      <label for="nombre">Nombre:</label>
      <br>
      <input name="nombre" type="text" id="nombre" placeholder="Nombre" value="<?=$dt_talleres_prof['0']->nombre;?>" size="10"/>
      <br />
      <label for="institucion">Institución:</label>
      <br>
      <input name="institucion" type="text" id="institucion" placeholder="Institución" value="<?=$dt_talleres_prof['0']->institucion;?>" size="10"/>
      <br />
      <label for="titulo">Titulo:</label>
      <br>
      <input name="titulo" type="text" id="titulo" placeholder="Titulo" value="<?=$dt_talleres_prof['0']->titulo;?>" size="10"/>
	  </div>
      
      <div class="large-4 columns">
      <label for="sedulaprofecional">Sedula Profecional:</label>
      <br>
      <input name="sedulaprofecional" type="text" id="sedulaprofecional" placeholder="Sedula Profecional" value="<?=$dt_talleres_prof['0']->sedulaprofecional;?>" size="10"/>
      <br />
      <label for="horas">Horas:</label>
      <br>
      <input name="horas" type="text" id="horas" placeholder="Horas" value="<?=$dt_talleres_prof['0']->horas;?>" size="10"/>
      <br />
      <label for="porcentaje_de_avance">Porcentaje de Avance:</label>
      <br>
      <input name="porcentaje_de_avance" type="text" id="porcentaje_de_avance" placeholder="Porcentaje de Avance" value="<?=$dt_talleres_prof['0']->porcentaje_de_avance;?>" size="10"/>
      <br />
      <label for="linea">Línea:</label>
      <br>
      <input name="linea" type="text" id="linea" placeholder="Línea" value="<?=$dt_talleres_prof['0']->linea;?>" size="10"/>
      <br />
      <label for="tematica">Temática:</label>
      <br>
      <input name="tematica" type="text" id="tematica" placeholder="Temática" value="<?=$dt_talleres_prof['0']->tematica;?>" size="10"/>
	  </div>
      
      <div class="large-4 columns">
        <label for="municipio">Municipio:</label>
      <br>
      <input name="municipio" type="text" id="municipio" placeholder="Municipio" value="<?=$dt_talleres_prof['0']->municipio;?>" size="10"/>
      <br>
      <label for="ciudad">Ciudad:</label>
      <br>
      <input name="ciudad" type="text" id="ciudad" placeholder="Ciudad" value="<?=$dt_talleres_prof['0']->ciudad;?>" size="10"/>
      <br />
      <label for="beca">Beca:</label>
      <br>
      <select id="beca" name="beca" class="medium">
        <option selected="selected" DISABLED>Seleccionar opción</option>
        <option value="1" <? if($dt_talleres_prof['0']->beca == 1){echo "selected=\"selected\"";}?>>Si</option>
        <option value="2" <? if($dt_talleres_prof['0']->beca == 2){echo "selected=\"selected\"";}?>>No</option>
      </select>
      <br />
      <label for="tipo_de_beca">Tipo de Beca:</label>
      <br>
      <input name="tipo_de_beca" type="text" id="tipo_de_beca" placeholder="Tipo de Beca" value="<?=$dt_talleres_prof['0']->tipo_de_beca;?>" size="10"/>
      <br />
      <label for="institucion_que_la_otorga">Institución que la Otorga:</label>
      <br>
      <input name="institucion_que_la_otorga" type="text" id="institucion_que_la_otorga" placeholder="Institución que la Otorga" value="<?=$dt_talleres_prof['0']->institucion_que_la_otorga;?>" size="10"/>
      <br /> 	 	 	 	
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>