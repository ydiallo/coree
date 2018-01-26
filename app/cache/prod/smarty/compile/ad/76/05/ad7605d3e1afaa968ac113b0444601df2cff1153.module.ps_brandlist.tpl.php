<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 18:01:41
         compiled from "module:ps_brandlist/views/templates/hook/ps_brandlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180265a6a1b85cf7455-79462465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad7605d3e1afaa968ac113b0444601df2cff1153' => 
    array (
      0 => 'module:ps_brandlist/views/templates/hook/ps_brandlist.tpl',
      1 => 1516894367,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '180265a6a1b85cf7455-79462465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_link_brand' => 0,
    'page_link' => 0,
    'brands' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a1b85d2a246_12102254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a1b85d2a246_12102254')) {function content_5a6a1b85d2a246_12102254($_smarty_tpl) {?>

<div class="block">
  <h1 class="title_block">
    <?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
"><?php }?>
      <?php echo smartyTranslate(array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?></a><?php }?>
  </h1>
  <div class="block_content">
    <?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
      <?php echo $_smarty_tpl->getSubTemplate ("module:ps_brandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['brand_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('brands'=>$_smarty_tpl->tpl_vars['brands']->value), 0);?>

    <?php } else { ?>
      <p><?php echo smartyTranslate(array('s'=>'No brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</p>
    <?php }?>
  </div>
</div> 
<?php }} ?>
