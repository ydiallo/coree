<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:33:50
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApAccordions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6265a6a06eef2de22-55795196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25af62bada6ce6544b24f4af63b41fa65e281107' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_shortcodes\\ApAccordions.tpl',
      1 => 1516894360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6265a6a06eef2de22-55795196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isSubTab' => 0,
    'apInfo' => 0,
    'formAtts' => 0,
    'foo' => 0,
    'apContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a06ef10b7f3_31103728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a06ef10b7f3_31103728')) {function content_5a6a06ef10b7f3_31103728($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApAccordions -->
<?php if (!isset($_smarty_tpl->tpl_vars['isSubTab']->value)) {?>
<div id="<?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>default_ApAccordions<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8');?>
<?php }?>" class="widget-row clearfix ApAccordions<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value)) {?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8');?>
<?php }?>" data-type='ApAccordions'>
    <div class="float-center-control text-center">
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Drag to sort accordion','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="accordions-action waction-drag label-tooltip"><i class="icon-move"></i> </a>
        <span><?php echo smartyTranslate(array('s'=>'Widget Accordions','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
        
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Edit Accordions','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="accordions-action btn-edit label-tooltip " data-type="ApAccordions"><i class="icon-edit"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Delete Accordions','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="accordions-action btn-delete label-tooltip"><i class="icon-trash"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Duplicate Accordions','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="accordions-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Disable or Enable Accordions','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="accordions-action btn-status label-tooltip<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?>"><i class="icon-ok"></i></a>
    </div>
    <div class="panel-group" id="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8');?>
<?php } else { ?>accordion<?php }?>">
        <?php if (!isset($_smarty_tpl->tpl_vars['formAtts']->value['form_id'])) {?>
        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 2+1 - (1) : 1-(2)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
            <div class="panel panel-default">
                <div class="panel-heading widget-container-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['foo']->value,'html','UTF-8');?>
">Accordion <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['foo']->value,'html','UTF-8');?>
</a>
                    </h4>
                </div>
                <div id="collapse<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['foo']->value,'html','UTF-8');?>
" class="panel-collapse collapse in widget-container-content">
                    <div class="panel-body">
                        <div class="text-center tab-content-control">
                            <span><?php echo smartyTranslate(array('s'=>'Accordion','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
                            <a href="javascript:void(0)" class="tabcontent-action accordion btn-new-widget label-tooltip" title=""><i class="icon-plus-sign"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Edit Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action accordions btn-edit label-tooltip" data-type="apSubAccordions"><i class="icon-edit"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Delete Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action accordions btn-delete label-tooltip"><i class="icon-trash"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Duplicate Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action accordions btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
                        </div>
                        <div class="subwidget-content">

                        </div>
                    </div>
                </div>
            </div>    
        <?php }} ?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

        <?php }?>
            <a href="javascript:void(0)" class="btn-add-accordion"><i class="icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Add','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    </div>
</div>    
<?php } else { ?>
        <div class="panel panel-default">
            <div class="panel-heading widget-container-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" class="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8');?>
" data-parent="#<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['parent_id'],'html','UTF-8');?>
" href="#<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8');?>
</a>
                </h4>
            </div>
            <div id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8');?>
" class="panel-collapse collapse widget-wrapper-content widget-container-content">
                <div class="panel-body">
                    <div class="text-center tab-content-control">
                        <span><?php echo smartyTranslate(array('s'=>'Content','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
                        <a href="javascript:void(0)" class="tabcontent-action accordion btn-new-widget label-tooltip" title=""><i class="icon-plus-sign"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Edit Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action accordions btn-edit label-tooltip" data-type="apSubAccordions"><i class="icon-edit"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Delete Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action accordions btn-delete label-tooltip"><i class="icon-trash"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Duplicate Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action accordions btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
                    </div>
                    <div class="subwidget-content">
                        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

                    </div>
                </div>
            </div>
        </div> 
<?php }?><?php }} ?>
