<table width="100%" border="1">
 <thead>
	<tr>	 	 	 	 	 	 	 	
		<th>Clave Docente</th>
		<th>Nombre</th>
		<th>cedula</th>
		<th>tipo</th>
		<th>Domicilio</th>
		<th>municipio</th>
		<th>estado</th>
		<th>telefono_casa</th>
		<th>telefono_cel</th>
		<th>email</th>
		<th>fecha_nacimiento</th>
		<th>sexo</th>
		<th>estado_civil</th>
		<th>colonia</th>
		<th>telefono_trabajo</th>
		<th>perfil</th>
		<th>R.F.C.</th>
		<th>CURP</th>
		<th>lengua</th>
		<th>Clave(s) Presupuestale(s)</th>
		<th>Fecha de Ingreso a la SEP</th>
		<th>Tipo de Nombramiento</th>
		<th>Denominación de la Categoría y/o Puesto</th>
		<th>Horario de Labores</th>
		<th>Materia que Imparte o Función</th>
		<th>Grado (s)</th>
		<th>Grupo (s)</th>
		<th>Escolaridad (Máximo Nivel de Estudio)</th>	 	 	 	 	 	 	 	
<th>Firma (Trabajador)</th>
	</tr>
</thead>
<tbody>
<?php
if($pp){ 
foreach($pp as $valor):?>
	<tr>
		<td><?=$valor->clave_docente ?></td>
        <td><?=$valor->nombre ?> <?=$valor->paterno ?> <?=$valor->materno ?></td>
        <td><?=$valor->cedula ?></td>
        <td><?=$valor->tipo ?></td>
        <td><?=$valor->domicilio ?></td>
        <td><?=$valor->municipio ?></td>
        <td><?=$valor->estado ?></td>
        <td><?=$valor->telefono_casa ?></td>
        <td><?=$valor->telefono_cel ?></td>
        <td><?=$valor->email ?></td>
        <td><?=$valor->fecha_nacimiento ?></td>
        <td><?=$valor->sexo ?></td>
        <td><?=$valor->estado_civil ?></td>
        <td><?=$valor->colonia ?></td>
        <td><?=$valor->telefono_trabajo ?></td>
        <td><?=$valor->perfil ?></td>
        <td><?=$valor->rfc ?></td>
        <td><?=$valor->curp ?></td>
        <td><?=$valor->lengua ?></td>
        <td><?=$valor->clave_presupuestal ?></td>
        <td><?=$valor->fecha_ingreso ?></td>
        <td><?=$valor->tipo_nombramiento ?></td>
        <td><?=$valor->categoria ?></td>
        <td><?=$valor->horario_laboral ?></td>
        <td><?=$valor->funciones ?></td>
        <td><?=$valor->grado ?></td>
        <td><?=$valor->grupo ?></td>
        <td><?=$valor->escolaridad ?></td>
        <td> </td>	 
	</tr>
<?php endforeach; }?>
</tbody>
</table>
<?php  
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=plantilladepersonal.xls");
header("Content-Transfer-Encoding: binary");
header("Content-Type: application/octet-stream");
redirect('home', 'refresh'); /* */
?>