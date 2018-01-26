<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:53:58
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\appagebuilder\views\templates\admin\ap_page_builder_theme_configuration\helpers\form\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81205a6a0ba6b79947-40584017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd89128c43ae75e0b090010c307993f729b5509c' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_theme_configuration\\helpers\\form\\form.tpl',
      1 => 1516894360,
      2 => 'file',
    ),
    '2fa412c1c072322c123905f55c541df63df06d9b' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\admin463nbjepp\\themes\\default\\template\\helpers\\form\\form.tpl',
      1 => 1516871934,
      2 => 'file',
    ),
    'b500ee065e73176fe7de1cf0c89e9dce901f38cb' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\admin463nbjepp\\themes\\default\\template\\helpers\\form\\form_group.tpl',
      1 => 1516871934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81205a6a0ba6b79947-40584017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'tabs' => 0,
    'identifier_bk' => 0,
    'identifier' => 0,
    'table_bk' => 0,
    'table' => 0,
    'name_controller' => 0,
    'current' => 0,
    'token' => 0,
    'style' => 0,
    'form_id' => 0,
    'submit_action' => 0,
    'f' => 0,
    'fieldset' => 0,
    'key' => 0,
    'field' => 0,
    'input' => 0,
    'contains_states' => 0,
    'fields_value' => 0,
    'hint' => 0,
    'languages' => 0,
    'language' => 0,
    'defaultFormLanguage' => 0,
    'value_text' => 0,
    'name' => 0,
    'value' => 0,
    'option' => 0,
    'optiongroup' => 0,
    'field_value' => 0,
    'id_checkbox' => 0,
    'select' => 0,
    'k' => 0,
    'v' => 0,
    'categories_tree' => 0,
    'asso_shop' => 0,
    'p' => 0,
    'hookName' => 0,
    'show_cancel_button' => 0,
    'back_url' => 0,
    'btn' => 0,
    'tinymce' => 0,
    'iso' => 0,
    'ad' => 0,
    'color' => 0,
    'firstCall' => 0,
    'vat_number' => 0,
    'allowEmployeeFormLang' => 0,
    'use_textarea_autosize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0ba8c72663_75948165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0ba8c72663_75948165')) {function content_5a6a0ba8c72663_75948165($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\PRIVE\\UwAmp\\www\\coree\\vendor\\prestashop\\smarty\\plugins\\function.counter.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['title'])) {?><h3><?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>
</h3><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&count($_smarty_tpl->tpl_vars['tabs']->value)) {?>
<script type="text/javascript">
	var helper_tabs = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['tabs']->value);?>
;
	var unique_field_id = '';
</script>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['identifier_bk']->value)&&$_smarty_tpl->tpl_vars['identifier_bk']->value==$_smarty_tpl->tpl_vars['identifier']->value) {?><?php $_smarty_tpl->_capture_stack[0][] = array('identifier_count', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'identifier_count'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
<?php $_smarty_tpl->tpl_vars['identifier_bk'] = new Smarty_variable($_smarty_tpl->tpl_vars['identifier']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['identifier_bk'] = clone $_smarty_tpl->tpl_vars['identifier_bk'];?>
<?php if (isset($_smarty_tpl->tpl_vars['table_bk']->value)&&$_smarty_tpl->tpl_vars['table_bk']->value==$_smarty_tpl->tpl_vars['table']->value) {?><?php $_smarty_tpl->_capture_stack[0][] = array('table_count', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'table_count'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
<?php $_smarty_tpl->tpl_vars['table_bk'] = new Smarty_variable($_smarty_tpl->tpl_vars['table']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['table_bk'] = clone $_smarty_tpl->tpl_vars['table_bk'];?>
<form id="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'],'html','UTF-8');?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['table']->value==null) {?>configuration_form<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }?><?php if (isset(Smarty::$_smarty_vars['capture']['table_count'])&&Smarty::$_smarty_vars['capture']['table_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['table_count']);?>
<?php }?><?php }?>" class="defaultForm form-horizontal<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)&&$_smarty_tpl->tpl_vars['name_controller']->value) {?> <?php echo $_smarty_tpl->tpl_vars['name_controller']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['current']->value)&&$_smarty_tpl->tpl_vars['current']->value) {?> action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current']->value,'html','UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['token']->value)&&$_smarty_tpl->tpl_vars['token']->value) {?>&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['token']->value,'html','UTF-8');?>
<?php }?>"<?php }?> method="post" enctype="multipart/form-data"<?php if (isset($_smarty_tpl->tpl_vars['style']->value)) {?> style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?> novalidate>
	<?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
" value="1" />
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['fieldset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldset']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fieldset']->key => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['fieldset']->key;
?>
		
		<?php $_smarty_tpl->_capture_stack[0][] = array('fieldset_name', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'fieldset_name'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<div class="panel" id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?><?php if (Smarty::$_smarty_vars['capture']['fieldset_name']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['fieldset_name']-1));?>
