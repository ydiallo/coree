<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:33:50
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\appagebuilder\views\templates\admin\ap_page_builder_home\position.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14925a6a06eec27aa1-09736982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c744bceb50d75d8c4cfdd7459e57e42b20637ee' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_home\\position.tpl',
      1 => 1516894360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14925a6a06eec27aa1-09736982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'position' => 0,
    'default' => 0,
    'listPositions' => 0,
    'val' => 0,
    'config' => 0,
    'hookKey' => 0,
    'hookData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a06eed76660_96027897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a06eed76660_96027897')) {function content_5a6a06eed76660_96027897($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_home\position -->
<div class="header-cover">
    <strong>Position <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['position']->value,'html','UTF-8');?>
</strong>
    <div class="fr">
        <div class="dropdown">
            <div class="hide box-edit-position">
                <div class="form-group">
                    <label><?php echo smartyTranslate(array('s'=>'Position name:','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label>
                    <input class="edit-name" value="" type="text" placeholder="<?php echo smartyTranslate(array('s'=>'Enter position name ','mod'=>'appagebuilder'),$_smarty_tpl);?>
"/>
                </div>
                <button type="button" class="btn btn-primary btn-save"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'appagebuilder'),$_smarty_tpl);?>
</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'appagebuilder'),$_smarty_tpl);?>
</button>
            </div>
            
            <a class="btn btn-default" id="dropdown-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(mb_strtolower($_smarty_tpl->tpl_vars['position']->value, 'UTF-8'),'html','UTF-8');?>
" role="button" data-toggle="dropdown" data-target="#">
                <i class="icon-columns"></i> 
                <span class="lbl-name"><?php echo smartyTranslate(array('s'=>'Current Position:','mod'=>'appagebuilder'),$_smarty_tpl);?>
 
                    <?php if ($_smarty_tpl->tpl_vars['default']->value['name']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['default']->value['name'],'html','UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>' Blank','mod'=>'appagebuilder'),$_smarty_tpl);?>
<?php }?>
                </span>
                <?php if ($_smarty_tpl->tpl_vars['listPositions']->value) {?> <span class="caret"></span><?php }?>
            </a>
            <ul class="dropdown-menu dropdown-menu-right list-position" role="menu" aria-labelledby="dLabel" 
                data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(mb_strtolower($_smarty_tpl->tpl_vars['position']->value, 'UTF-8'),'html','UTF-8');?>
" id="position-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(mb_strtolower($_smarty_tpl->tpl_vars['position']->value, 'UTF-8'),'html','UTF-8');?>
"
                data-id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['default']->value['id'],'html','UTF-8');?>
" data-blank-error="<?php echo smartyTranslate(array('s'=>' Please choose or create new a position ','mod'=>'appagebuilder'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['position']->value,'html','UTF-8');?>
">
                <li>
                    <a href="javascript:;" class="add-new-position" data-id="0">
                        <span><?php echo smartyTranslate(array('s'=>'New ','mod'=>'appagebuilder'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['position']->value,'html','UTF-8');?>
</span>
                    </a>
                </li>
                
                <?php if ($_smarty_tpl->tpl_vars['listPositions']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listPositions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                    <?php if (isset($_smarty_tpl->tpl_vars['val']->value['id_appagebuilder_positions'])) {?>
                <li>
                    <a href="javascript:;" class="position-name" data-id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['val']->value['id_appagebuilder_positions'],'html','UTF-8');?>
">
                        <span title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['val']->value['name'],'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['val']->value['name'],'html','UTF-8');?>
</span>
                        <i class="icon-edit label-tooltip" data-id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['val']->value['id_appagebuilder_positions'],'html','UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Edit name','mod'=>'appagebuilder'),$_smarty_tpl);?>
"></i>
                        <i class="icon-paste label-tooltip" data-id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['val']->value['id_appagebuilder_positions'],'html','UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Duplicate','mod'=>'appagebuilder'),$_smarty_tpl);?>
" data-temp="<?php echo smartyTranslate(array('s'=>'Duplicate','mod'=>'appagebuilder'),$_smarty_tpl);?>
"></i>
                    </a>
                </li>
                    <?php }?>
                <?php } ?>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<br/>
<div class="position-area">
<?php  $_smarty_tpl->tpl_vars['hookData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hookData']->_loop = false;
 $_smarty_tpl->tpl_vars['hookKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hookData']->key => $_smarty_tpl->tpl_vars['hookData']->value) {
$_smarty_tpl->tpl_vars['hookData']->_loop = true;
 $_smarty_tpl->tpl_vars['hookKey']->value = $_smarty_tpl->tpl_vars['hookData']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['hookKey']->value=="displayHome") {?>
    <div class="col-md-6 home-content-wrapper">
	<?php }?>
        <div class="hook-wrapper <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hookKey']->value,'html','UTF-8');?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hookData']->value['class'],'html','UTF-8');?>
" data-hook="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hookKey']->value,'html','UTF-8');?>
">
            <div class="hook-top">
                <div class="pull-left hook-desc"></div>
                <div class="hook-info text-center">
                    <a href="javascript:;" tabindex="0" class="open-group label-tooltip" title="<?php echo smartyTranslate(array('s'=>'Expand Hook','mod'=>'appagebuilder'),$_smarty_tpl);?>
" id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hookKey']->value,'html','UTF-8');?>
" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hookKey']->value,'html','UTF-8');?>
">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hookKey']->value,'html','UTF-8');?>
 <i class="icon-circle-arrow-down"></i>
                    </a>
                </div>
            </div>
            <div class="hook-content">
                <?php if (isset($_smarty_tpl->tpl_vars['hookData']->value['content'])) {?>
                <?php echo $_smarty_tpl->tpl_vars['hookData']->value['content'];?>

                <?php }?>
                <div class="hook-content-footer text-center">
                    <a href="javascript:void(0)" tabindex="0" class="btn-new-widget-group" title="<?php echo smartyTranslate(array('s'=>'Add Widget in new Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
" data-container="body" data-toggle="popover" data-placement="top" data-trigger="focus">
                        <i class="icon-plus"></i>
                    </a>
                </div>
            </div>
        </div>
	<?php if ($_smarty_tpl->tpl_vars['hookKey']->value=="displayHome") {?>
		</div>
	<?php }?>
<?php } ?>
</div>
<?php }} ?>
