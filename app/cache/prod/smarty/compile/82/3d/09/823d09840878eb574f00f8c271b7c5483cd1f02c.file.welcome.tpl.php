<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 09:29:12
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\welcome\views\contents\welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:291235a69a368d7ebc8-83695665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '823d09840878eb574f00f8c271b7c5483cd1f02c' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\welcome\\views\\contents\\welcome.tpl',
      1 => 1516871941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291235a69a368d7ebc8-83695665',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a69a368dd0895_47158526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a69a368dd0895_47158526')) {function content_5a69a368dd0895_47158526($_smarty_tpl) {?>

<div class="onboarding-welcome">
  <i class="material-icons onboarding-button-shut-down">close</i>
  <p class="welcome"><?php echo smartyTranslate(array('s'=>'Welcome to your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hi! My name is Preston and I\'m here to show you around.','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'You will discover a few essential steps before you can launch your shop:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    <?php echo smartyTranslate(array('s'=>'Create your first product, customize your shop, configure shipping and payments...','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  </div>
  <div class="started">
    <p><?php echo smartyTranslate(array('s'=>'Let\'s get started!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  </div>
  <div class="buttons">
    <button class="btn btn-tertiary-outline btn-lg onboarding-button-shut-down"><?php echo smartyTranslate(array('s'=>'Later','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    <button class="blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Start','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
</div>
<?php }} ?>
