<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 09:29:16
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\welcome\views\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8805a69a36c57aad6-33358281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51e60fcf5d3a41aab7568ba5fce961f37429e6c1' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\welcome\\views\\navbar.tpl',
      1 => 1516871941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8805a69a36c57aad6-33358281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a69a36c5930a5_67285596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a69a36c5930a5_67285596')) {function content_5a69a36c5930a5_67285596($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
