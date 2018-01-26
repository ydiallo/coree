<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:10
         compiled from "modules\leoproductsearch\leosearch_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154195a6a034239d145-39900334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1f38b84df9183c79e702f6a8ee09db9dc12c0f0' => 
    array (
      0 => 'modules\\leoproductsearch\\leosearch_top.tpl',
      1 => 1516894363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154195a6a034239d145-39900334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'selectedCate' => 0,
    'selectedCateName' => 0,
    'cates' => 0,
    'cate' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0342422405_71127260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0342422405_71127260')) {function content_5a6a0342422405_71127260($_smarty_tpl) {?>

<!-- Block search module -->
<div id="leo_search_block_top" class="block exclusive">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'leoproductsearch'),$_smarty_tpl);?>
</h4>
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('productsearch',true),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" id="leosearchtopbox">
		<input type="hidden" name="fc" value="module" />
		<input type="hidden" name="module" value="leoproductsearch" />
		<input type="hidden" name="controller" value="productsearch" />
		
    	<label for="search_query_block"><?php echo smartyTranslate(array('s'=>'Search products:','mod'=>'leoproductsearch'),$_smarty_tpl);?>
</label>
		<div class="block_content clearfix">
			
			<div class="list-cate-wrapper">
				<input id="leosearchtop-cate-id" name="cate" value="<?php if (isset($_smarty_tpl->tpl_vars['selectedCate']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedCate']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" type="hidden">
				<a id="dropdownListCateTop" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span><?php if ($_smarty_tpl->tpl_vars['selectedCateName']->value!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedCateName']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl);?>
<?php }?></span>
					<i class="material-icons pull-xs-right">keyboard_arrow_down</i>
				</a>
				<div class="list-cate dropdown-menu" aria-labelledby="dropdownListCateTop">
					<a href="#" data-cate-id="" data-cate-name="<?php echo smartyTranslate(array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl);?>
" class="cate-item<?php if ($_smarty_tpl->tpl_vars['selectedCate']->value=='') {?> active<?php }?>" ><?php echo smartyTranslate(array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl);?>
</a>
				<?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars['cate']->key;
?>
					<a href="#" data-cate-id="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cate']->value['id_category'],'htmlall','UTF-8')), ENT_QUOTES, 'UTF-8');?>
" data-cate-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cate']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="cate-item<?php if (isset($_smarty_tpl->tpl_vars['selectedCate']->value)&&$_smarty_tpl->tpl_vars['cate']->value['id_category']==$_smarty_tpl->tpl_vars['selectedCate']->value) {?> active<?php }?>" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cate']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
				<?php } ?>
				</div>
			</div>
			<input class="search_query form-control grey" type="text" id="leo_search_query_top" name="search_query" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['search_query']->value,'htmlall','UTF-8')), ENT_QUOTES, 'UTF-8');?>
" />
			<button type="submit" id="leo_search_top_button" class="btn btn-default button button-small"><span><i class="material-icons search">search</i></span></button> 
		</div>
	</form>
</div>
<script type="text/javascript">
	var blocksearch_type = 'top';
</script>
<!-- /Block search module -->
<?php }} ?>
