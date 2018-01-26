<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:10
         compiled from "module:ps_currencyselector/ps_currencyselector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298525a6a0342c2d674-92678763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:ps_currencyselector/ps_currencyselector.tpl',
      1 => 1516894367,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '298525a6a0342c2d674-92678763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_currency' => 0,
    'currencies' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0342c6b729_16286598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0342c6b729_16286598')) {function content_5a6a0342c6b729_16286598($_smarty_tpl) {?>

<div class="currency-selector dropdown js-dropdown popup-over" id="currency-selector-label">
  <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title"  title="<?php echo smartyTranslate(array('s'=>'Currency','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
" aria-label="<?php echo smartyTranslate(array('s'=>'Currency dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
">
    <span class="hidden-xs-up"><?php echo smartyTranslate(array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
    <span class="_gray-darker"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</span>
    <i class="icon-arrow-down fa fa-sort-down"></i>
  </a>
  <ul class="popup-content dropdown-menu" aria-labelledby="currency-selector-label">  
  <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
  <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
    <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</a>
  </li>
  <?php } ?>
  </ul>
</div><?php }} ?>
