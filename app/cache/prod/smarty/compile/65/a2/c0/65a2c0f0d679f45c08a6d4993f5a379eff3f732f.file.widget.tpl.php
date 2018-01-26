<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 17:27:29
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\leobootstrapmenu\views\templates\admin\leo_widgets\widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237735a6a13816bd843-54249547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65a2c0f0d679f45c08a6d4993f5a379eff3f732f' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\leobootstrapmenu\\views\\templates\\admin\\leo_widgets\\widget.tpl',
      1 => 1516894362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237735a6a13816bd843-54249547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_selected' => 0,
    'form' => 0,
    'action' => 0,
    'is_using_managewidget' => 0,
    'types' => 0,
    'text' => 0,
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a13817888f8_90374868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a13817888f8_90374868')) {function content_5a6a13817888f8_90374868($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['widget_selected']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	 <script type="text/javascript">
		$('#widget_type').change( function(){
			location.href = '<?php echo html_entity_decode($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8'));?>
&wtype='+$(this).val();
		} );
	</script>	
 <?php } else { ?>
 <div class="col-lg-12" style="padding:20px;">
		 <?php if ($_smarty_tpl->tpl_vars['is_using_managewidget']->value) {?>
		<div class="col-lg-5">
		<h3><?php echo smartyTranslate(array('s'=>'Only for Module leomanagewidgets','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</h3> 
			<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->_loop = true;
 $_smarty_tpl->tpl_vars['widget']->value = $_smarty_tpl->tpl_vars['text']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['text']->value['for']=='manage') {?>
					<div class="col-lg-6">
						<h4><a href="<?php echo html_entity_decode($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8'));?>
&wtype=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['text']->value['label'],'html','UTF-8');?>
</a></h4>
						<p><i><?php echo $_smarty_tpl->tpl_vars['text']->value['explain'];?>
</i></p>	
					</div>
				<?php }?>	
			<?php } ?> 
		</div>
		<?php }?>
		<div class="col-lg-6 col-lg-offset-1">
		
			<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->_loop = true;
 $_smarty_tpl->tpl_vars['widget']->value = $_smarty_tpl->tpl_vars['text']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['text']->value['for']!='manage') {?>
					<div class="col-lg-6">
						<h4><a href="<?php echo html_entity_decode($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8'));?>
&wtype=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['widget']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['text']->value['label'],'html','UTF-8');?>
</a></h4>
						<p><i><?php echo $_smarty_tpl->tpl_vars['text']->value['explain'];?>
</i></p>	
					</div>
				<?php }?>	
			<?php } ?> 
		</div>
</div>		
<?php }?>
<?php }} ?>
