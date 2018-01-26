<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:33:48
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApGeneral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105715a6a06ec9d9fa3-17884619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43429c7601fe29dd69c6548008ceb9e4cd8eaee5' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_shortcodes\\ApGeneral.tpl',
      1 => 1516894360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105715a6a06ec9d9fa3-17884619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apInfo' => 0,
    'formAtts' => 0,
    'moduleDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a06ecaf5802_49149602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a06ecaf5802_49149602')) {function content_5a6a06ecaf5802_49149602($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApGeneral -->
<div <?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>id="default_widget"<?php }?> class="widget-row clearfix<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['apInfo']->value['name'],'html','UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'])) {?> widget-icon<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value)) {?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8');?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>data-type="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['apInfo']->value['name'],'html','UTF-8');?>
"<?php }?>>
	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value)) {?>
	<a id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8');?>
" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8');?>
"></a>
	<?php }?>
    <div class="widget-controll-top pull-right">
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Drag to sort Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action waction-drag label-tooltip"><i class="icon-move"></i> </a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Disable or Enable Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-status<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?> label-tooltip"><i class="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?>icon-remove<?php } else { ?>icon-ok<?php }?>"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Edit Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-edit label-tooltip" <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>data-type="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['apInfo']->value['name'],'html','UTF-8');?>
"<?php }?>><i class="icon-pencil"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Duplicate Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-delete label-tooltip"><i class="icon-trash"></i></a>
    </div>
    <div class="widget-content">
        <img class="w-img" width="16" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleDir']->value,'html','UTF-8');?>
appagebuilder/logo.gif" title="<?php echo smartyTranslate(array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
"/>
        <i class="icon w-icon<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)&&isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'])) {?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'],'html','UTF-8');?>
<?php }?>"></i>
        <a href="javascript:void(0);" title="" class="widget-title"><?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']),'html','UTF-8');?>
 - <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['apInfo']->value['label'],'html','UTF-8');?>
<?php }?></a>
    </div>
</div><?php }} ?>