<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value=='legend') {?>
					
						<div class="panel-heading">
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['image'])&&isset($_smarty_tpl->tpl_vars['field']->value['title'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8');?>
" /><?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

						</div>
					
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='description'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='warning'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='success'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='error'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='input') {?>
					<div class="form-wrapper">
					<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->_loop = true;
?>
						
						<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['form_group_class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['form_group_class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?> hide<?php }?>"<?php if ($_smarty_tpl->tpl_vars['input']->value['name']=='id_state') {?> id="contains_states"<?php if (!$_smarty_tpl->tpl_vars['contains_states']->value) {?> style="display:none;"<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&isset($_smarty_tpl->tpl_vars['input']->value['tab'])) {?> data-tab-id="<?php echo $_smarty_tpl->tpl_vars['input']->value['tab'];?>
"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
						<?php } else { ?>
							
								<?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
									<label class="control-label col-lg-3<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']&&$_smarty_tpl->tpl_vars['input']->value['type']!='radio') {?> required<?php }?>">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
													<?php  $_smarty_tpl->tpl_vars['hint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['hint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->key => $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->_loop = true;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hint']->value['text'],'html','UTF-8');?>

														<?php } else { ?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hint']->value,'html','UTF-8');?>

														<?php }?>
													<?php } ?>
												<?php } else { ?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['hint'],'html','UTF-8');?>

												<?php }?>">
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										</span>
										<?php }?>
									</label>
								<?php }?>
							

							
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tabConfig') {?>
        <div class="row">
            <?php $_smarty_tpl->tpl_vars['tabList'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['values'], null, 0);?>
            <ul class="nav nav-tabs" role="tablist">
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <li role="presentation" class="tabConfig <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['input']->value['default']) {?>active<?php }?>"><a href="#<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['key']->value,'html','UTF-8');?>
" class="aptab-config" role="tab" data-toggle="tab" data-value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['key']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value,'html','UTF-8');?>
</a></li>
            <?php } ?>
            </ul>
        </div>
            
        <input type="hidden" id="tab_open" name="tab_open" value="<?php echo $_smarty_tpl->tpl_vars['input']->value['default'];?>
">
        <script>
            $(document).ready(function(){
                $('.aptab-config').click(function(){
                    $('#tab_open').val( $(this).data('value') );
                });
            });
            
            $(document).on('click', '#configuration_form_submit_btn', function(e){
                e.preventDefault();
                var active_tab = $('.form-wrapper ul.nav-tabs li.active a').data('value');
                $('#tab_open').val( active_tab );
                $(this).closest('form').submit();
            });
        </script>
    <?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='modules_block') {?>
            <?php $_smarty_tpl->tpl_vars['moduleList'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['values'], null, 0);?>
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['exist_module'])&&!$_smarty_tpl->tpl_vars['input']->value['exist_module']) {?>
                <label class="control-label" style="color: red; margin-bottom: 15px; margin-left: 10px;"> <?php echo smartyTranslate(array('s'=>'Empty module because not exist file config.xml in theme folder.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label>
                <br />
            <?php }?>
            <div class="col-lg-9 ">
            <?php if (isset($_smarty_tpl->tpl_vars['moduleList']->value)&&count($_smarty_tpl->tpl_vars['moduleList']->value)>0) {?>
                <p class="help-block"><?php echo smartyTranslate(array('s'=>'You can select one or more Module.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
                <table cellspacing="0" cellpadding="0" class="table" style="min-width:40em;">
                    <tr>
                        <th>
                            <input type="checkbox" name="checkme" id="checkme" class="noborder" onclick="checkDelBoxes(this.form, '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8');?>
[]', this.checked)" />
                        </th>
                        <th><?php echo smartyTranslate(array('s'=>'Name','mod'=>'appagebuilder'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Back-up File','mod'=>'appagebuilder'),$_smarty_tpl);?>

                            <p class="help-block" style="display: inline;">
                            <?php echo $_smarty_tpl->tpl_vars['backup_dir']->value;?>

                            </p>
                        </th>
                    </tr>

                    <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moduleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['moduleItem']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['moduleItem']['index']++;
?>
                        <tr <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['moduleItem']['index']%2) {?>class="alt_row"<?php }?>>
                            <td> 
                                <input type="checkbox" class="cmsBox" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8');?>
[]" id="chk_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"/>
                            </td>
                            <td><label for="chk_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" class="t"><strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
</strong></label></td>
                            <td>
                                <?php if (isset($_smarty_tpl->tpl_vars['module']->value['files'])) {?>
                                <select style="max-width: 500px;" name="file_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
">
                                <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module']->value['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['file']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['file']->value,'html','UTF-8');?>
</option>
                                <?php } ?>
                                </select>
                                <?php }?>
                            </td>
                        </tr>
                    <?php } ?>

                </table>
            <?php }?>
            </div>
            <div class="form-group button-wrapper">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button class="button btn btn-success" name="submitBackup" id="module_form_submit_btn" type="submit">
                                 <?php echo smartyTranslate(array('s'=>'Back-up to PHP file','mod'=>'appagebuilder'),$_smarty_tpl);?>

                        </button>
                        <button class="button btn btn-danger" name="submitRestore" data-confirm="<?php echo smartyTranslate(array('s'=>'Are you sure you want to restore from PHP file?','mod'=>'appagebuilder'),$_smarty_tpl);?>
" id="module_form_submit_btn" type="submit">
                                 <?php echo smartyTranslate(array('s'=>'Restore from PHP file','mod'=>'appagebuilder'),$_smarty_tpl);?>

                        </button>
                        
                        <button class="button btn btn-success" name="submitSample" id="module_form_submit_btn" type="submit">
                                 <?php echo smartyTranslate(array('s'=>'Export Sample Data','mod'=>'appagebuilder'),$_smarty_tpl);?>

                        </button>
                        <button class="button btn btn-danger" name="submitImport" data-confirm="<?php echo smartyTranslate(array('s'=>'Are you sure you want to restore data sample of template. You will lost all data of module','mod'=>'appagebuilder'),$_smarty_tpl);?>
" id="module_form_submit_btn" type="submit">
                                 <?php echo smartyTranslate(array('s'=>'Restore Sample Data','mod'=>'appagebuilder'),$_smarty_tpl);?>

                        </button>
                        <p class="help-block"><?php echo smartyTranslate(array('s'=>'Data Sample is only for theme developer','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
                    </div>
            </div>
            <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                    <div class="alert alert-info">
                        <?php echo smartyTranslate(array('s'=>'With restore function, you will lost all data of module in site for all shop','mod'=>'appagebuilder'),$_smarty_tpl);?>

                        <hr>
                        <?php echo smartyTranslate(array('s'=>'You should back-up before do any thing','mod'=>'appagebuilder'),$_smarty_tpl);?>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                    <button class="button btn btn-success" name="submitExportDBStruct" id="module_form_submit_btn" type="submit">
                            <?php echo smartyTranslate(array('s'=>'Export Data Struct','mod'=>'appagebuilder'),$_smarty_tpl);?>

                    </button>
                    <p class="help-block"><?php echo smartyTranslate(array('s'=>'You can download file in modules/appagebuilder/install. This function is only for theme developer','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
                </div>
            </div>
                
            <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                    <button class="button btn btn-success" name="submitUpdateModule" id="module_form_submit_btn" type="submit" onclick="javascript:return confirm('<?php echo smartyTranslate(array('s'=>'Are you sure you want to Update and Correct Module. Please back-up all things before?','mod'=>'appagebuilder'),$_smarty_tpl);?>
')">
                            <i class="icon-AdminParentPreferences"></i> <?php echo smartyTranslate(array('s'=>'Update and Correct Module','mod'=>'appagebuilder'),$_smarty_tpl);?>

                    </button>
                </div>
            </div>
                
            <script type="text/javascript">
                $(".button-wrapper .button").click(function(){
                    hasCheckedE = 0;
                    $("[name='moduleList[]']").each(function(){
                        if($(this).is(":checked")){
                            hasCheckedE = 1;
                            return false;
                        }
                    });
                    if(!hasCheckedE){
                        alert("You have to select atleast one module");
                        return false;
                    }
                    dataConfirm = $(this).attr("data-confirm");
                    if(dataConfirm){
                        return confirm(dataConfirm);
                    }
                });
            </script>
	<?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='font_h') {?>
<div>
    <div class="col-lg-3">
        <h2><?php echo $_smarty_tpl->tpl_vars['input']->value['htitle'];?>
</h2>
        <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
</p>
    </div>
    <div class="col-lg-9">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['ikey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['ikey']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            
            <?php if (($_smarty_tpl->tpl_vars['item']->value['type']=='select')) {?>
                <div class="t_span4 col-lg-4">
                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['label'])) {?><h4 class="title-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</h4><?php }?>
                <select name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['name'],'html','utf-8');?>
"
                        class="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['class'],'html','utf-8');?>
<?php }?>"
                        id="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['id'],'html','utf-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['name'],'html','utf-8');?>
<?php }?>"
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['multiple'])&&$_smarty_tpl->tpl_vars['item']->value['multiple']) {?> multiple="multiple"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['size'])) {?> size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['size'],'html','utf-8');?>
"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['onchange'],'html','utf-8');?>
"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['disabled'])&&$_smarty_tpl->tpl_vars['item']->value['disabled']) {?> disabled="disabled"<?php }?>>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['options']['default'])) {?>
                        <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['options']['default']['value'],'html','utf-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['options']['default']['label'],'html','utf-8');?>
</option>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['options']['optiongroup'])) {?>
                        <?php  $_smarty_tpl->tpl_vars['optiongroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optiongroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['options']['optiongroup']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->key => $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->_loop = true;
?>
                            <optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['item']->value['options']['optiongroup']['label']];?>
">
                                <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['query']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['id']];?>
