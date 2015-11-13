<table width="100%">
 <thead>
	<tr>	 	 	 	 	 	 	 	
		<th>matricula</th>
		<th>ficha</th>
		<th>curp</th>
        <th>nombre</th>
        <th>paterno</th>
        <th>materno</th>
        <th>sexo</th>
        <th>semestre</th>
        <th>clave_especialidad</th>
        <th>ciclo_escolar</th>
        <th>estatus</th>
        <th>observaciones</th>
        <th>domicilio</th>
        <th>municipio</th>
        <th>estado</th>
        <th>cp</th>
        <th>telefono_casa</th>
        <th>telefono_cel</th>
        <th>email</th>
        <th>tipo_sangre</th>
        <th>enfermedades</th>
        <th>capacidad_diferente</th>	 	 	 	 	 	 	 	
	</tr>
</thead>
<tbody>
<?php
if($alumnos){ 
foreach($alumnos as $valor):?>
	<tr>
		<td align='center'><?=$valor->matricula ?></td>
        <td align='center'><?=$valor->ficha ?></td>
        <td align='center'><?=$valor->curp ?></td>
        <td align='center'><?=$valor->nombre ?></td>
        <td align='center'><?=$valor->paterno ?></td>
        <td align='center'><?=$valor->materno ?></td>
        <td align='center'><?=$valor->sexo ?></td>
        <td align='center'><?=$valor->semestre ?></td>
        <td align='center'><?=$valor->clave_especialidad ?></td>
        <td align='center'><?=$valor->ciclo_escolar ?></td>
        <td><?=$valor->estatus ?></td>
        <td><?=$valor->observaciones ?></td>
        <td><?=$valor->domicilio ?></td>
        <td><?=$valor->municipio ?></td>
        <td><?=$valor->estado ?></td>
        <td><?=$valor->cp ?></td>
        <td><?=$valor->telefono_casa ?></td>
        <td><?=$valor->telefono_cel ?></td>
        <td><?=$valor->email ?></td>
        <td><?=$valor->tipo_sangre ?></td>
        <td><?=$valor->enfermedades ?></td>
        <td><?=$valor->capacidad_diferente ?></td>	 
	</tr>
<?php endforeach; }?>
</tbody>
</table>
<?php 
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=alumnos.xls");
header("Content-Transfer-Encoding: binary");
header("Content-Type: application/octet-stream");
redirect('home', 'refresh');/* */
?>