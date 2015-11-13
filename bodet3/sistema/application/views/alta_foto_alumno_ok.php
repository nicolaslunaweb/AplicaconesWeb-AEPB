<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="unavailable"><a href="#">Alta Foto Alumno</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->

<div class="row">
  <div class="large-12 columns">
            <hr />
<h3>Su archivo se ha subido correctamente!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
</div></div>