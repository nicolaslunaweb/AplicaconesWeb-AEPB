<script type="text/javascript">
function eli(data)
{   
document.getElementById("id_eliminar").value = data;
}
</script>
<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Parámetros</a></li>
  <li class="current"><a href="<?=base_url();?>admin">Personal</a></li>
  <li class="unavailable"><a href="#">Lista Profesores</a></li>
</ul>
</div></div>
<!-- breadcrumbs  -->

<div class="row">
		<div class="large-12 columns">
            <hr />

<h4> Lista de Profesores </h4>
<table width="100%">
  <thead>
	<tr> 	 	 	  	 	
		<th>Clave Docente</th>
		<th>Nombre</th>
		<th>Cedula</th>
        <th>Tipo</th>
        <th>Telefono Casa</th>
        <th>Telefono Cel</th>
        <th>Email</th>
        <th>Consultar Profesor</th>
        <th>Eliminar Profesor</th>
	</tr>
</thead>
<tbody>
<?php $n = 0; if($m_profesores){?>
<?php 
foreach($m_profesores as $valor):?>
	<tr>
		<td><?=$valor->clave_docente ?></td>
		<td style="font-size:.7em;"><?=$valor->nombre ?> <?=$valor->paterno ?> <?=$valor->materno ?></td>
        <td><?=$valor->cedula ?></td>
        <td><?=$valor->tipo ?></td>
        <td><?=$valor->telefono_casa ?></td>
        <td><?=$valor->telefono_cel ?></td>
        <td><?=$valor->email ?></td>
		<td align='center'><?=anchor('admin/vista_profesor/'.$valor->clave_docente, 'Ver Datos','class="small button"')?></td>
    <td align='center'><a href="#" class="small button alert" onclick="eli('<?= $valor->clave_docente; ?>')" data-reveal-id="myModaleliminar" data-reveal>Eliminar</a></td>
	</tr>
<?php $n ++; endforeach;?>
<?php }?>
</tbody>
</table>
<h5>Total de Profesores: <?=$n;?></h5>
  </div>
</div>




<div id="myModaleliminar" class="reveal-modal" data-reveal>
  <h2>Eliminar</h2>
  ¿Esta seguro que quiere borar el registro?
  <br><br>
  <a class="close-reveal-modal">&#215;</a>
<?php echo form_open('admin/eliminar'); ?>
<input name="id_eliminar" type="hidden" id="id_eliminar"/>
<input type="submit"  class="button small alert" value=" Eliminar Registro "/>  
</form>
</div>