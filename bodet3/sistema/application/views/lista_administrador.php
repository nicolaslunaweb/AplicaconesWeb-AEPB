<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>admin">Personal</a></li>
  <li class="unavailable"><a href="#">Lista Administrativos</a></li>
</ul>
</div></div>
<!---- breadcrumbs  --->

<div class="row">
		<div class="large-12 columns">
            <hr />

<h4> Lista de Administrativos </h4>
<table width="100%">
  <thead>
	<tr>
		<th>Clave Admin</th>
		<th>Nombre</th>
		<th>CURP</th>
        <th>Cel</th>
        <th>Tel Casa</th>
        <th>Ciudad</th>
        <th>Dirección</th>
        <th>E-mail</th>
        <th>Consultar</th>
	</tr>
</thead>
<tbody>
<?php $n = 0; if($d_adminis){?>
<?php 
foreach($d_adminis as $valor):?>
	<tr>
		<td><?=$valor->matricula ?></td>
		<td style="font-size:.8em;"><?=$valor->nombre ?> <?=$valor->paterno ?> <?=$valor->materno ?></td>
        <td><?=$valor->curp ?></td>
        <td><?=$valor->tel ?></td>
        <td><?=$valor->tel_casa ?></td>
        <td><?=$valor->ciudad ?></td>
        <td style="font-size:.8em;"><?=$valor->direccion ?></td>
        <td><?=$valor->email ?></td>
		<td align='center'><?=anchor('admin/vista_administrador/'.$valor->matricula, 'Ver Datos','class="small button"')?></td>
	</tr>
<?php $n ++; endforeach;?>
<?php }?>
</tbody>
</table>
<h5>Total de Administrativos: <?=$n;?></h5>
  </div>
</div>
