<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:10
         compiled from "module:ps_customersignin/ps_customersignin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186095a6a034248a181-12715760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersignin/ps_customersignin.tpl',
      1 => 1516894367,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '186095a6a034248a181-12715760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'my_account_url' => 0,
    'customerName' => 0,
    'logout_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a03425136c5_81731128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a03425136c5_81731128')) {function content_5a6a03425136c5_81731128($_smarty_tpl) {?>
<div class="userinfo-selector links dropdown js-dropdown popup-over <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>logged<?php }?>">
  <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title" title="<?php echo smartyTranslate(array('s'=>'Account','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
">
    <i class="icon fa fa-user"></i>
    <span class="text-title-special"><?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?><?php echo smartyTranslate(array('s'=>'Hello. Sign In','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<?php }?></span>
    <span class="text-title"><?php echo smartyTranslate(array('s'=>'My account','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
    <i class="icon-arrow-down fa fa-sort-down"></i>
 </a>
  <ul class="popup-content dropdown-menu user-info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <li>
        <a
          class="account dropdown-item" 
          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
          title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
"
          rel="nofollow"
        >
          <span><?php echo smartyTranslate(array('s'=>'Hello','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
      </li>
      <li>
        <a
          class="logout dropdown-item"
          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
          rel="nofollow"
        >
          <span><?php echo smartyTranslate(array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
        </a>
      </li>
    <?php } else { ?>
      <li>
        <a
          class="signin dropdown-item"
          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
          title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
"
          rel="nofollow"
        >
          <span><?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
        </a>
      </li>
    <?php }?>
    <li>
      <a
        class="myacount dropdown-item"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo smartyTranslate(array('s'=>'My account','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
        <span><?php echo smartyTranslate(array('s'=>'My account','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
      </a>
    </li>
	<li>
    <a
      class="ap-btn-wishlist dropdown-item"
      href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'leofeature','controller'=>'mywishlist'),$_smarty_tpl);?>
"
      title="<?php echo smartyTranslate(array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"
      rel="nofollow"
    >
      <span><?php echo smartyTranslate(array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
 <span class="ap-total-wishlist ap-total"></span></span>
    </a>
   </li>
	 <li>
    <a
        class="ap-btn-compare dropdown-item"
        href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'leofeature','controller'=>'productscompare'),$_smarty_tpl);?>
"
        title="<?php echo smartyTranslate(array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
      <span><?php echo smartyTranslate(array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
 <span class="ap-total-compare ap-total"></span></span>
     </a>
    </li>
    <li>
      <a
        class="checkout dropdown-item"
        href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cart','params'=>array('action'=>'show')),$_smarty_tpl);?>
"
        title="<?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
        <span><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
      </a>
    </li>
  </ul>
</div><?php }} ?>
