<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 18:12:59
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayCMSPrintButton.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270255a6a1e2ba06c92-91402441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82f5bf9b6f241e8ed1efa260e0d38333550d9df2' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayCMSPrintButton.tpl',
      1 => 1516871940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270255a6a1e2ba06c92-91402441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'directPrint' => 0,
    'print_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a1e2ba4f7d7_64791161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a1e2ba4f7d7_64791161')) {function content_5a6a1e2ba4f7d7_64791161($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['directPrint']->value) {?>
	<input type="submit" name="printCMSPage" value="<?php echo smartyTranslate(array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
" class="btn btn-secondary" onclick="window.print()" />
<?php } else { ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['print_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-secondary" target="_blank"><?php echo smartyTranslate(array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</a>
<?php }?>
<?php }} ?>
