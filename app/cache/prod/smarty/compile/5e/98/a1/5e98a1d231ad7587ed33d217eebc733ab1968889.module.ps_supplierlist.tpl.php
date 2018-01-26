<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 18:01:41
         compiled from "module:ps_supplierlist/views/templates/hook/ps_supplierlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315005a6a1b85c52fa9-38261920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e98a1d231ad7587ed33d217eebc733ab1968889' => 
    array (
      0 => 'module:ps_supplierlist/views/templates/hook/ps_supplierlist.tpl',
      1 => 1516894368,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '315005a6a1b85c52fa9-38261920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'page_link' => 0,
    'suppliers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a1b85c85da0_25525628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a1b85c85da0_25525628')) {function content_5a6a1b85c85da0_25525628($_smarty_tpl) {?>

<div class="block">
  <h4 class="title_block">
    <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
"><?php }?>
      <?php echo smartyTranslate(array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

      <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?></a><?php }?>
  </h4>
  <div class="block_content">
    <?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
      <?php echo $_smarty_tpl->getSubTemplate ("module:ps_supplierlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['supplier_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('suppliers'=>$_smarty_tpl->tpl_vars['suppliers']->value), 0);?>

    <?php } else { ?>
      <p><?php echo smartyTranslate(array('s'=>'No supplier','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</p>
    <?php }?>
  </div>
</div>
<?php }} ?>
