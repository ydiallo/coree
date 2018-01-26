<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 17:00:11
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\modules\appagebuilder\views\templates\hook\cdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152625a6a0d1b49a408-84499146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e319cfdc00a1b7348d8bb483ff7f72e71a8380d5' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\modules\\appagebuilder\\views\\templates\\hook\\cdown.tpl',
      1 => 1516894366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152625a6a0d1b49a408-84499146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0d1b571972_82637165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0d1b571972_82637165')) {function content_5a6a0d1b571972_82637165($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
<ul class="deal-clock lof-clock-<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
-detail list-inline">
	<?php if (isset($_smarty_tpl->tpl_vars['product']->value['js'])&&$_smarty_tpl->tpl_vars['product']->value['js']=='unlimited') {?><li class="lof-labelexpired"><?php echo smartyTranslate(array('s'=>'Unlimited','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</li><?php }?>
</ul>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['js'])&&$_smarty_tpl->tpl_vars['product']->value['js']!='unlimited') {?>
	<script type="text/javascript">
		
		jQuery(document).ready(function($){
			var text_d = '<?php echo smartyTranslate(array('s'=>'d','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
';
			var text_h = '<?php echo smartyTranslate(array('s'=>'h','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
';
			var text_m = '<?php echo smartyTranslate(array('s'=>'m','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
';
			var text_s = '<?php echo smartyTranslate(array('s'=>'s','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
';
			$(".lof-clock-<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
-detail").lofCountDown({
				TargetDate:"<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['js']['month'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['js']['day'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['js']['year'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['js']['hour'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['js']['minute'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['js']['seconds'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
				DisplayFormat:'<li class="z-depth-1">%%D%%<span>'+text_d+'</span></li><li class="z-depth-1">%%H%%<span>'+text_h+'</span></li><li class="z-depth-1">%%M%%<span>'+text_m+'</span></li><li class="z-depth-1">%%S%%<span>'+text_s+'</span></li>',
				FinishMessage: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['finish'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
			
			});
		});
		
	</script>
<?php }?>
<?php }?><?php }} ?>
