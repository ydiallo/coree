<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:08
         compiled from "modules\leofeature\views\templates\hook\leo_list_product_review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138375a6a0340bc5028-32333173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40518381ec979a8ccef4f9031d821d8547ac5fb6' => 
    array (
      0 => 'modules\\leofeature\\views\\templates\\hook\\leo_list_product_review.tpl',
      1 => 1516894362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138375a6a0340bc5028-32333173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbReviews' => 0,
    'show_zero_product_review' => 0,
    'averageTotal' => 0,
    'ratings' => 0,
    'show_number_product_review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0340c5c746_72694514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0340c5c746_72694514')) {function content_5a6a0340c5c746_72694514($_smarty_tpl) {?>
<?php if ((isset($_smarty_tpl->tpl_vars['nbReviews']->value)&&$_smarty_tpl->tpl_vars['nbReviews']->value>0)||$_smarty_tpl->tpl_vars['show_zero_product_review']->value) {?>

	<div class="leo-list-product-reviews" <?php if ((isset($_smarty_tpl->tpl_vars['nbReviews']->value)&&$_smarty_tpl->tpl_vars['nbReviews']->value>0)) {?>itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"<?php }?>>
		<div class="leo-list-product-reviews-wraper">
			<div class="star_content clearfix">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
					<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value<=$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']) {?>
						<div class="star"></div>
					<?php } else { ?>
						<div class="star star_on"></div>
					<?php }?>
				<?php endfor; endif; ?>
				<?php if ((isset($_smarty_tpl->tpl_vars['nbReviews']->value)&&$_smarty_tpl->tpl_vars['nbReviews']->value>0)) {?>
					<meta itemprop="worstRating" content = "0" />
					<meta itemprop="ratingValue" content = "<?php if (isset($_smarty_tpl->tpl_vars['ratings']->value['avg'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(round($_smarty_tpl->tpl_vars['ratings']->value['avg'],1),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(round($_smarty_tpl->tpl_vars['averageTotal']->value,1),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" />
					<meta itemprop="bestRating" content = "5" />
				<?php }?>
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['nbReviews']->value)&&$_smarty_tpl->tpl_vars['nbReviews']->value>0) {?>
				<?php if ($_smarty_tpl->tpl_vars['show_number_product_review']->value) {?>
					<span class="nb-revews"><span itemprop="reviewCount"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbReviews']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo smartyTranslate(array('s'=>'Review(s)','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
				<?php } else { ?>
					<meta itemprop="reviewCount" content = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbReviews']->value, ENT_QUOTES, 'UTF-8');?>
" />
				<?php }?>
			<?php }?>
		</div>
	</div>

<?php }?>
<?php }} ?>
