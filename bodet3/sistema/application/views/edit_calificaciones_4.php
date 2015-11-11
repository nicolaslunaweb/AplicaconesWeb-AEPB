<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="<?=base_url();?>calificaciones">Calificaciones</a></li>
  <li class="unavailable"><a href="#">Edit Calificaciones</a></li>
</ul>
</div></div>

<!-- breadcrumbs  -->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        <script>
function myFunction(inputname)
{
var f = new Date();
document.getElementById(inputname).value = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
}

function evaluacion()
{     
      cal1 = parseFloat(document.getElementById("evaluacion1").value);
      cal2 = parseFloat(document.getElementById("evaluacion2").value);
      cal3 = parseFloat(document.getElementById("evaluacion3").value);
      cal4 = parseFloat(document.getElementById("evaluacion4").value);
      
      calificacion=((cal1 + cal2 + cal3 + cal4)*100)/100;
      calificacion=parseFloat((calificacion/ 4)*10)/10;
      //alert(calificacion)
      
      //armo mi if que dice si tiene derecho o no a calificiacion
      derecho = parseFloat(document.getElementById("asistencia_general").value);
      if(derecho < 85){
            document.getElementById("calificacion_final").value = 5;
      }else{
      if(calificacion > 10){
            document.getElementById("calificacion_final").value = 10;}else if(calificacion < 6){
      document.getElementById("calificacion_final").value = 5;
            }else{
                  document.getElementById("calificacion_final").value = calificacion.toString().substr(0,3);
            }
      
      }//fin de else o if de derecho
}

function asistencias()
{     
      as1 = parseFloat(document.getElementById("asistencia1").value);
      as2 = parseFloat(document.getElementById("asistencia2").value);
      as3 = parseFloat(document.getElementById("asistencia3").value);
      as4 = parseFloat(document.getElementById("asistencia4").value);
      
      porcen=((as1 + as2 + as3 + as4)*100)/100;
      porcen=parseFloat((porcen/ 4)*10)/10;
      //alert(calificacion)
      
      if(porcen > 100){
            document.getElementById("asistencia_general").value = 100;}else if(porcen < 85){
      document.getElementById("calificacion_final").value = 5;
      document.getElementById("asistencia_general").value = porcen.toString().substr(0,4);
            }else{
                  document.getElementById("asistencia_general").value = porcen.toString().substr(0,4);
            }       
      evaluacion();    
}

function asistencia(data,data2)
{	
	asis = parseFloat(document.getElementById(data).value);
	
	if(asis < 85)
		{
	document.getElementById(data2).value = 5;
	document.getElementById(data2).readOnly = true;
		}else
		{
	document.getElementById(data2).value = '';
	document.getElementById(data2).readOnly = false;
		}
}
</script> 
        


        <?php echo form_open('calificaciones/edit_sav_calificaciones','class="custom"'); ?>
      <br />
      <div class="large-12 columns">
      Alumno: <span style="font-size:.9em; color:#666;"><?=$this->user->mi_join($dt_calificaciones['0']->matricula,'alumnos','matricula','nombre');?> <?=$this->user->mi_join($dt_calificaciones['0']->matricula,'alumnos','matricula','paterno');?> <?=$this->user->mi_join($dt_calificaciones['0']->matricula,'alumnos','matricula','materno');?></span>
      <br /><br />
      </div>
      <br  clear="all"/>
        
      <div class="large-3 columns">
     <label for="Matricula">Matricula:</label>
      <br>
      <input name="matricula" type="text" style="color:#900;" id="matricula" placeholder="Matricula" value="<?=$dt_calificaciones['0']->matricula;?>" size="10" readonly="readonly"/>
      <br />
      
      <label for="Materia">Materia:</label>
      <br>
      <input name="materia" type="text" style="color:#900;" id="materia" placeholder="Materia" value="<?=$dt_calificaciones['0']->materia;?>" size="20" readonly="readonly"/>
      <br />
   
      <label for="Ciclo Escolar">Ciclo Escolar:</label>
      <br>
      <input name="ciclo_escolar" type="text" id="ciclo_escolar" placeholder="Ciclo Escolar" value="<?=$dt_calificaciones['0']->ciclo_escolar;?>" size="20"/>
      <br />
      
      <label for="Asistencia 1">Porcentaje de Asistencia 1:</label>
      <br>
      <input name="asistencia1" type="text" id="asistencia1" placeholder="Asistencia 1" value="<?=$dt_calificaciones['0']->asistencia1;?>" size="20" onchange="asistencia('asistencia1','evaluacion1'),myFunction('fecha1'),asistencias()"/>
      <br />
      
      <label for="Evaluacion 1">Evaluacion 1:</label>
      <br>
      <input name="evaluacion1" type="text" id="evaluacion1" placeholder="Evaluación 1" onchange="evaluacion()" value="<?=$dt_calificaciones['0']->evaluacion1;?>" size="20" maxlength="3"/>
      <br />
      
      <label for="Fecha 1">Fecha 1:</label>
      <br>
      <input name="fecha1" type="text" id="fecha1" placeholder="Fecha 1" value="<?=$dt_calificaciones['0']->fecha1;?>" size="20" readonly="readonly"/>

	  </div>
      <div class="large-3 columns">
      
      <label for="Asistencia 2">Porcentaje de Asistencia 2:</label>
      <br>
      <input name="asistencia2" type="text" id="asistencia2" placeholder="Asistencia 2" value="<?=$dt_calificaciones['0']->asistencia2;?>" size="20" onchange="asistencia('asistencia2','evaluacion2'),myFunction('fecha2'),asistencias()"/>
      <br />
      
      <label for="Evaluación 2">Evaluación 2:</label>
      <br>
      <input name="evaluacion2" type="text" id="evaluacion2" placeholder="Evaluación 2" onchange="evaluacion()" value="<?=$dt_calificaciones['0']->evaluacion2;?>" size="20" maxlength="3"/>
      <br />
      
      <label for="Fecha 2">Fecha 2:</label>
      <br>
      <input name="fecha2" type="text" id="fecha2" placeholder="Fecha 2" value="<?=$dt_calificaciones['0']->fecha2;?>" size="20" readonly="readonly"/>
      <br />
      
      <label for="Asistencia 3">Porcentaje de Asistencia 3:</label>
      <br>
      <input name="asistencia3" type="text" id="asistencia3" placeholder="Asistencia 3" value="<?=$dt_calificaciones['0']->asistencia3;?>" size="20" onchange="asistencia('asistencia3','evaluacion3'),myFunction('fecha3'),asistencias()"/>
      <br />
      
      <label for="Evaluación 3">Evaluación 3:</label>
      <br>
      <input name="evaluacion3" type="text" id="evaluacion3" placeholder="Evaluación 3" onchange="evaluacion()" value="<?=$dt_calificaciones['0']->evaluacion3;?>" size="20" maxlength="3"/>
      <br />
      
      <label for="Fecha 3">Fecha 3:</label>
      <br>
      <input name="fecha3" type="text" id="fecha3" placeholder="Fecha 3" value="<?=$dt_calificaciones['0']->fecha3;?>" size="20" readonly="readonly"/>

      </div>



