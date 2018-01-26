<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:10
         compiled from "modules\leobootstrapmenu\views\templates\hook\megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237855a6a0342a53a84-85214043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c65dc3b9bb8c47612efaa764cfe2df1740c6a6c0' => 
    array (
      0 => 'modules\\leobootstrapmenu\\views\\templates\\hook\\megamenu.tpl',
      1 => 1516894362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237855a6a0342a53a84-85214043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group_type' => 0,
    'megamenu_id' => 0,
    'show_cavas' => 0,
    'group_class' => 0,
    'boostrapmenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0342addf66_66952956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0342addf66_66952956')) {function content_5a6a0342addf66_66952956($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['group_type']->value&&$_smarty_tpl->tpl_vars['group_type']->value=='horizontal') {?>
	<nav data-megamenu-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="leo-megamenu cavas_menu navbar navbar-default <?php if ($_smarty_tpl->tpl_vars['show_cavas']->value&&$_smarty_tpl->tpl_vars['show_cavas']->value==1) {?>enable-canvas<?php } else { ?>disable-canvas<?php }?> <?php if ($_smarty_tpl->tpl_vars['group_class']->value&&$_smarty_tpl->tpl_vars['group_class']->value!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggler hidden-lg-up" data-toggle="collapse" data-target=".megamenu-off-canvas-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
">
					<span class="sr-only"><?php echo smartyTranslate(array('s'=>'Toggle navigation','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</span>
					&#9776;
					<!--
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					-->
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			
			<div class="leo-top-menu collapse navbar-toggleable-md megamenu-off-canvas megamenu-off-canvas-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['boostrapmenu']->value,'html','UTF-8');?>
</div>
	</nav>
	<script type="text/javascript">
	// <![CDATA[				
			// var type="horizontal";
			// checkActiveLink();
			// checkTarget();
			list_menu_tmp.id = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
;
			list_menu_tmp.type = 'horizontal';
	// ]]>
	
	<?php if ($_smarty_tpl->tpl_vars['show_cavas']->value&&$_smarty_tpl->tpl_vars['show_cavas']->value==1) {?>
								
				// offCanvas();
				// var show_cavas = 1;
				// console.log('testaaa');
				// console.log(show_cavas);
				list_menu_tmp.show_cavas =1;
			
		
		<?php } else { ?>
		
				// var show_cavas = 0;
				list_menu_tmp.show_cavas =0;	
		
	<?php }?>
		
		list_menu_tmp.list_tab = list_tab;
		list_menu.push(list_menu_tmp);
		list_menu_tmp = {};	
		list_tab = {};
		
	</script>
<?php } else { ?>
	<div data-megamenu-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="leo-verticalmenu <?php if ($_smarty_tpl->tpl_vars['group_class']->value&&$_smarty_tpl->tpl_vars['group_class']->value!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>">
		<h4 class="title_block verticalmenu-button"><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</h4>
		<div class="box-content block_content">
			<div class="verticalmenu" role="navigation"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['boostrapmenu']->value,'html','UTF-8');?>
</div>
		</div>
	</div>
	<script type="text/javascript">
		
			// var type="vertical";	
			
			list_menu_tmp.id = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
;			
			list_menu_tmp.type = 'vertical';
			list_menu_tmp.list_tab = list_tab;
			list_menu.push(list_menu_tmp);
			list_menu_tmp = {};
			list_tab = {};
				
	</script>
	
	
<?php }?>
<?php }} ?>
