<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:08
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\modules\leofeature\views\templates\hook\leo_compare_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164385a6a03409f75b8-13833576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf972c5a97f0fc94f44ec9c0c67c8113936a577c' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\modules\\leofeature\\views\\templates\\hook\\leo_compare_button.tpl',
      1 => 1516894367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164385a6a03409f75b8-13833576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'added' => 0,
    'leo_compare_id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0340a190e0_64050869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0340a190e0_64050869')) {function content_5a6a0340a190e0_64050869($_smarty_tpl) {?>
<div class="compare">
	<a class="leo-compare-button btn-product btn<?php if ($_smarty_tpl->tpl_vars['added']->value) {?> added<?php }?>" href="#" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_compare_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added']->value) {?><?php echo smartyTranslate(array('s'=>'Remove from Compare','mod'=>'leofeature'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Compare','mod'=>'leofeature'),$_smarty_tpl);?>
<?php }?>">
		<span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
		<span class="leo-compare-bt-content">
			<i class="icon-compare"></i>
			<span><?php echo smartyTranslate(array('s'=>'Add to Compare','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
		</span>
	</a>
</div><?php }} ?>
