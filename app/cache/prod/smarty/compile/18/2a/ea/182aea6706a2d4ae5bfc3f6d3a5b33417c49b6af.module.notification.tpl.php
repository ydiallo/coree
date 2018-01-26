<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:13
         compiled from "module:leofeature/views/templates/front/notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101925a6a0345bba7a1-40184692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '182aea6706a2d4ae5bfc3f6d3a5b33417c49b6af' => 
    array (
      0 => 'module:leofeature/views/templates/front/notification.tpl',
      1 => 1516894362,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '101925a6a0345bba7a1-40184692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'width_notification' => 0,
    'vertical_position' => 0,
    'horizontal_position' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0345bf4b56_61078621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0345bf4b56_61078621')) {function content_5a6a0345bf4b56_61078621($_smarty_tpl) {?>
<div class="leo-notification" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width_notification']->value, ENT_QUOTES, 'UTF-8');?>
px; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vertical_position']->value, ENT_QUOTES, 'UTF-8');?>
; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['horizontal_position']->value, ENT_QUOTES, 'UTF-8');?>
">
</div>
<div class="leo-temp leo-temp-success">
	<div class="notification-wrapper">
		<div class="notification notification-success">
			
			<strong class="noti product-name"></strong>
			<span class="noti noti-update"><?php echo smartyTranslate(array('s'=>'The product has been updated in your shopping cart','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
			<span class="noti noti-delete"><?php echo smartyTranslate(array('s'=>'The product has been removed from your shopping cart','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
			<span class="noti noti-add"><strong class="noti-special"></strong> <?php echo smartyTranslate(array('s'=>'Product successfully added to your shopping cart','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
			<span class="notification-close">X</span>
			
		</div>
	</div>
</div>
<div class="leo-temp leo-temp-error">
	<div class="notification-wrapper">
		<div class="notification notification-error">
			
			
			<span class="noti noti-update"><?php echo smartyTranslate(array('s'=>'Error updating','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
			<span class="noti noti-delete"><?php echo smartyTranslate(array('s'=>'Error deleting','mod'=>'leofeature'),$_smarty_tpl);?>
</span>

			<span class="notification-close">X</span>
			
		</div>
	</div>
</div>
<div class="leo-temp leo-temp-warning">
	<div class="notification-wrapper">
		<div class="notification notification-warning">
			
			<span class="noti noti-min"><?php echo smartyTranslate(array('s'=>'The minimum purchase order quantity for the product is','mod'=>'leofeature'),$_smarty_tpl);?>
 <strong class="noti-special"></strong></span>
			<span class="noti noti-max"><?php echo smartyTranslate(array('s'=>'There are not enough products in stock','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
			
			<span class="notification-close">X</span>
			
		</div>
	</div>
</div>
<div class="leo-temp leo-temp-normal">
	<div class="notification-wrapper">
		<div class="notification notification-normal">
			
			<span class="noti noti-check"><?php echo smartyTranslate(array('s'=>'You must enter a quantity','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
			
			<span class="notification-close">X</span>
			
		</div>
	</div>
</div>
<?php }} ?>
