<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 17:00:03
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\modules\appagebuilder\views\templates\hook\blog\ApBlog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138625a6a0d13b4f196-87998024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1462496e235122caabed3cbc30033b2118cd14d8' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\modules\\appagebuilder\\views\\templates\\hook\\blog\\ApBlog.tpl',
      1 => 1516894366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138625a6a0d13b4f196-87998024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'products' => 0,
    'leo_helper' => 0,
    'leo_include_file' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0d13c54816_32055456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0d13c54816_32055456')) {function content_5a6a0d13c54816_32055456($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlog -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }?>
<?php } else { ?>

    <div id="blog-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="block latest-blogs exclusive appagebuilder <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
        <h4 class="title_block">
            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

        </h4>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <div class="block_content">	
            <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']=='boostrap') {?>
                    <div class="row">
                        <?php $_smarty_tpl->tpl_vars['leo_include_file'] = new Smarty_variable($_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('BlogCarousel.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']), null, 0);?>
                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['leo_include_file'] = new Smarty_variable($_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('BlogOwlCarousel.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']), null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
            <?php } else { ?>
                <p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No blog at this time.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>	
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_show'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_show']) {?>
                <div class="blog-viewall">
                    <a class="btn btn-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['leo_blog_helper']->getFontBlogLink(), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View all','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View all','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
                </div>
            <?php }?>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

    </div>
<?php }?><?php }} ?>
