<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:10
         compiled from "module:ps_shoppingcart/ps_shoppingcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45025a6a0342540069-36062023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcart/ps_shoppingcart.tpl',
      1 => 1516894367,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '45025a6a0342540069-36062023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'refresh_url' => 0,
    'cart_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a03425b6e20_39059303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a03425b6e20_39059303')) {function content_5a6a03425b6e20_39059303($_smarty_tpl) {?>
<div id="cart-block">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
        <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
        <i class="shopping-cart fa fa-shopping-cart"></i>
        <span class="title-cart"><?php echo smartyTranslate(array('s'=>'My Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
        <span class="cart-products-count">
          <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
            <span class="totals-cart">
              <?php if (($_smarty_tpl->tpl_vars['cart']->value['products_count']>0)) {?> 
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
 - 
              <?php }?>
            </span>
            <span class="cart-count">
              <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>

              <?php }?>
            </span>
            <span class="cart-count-title">
              <?php if (($_smarty_tpl->tpl_vars['cart']->value['products_count']>1)) {?>
                <?php echo smartyTranslate(array('s'=>'item(s)','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

              <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>'item','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

              <?php }?>
            </span>
          <?php } else { ?>
            <span class="zero"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
            <span class="empty"> - <?php echo smartyTranslate(array('s'=>'empty','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
          <?php }?>
        </span>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
        </a>
      <?php }?>
    </div>
  </div>
</div>
<?php }} ?>
