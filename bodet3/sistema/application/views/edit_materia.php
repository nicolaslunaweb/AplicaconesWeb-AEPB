<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Especialidades</a></li>
  <li class="current"><a href="#">Especialidades</a></li>
  <li class="unavailable"><a href="#">Materias de Especialidades</a></li>
</ul>
</div></div>
<!-- breadcrumbs  -->
<div class="row">
<?php echo form_open('calificaciones/sav_edit_materias','class="custom"'); ?>
		<div class="large-12 columns">
            <hr />
            <input name="clave_especialidad" type="hidden" value="<?=$clave_especialidad;?>" />
            <input name="clave_materia" type="hidden" value="<?=$clave_materia;?>" />
            
        <div class="large-4 columns">
        <label for="clavem">Clave:</label>
        <br>
        <input name="clavem" type="text" id="clavem" readonly DISABLED value="<?=$materia_edit['0']->clave_especialidad;?>"/>
        <br />
        <label for="materia">Asignatura:</label>
        <br>
        <input name="materia" type="text" id="materia" placeholder="Materia" value="<?=$materia_edit['0']->materia;?>"/>
        <br />
        <label for="semestre">Semestre:</label>
        <br>
        <input name="semestre" type="text" id="semestre" placeholder="Semestre" value="<?=$materia_edit['0']->semestre;?>"/>
        <br />
        <label for="horas">Horas:</label>
        <br>
        <input name="horas" type="text" id="horas" placeholder="Horas" value="<?=$materia_edit['0']->horas;?>"/>
        </div>
        
        <div class="large-4 columns">
        <label for="creditos">Creditos:</label>
        <br>
        <input name="creditos" type="text" id="creditos" placeholder="Creditos" value="<?=$materia_edit['0']->creditos;?>"/>
        <br />
        <label for="prioridad">Prioridad:</label>
        <br>
        <input name="prioridad" type="text" id="prioridad" placeholder="Prioridad" value="<?=$materia_edit['0']->prioridad;?>"/>
        <br />
        <label for="prisemestre">Prisemestre:</label>
        <br>
        <input name="prisemestre" type="text" id="prisemestre" placeholder="Prisemestre" value="<?=$materia_edit['0']->prisemestre;?>"/>
        </div> 	 	
        
        <div class="large-4 columns">
        <label for="clave_docente">Clave Docente:</label>
        <br>
        <input name="clave_docente" type="text" id="clave_docente" placeholder="Clave Docente" value="<?=$materia_edit['0']->clave_docente;?>"/>
        <br />
        <label for="cicloescolar">Ciclo Escolar:</label>
        <br>
        <input name="cicloescolar" type="text" id="cicloescolar" placeholder="Ciclo Escolar" value="<?=$materia_edit['0']->cicloescolar;?>"/>
        <br />
        <label for="horario">Horario:</label>
        <br>
        <input name="horario" type="text" id="horario" placeholder="Horario" value="<?=$materia_edit['0']->horario;?>"/>
        <br />
        <label for="salon">Salon:</label>
        <br>
        <input name="salon" type="text" id="salon" placeholder="Salon" value="<?=$materia_edit['0']->salon;?>"/>
        </div>
       
        <div class="large-8 columns">&nbsp;</div><div class="large-4 columns"><input type="submit"  class="button postfix" value=" Guardar Datos "/>  </div>
  </div></form>
</div>   