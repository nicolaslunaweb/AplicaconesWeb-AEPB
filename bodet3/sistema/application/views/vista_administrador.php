<!---- breadcrumbs  --->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Académico</a></li>
  <li class="current"><a href="<?=base_url();?>admin">personal</a></li>
  <li class="current"><a href="#">Administrativo</a></li>
  <li class="unavailable"><a href="#">Vista Administrativo</a></li>
</ul>
</div></div>

<!---- breadcrumbs  --->
<div class="row">
		<div class="large-12 columns">
            <hr />
		</div>
        
        
        
        <div class="large-12 columns">
        
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="68%" align="center"><table width="800" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="78" bgcolor="#FFFFFF">Clave o Matricula Administrativo:</td>
                <td width="222" bgcolor="#F9F9F9"><?=$dt_adminis['0']->matricula;?></td>
              </tr>
              </table>
              <table width="800" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_adminis['0']->paterno;?></td>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_adminis['0']->materno;?></td>
                <td align="center" bgcolor="#F9F9F9"><?=$dt_adminis['0']->nombre;?></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF">Paterno</td>
                <td align="center" bgcolor="#FFFFFF">Materno</td>
                <td align="center" bgcolor="#FFFFFF">Nombre</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#FFFFFF">
<table width="800" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="372" bgcolor="#FFFFFF">CURP</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_adminis['0']->curp;?></td>
                </tr>
                  <tr>
                    <td bgcolor="#FFFFFF">Cel</td>
                    <td colspan="3" bgcolor="#F9F9F9"><?=$dt_adminis['0']->tel;?></td>
                  </tr>
                  <tr>
                  <td bgcolor="#FFFFFF">Tel Casa</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_adminis['0']->tel_casa;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Ciudad</td>
                  <td width="428" bgcolor="#F9F9F9"><?=$dt_adminis['0']->ciudad;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">Dirección</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_adminis['0']->direccion;?></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF">E-mail</td>
                  <td colspan="3" bgcolor="#F9F9F9"><?=$dt_adminis['0']->email;?></td>
                </tr>
              </table>
<br /> 	
<? if($idsession != "2"){ ?>
              <table width="800" style="border:0px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="400"></td>
                  <td width="400"><?php echo form_open('admin/edit_administrador','class="custom"'); ?><input name="matricula_ad" id="matricula_ad" type="hidden" value="<?=$dt_adminis['0']->matricula;?>" /><input type="submit"  class="button postfix" value=" Editar Administrador "/>  </form></td>
                </tr>
              </table>
<? }?>              
            </td>
            </tr>
          </table>
        </div>
     
</div>