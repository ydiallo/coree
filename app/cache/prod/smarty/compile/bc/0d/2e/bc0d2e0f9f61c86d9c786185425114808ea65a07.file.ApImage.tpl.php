<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:07
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\modules\appagebuilder\views\templates\hook\\ApImage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90545a6a033fbb71a2-21990951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc0d2e0f9f61c86d9c786185425114808ea65a07' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\modules\\appagebuilder\\views\\templates\\hook\\\\ApImage.tpl',
      1 => 1516894366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90545a6a033fbb71a2-21990951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'path' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a033fd43126_75461195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a033fd43126_75461195')) {function content_5a6a033fd43126_75461195($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
<div id="image-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="block <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>


    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>
</h4>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['image'])&&$_smarty_tpl->tpl_vars['formAtts']->value['image']) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['url'])&&$_smarty_tpl->tpl_vars['formAtts']->value['url']) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['url'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['is_open'])&&$_smarty_tpl->tpl_vars['formAtts']->value['is_open'] ? 'target="_blank"' : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
>
        <?php }?>
        <img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])&&$_smarty_tpl->tpl_vars['formAtts']->value['animation']!='none' ? 'has-animation' : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])&&$_smarty_tpl->tpl_vars['formAtts']->value['animation']!='none') {?> data-animation="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['animation'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay']!='') {?> data-animation-delay="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
            title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title'] ? $_smarty_tpl->tpl_vars['formAtts']->value['title'] : ''),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
            alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((isset($_smarty_tpl->tpl_vars['formAtts']->value['alt'])&&$_smarty_tpl->tpl_vars['formAtts']->value['alt'] ? $_smarty_tpl->tpl_vars['formAtts']->value['alt'] : ''),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
	    style=" width:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((isset($_smarty_tpl->tpl_vars['formAtts']->value['width'])&&$_smarty_tpl->tpl_vars['formAtts']->value['width'] ? $_smarty_tpl->tpl_vars['formAtts']->value['width'] : 'auto'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
; 
			height:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((isset($_smarty_tpl->tpl_vars['formAtts']->value['height'])&&$_smarty_tpl->tpl_vars['formAtts']->value['height'] ? $_smarty_tpl->tpl_vars['formAtts']->value['height'] : 'auto'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />

        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['url'])&&$_smarty_tpl->tpl_vars['formAtts']->value['url']) {?>
        </a>
        <?php }?>
    <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['description'])&&$_smarty_tpl->tpl_vars['formAtts']->value['description']) {?>
            <div class='image_description'>
								<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['description'] ? $_smarty_tpl->tpl_vars['formAtts']->value['description'] : '';?>

            </div>
        <?php }?>
</div>
<?php }} ?>
