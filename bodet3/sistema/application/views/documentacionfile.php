<table width="100%">
 <thead>
	<tr>
    <th>matricula</th>
    <th>comprobante_de_pago_bancario</th>
    <th>acta_de_nacimiento</th>
    <th>certificado_de_secundaria</th>
    <th>certificado_de_bachillerato</th>
    <th>carta_de_buena_conducta</th>
    <th>certificado_de_salud</th>
    <th>fotografias_infantil</th>
    <th>curp</th>
    <th>boleta_de_calificaciones</th>
    <th>otros</th>
    <th>carta_pasante</th>
    <th>acta_de_examen_profesional</th>
    <th>credencial</th> 	
	</tr>
</thead>
<tbody>
<?php
if($documentacion){ 
foreach($documentacion as $valor):?>
	<tr>
		<td><?=$valor->matricula ?></td>
        <td><?=$valor->comprobante_de_pago_bancario ?></td>
        <td><?=$valor->acta_de_nacimiento ?></td>
        <td><?=$valor->certificado_de_secundaria ?></td>
        <td><?=$valor->certificado_de_bachillerato ?></td>
        <td><?=$valor->carta_de_buena_conducta ?></td>
        <td><?=$valor->certificado_de_salud ?></td>
        <td><?=$valor->fotografias_infantil ?></td>
        <td><?=$valor->curp ?></td>
        <td><?=$valor->boleta_de_calificaciones ?></td>
        <td><?=$valor->otros ?></td>
        <td><?=$valor->carta_pasante ?></td>
        <td><?=$valor->acta_de_examen_profesional ?></td>
        <td><?=$valor->credencial ?></td>
	</tr>
<?php endforeach; }?>
</tbody>
</table>
<?php 
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=documentacion.xls");
header("Content-Transfer-Encoding: binary");
header("Content-Type: application/octet-stream");
redirect('home', 'refresh');/* */
?>