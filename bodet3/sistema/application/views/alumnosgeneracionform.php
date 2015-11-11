<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="#">Indicadores</a></li>
  <li class="unavailable"><a href="#">Consulta por Cohorte</a></li>
</ul>
</div></div>
<!-- breadcrumbs  -->
<div class="row">
		<div class="large-2 columns">
            <p>Año de la Cohorte:</p>
		</div>
        <?php echo form_open('apuntadores'); ?>
        <div class="large-3 columns">
        <input type="text" size="4" id="corte" name="corte" placeholder="Año de la Cohorte"/>
        </div>
        <div class="large-7 columns left">
            <input type="submit"  class="button postfix" value=" Consultar "/>
        </div>
        </form>
</div>