"
                                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['multiple'])) {?>
                                            <?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
                                        <?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['name']];?>
</option>
                                <?php } ?>
                            </optgroup>
                        <?php } ?>
                    <?php } else { ?>
                        <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
                            <?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['id']};?>
"
                                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['multiple'])) {?>
                                        <?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['id']}) {?>
                                                selected="selected"
                                            <?php }?>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']]==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['id']}) {?>
                                            selected="selected"
                                        <?php }?>
                                    <?php }?>
                                ><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['name']};?>
</option>
                            <?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
                                <option value="">-</option>
                            <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['id']];?>
"
                                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['multiple'])) {?>
                                        <?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['id']]) {?>
                                                selected="selected"
                                            <?php }?>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['id']]) {?>
                                            selected="selected"
                                        <?php }?>
                                    <?php }?>
                                ><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['name']];?>
</option>

                            <?php }?>
                        <?php } ?>
                    <?php }?>
                </select>
                </div>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=='color') {?>
                <div class="t_span4 col-lg-4">
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['label'])) {?><h4 class="title-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</h4><?php }?>
                    <div class="input-group col-lg-5">
                        <input type="color"
                        data-hex="true"
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"
                        <?php } else { ?> class="color mColorPickerInput"<?php }?>
                        name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                        value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']],'html','UTF-8');?>
" />
                    </div>
                </div>
                
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=='text') {?>
                <div class="t_span4 col-lg-4">
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['label'])) {?><h4 class="title-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</h4><?php }?>
                    <?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']], null, 0);?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['item']->value['prefix'])||isset($_smarty_tpl->tpl_vars['item']->value['suffix'])) {?>
                    <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['item']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php }?>">
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxchar'])&&$_smarty_tpl->tpl_vars['item']->value['maxchar']) {?>
                    <span id="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php }?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['item']->value['maxchar']);?>
</span></span>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['prefix'])) {?>
                    <span class="input-group-addon">
                      <?php echo $_smarty_tpl->tpl_vars['item']->value['prefix'];?>

                    </span>
                    <?php }?>
                    <input type="text"
                        name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"
                        id="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php }?>"
                        value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['string_format'])&&$_smarty_tpl->tpl_vars['item']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['item']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
                        class="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='tags') {?> tagify<?php }?>"
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxchar'])&&$_smarty_tpl->tpl_vars['item']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['item']->value['maxchar']);?>
"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxlength'])&&$_smarty_tpl->tpl_vars['item']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['item']->value['maxlength']);?>
"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['readonly'])&&$_smarty_tpl->tpl_vars['item']->value['readonly']) {?> readonly="readonly"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['disabled'])&&$_smarty_tpl->tpl_vars['item']->value['disabled']) {?> disabled="disabled"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['item']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['required'])&&$_smarty_tpl->tpl_vars['item']->value['required']) {?> required="required" <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['placeholder'])&&$_smarty_tpl->tpl_vars['item']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['placeholder'];?>
"<?php }?>
                        />
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['suffix'])) {?>
                    <span class="input-group-addon">
                      <?php echo $_smarty_tpl->tpl_vars['item']->value['suffix'];?>

                    </span>
                    <?php }?>

                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['item']->value['prefix'])||isset($_smarty_tpl->tpl_vars['item']->value['suffix'])) {?>
                    </div>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['maxchar'])&&$_smarty_tpl->tpl_vars['item']->value['maxchar']) {?>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php }?>_counter"));
                    });
                    </script>
                    <?php }?>
                </div>
            <?php }?>
        <?php } ?>
    </div>
