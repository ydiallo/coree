<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:10
         compiled from "module:ps_languageselector/ps_languageselector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235675a6a0342b701e5-66055103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:ps_languageselector/ps_languageselector.tpl',
      1 => 1516894367,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '235675a6a0342b701e5-66055103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'current_language' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0342bfbec3_44900695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0342bfbec3_44900695')) {function content_5a6a0342bfbec3_44900695($_smarty_tpl) {?>

<div class="language-selector-wrapper dropdown js-dropdown popup-over" id="language-selector-label">
  <a class="popup-title" href="javascript:void(0)" data-toggle="dropdown" title="<?php echo smartyTranslate(array('s'=>'Language','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
" aria-label="<?php echo smartyTranslate(array('s'=>'Language dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
">
    <span class="hidden-xs-up"><?php echo smartyTranslate(array('s'=>'Language:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
    <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?>
        <span class="flag">
          <img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['urls']->value['img_lang_url'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['language']->value['iso_code'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" />
        </span>
        <span class="iso-code"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['language']->value['iso_code'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
      <?php }?>
    <?php } ?>
    <span class="name-simple"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</span>
    <i class="icon-arrow-down fa fa-sort-down"></i>
  </a>
  <ul class="dropdown-menu popup-content link language-selector" aria-labelledby="language-selector-label">
      <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
          <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl);?>
" class="dropdown-item">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['urls']->value['img_lang_url'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['language']->value['iso_code'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>

          </a>
        </li>
      <?php } ?>
  </ul>
</div>

<?php }} ?>
