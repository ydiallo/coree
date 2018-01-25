<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 09:29:16
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181535a69a36c5abbd5-66865526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '574720a7c9300d7742c0a6f9d87daf74887f66e3' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1516871941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181535a69a36c5abbd5-66865526',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a69a36c5c5649_78652736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a69a36c5c5649_78652736')) {function content_5a69a36c5c5649_78652736($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
