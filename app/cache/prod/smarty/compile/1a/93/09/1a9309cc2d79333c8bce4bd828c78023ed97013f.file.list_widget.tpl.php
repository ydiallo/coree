<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 17:29:25
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\leobootstrapmenu\views\templates\admin\list_widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296885a6a13f50bd3d5-27964584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a9309cc2d79333c8bce4bd828c78023ed97013f' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\leobootstrapmenu\\views\\templates\\admin\\list_widget.tpl',
      1 => 1516894362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296885a6a13f50bd3d5-27964584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widgets' => 0,
    'w' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a13f51004c5_53177750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a13f51004c5_53177750')) {function content_5a6a13f51004c5_53177750($_smarty_tpl) {?>
<option value=""></option>
<?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['w']->value['key_widget'];?>
"><?php echo $_smarty_tpl->tpl_vars['w']->value['name'];?>
</option>
<?php } ?>
        <?php }} ?>
