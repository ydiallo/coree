<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 17:08:14
         compiled from "C:\PRIVE\UwAmp\www\coree\admin463nbjepp\themes\default\template\controllers\import\helpers\view\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129845a6a0efe7595f4-99364432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1701640cb4f6f8960d2f3b500dc40b678c9beadf' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\admin463nbjepp\\themes\\default\\template\\controllers\\import\\helpers\\view\\view.tpl',
      1 => 1516871934,
      2 => 'file',
    ),
    '7b943a4142bd7dff4179209ba3583eb56f41bac7' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\admin463nbjepp\\themes\\default\\template\\helpers\\view\\view.tpl',
      1 => 1516871934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129845a6a0efe7595f4-99364432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0efe9096c8_77294873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0efe9096c8_77294873')) {function content_5a6a0efe9096c8_77294873($_smarty_tpl) {?>

<div class="leadin"></div>


	<script type="text/javascript">
		var errorEmpty = '<?php echo smartyTranslate(array('s'=>'Please name your data matching configuration in order to save it.','js'=>1),$_smarty_tpl);?>
';
		var current = 0;
		function showTable(nb) {
			$('#btn_left').disabled = null;
			$('#btn_right').disabled = null;
			if (nb <= 0) {
				nb = 0;
				$('#btn_left').disabled = 'true';
			}
			if (nb >= <?php echo $_smarty_tpl->tpl_vars['nb_table']->value;?>
 - 1) {
				nb = <?php echo $_smarty_tpl->tpl_vars['nb_table']->value;?>
 - 1;
				$('#btn_right').disabled = 'true';
			}
			$('#table' + current).hide();
			current = nb;
			$('#table' + current).show();
		}
		$(document).ready(function() {
			var btn_save_import = $('span[class~="process-icon-save-import"]').parent();
			var btn_submit_import = $('#import');
			if (btn_save_import.length > 0 && btn_submit_import.length > 0) {
				btn_submit_import.closest('.form-group').hide();
				btn_save_import.find('span').removeClass('process-icon-save-import');
				btn_save_import.find('span').addClass('process-icon-save');
				btn_save_import.click(function(){
					btn_submit_import.before('<input type="hidden" name="' + btn_submit_import.attr("name") + '" value="1" />');
					$('#import_form').submit();
				});
			}
			showTable(current);
		});
	</script>
	<div id="container-customer" class="panel">
		<h3><i class="icon-list-alt"></i> <?php echo smartyTranslate(array('s'=>'Match your data'),$_smarty_tpl);?>
</h3>
		<div class="alert alert-info">
			<p><?php echo smartyTranslate(array('s'=>'Please match each column of your source file to one of the destination columns.'),$_smarty_tpl);?>
</p>
		</div>
		<div class="form-horizontal">
			<div class="form-group" <?php if (!$_smarty_tpl->tpl_vars['import_matchs']->value) {?>style="display:none"<?php }?>>
				<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Load a data matching configuration'),$_smarty_tpl);?>
</label>
				<div id="selectDivImportMatchs" class="col-lg-7">
					<select id="valueImportMatchs">
						<?php  $_smarty_tpl->tpl_vars['match'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['match']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['import_matchs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['match']->key => $_smarty_tpl->tpl_vars['match']->value) {
$_smarty_tpl->tpl_vars['match']->_loop = true;
?>
							<option id="<?php echo $_smarty_tpl->tpl_vars['match']->value['id_import_match'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['match']->value['match'];?>
"><?php echo $_smarty_tpl->tpl_vars['match']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-lg-2">
					<a id="loadImportMatchs" href="#" class="btn btn-default"><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Load'),$_smarty_tpl);?>
</a>
					<a id="deleteImportMatchs" href="#" class="btn btn-default"><i class="icon-remove"></i> <?php echo smartyTranslate(array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl);?>
</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="newImportMatchs"><?php echo smartyTranslate(array('s'=>'Save your data matching configuration'),$_smarty_tpl);?>
</label>
				<div class="col-lg-7">
					<input type="text" name="newImportMatchs" id="newImportMatchs" />
				</div>
				<div class="col-lg-2">
					<a id="saveImportMatchs" class="btn btn-default" href="#"><i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl);?>
</a>
				</div>
			</div>
		</div>
		<div id="error_duplicate_type" class="alert alert-warning" style="display:none;">
			<?php echo smartyTranslate(array('s'=>'Two columns cannot have the same type of values'),$_smarty_tpl);?>

		</div>
		<div id="required_column" class="alert alert-warning" style="display:none;">
			<?php echo smartyTranslate(array('s'=>'This column must be set:'),$_smarty_tpl);?>
 <span id="missing_column">&nbsp;</span>
		</div>
		<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current']->value,'html','UTF-8');?>
&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['token']->value,'html','UTF-8');?>
" method="post" id="import_form" name="import_form" class="form-horizontal">
			<input type="hidden" name="csv" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['csv'];?>
" />
			<input type="hidden" name="regenerate" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['regenerate'];?>
" />
			<input type="hidden" name="entity" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['entity'];?>
" />
			<input type="hidden" name="iso_lang" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['iso_lang'];?>
" />
			<input type="hidden" name="sendemail" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['sendemail'];?>
" />
			<?php if ($_smarty_tpl->tpl_vars['fields_value']->value['truncate']) {?>
				<input type="hidden" name="truncate" value="1" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['fields_value']->value['forceIDs']) {?>
				<input type="hidden" name="forceIDs" value="1" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['fields_value']->value['match_ref']) {?>
				<input type="hidden" name="match_ref" value="1" />
			<?php }?>
			<input type="hidden" name="separator" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['separator'];?>
" />
			<input type="hidden" name="multiple_value_separator" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['multiple_value_separator'];?>
" />
			<div class="form-group">
				<label class="control-label col-lg-3" for="skip"><?php echo smartyTranslate(array('s'=>'Rows to skip'),$_smarty_tpl);?>
</label>
				<div class="col-lg-9">
					<input class="fixed-width-sm" type="text" name="skip" id="skip" value="1" />
					<p class="help-block"><?php echo smartyTranslate(array('s'=>'Indicate how many of the first rows of your file should be skipped when importing the data. For instance set it to 1 if the first row of your file contains headers.'),$_smarty_tpl);?>
</p>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-12">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['name'] = 'nb_i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nb_table']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['nb_i']['total']);
?>
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['nb_i']['index'], null, 0);?>
						<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value];?>

					<?php endfor; endif; ?>
					<button id="btn_left" type="button" class="btn btn-default pull-left" onclick="showTable(current - 1);">
						<i class="icon-chevron-sign-left"></i>
					</button>
					<button id="btn_right" type="button" class="btn btn-default pull-right" onclick="showTable(current + 1);">
						<i class="icon-chevron-sign-right"></i>
					</button>
				</div>
			</div>
			<div class="panel-footer">
				<button type="button" class="btn btn-default" onclick="window.history.back();">
					<i class="process-icon-cancel text-danger"></i>
					<?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl);?>

				</button>
				<button id="import" name="import" type="submit" onclick="return (validateImportation(new Array(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
)));"  class="btn btn-default pull-right">
					<i class="process-icon-ok text-success"></i>
					<?php echo smartyTranslate(array('s'=>'Import','d'=>'Admin.Actions'),$_smarty_tpl);?>

				</button>
			</div>
		</form>
	</div>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