</div>
    <?php }?>
    
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='font_setup') {?>
		<h4 style="" class="t-group-attr">Google Fonts Setup </h4>
        <p class="t-help-block">Here you can setup the <a href="//www.google.com/fonts" target="blank">Google web fonts</a> that you want to use in your site.</p>
        <div>
            
            <select class="select_gfont" style="font-size: 13px;height: 34px;margin-bottom: 0;margin-left: 0;margin-right: 0;margin-top: 0;max-width: 250px;width: 100%;display: inline-block">
                <option value="">Please select a font</option>
                <?php $_smarty_tpl->tpl_vars['lgfonts'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['list_google_font'], null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lgfonts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                <?php } ?>
            </select>
            <a class="btn btn-success add_gfont" href="#">Add Font</a>
        </div>
        <br  />
        <br  />

    

<div id="use_google_font" class="use_google_font panel col-lg-12" style="margin-top: 12px">
    <div class="table-responsive-row clearfix">
        <table class="table appagebuilder_positions">
            <thead>
                <tr class="nodrag nodrop">
                    <th class="center fixed-width-xs"></th>
                    <th class=""><span class="title_box">Name</span></th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody class="list_gfonts"></tbody>
        </table>
    </div>
</div>

        
<div>
    <h4 class="t-group-attr"><?php echo smartyTranslate(array('s'=>'Google Fonts Subset','mod'=>'appagebuilder'),$_smarty_tpl);?>
</h4>
    <p class="t-help-block"><?php echo smartyTranslate(array('s'=>'Select which subsets you want to load for the Google fonts.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
    <div>
        <div class="leo_checkbox_wrapper ">
            <input name="gfonts_subsets[]" id="gfonts_subsets_latin" value="latin" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_latin"><?php echo smartyTranslate(array('s'=>'Latin','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_latin-ext" value="latin-ext" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_latin-ext"><?php echo smartyTranslate(array('s'=>'Latin Ext','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_greek" value="greek" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_greek"><?php echo smartyTranslate(array('s'=>'Greek','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_cyrillic" value="cyrillic" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_cyrillic"><?php echo smartyTranslate(array('s'=>'Cyrillic','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_cyrillic-ext" value="cyrillic-ext" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_cyrillic-ext"><?php echo smartyTranslate(array('s'=>'Cyrillic Ext','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_khmer" value="khmer" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_khmer"><?php echo smartyTranslate(array('s'=>'Khmer','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_greek-ext" value="greek-ext" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_greek-ext"><?php echo smartyTranslate(array('s'=>'Greek Ext','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label><br>

            <input name="gfonts_subsets[]" id="gfonts_subsets_vietnamese" value="vietnamese" type="checkbox">
            <label style="cursor: pointer !important;" for="gfonts_subsets_vietnamese"><?php echo smartyTranslate(array('s'=>'Vietnamese','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label><br>
        </div>
    </div>
</div>

<!-- template -->
<div class="modal fade" id="modal_form"  data-backdrop="0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
        <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span></button>
        <h4 class="modal-title" id="myModalLabel" data-addnew="<?php echo smartyTranslate(array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" data-edit="<?php echo smartyTranslate(array('s'=>'Editting','mod'=>'appagebuilder'),$_smarty_tpl);?>
"></h4>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'appagebuilder'),$_smarty_tpl);?>
</button>
        <button type="button" class="btn btn-primary save_gfont"><?php echo smartyTranslate(array('s'=>'Save changes','mod'=>'appagebuilder'),$_smarty_tpl);?>
</button>
      </div>
    </div>
  </div>
    <div class="modal-backdrop fade in" style="height: 995px;"></div>
</div>

<!-- template -->
<table id="html_item_gfont" style="display:none">
    <tbody>
        <tr id="" class="tmp">
            <input type="hidden" class="data_gfont" value="" name=""/><!-- name, id, regular, italic-->
            <td class="row-selector text-center"><!--<input name="appagebuilder_positionsBox[]" value="23" class="noborder" type="checkbox">--></td>
            <td class="gfont_name"></td>
            <td class="text-right">
                <div class="btn-group-action">
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn btn-default edit_gfont" title="View">
                            <i class="icon-pencil"></i> Edit
                        </a>
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-caret-down"></i>&nbsp;
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0)" title="Delete" class="delete delete_gfont">
                                    <i class="icon-trash"></i> Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- template -->
<div id="temp_gfont_edit" style="display:none">
	<div>
            <h4 class="t-group-attr"><?php echo smartyTranslate(array('s'=>'Font CSS Class','mod'=>'appagebuilder'),$_smarty_tpl);?>
</h4>
            <p class="t-help-block"><?php echo smartyTranslate(array('s'=>'Using the css property:','mod'=>'appagebuilder'),$_smarty_tpl);?>
 <code>font-family:"[gfont_name]";</code> <?php echo smartyTranslate(array('s'=>'to use this font.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
	</div>
    
        <br />
	<div>
            <h4 class="t-group-attr"><?php echo smartyTranslate(array('s'=>'Font variants','mod'=>'appagebuilder'),$_smarty_tpl);?>
</h4>
            <p class="t-help-block"><?php echo smartyTranslate(array('s'=>'Here you can select the font variants you want to load.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
            <div class="leo_checkbox_wrapper ">
                <!-- list variant here -->
            </div>
            
            <input id="gfont_id" value="" type="hidden">
            
            <div id="tmp-gfont-variant" style="display: none;">
                <!-- template variant -->
                <label style="cursor: pointer !important;"><input class="" name="[variant_name]" value="[variant_name]" [variant_checked] type="checkbox"> [variant_value]</label>
                <br>
            </div>
	</div>
</div>
<script>
    var global_gfont_list = jQuery.parseJSON('<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['gfont_list_ori'];?>
');
    var global_gfont_api = jQuery.parseJSON('<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['gfont_api'];?>
');
    var global_gfont_subset = jQuery.parseJSON('<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['gfont_subset'];?>
');
    
</script>

<script>
    $(document).ready(function(){
        //$('.aptab-config:eq(3)').trigger('click');
        autoAddGoogleItem();
        autoAddGoogleSubset();
    });
    
    function autoAddGoogleItem()
    {
        $.each(global_gfont_list, function(index, value){
            addGoogleItem(value);
        });
    }
    
    function autoAddGoogleSubset()
    {
        $.each(global_gfont_subset, function(index, value){
            $('#gfonts_subsets_'+value).prop('checked', true);
        });
    }
    
    function addGoogleItem(obj)
    {
        $('.list_gfonts').append(   $('#html_item_gfont .tmp').parent().html()  );
        
        $('.list_gfonts tr.tmp .gfont_name').html( obj.gfont_name );
        $('.list_gfonts tr.tmp .data_gfont').val( JSON.stringify(obj) );
        $('.list_gfonts tr.tmp .data_gfont').attr( 'name', 'gfont_items[]' );
        $('.list_gfonts tr.tmp').attr("id", obj['gfont_id']);
        $('.list_gfonts tr.tmp').data("form", obj);


        $('.list_gfonts tr:even').addClass('odd');
        $('.list_gfonts tr:odd').removeClass('odd');
        $('.list_gfonts tr.tmp').removeClass('tmp');
    }
    
    $('.add_gfont').click(function(e) {
        e.preventDefault();
        var gfont_name = $('.select_gfont').val();

        // VALIDATE
        if ( gfont_name == "" || gfont_name == undefined ) {
            alert ('Please select a font.');
            return false;
        }
        var gfont_name_exist = false;
        $('.list_gfonts tr').each(function(){
            var tmp = $(this).data('form').gfont_name;
            if( gfont_name == tmp){
                gfont_name_exist = true;
            }
        });
        if(gfont_name_exist){
            alert ('Font is exist.');
            return false;
        }
        
        // set attribute
        var tmp = {};
        tmp['gfont_id'] = "gfont_" + getRandomNumber();
        tmp['gfont_name'] = gfont_name;
        
        addGoogleItem(tmp);
        
        $('.chk_font_exist').each(function(){
            $(this).append($('<option>', {
                value: gfont_name,
                text: gfont_name,
            }));
        });
    });

    $(document).on('click', '.edit_gfont', function(e){
        var tr_parent = $(this).closest('tr').data('form');
        var gfont_name = tr_parent.gfont_name;
        
        // HTML LIST VARIANT
        var html_variant = '';
        $.each( global_gfont_api[gfont_name]['variants'] , function( key, value ) {
            var output = '';
            output = $('#tmp-gfont-variant').html();
            output = output.replaceAll('[variant_name]', key);
            output = output.replaceAll('[variant_value]', value);
            
            if(tr_parent.hasOwnProperty(key))
                output = output.replaceAll('[variant_checked]', 'checked="checked"');
            else
                output = output.replaceAll('[variant_checked]', '');
            
            html_variant += output;
        });
        $('#temp_gfont_edit .leo_checkbox_wrapper').html(html_variant);
        
        // HTML FONT NAME
        var html = $('#temp_gfont_edit').html();
        html = html.replace("[gfont_name]", tr_parent['gfont_name']);
        
        // HTML MODAL
        $('#myModalLabel').html( $(this).closest('tr').data('form').gfont_name + " font options");
        $('.modal-body').html( html );
        
        // HTML FONT ID
        $('#gfont_id').val(tr_parent['gfont_id']);
        $('#modal_form').modal('show');
    });

    $(document).on('click', '.delete_gfont', function(e){
        if (!confirm('Delete selected item?'))
            return true;    // auto hide dropdow
        
        var gfont_name = $(this).closest('tr').data('form').gfont_name;
        
        $(this).closest('tr').remove();
        $('.list_gfonts tr:even').addClass('odd');
        $('.list_gfonts tr:odd').removeClass('odd');
        
        
        $(".chk_font_exist option[value='"+gfont_name+"']").remove();
    });
    
    $('.save_gfont').click(function(e){
        var gfont_id =  $('#gfont_id').val();
        var tmp = $('#'+gfont_id).data('form');
        
        // SET VARIANT
        $('#modal_form .leo_checkbox_wrapper input:checked').each(function(){
            var value = $(this).val();
            tmp[value] = value;
        });
        
        // SET TO FORM
        $('#'+gfont_id).data('form', tmp);
        $('#'+gfont_id+' .data_gfont').val( JSON.stringify(tmp) );
        
        $('#modal_form').modal('hide');
    });
    

    function getRandomNumber(){
        return (+new Date() + (Math.random() * 10000000000000000)).toString().replace('.', '');
    };
    String.prototype.replaceAll = function(target, replacement) {
      return this.split(target).join(replacement);
    };
</script>
  
	<?php }?>
	
								<div class="col-lg-<?php if (isset($_smarty_tpl->tpl_vars['input']->value['col'])) {?><?php echo intval($_smarty_tpl->tpl_vars['input']->value['col']);?>
<?php } else { ?>9<?php }?><?php if (!isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?> col-lg-offset-3<?php }?>">
								
								<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='text'||$_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									<div class="form-group">
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], null, 0);?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
										<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
											<div class="col-lg-9">
										<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
													
														<script type="text/javascript">
															$().ready(function () {
																var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>';
																$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag','js'=>1),$_smarty_tpl);?>
'});
																$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																	$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
																});
															});
														</script>
													
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
												<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
													<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
												</span>
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

													</span>
													<?php }?>
												<input type="text"
													id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"
													name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
													class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
													value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
													onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?> />
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

													</span>
													<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												</div>
												<?php }?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											</div>
											<div class="col-lg-2">
												<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
													<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

													<i class="icon-caret-down"></i>
												</button>
												<ul class="dropdown-menu">
													<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
													<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
										<?php }?>
									<?php } ?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
									$(document).ready(function(){
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
									<?php } ?>
									});
									</script>
									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									</div>
									<?php }?>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
											
											<script type="text/javascript">
												$().ready(function () {
													var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>';
													$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag'),$_smarty_tpl);?>
'});
													$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
														$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
													});
												});
											</script>
											
										<?php }?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span></span>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

										</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

										</span>
										<?php }?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										</div>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<script type="text/javascript">
										$(document).ready(function(){
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
										</script>
										<?php }?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textbutton') {?>
									<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
									<div class="row">
										<div class="col-lg-9">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) {?>
										<div class="input-group">
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										</div>
										<?php }?>
										</div>
										<div class="col-lg-2">
											<button type="button" class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['class'];?>
