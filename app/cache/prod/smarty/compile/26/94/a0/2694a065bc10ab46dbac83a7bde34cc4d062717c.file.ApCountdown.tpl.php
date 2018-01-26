<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:08
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\modules\appagebuilder\views\templates\hook\\ApCountdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126295a6a034010c038-68131123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2694a065bc10ab46dbac83a7bde34cc4d062717c' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\modules\\appagebuilder\\views\\templates\\hook\\\\ApCountdown.tpl',
      1 => 1516894366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126295a6a034010c038-68131123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a034021b257_79947578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a034021b257_79947578')) {function content_5a6a034021b257_79947578($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApCountdown -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }?>
<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&$_smarty_tpl->tpl_vars['formAtts']->value['active']==1) {?>
        <div  id="countdown-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">

            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
                <h4 class="title_block">
                    <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>

                </h4>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['description'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['description'])) {?>
                <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['description'];?>

            <?php }?>


            <ul class="ap-countdown-time deal-clock lof-clock-11-detail list-inline"></ul>

            <p class="ap-countdown-link">
                <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['link'])&&$_smarty_tpl->tpl_vars['formAtts']->value['link']) {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['new_tab'])&&$_smarty_tpl->tpl_vars['formAtts']->value['new_tab']==1) {?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['link_label'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php }?>	
                    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['new_tab'])&&$_smarty_tpl->tpl_vars['formAtts']->value['new_tab']==0) {?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['link_label'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php }?>			
                <?php }?>
            </p>
        </div>

        <script type="text/javascript">
            ap_list_functions.push(function(){
                var text_d = '<?php echo smartyTranslate(array('s'=>'d','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
';
                var text_h = '<?php echo smartyTranslate(array('s'=>'h','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
';
                var text_m = '<?php echo smartyTranslate(array('s'=>'m','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
';
                var text_s = '<?php echo smartyTranslate(array('s'=>'s','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
';
                $(".lof-clock-11-detail").lofCountDown({
                    TargetDate:"<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['time_to'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
                    DisplayFormat:'<li class="z-depth-1">%%D%%<span>'+text_d+'</span></li><li class="z-depth-1">%%H%%<span>'+text_h+'</span></li><li class="z-depth-1">%%M%%<span>'+text_m+'</span></li><li class="z-depth-1">%%S%%<span>'+text_s+'</span></li>',
                });
            });
        </script>
    <?php }?>
<?php }?><?php }} ?>
