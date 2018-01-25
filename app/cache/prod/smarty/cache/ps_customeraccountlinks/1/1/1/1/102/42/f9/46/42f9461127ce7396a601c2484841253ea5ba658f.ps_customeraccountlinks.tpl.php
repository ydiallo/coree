<?php /*%%SmartyHeaderCode:105495a69a349e37a24-51263094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1516871942,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '105495a69a349e37a24-51263094',
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a69a349e774e8_40865777',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a69a349e774e8_40865777')) {function content_5a69a349e774e8_40865777($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/coree/fr/mon-compte" rel="nofollow">
      Votre compte
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Votre compte</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/coree/fr/adresses" title="Adresses" rel="nofollow">
            Adresses
          </a>
        </li>
            <li>
          <a href="http://localhost/coree/fr/avoirs" title="Avoirs" rel="nofollow">
            Avoirs
          </a>
        </li>
            <li>
          <a href="http://localhost/coree/fr/historique-commandes" title="Commandes" rel="nofollow">
            Commandes
          </a>
        </li>
            <li>
          <a href="http://localhost/coree/fr/identite" title="Informations personnelles" rel="nofollow">
            Informations personnelles
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
