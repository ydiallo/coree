<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:08
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\modules\leofeature\views\templates\hook\leo_wishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315435a6a0340a37a88-79529177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd74eed7fdc2e6bfc66ae13bb2a978a8c24312fb' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\modules\\leofeature\\views\\templates\\hook\\leo_wishlist_button.tpl',
      1 => 1516894367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315435a6a0340a37a88-79529177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlists' => 0,
    'added_wishlist' => 0,
    'id_wishlist' => 0,
    'leo_wishlist_id_product' => 0,
    'leo_wishlist_id_product_attribute' => 0,
    'wishlists_item' => 0,
    'wishlists_added' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0340acb6e3_07905956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0340acb6e3_07905956')) {function content_5a6a0340acb6e3_07905956($_smarty_tpl) {?>
<div class="wishlist">
	<?php if (isset($_smarty_tpl->tpl_vars['wishlists']->value)&&count($_smarty_tpl->tpl_vars['wishlists']->value)>1) {?>
		<div class="dropdown leo-wishlist-button-dropdown">
		  <button class="leo-wishlist-button dropdown-toggle show-list btn-product btn<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?> added<?php }?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
">
			<span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
			<span class="leo-wishlist-bt-content">
				<i class="icon-wishlist"></i>
				<span><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
			</span>
		  </button>
		  <div class="dropdown-menu leo-list-wishlist leo-list-wishlist-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
">
		  	<div class="list-group">
				<?php  $_smarty_tpl->tpl_vars['wishlists_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlists_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wishlists_item']->key => $_smarty_tpl->tpl_vars['wishlists_item']->value) {
$_smarty_tpl->tpl_vars['wishlists_item']->_loop = true;
?>
					<a href="#" class="dropdown-item list-group-item list-group-item-action wishlist-item<?php if (in_array($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'],$_smarty_tpl->tpl_vars['wishlists_added']->value)) {?> added <?php }?>" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if (in_array($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'],$_smarty_tpl->tpl_vars['wishlists_added']->value)) {?><?php echo smartyTranslate(array('s'=>'Remove from Wishlist','mod'=>'leofeature'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'leofeature'),$_smarty_tpl);?>
<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>			
				<?php } ?>
		  	</div>
		  </div>
		</div>
	<?php } else { ?>
		<a class="leo-wishlist-button btn-product btn<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?> added<?php }?>" href="#" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?><?php echo smartyTranslate(array('s'=>'Remove from Wishlist','mod'=>'leofeature'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'leofeature'),$_smarty_tpl);?>
<?php }?>">
			<span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
			<span class="leo-wishlist-bt-content">
				<i class="icon-wishlist"></i>
				<span><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
			</span>
		</a>
	<?php }?>
</div><?php }} ?>
