<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:07
         compiled from "modules\appagebuilder\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:292555a6a033f42ab78-66772225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '535b79458968588ec5167c0f3eb6e741aa4626e1' => 
    array (
      0 => 'modules\\appagebuilder\\views\\templates\\hook\\header.tpl',
      1 => 1516894360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292555a6a033f42ab78-66772225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax_enable' => 0,
    'category_qty' => 0,
    'product_list_image' => 0,
    'product_one_img' => 0,
    'productCdown' => 0,
    'productColor' => 0,
    'homeSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a033f4bff67_77217632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a033f4bff67_77217632')) {function content_5a6a033f4bff67_77217632($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\header -->

<script>
    /**
     * List functions will run when document.ready()
     */
    var ap_list_functions = [];
    /**
     * List functions will run when window.load()
     */
    var ap_list_functions_loaded = [];

    /**
     * List functions will run when document.ready() for theme
     */
    
    var products_list_functions = [];
</script>


<?php if (isset($_smarty_tpl->tpl_vars['ajax_enable']->value)&&$_smarty_tpl->tpl_vars['ajax_enable']->value) {?>
<script type='text/javascript'>
    var leoOption = {
        category_qty:<?php if ($_smarty_tpl->tpl_vars['category_qty']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category_qty']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>,
        product_list_image:<?php if ($_smarty_tpl->tpl_vars['product_list_image']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product_list_image']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>,
        product_one_img:<?php if ($_smarty_tpl->tpl_vars['product_one_img']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product_one_img']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>,
        productCdown: <?php if ($_smarty_tpl->tpl_vars['productCdown']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['productCdown']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>,
        productColor: <?php if ($_smarty_tpl->tpl_vars['productColor']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['productColor']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>,
        homeWidth: <?php if ($_smarty_tpl->tpl_vars['homeSize']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['homeSize']->value['width'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>,
        homeheight: <?php if ($_smarty_tpl->tpl_vars['homeSize']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['homeSize']->value['height'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>,
	}

    ap_list_functions.push(function(){
        if (typeof $.LeoCustomAjax !== "undefined" && $.isFunction($.LeoCustomAjax)) {
            var leoCustomAjax = new $.LeoCustomAjax();
            leoCustomAjax.processAjax();
        }
    });
</script>
<?php }?>
<?php }} ?>