<div class="large-3 columns">
      <label for="Asistencia 4">Porcentaje de Asistencia 4:</label>
      <br>
      <input name="asistencia4" type="text" id="asistencia4" placeholder="Asistencia 4" value="<?=$dt_calificaciones['0']->asistencia4;?>" size="20" onchange="asistencia('asistencia4','evaluacion4'),myFunction('fecha4'),asistencias(),myFunction('fecha')"/>
      <br />
      
      <label for="Evaluación 4">Evaluación 4:</label>
      <br>
      <input name="evaluacion4" type="text" id="evaluacion4" placeholder="Evaluación 4" onchange="evaluacion()" value="<?=$dt_calificaciones['0']->evaluacion4;?>" size="20" maxlength="4"/>
      <br />
      
      <label for="Fecha 4">Fecha 4:</label>
      <br>
      <input name="fecha4" type="text" id="fecha4" placeholder="Fecha 4" value="<?=$dt_calificaciones['0']->fecha4;?>" size="20" readonly="readonly"/>

</div>




      <div class="large-3 columns">
     
      <label for="Asistencia General">Asistencia General:</label>
      <br>
      <input name="asistencia_general" type="text" id="asistencia_general" placeholder="Asistencia General" value="<?=$dt_calificaciones['0']->asistencia_general;?>" size="20" readonly="readonly"/>
      <br />
      
      <label for="Calificación Final">Calificación Final:</label>
      <br>
      <input name="calificacion_final" type="text" id="calificacion_final" placeholder="Calificación Final" onchange="myFunction('fecha')" value="<?=$dt_calificaciones['0']->calificacion_final;?>" size="20" maxlength="3" readonly="readonly"/>
      <br />
      
      <label for="Fecha">Fecha:</label>
      <br>
      <input name="fecha" type="text" id="fecha" placeholder="Fecha" value="<?=$dt_calificaciones['0']->fecha;?>" size="20" readonly="readonly"/>
      <br />

      <label for="Tipo Examen">Tipo Examen:</label>
      <br>
      <input name="tipo_examen" type="text" id="tipo_examen" placeholder="Tipo Examen" value="<?=$dt_calificaciones['0']->tipo_examen;?>" size="20"/>
      <br />
      
      <label for="Extraordinario">Extraordinario:</label>
      <br>
      <input name="extraordinario" type="text" id="extraordinario" placeholder="Extraordinario" value="<?=$dt_calificaciones['0']->extraordinario;?>" size="20"/>
      <br />
      
      <label for="Fecha Extra">Fecha Extra:</label>
      <br>
      <input name="fecha_extra" type="text" id="fecha_extra" placeholder="Fecha Extra" value="<?=$dt_calificaciones['0']->fecha_extra;?>" size="20"/>
      <br />
     
      <input type="submit"  class="button postfix" value=" Guardar Datos "/>  
      </div>
      </form>
</div>