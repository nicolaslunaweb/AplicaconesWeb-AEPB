<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
</ul>
</div></div>
<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
			<h3>Bienvenido <?php echo $nivel_label.": ".$nom_alumno; ?></h3>
            <hr />
        <!-- Orbit Container -->
<div class="orbit-container">
  <ul data-orbit="" class="orbit-slides-container">
    <?php
				$imgdir = '../slide/'; //Pick your folder
$allowed_types = array('png','jpg','jpeg','gif'); //Allowed types of files
$dimg = opendir($imgdir);//Open directory
while($imgfile = readdir($dimg))
{

if( in_array(strtolower(substr($imgfile,-3)),$allowed_types) OR
in_array(strtolower(substr($imgfile,-4)),$allowed_types) )
/*If the file is an image add it to the array*/
{$a_img[] = $imgfile;}
}
$totimg = count($a_img);  //The total count of all the images
//Echo out the images and their paths incased in an li.
for($x=0; $x < $totimg; $x++)
{echo "<li><img src='".$imgdir . $a_img[$x] . "'/></li>";}
?>
    </ul>
		</div>
	</div>