<?php }?>"
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['button']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
													<?php if (mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8')!='class') {?>
													 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'html','UTF-8');?>
="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value,'html','UTF-8');?>
"
													<?php }?>
												<?php } ?> >
												<?php echo $_smarty_tpl->tpl_vars['input']->value['button']['label'];?>

											</button>
										</div>
									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
										$(document).ready(function() {
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
									</script>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='swap') {?>
									<div class="form-group">
										<div class="col-lg-9">
											<div class="form-control-static row">
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?>" id="availableSwap" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
_available[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="addSwap" class="btn btn-default btn-block"><?php echo smartyTranslate(array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl);?>
 <i class="icon-arrow-right"></i></a>
												</div>
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?>" id="selectedSwap" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
_selected[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="removeSwap" class="btn btn-default btn-block"><i class="icon-arrow-left"></i> <?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
</a>
												</div>
											</div>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='select') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])&&!$_smarty_tpl->tpl_vars['input']->value['options']['query']&&isset($_smarty_tpl->tpl_vars['input']->value['empty_message'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['required'] = false;?>
										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['desc'] = null;?>
									<?php } else { ?>
										<select name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
"
												class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?> fixed-width-xl"
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['id'],'html','utf-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
<?php }?>"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])&&$_smarty_tpl->tpl_vars['input']->value['multiple']) {?> multiple="multiple"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['default'])) {?>
												<option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['options']['default']['value'],'html','utf-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['options']['default']['label'],'html','utf-8');?>
</option>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup'])) {?>
												<?php  $_smarty_tpl->tpl_vars['optiongroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optiongroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->key => $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->_loop = true;
?>
													<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
														<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
"
																<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																	<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																		<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																	<?php } ?>
																<?php } else { ?>
																	<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																<?php }?>
															><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
														<?php } ?>
													</optgroup>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
													<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
													<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
														<option value="">-</option>
													<?php } else { ?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

													<?php }?>
												<?php } ?>
											<?php }?>
										</select>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='radio') {?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<div class="radio <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<label><input type="radio"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled'])||(isset($_smarty_tpl->tpl_vars['value']->value['disabled'])&&$_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
										</div>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['p'])&&$_smarty_tpl->tpl_vars['value']->value['p']) {?><p class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='switch') {?>
									<span class="switch prestashop-switch fixed-width-lg">
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled'])||(isset($_smarty_tpl->tpl_vars['value']->value['disabled'])&&$_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/>
										<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?><?php echo smartyTranslate(array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php }?></label>
										<?php } ?>
										<a class="slide-button btn"></a>
									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textarea') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?><div class="input-group"><?php }?>
									<?php $_smarty_tpl->tpl_vars['use_textarea_autosize'] = new Smarty_variable(true, null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
										<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?> style="display:none;"<?php }?>>
												<div class="col-lg-9">
											<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
														<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
															<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
														</span>
													<?php }?>
													<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8');?>
