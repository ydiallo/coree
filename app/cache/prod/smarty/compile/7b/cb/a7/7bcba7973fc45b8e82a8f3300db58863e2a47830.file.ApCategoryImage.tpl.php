<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:22:35
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\modules\appagebuilder\views\templates\hook\image-category\ApCategoryImage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22805a6a044b86cfb6-53334342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bcba7973fc45b8e82a8f3300db58863e2a47830' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\modules\\appagebuilder\\views\\templates\\hook\\image-category\\ApCategoryImage.tpl',
      1 => 1516894366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22805a6a044b86cfb6-53334342',
  'function' => 
  array (
    'apmenu' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'level' => 0,
    'random' => 0,
    'data' => 0,
    'category' => 0,
    'link' => 0,
    'formAtts' => 0,
    'categories' => 0,
    'apLiveEdit' => 0,
    'cate' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a044baa2e52_92686783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a044baa2e52_92686783')) {function content_5a6a044baa2e52_92686783($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApCategoryImage -->
<?php if (!function_exists('smarty_template_function_apmenu')) {
    function smarty_template_function_apmenu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['apmenu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<ul class="level<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['level']->value), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['level']->value==0) {?> ul-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['random']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])&&is_array($_smarty_tpl->tpl_vars['category']->value['children'])) {?>
	<li class="cate_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" >
		<div class="cate_content">
			<div>
				
				<div class="cover-img">
					<?php if (isset($_smarty_tpl->tpl_vars['category']->value['image'])) {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="btn" title="<?php echo smartyTranslate(array('s'=>'Visit Shop','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
">
							<img class="img-fluid" src='<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value["image"],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value["name"],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
' 
								<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['showicons']==0||($_smarty_tpl->tpl_vars['level']->value>0&&$_smarty_tpl->tpl_vars['formAtts']->value['showicons']==2)) {?> style="display:none"<?php }?>/>
						</a>
					<?php }?>
					<span class="btn-meta">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="btn" title="<?php echo smartyTranslate(array('s'=>'Visit Shop','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Visit Shop','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
					</span>
				</div>
				<div class="meta-cate">
					<div class="box-cate">
						<h3 class="cate-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></h3>
					</div>
				</div>
			</div>
		</div>
		<?php smarty_template_function_apmenu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['category']->value['children'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

	</li>
	<?php } else { ?>
	<li class="cate_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
">
		<div class="cate_content">
			<div>
				
				<div class="cover-img">
					<?php if (isset($_smarty_tpl->tpl_vars['category']->value['image'])) {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="btn" title="<?php echo smartyTranslate(array('s'=>'Visit Shop','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
">
							<img class="img-fluid" src='<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value["image"],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value["name"],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
' 
								<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['showicons']==0||($_smarty_tpl->tpl_vars['level']->value>0&&$_smarty_tpl->tpl_vars['formAtts']->value['showicons']==2)) {?> style="display:none"<?php }?>/>
						</a>
					<?php }?>
					<span class="btn-meta">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="btn" title="<?php echo smartyTranslate(array('s'=>'Visit Shop','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Visit Shop','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
					</span>
				</div>
				<div class="meta-cate">
					<div class="box-cate">
						<h3 class="cate-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></h3>
					</div>
				</div>
			</div>
		</div>
	</li>
	<?php }?>
<?php } ?>
</ul>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (isset($_smarty_tpl->tpl_vars['categories']->value)) {?>
<div class="widget-category_image block <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

	</h4>
	<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
	<div class="block_content">
		<?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cate']->key;
?>
			<?php smarty_template_function_apmenu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['cate']->value));?>

		<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['limit']>1) {?>
			<div id="view_all_wapper_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['random']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="view_all_wapper hide">
				<ul>
					<li class="cate_view_all view_all"><a class="btn btn-primary" href="javascript:void(0)"><?php echo smartyTranslate(array('s'=>'Discover All','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
				</ul>
			</div> 
		<?php }?>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div>
<?php }?>
<script type="text/javascript">
 
	ap_list_functions.push(function(){
		$(".view_all_wapper").hide();
		var limit = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['limit']), ENT_QUOTES, 'UTF-8');?>
;
		var level = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['cate_depth']), ENT_QUOTES, 'UTF-8');?>
 - 1;
		$("ul.ul-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['random']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
, ul.ul-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['random']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 ul").each(function(){
			var element = $(this).find(">li").length;
			var count = 0;
			$(this).find(">li").each(function(){
				count = count + 1;
				if(count > limit){
					// $(this).remove();
					$(this).hide();
				}
			});
			if(element > limit) {
				view = $(".view_all","#view_all_wapper_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['random']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
").clone(1);
				// view.appendTo($(this).find("ul.level" + level));
				view.appendTo($(this));
				var href = $(this).closest("li").find('a:first-child').attr('href');
				$(view).find('a:first-child').attr("href", href);
			}
		})
	});

</script><?php }} ?>
