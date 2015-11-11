<script type="text/javascript">
function eli(data)
{   
document.getElementById("id_eliminar").value = data;
}
</script>

<div id="myModaleliminar" class="reveal-modal" data-reveal>
  <h2>Eliminar</h2>
  ¿Esta seguro que quiere borar el registro?
  <br><br>
  <a class="close-reveal-modal">&#215;</a>
<?php echo form_open('alumno/eliminar'); ?>
<input name="id_eliminar" type="hidden" id="id_eliminar"/>
<input type="submit"  class="button small alert" value=" Eliminar Registro "/>  
</form>
</div>


<div class="row">
		<div class="large-12 columns">
            <hr />
            <h2>Lista de alumnos</h2>
            <br>
            <?php echo form_open("alumno/indexf",'class="custom"'); ?>
            <div class="large-3 columns">        
	        <input type="text" size="10" id="nombre" name="nombre" placeholder="Filtro por Nombre"/>
    	    </div>
    	    <div class="large-3 columns">        
	        <input type="text" size="10" id="nombrep" name="nombrep" placeholder="Filtro por Apellido Paterno"/>
    	    </div>
    	    <div class="large-3 columns">
            <input type="submit" class="button postfix" value="Filtro por Alumno "/>
            </div>
            <div class="large-3 columns">
            <?=anchor('alumno/', 'Limpiar consunta','class="small button large-12"')?>
            </div>
            </form>
            
           
<table width="100%">
 <thead>
	<tr>
		<th>Matrícula</th>
        <th>Nombre</th>
        <th>Especialidad</th>
        <th>Ciclo escolar</th>
        <th>Semestre</th>
        <th>Sexo</th>
        <?php if($idsession == 4){ ?>
        <th>Eliminar</th>
        <?php } ?>
	</tr>
</thead>
<tbody>
<?php if($d_lista_alumnos){
function sexo($s){
	switch ($s) {
    case 1:
        $sexo = "Hombre";
        break;
	case 2:
        $sexo = "Mujer";
        break;
	case 3:
        $sexo = "Otro";
        break;
}
	return $sexo;
}
foreach($d_lista_alumnos as $valor):?>
	<tr>
		<td><?=$valor->matricula ?></td>
        <td> <?=$valor->paterno ?> <?=$valor->materno ?> <?=$valor->nombre ?></td>
        <td><?=$this->user->mi_join($valor->clave_especialidad,'especialidades','id','label');?></td>
        <td><?=$valor->ciclo_escolar ?></td>
        <td align='center'><?=$valor->semestre ?></td>
        <td align='center'><?=sexo($valor->sexo); ?></td>
        <?php if($idsession == 4){ ?>
        <td><a href="#" class="small button alert" onclick="eli('<?= $valor->matricula; ?>')" data-reveal-id="myModaleliminar" data-reveal>Eliminar</a></td>
        <?php } ?>
    </tr>
<?php endforeach;}else{
?>	
<tr>
<td rowspan="6" align="center">No hay datos! o la consulta esta mal...</td>
</tr>
<?php	
}?>
</tbody>
</table>
<div class="pagination-centered">
  <ul class="pagination">
        <? if($si == 'si'){echo $this->pagination->create_links();}?>  
  </ul>
</div>  

		</div>
</div>