</textarea>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
												</div>
												<div class="col-lg-2">
													<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
														<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
														<li>
															<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
											<?php }?>
										<?php } ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
											<?php } ?>
											});
											</script>
										<?php }?>
									<?php } else { ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</textarea>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
											});
											</script>
										<?php }?>
									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?></div><?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='checkbox') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])) {?>
										<a class="btn btn-default show_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='hide') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
										<a class="btn btn-default hide_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]), null, 0);?>
										<div class="checkbox<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])&&strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>">
											<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['value']->value['val'])) {?> value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value['val'],'html','UTF-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])&&$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?> checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</label>
										</div>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='change-password') {?>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change" class="btn btn-default">
												<i class="icon-lock"></i>
												<?php echo smartyTranslate(array('s'=>'Change password...'),$_smarty_tpl);?>

											</button>
											<div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container" class="form-password-change well hide">
												<div class="form-group">
													<label for="old_passwd" class="control-label col-lg-2 required">
														<?php echo smartyTranslate(array('s'=>'Current password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-10">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-unlock"></i>
															</span>
															<input type="password" id="old_passwd" name="old_passwd" class="form-control" value="" required="required" autocomplete="off">
														</div>
													</div>
												</div>
												<hr />
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="required control-label col-lg-2">
														<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'Password should be at least 8 characters long.'),$_smarty_tpl);?>
">
															<?php echo smartyTranslate(array('s'=>'New password'),$_smarty_tpl);?>

														</span>
													</label>
													<div class="col-lg-9">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" required="required" autocomplete="off"/>
														</div>
														<span id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output"></span>
													</div>
												</div>
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="required control-label col-lg-2">
														<?php echo smartyTranslate(array('s'=>'Confirm password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-4">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" autocomplete="off"/>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<input type="text" class="form-control fixed-width-md pull-left" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field" disabled="disabled">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn" class="btn btn-default">
															<i class="icon-random"></i>
															<?php echo smartyTranslate(array('s'=>'Generate password'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn" class="btn btn-default">
															<i class="icon-remove"></i>
															<?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<script>
										$(function(){
											var $oldPwd = $('#old_passwd');
											var $passwordField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
');
											var $output = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output');
											var $generateBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn');
											var $generateField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field');
											var $cancelBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn');

											var feedback = [
												{ badge: 'text-danger', text: '<?php echo smartyTranslate(array('s'=>"Invalid",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-warning', text: '<?php echo smartyTranslate(array('s'=>"Okay",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Good",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Fabulous",'js'=>1),$_smarty_tpl);?>
' }
											];
											$.passy.requirements.length.min = 8;
											$.passy.requirements.characters = 'DIGIT';
											$passwordField.passy(function(strength, valid) {
												$output.text(feedback[strength].text);
												$output.removeClass('text-danger').removeClass('text-warning').removeClass('text-success');
												$output.addClass(feedback[strength].badge);
												if (valid){
													$output.show();
												}
												else {
													$output.hide();
												}
											});
											var $container = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container');
											var $changeBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change');
											var $confirmPwd = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2');

											$changeBtn.on('click',function(){
												$container.removeClass('hide');
												$changeBtn.addClass('hide');
											});
											$generateBtn.click(function() {
												$generateField.passy( 'generate', 8 );
												var generatedPassword = $generateField.val();
												$passwordField.val(generatedPassword);
												$confirmPwd.val(generatedPassword);
											});
											$cancelBtn.on('click',function() {
												$container.find("input").val("");
												$container.addClass('hide');
												$changeBtn.removeClass('hide');
											});

											$.validator.addMethod('password_same', function(value, element) {
												return $passwordField.val() == $confirmPwd.val();
											}, '<?php echo smartyTranslate(array('s'=>"Invalid password confirmation",'js'=>1),$_smarty_tpl);?>
');

											$('#employee_form').validate({
												rules: {
													"email": {
														email: true
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" : {
														minlength: 8
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2": {
														password_same: true
													},
													"old_passwd" : {},
												},
												// override jquery validate plugin defaults for bootstrap 3
												highlight: function(element) {
													$(element).closest('.form-group').addClass('has-error');
												},
												unhighlight: function(element) {
													$(element).closest('.form-group').removeClass('has-error');
												},
												errorElement: 'span',
												errorClass: 'help-block',
												errorPlacement: function(error, element) {
													if(element.parent('.input-group').length) {
														error.insertAfter(element.parent());
													} else {
														error.insertAfter(element);
													}
												}
											});
										});
									</script>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='password') {?>
									<div class="input-group fixed-width-lg">
										<span class="input-group-addon">
											<i class="icon-key"></i>
										</span>
										<input type="password"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											value=""
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?>autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?> />
									</div>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='birthday') {?>
								<div class="form-group">
									<?php  $_smarty_tpl->tpl_vars['select'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['select']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['select']->key => $_smarty_tpl->tpl_vars['select']->value) {
$_smarty_tpl->tpl_vars['select']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['select']->key;
?>
									<div class="col-lg-2">
										<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="fixed-width-lg<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<option value="">-</option>
											<?php if ($_smarty_tpl->tpl_vars['key']->value=='months') {?>
												
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
</option>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php } ?>
											<?php }?>
										</select>
									</div>
									<?php } ?>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='group') {?>
									<?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['values'], null, 0);?>
									<?php /*  Call merged included template "helpers/form/form_group.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '81205a6a0ba6b79947-40584017');
content_5a6a0ba8023489_88781781($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "helpers/form/form_group.tpl" */?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='shop') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['html'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories') {?>
									<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='file') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['file'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories_select') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['category_tree'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='asso_shop'&&isset($_smarty_tpl->tpl_vars['asso_shop']->value)&&$_smarty_tpl->tpl_vars['asso_shop']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['asso_shop']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='color') {?>
								<div class="form-group">
									<div class="col-lg-2">
										<div class="row">
											<div class="input-group">
												<input type="color"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="color mColorPickerInput"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											</div>
										</div>
									</div>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='date') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?>class="datepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='datetime') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="datetimepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='free') {?>
									<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='html') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['html_content'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['html_content'];?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>

									<?php }?>
								<?php }?>
								
								
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])&&!empty($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
										<p class="help-block">
											<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
												<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['desc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php } ?>
											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

											<?php }?>
										</p>
									<?php }?>
								
								</div>
							

						<?php }?>
						</div>
						
					<?php } ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminForm','fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php } elseif (isset($_GET['controller'])) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php }?>
				</div><!-- /.form-wrapper -->
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='desc') {?>
					<div class="alert alert-info col-lg-offset-3">
						<?php if (is_array($_smarty_tpl->tpl_vars['field']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
								<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
									<span<?php if (isset($_smarty_tpl->tpl_vars['p']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['k']->value+1])) {?><br /><?php }?>
								<?php }?>
							<?php } ?>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						<?php }?>
					</div>
				<?php }?>
				
			<?php } ?>
			
			<?php $_smarty_tpl->_capture_stack[0][] = array('form_submit_btn', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])||isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
					<div class="panel-footer">
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])&&!empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
						<button type="submit" value="1"	id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }?><?php if (Smarty::$_smarty_vars['capture']['form_submit_btn']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['form_submit_btn']-1));?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])&&$_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];?>
