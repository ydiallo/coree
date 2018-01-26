<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 18:01:41
         compiled from "module:ps_bestsellers/views/templates/hook/ps_bestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153525a6a1b85f1a8b6-27889794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3681aa30d1f85f48e2cf4794b77200e697f706a9' => 
    array (
      0 => 'module:ps_bestsellers/views/templates/hook/ps_bestsellers.tpl',
      1 => 1516894367,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '153525a6a1b85f1a8b6-27889794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'allBestSellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a1b85f31be4_29454493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a1b85f31be4_29454493')) {function content_5a6a1b85f31be4_29454493($_smarty_tpl) {?>
<section class="bestseller-products clearfix block">
  	<h1 class="h1 products-section-title title_block">
  		<?php echo smartyTranslate(array('s'=>'Best Sellers','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

  	</h1>
  	<div class="block_content">
	  	<div class="products">
		    <?php echo $_smarty_tpl->getSubTemplate ('catalog/_partials/miniatures/leo_col_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

	  	</div>
  		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allBestSellers']->value, ENT_QUOTES, 'UTF-8');?>
" class="all-product-link float-xs-left btn btn-outline">
  			<?php echo smartyTranslate(array('s'=>'View All','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

  		</a>
  	</div>
</section>
<?php }} ?>
