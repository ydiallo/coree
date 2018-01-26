<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 18:01:42
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\modules\leoblog\views\templates\hook\categories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304195a6a1b869422a4-11471353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7622d00cc650b44355de61d307df6010c67f929b' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\modules\\leoblog\\views\\templates\\hook\\categories_menu.tpl',
      1 => 1516894366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304195a6a1b869422a4-11471353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tree' => 0,
    'currentCategory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a1b8696b864_71680858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a1b8696b864_71680858')) {function content_5a6a1b8696b864_71680858($_smarty_tpl) {?>

<!-- Block categories module -->
    <?php if ($_smarty_tpl->tpl_vars['tree']->value) {?>
    <div id="categories_blog_menu" class="block blog-menu">
      <h4 class="title_block"><?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['currentCategory']->value->title,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Blog Categories','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<?php }?></h4>
        <div class="block_content">
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </div>
    </div>
    <?php }?>
    <!-- /Block categories module -->
<?php }} ?>