<?php } else { ?>btn btn-default pull-right<?php }?>">
							<i class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];?>
<?php } else { ?>process-icon-save<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['show_cancel_button']->value)&&$_smarty_tpl->tpl_vars['show_cancel_button']->value) {?>
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['back_url']->value,'html','UTF-8');?>
" class="btn btn-default" onclick="window.history.back();">
							<i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl);?>

						</a>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset'])) {?>
						<button
							type="reset"
							id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_reset_btn<?php }?>"
							class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'];?>
<?php } else { ?>btn btn-default<?php }?>"
							>
							<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'];?>
"></i> <?php }?> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
						<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])&&trim($_smarty_tpl->tpl_vars['btn']->value['href'])!='') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
							<?php } else { ?>
								<button type="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['type'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['type'];?>
<?php } else { ?>button<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['name'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['name'];?>
<?php } else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
							<?php }?>
						<?php } ?>
						<?php }?>
					</div>
				<?php }?>
			
		</div>
		
		
	<?php } ?>
</form>



<?php if (isset($_smarty_tpl->tpl_vars['tinymce']->value)&&$_smarty_tpl->tpl_vars['tinymce']->value) {?>
<script type="text/javascript">
	var iso = '<?php echo addslashes($_smarty_tpl->tpl_vars['iso']->value);?>
';
	var pathCSS = '<?php echo addslashes(@constant('_THEME_CSS_DIR_'));?>
';
	var ad = '<?php echo addslashes($_smarty_tpl->tpl_vars['ad']->value);?>
';

	$(document).ready(function(){
		
			tinySetup({
				editor_selector :"autoload_rte"
			});
		
	});
</script>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['color']->value)&&$_smarty_tpl->tpl_vars['color']->value) {?>
<script type="text/javascript">
	$.fn.mColorPicker.defaults.imageFolder = baseDir + 'img/admin/';
</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['firstCall']->value) {?>
	<script type="text/javascript">
		var module_dir = '<?php echo @constant('_MODULE_DIR_');?>
';
		var id_language = <?php echo intval($_smarty_tpl->tpl_vars['defaultFormLanguage']->value);?>
;
		var languages = new Array();
		var vat_number = <?php if ($_smarty_tpl->tpl_vars['vat_number']->value) {?>1<?php } else { ?>0<?php }?>;
		// Multilang field setup must happen before document is ready so that calls to displayFlags() to avoid
		// precedence conflicts with other document.ready() blocks
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			languages[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
] = {
				id_lang: <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
,
				iso_code: '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
',
				name: '<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
',
				is_default: '<?php echo $_smarty_tpl->tpl_vars['language']->value['is_default'];?>
'
			};
		<?php } ?>
		// we need allowEmployeeFormLang var in ajax request
		allowEmployeeFormLang = <?php echo intval($_smarty_tpl->tpl_vars['allowEmployeeFormLang']->value);?>
