<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 17:00:03
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\modules\appagebuilder\views\templates\hook\blog\BlogItem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102605a6a0d13e42855-31597962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1501fd2d18bb628e7bb1d4c4c281c125093c853' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\modules\\appagebuilder\\views\\templates\\hook\\blog\\BlogItem.tpl',
      1 => 1516894366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102605a6a0d13e42855-31597962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog' => 0,
    'formAtts' => 0,
    'blog_day' => 0,
    'blog_month' => 0,
    'blog_year' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0d14128d66_30725547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0d14128d66_30725547')) {function content_5a6a0d14128d66_30725547($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\PRIVE\\UwAmp\\www\\coree\\vendor\\prestashop\\smarty\\plugins\\modifier.date_format.php';
?>
<!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
<div class="blog-container" itemscope itemtype="https://schema.org/Blog">
    <div class="left-block">
        <div class="blog-image-container">
            <a class="blog_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" itemprop="url">
				<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima']) {?>
					<img class="img-fluid" src="<?php if ((isset($_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'])&&$_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url']!='')) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['preview_url'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" 
						 alt="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" 
						 title="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" 
						 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'])) {?>width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
						 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'])) {?> height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
						 itemprop="image" />
				<?php }?>
            </a>
        </div>
    </div>
    <div class="right-block">
    	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre']) {?>
			<div class="created">
				<time class="date" datetime="<?php echo htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"), ENT_QUOTES, 'UTF-8');?>
">
					<span class="day">
						<?php $_smarty_tpl->tpl_vars['blog_day'] = new Smarty_variable(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%d"), null, 0);?>
						<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['blog_day']->value,'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

					</span>
					<span class="month">/
						<?php $_smarty_tpl->tpl_vars['blog_month'] = new Smarty_variable(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%m"), null, 0);?>
						<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['blog_month']->value,'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

					</span>
					<span class="year">/
						<?php $_smarty_tpl->tpl_vars['blog_year'] = new Smarty_variable(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"), null, 0);?>						
						<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['blog_year']->value,'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

					</span>
				</time>
			</div>
		<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['show_title']) {?>
        	<h5 class="blog-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['title']),80,'...'), ENT_QUOTES, 'UTF-8');?>
</a></h5>
        <?php }?>
        <div class="blog-meta">
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut']) {?>
				<span class="author">
					<i class="icon-author ti-pencil-alt"></i><span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
				</span>
			<?php }?>		
			
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat']) {?>
				<span class="cat"> 
					<i class="icon-list ti-view-list"></i>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
				</span>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun']) {?>
				<span class="nbcomment">
					<i class="ti-comment icon-comment"></i><span><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value['comment_count']), ENT_QUOTES, 'UTF-8');?>
 </span>
				</span>
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits']) {?>
				<span class="hits">
					<i class="icon-hits ti-heart"></i><span><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value['hits']), ENT_QUOTES, 'UTF-8');?>
 </span>
				</span>	
			<?php }?>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_desc'])&&$_smarty_tpl->tpl_vars['formAtts']->value['show_desc']) {?>
	        <div class="blog-desc" itemprop="description">
	            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),160,'...'), ENT_QUOTES, 'UTF-8');?>

	        </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_desc'])&&$_smarty_tpl->tpl_vars['formAtts']->value['show_desc']) {?>
	        <a class="btn-more btn btn-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
	            <?php echo smartyTranslate(array('s'=>'Read more','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

	        </a>
        <?php }?>
    </div>
	<div class="hidden-xl-down hidden-xl-up datetime-translate">
		<?php echo smartyTranslate(array('s'=>'Sunday','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'Monday','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'Tuesday','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'Wednesday','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'Thursday','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'Friday','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'Saturday','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		
		<?php echo smartyTranslate(array('s'=>'January','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'February','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'March','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'April','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'May','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'June','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'July','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'August','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'September','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'October','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'November','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'December','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		
		<?php echo smartyTranslate(array('s'=>'st','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'nd','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'rd','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'th','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

	</div>
	
</div>

<?php }} ?>
