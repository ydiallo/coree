<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 09:29:16
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220315a69a36c5f39b9-53570556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47738d13c42666b980f8d4fe6568ab3d843aba29' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1516871941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220315a69a36c5f39b9-53570556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a69a36c5ff909_09523994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a69a36c5ff909_09523994')) {function content_5a69a36c5ff909_09523994($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
