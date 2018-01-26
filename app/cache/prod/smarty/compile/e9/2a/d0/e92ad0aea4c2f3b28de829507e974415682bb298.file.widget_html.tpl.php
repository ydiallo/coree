<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:10
         compiled from "modules\leobootstrapmenu\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306435a6a0342719d92-00469992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e92ad0aea4c2f3b28de829507e974415682bb298' => 
    array (
      0 => 'modules\\leobootstrapmenu\\views\\widgets\\widget_html.tpl',
      1 => 1516894362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306435a6a0342719d92-00469992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a034273cb48_68853784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a034273cb48_68853784')) {function content_5a6a034273cb48_68853784($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
