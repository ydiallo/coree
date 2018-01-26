<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:33:48
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApColumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79765a6a06ecb208c4-08675684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a32b3ca02096481efcb3ba37b0239150e0946c0' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_shortcodes\\ApColumn.tpl',
      1 => 1516894360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79765a6a06ecb208c4-08675684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apInfo' => 0,
    'colClass' => 0,
    'formAtts' => 0,
    'widthList' => 0,
    'itemWidth' => 0,
    'apContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a06ecc45d64_29491514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a06ecc45d64_29491514')) {function content_5a6a06ecc45d64_29491514($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\PRIVE\\UwAmp\\www\\coree\\vendor\\prestashop\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_math')) include 'C:\\PRIVE\\UwAmp\\www\\coree\\vendor\\prestashop\\smarty\\plugins\\function.math.php';
?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApColumn -->
<div <?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>id="default_column"<?php }?> class="column-row<?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?> col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12<?php }?><?php if (isset($_smarty_tpl->tpl_vars['colClass']->value)) {?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_replace($_smarty_tpl->tpl_vars['colClass']->value,'.','-'),'html','UTF-8');?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value)) {?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?><?php }?>">
	<div class="cover-column">
		<div class="column-controll-top">
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Drag to sort Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action caction-drag label-tooltip"><i class="icon-move"></i> </a>
			&nbsp;
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<span><?php echo smartyTranslate(array('s'=>'Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span> <span class="caret"></span>
				</button>
				<ul class="dropdown-menu for-column-row" role="menu">
					<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-new-widget "><i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
					<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Edit Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-edit " data-type="ApColumn" data-for=".column-row"><i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
					<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-delete "><i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
					<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Duplicate Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-duplicate "><i class="icon-paste"></i> <?php echo smartyTranslate(array('s'=>'Duplicate Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
					<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Disable or Enable Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-status <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?>"><i class="icon-ok"></i> <?php echo smartyTranslate(array('s'=>'Disable or Enable Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
				</ul>
			</div> 
		</div>
		<div class="column-controll-right pull-right">
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Reduce size','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-change-colwidth" data-value="-1"><i class="icon-minus-sign-alt"></i></a>
			<div class="btn-group">
				<button type="button" class="btn" tabindex="-1" data-toggle="dropdown">
					<span class="width-val ap-w-6"></span>
				</button>
				<ul class="dropdown-menu dropdown-menu-right">
					<?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widthList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
					<li class="col-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'),'html','UTF-8');?>
">
						<a class="change-colwidth" data-width="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'),'html','UTF-8');?>
" href="javascript:void(0);" tabindex="-1">                                          
							<span data-width="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'),'html','UTF-8');?>
" class="width-val ap-w-<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(strpos($_smarty_tpl->tpl_vars['itemWidth']->value,"."),'html','UTF-8')) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['itemWidth']->value,'html','UTF-8');?>
<?php }?>"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['itemWidth']->value,'html','UTF-8');?>
/12 - ( <?php echo smarty_function_math(array('equation'=>"x/y*100",'x'=>$_smarty_tpl->tpl_vars['itemWidth']->value,'y'=>12,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Increase size','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-change-colwidth" data-value="1"><i class="icon-plus-sign-alt"></i></a>
		</div>
		<div class="column-content">
			<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?><?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
<?php }?>
		</div>
		<div class="column-controll-bottom">
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-new-widget label-tooltip"><i class="icon-plus-sign"></i></a>
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Edit Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-edit label-tooltip" data-type="ApColumn"><i class="icon-pencil"></i></a>
		</div>
	</div>
</div><?php }} ?>
