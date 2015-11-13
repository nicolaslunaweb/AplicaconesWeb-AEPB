<table width="100%">
 <thead>
	<tr>
    <th>matricula</th>
    <th>semestre</th>
    <th>reinscripcion</th>
    <th>fecha_reinscripcion</th>
    <th>examen</th>
    <th>fecha_examen</th>
    <th>inscripcion</th>
    <th>fecha_inscripcion</th>
    <th>mens1a</th>
    <th>mens2a</th>
    <th>mens3a</th>
    <th>mens4a</th>
    <th>mens5a</th>
    <th>mens6a</th>
    <th>mens1b</th>
    <th>mens2b</th>
    <th>mens3b</th>
    <th>mens4b</th>
    <th>mens5b</th>
    <th>mens6b</th>
    <th>fecha1a</th>
    <th>fecha2a</th>
    <th>fecha3a</th>
    <th>fecha4a</th>
    <th>fecha5a</th>
    <th>fecha6a</th>
    <th>fecha1b</th>
    <th>fecha2b</th>
    <th>fecha3b</th>
    <th>fecha4b</th>
    <th>fecha5b</th>
    <th>fecha6b</th>
    </tr>
</thead>
<tbody>
<?php
if($cobranza){ 
foreach($cobranza as $valor):?>
	<tr>
		<td><?=$valor->matricula ?></td>
        <td><?=$valor->semestre ?></td>
        <td><?=$valor->reinscripcion ?></td>
        <td><?=$valor->fecha_reinscripcion ?></td>
        <td><?=$valor->examen ?></td>
        <td><?=$valor->fecha_examen ?></td>
        <td><?=$valor->inscripcion ?></td>
        <td><?=$valor->fecha_inscripcion ?></td>
        <td><?=$valor->mens1a ?></td>
        <td><?=$valor->mens2a ?></td>
        <td><?=$valor->mens3a ?></td>
        <td><?=$valor->mens4a ?></td>
        <td><?=$valor->mens5a ?></td>
        <td><?=$valor->mens6a ?></td>
        <td><?=$valor->mens1b ?></td>
        <td><?=$valor->mens2b ?></td>
        <td><?=$valor->mens3b ?></td>
        <td><?=$valor->mens4b ?></td>
        <td><?=$valor->mens5b ?></td>
        <td><?=$valor->mens6b ?></td>
        <td><?=$valor->fecha1a ?></td>
        <td><?=$valor->fecha2a ?></td>
        <td><?=$valor->fecha3a ?></td>
        <td><?=$valor->fecha4a ?></td>
        <td><?=$valor->fecha5a ?></td>
        <td><?=$valor->fecha6a ?></td>
        <td><?=$valor->fecha1b ?></td>
        <td><?=$valor->fecha2b ?></td>
        <td><?=$valor->fecha3b ?></td>
        <td><?=$valor->fecha4b ?></td>
        <td><?=$valor->fecha5b ?></td>
        <td><?=$valor->fecha6b ?></td>
	</tr>
<?php endforeach; }?>
</tbody>
</table>
<?php 
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=cobranza.xls");
header("Content-Transfer-Encoding: binary");
header("Content-Type: application/octet-stream");
redirect('home', 'refresh');/* */
?>