;
		displayFlags(languages, id_language, allowEmployeeFormLang);

		$(document).ready(function() {

			$(".show_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').removeClass('hidden');
				$(this).siblings('.hide_checkbox').removeClass('hidden');
				return false;
			});
			$(".hide_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').addClass('hidden');
				$(this).siblings('.show_checkbox').removeClass('hidden');
				return false;
			});

			<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['id_state'])) {?>
				if ($('#id_country') && $('#id_state'))
				{
					ajaxStates(<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['id_state'];?>
);
					$('#id_country').change(function() {
						ajaxStates();
					});
				}
			<?php }?>

			if ($(".datepicker").length > 0)
				$(".datepicker").datepicker({
					prevText: '',
					nextText: '',
					dateFormat: 'yy-mm-dd'
				});

			if ($(".datetimepicker").length > 0)
			$('.datetimepicker').datetimepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd',
				// Define a custom regional settings in order to use PrestaShop translation tools
				currentText: '<?php echo smartyTranslate(array('s'=>'Now','js'=>1),$_smarty_tpl);?>
',
				closeText: '<?php echo smartyTranslate(array('s'=>'Done','js'=>1),$_smarty_tpl);?>
',
				ampm: false,
				amNames: ['AM', 'A'],
				pmNames: ['PM', 'P'],
				timeFormat: 'hh:mm:ss tt',
				timeSuffix: '',
				timeOnlyTitle: '<?php echo smartyTranslate(array('s'=>'Choose Time','js'=>1),$_smarty_tpl);?>
',
				timeText: '<?php echo smartyTranslate(array('s'=>'Time','js'=>1),$_smarty_tpl);?>
',
				hourText: '<?php echo smartyTranslate(array('s'=>'Hour','js'=>1),$_smarty_tpl);?>
',
				minuteText: '<?php echo smartyTranslate(array('s'=>'Minute','js'=>1),$_smarty_tpl);?>
',
			});
			<?php if (isset($_smarty_tpl->tpl_vars['use_textarea_autosize']->value)) {?>
			$(".textarea-autosize").autosize();
			<?php }?>
		});
	state_token = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminStates'),$_smarty_tpl);?>
';
	
	</script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:54:00
         compiled from "C:\PRIVE\UwAmp\www\coree\admin463nbjepp\themes\default\template\helpers\form\form_group.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a6a0ba8023489_88781781')) {function content_5a6a0ba8023489_88781781($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['groups']->value)&&isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
<div class="row">
	<div class="col-lg-6">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="fixed-width-xs">
						<span class="title_box">
							<input type="checkbox" name="checkme" id="checkme" onclick="checkDelBoxes(this.form, 'groupBox[]', this.checked)" />
						</span>
					</th>
					<th class="fixed-width-xs"><span class="title_box"><?php echo smartyTranslate(array('s'=>'ID','d'=>'Admin.Global'),$_smarty_tpl);?>
</span></th>
					<th>
						<span class="title_box">
							<?php echo smartyTranslate(array('s'=>'Group name'),$_smarty_tpl);?>

						</span>
					</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
				<tr>
					<td>
						<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((('groupBox').('_')).($_smarty_tpl->tpl_vars['group']->value['id_group']), null, 0);?>
						<input type="checkbox" name="groupBox[]" class="groupBox" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?>checked="checked"<?php }?> />
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
</td>
					<td>
						<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</label>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php } else { ?>
<p>
	<?php echo smartyTranslate(array('s'=>'No group created'),$_smarty_tpl);?>

</p>
<?php }?>
<?php }} ?>
