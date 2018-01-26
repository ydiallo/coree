<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:33:50
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\appagebuilder\views\templates\admin\ap_page_builder_home\home_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172775a6a06eedc4889-69909376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37b47cfb0a6a097e3da2ea36f4b205ef7b94ed2' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_home\\home_form.tpl',
      1 => 1516894360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172775a6a06eedc4889-69909376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widthList' => 0,
    'itemWidth' => 0,
    'i' => 0,
    'shortcodeForm' => 0,
    'sform' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a06eeefddd9_76217536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a06eeefddd9_76217536')) {function content_5a6a06eeefddd9_76217536($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\PRIVE\\UwAmp\\www\\coree\\vendor\\prestashop\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_math')) include 'C:\\PRIVE\\UwAmp\\www\\coree\\vendor\\prestashop\\smarty\\plugins\\function.math.php';
?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_home\home_form -->

<div id="form_content" style="display:none;" data-select="<?php echo smartyTranslate(array('s'=>'You are sure data saved, before select other profile?','mod'=>'appagebuilder'),$_smarty_tpl);?>
" data-delete="<?php echo smartyTranslate(array('s'=>'Are you sure you want to delete?','mod'=>'appagebuilder'),$_smarty_tpl);?>
" data-reduce="<?php echo smartyTranslate(array('s'=>'Minimum value of width is 1','mod'=>'appagebuilder'),$_smarty_tpl);?>
" data-increase="<?php echo smartyTranslate(array('s'=>'Maximum value of width is 12','mod'=>'appagebuilder'),$_smarty_tpl);?>
">
    <a id="export_process" href="" title="<?php echo smartyTranslate(array('s'=>'Export Process','mod'=>'appagebuilder'),$_smarty_tpl);?>
" download='group.txt' target="_blank" ><?php echo smartyTranslate(array('s'=>'Export Process','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <div id="addnew-group-form">
        <ul class="list-group dropdown-menu">
            <?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widthList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
                <li>
                    <a href="javascript:void(0);" data-width="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['itemWidth']->value,'html','UTF-8');?>
" class="number-column">
                        <span class="width-val ap-w-<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(strpos($_smarty_tpl->tpl_vars['itemWidth']->value,"."),'html','UTF-8')) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['itemWidth']->value,'html','UTF-8');?>
<?php }?>"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['itemWidth']->value,'html','UTF-8');?>
/12 - ( <?php echo smarty_function_math(array('equation'=>"x/y*100",'x'=>$_smarty_tpl->tpl_vars['itemWidth']->value,'y'=>12,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div id="addnew-column-form">
        <ul class="list-group dropdown-menu">
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 6+1 - (1) : 1-(6)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                  <li>
                      <a href="javascript:void(0);" data-col="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'html','UTF-8');?>
" data-width="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['i']->value),'.','-'),'html','UTF-8');?>
" class="column-add">
                          <span class="width-val ap-w-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'html','UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'column per row','mod'=>'appagebuilder'),$_smarty_tpl);?>
 - ( <?php echo smarty_function_math(array('equation'=>"100/".((string)$_smarty_tpl->tpl_vars['i']->value),'x'=>$_smarty_tpl->tpl_vars['i']->value,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
                      </a>
                  </li>
            <?php }} ?>
        </ul>
    </div>
    <div id="addnew-widget-group-form">
        <ul class="list-group dropdown-menu">
            <li>
                <a href="javascript:void(0);" data-col="0" data-width="0" class="group-add">
                    <span class="width-val ap-w-0"><?php echo smartyTranslate(array('s'=>'Create a group blank','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
                </a>
            </li>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 6+1 - (1) : 1-(6)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <li>
                  <a href="javascript:void(0);" data-col="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'html','UTF-8');?>
" data-width="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((12/$_smarty_tpl->tpl_vars['i']->value),'html','UTF-8');?>
" class="group-add">
                      <span class="width-val ap-w-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'html','UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'column per row','mod'=>'appagebuilder'),$_smarty_tpl);?>
 - ( <?php echo smarty_function_math(array('equation'=>"100/".((string)$_smarty_tpl->tpl_vars['i']->value),'x'=>$_smarty_tpl->tpl_vars['i']->value,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
                  </a>
              </li>
            <?php }} ?>
        </ul>
    </div>
    <?php  $_smarty_tpl->tpl_vars['sform'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sform']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shortcodeForm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sform']->key => $_smarty_tpl->tpl_vars['sform']->value) {
$_smarty_tpl->tpl_vars['sform']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['sform']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } ?>
</div>


<div class="modal fade" id="modal_form"  data-backdrop="0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
        <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span></button>
        
        <div class="box-search-widget">
            <input type="text" id="txt-search" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'appagebuilder'),$_smarty_tpl);?>
"/>
        </div>
        <h4 class="modal-title" id="myModalLabel" data-addnew="<?php echo smartyTranslate(array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" data-edit="<?php echo smartyTranslate(array('s'=>'Editting','mod'=>'appagebuilder'),$_smarty_tpl);?>
"></h4>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-back-to-list pull-left"><?php echo smartyTranslate(array('s'=>'Back to List','mod'=>'appagebuilder'),$_smarty_tpl);?>
</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'appagebuilder'),$_smarty_tpl);?>
</button>
        <button type="button" class="btn btn-primary btn-savewidget"><?php echo smartyTranslate(array('s'=>'Save changes','mod'=>'appagebuilder'),$_smarty_tpl);?>
</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_select_image" data-backdrop="0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
        <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span></button>
        <h4 class="modal-title2"><?php echo smartyTranslate(array('s'=>'Image manager','mod'=>'appagebuilder'),$_smarty_tpl);?>
</h4>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'appagebuilder'),$_smarty_tpl);?>
</button>
      </div>
    </div>
  </div>
</div><?php }} ?>
