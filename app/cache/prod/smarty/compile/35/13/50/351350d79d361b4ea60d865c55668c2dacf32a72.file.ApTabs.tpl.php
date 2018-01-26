<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:22:35
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\modules\appagebuilder\views\templates\hook\product-tabs\ApTabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117385a6a044b427654-31340030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '351350d79d361b4ea60d865c55668c2dacf32a72' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\modules\\appagebuilder\\views\\templates\\hook\\product-tabs\\ApTabs.tpl',
      1 => 1516894366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117385a6a044b427654-31340030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_name' => 0,
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'subTabContent' => 0,
    'subTab' => 0,
    'path' => 0,
    'apContent' => 0,
    'apLiveEditEnd' => 0,
    'tabID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a044b7efe44_24968176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a044b7efe44_24968176')) {function content_5a6a044b7efe44_24968176($_smarty_tpl) {?>
 <!-- @file modules\appagebuilder\views\templates\hook\ApTabs -->
<?php if ($_smarty_tpl->tpl_vars['tab_name']->value=='ApTabs') {?>
<script type="text/javascript">
    ap_list_functions.push(function(){
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['fade_effect'])&&$_smarty_tpl->tpl_vars['formAtts']->value['fade_effect']) {?>
            // ACTION USE EFFECT
            $("#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 .tab-pane").addClass("fade");
        <?php }?>
            
        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['active_tab']>=0) {?>
            // ACTION SET ACTIVE
            $('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 .nav a:eq(<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['active_tab'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
)').trigger('click');
        <?php }?>

        $(document).ready(function() {
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['is_toggle'])&&$_smarty_tpl->tpl_vars['formAtts']->value['is_toggle']) {?>
                $("#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 .nav a").click(function (e) {
                    e.preventDefault();
                    if(!$(this).hasClass("active")) {
                        $("#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 .nav-tabs li a").removeClass("active");
                    }
                    $(this).toggleClass("active");
                    if($(this).hasClass("active")) {
                        $("#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 .tab-pane").addClass("in");
                        $($(this).attr("href")).addClass("in active");
                    } else {
                        $($(this).attr("href")).removeClass("in active");
                    }
                });
            <?php } else { ?>
                $('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 .nav a').click(function (e) {
                    e.preventDefault();
                    $(this).tab('show');
                });
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['active_tab']>=0) {?>
                apTabHref = $('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 .nav a:eq(<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['active_tab'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
)').tab('show');
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['fade_effect'])&&$_smarty_tpl->tpl_vars['formAtts']->value['fade_effect']) {?>
                $("#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 .tab-pane").addClass("fade");
                $($(apTabHref).attr("href")).addClass("in");
            <?php }?>
            
            ////js toggle tabs
            $('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 ul.nav-tabs li a').click(function(){
                if($(this).hasClass('active'))
                {
                    var tab_active = $(this).attr('data-tab');;
                    $('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 .product-tab-option option[value="' + tab_active + '"]').prop('selected', true);
                }
            });
            
            $('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 .product-tab-option').change(function(){
                var option_checked = $(this).find(':selected').attr('value');
                $('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 ul.nav-tabs li a[data-tab="' + option_checked + '"]').trigger('click');
            });

            //show tab when first load mobile
            $('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 ul.nav-tabs li').each(function(){
                if($(this).hasClass('active')){
                    $('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 .product-tab-option option.' + $(this).find('a').attr('value')).attr('selected','selected');
                }
            });

        });
    });
</script>
<div<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])) {?> id="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ApTab <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">

    <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>


    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>
    <!-- toggle tab -->
    <p class="box-select">
        <select class="product-tab-option form-control">
            <?php  $_smarty_tpl->tpl_vars['subTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subTabContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tab_option']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->key => $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tab_option']['index']++;
?>
                <option  value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tab_option']['index']==0) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </p>
    <!-- end toggle tab -->
    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type']=='tabs-left') {?>
        <div class="block_content">
            <div class="row">
                <ul class="nav nav-tabs col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-sp-12" role="tablist">
                    <?php  $_smarty_tpl->tpl_vars['subTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subTabContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->key => $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->_loop = true;
?>
                        <li class="nav-item <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['subTab']->value['css_class']) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                            <a href="#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-tab="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
                                <div class="left-block">
                                    <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['image'])&&$_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subTab']->value['title'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?>
                                </div>
                                <div class="right-block">
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

                                    <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title'])&&$_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                        <span class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</span>
                                    <?php }?>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <div class="tab-content col-xl-9 col-lg-8 col-md-12 col-sm-12 col-xs-12 col-sp-12">
                    <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

                </div>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type']=='tabs-right') {?>
        <div class="block_content">
            <div class="row">
                <div class="tab-content col-xl-9 col-lg-8 col-md-12 col-sm-12 col-xs-12 col-sp-12">
                    <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

                </div>
                <ul class="nav nav-tabs col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-sp-12" role="tablist">
                    <?php  $_smarty_tpl->tpl_vars['subTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subTabContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->key => $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->_loop = true;
?>
                        <li class="nav-item <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['subTab']->value['css_class']) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                            <a href="#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-tab="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
                                <div class="left-block">
                                    <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['image'])&&$_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subTab']->value['title'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?>
                                </div>
                                <div class="right-block">
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

                                    <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title'])&&$_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                        <span class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</span>
                                    <?php }?>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type']=='tabs-below') {?>
        <div class="block_content">
            <div class="tab-content">
                <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

            </div>
            <ul class="nav nav-tabs" role="tablist">
                <?php  $_smarty_tpl->tpl_vars['subTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subTabContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->key => $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->_loop = true;
?>
                    <li class="nav-item <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['subTab']->value['css_class']) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                        <a href="#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-tab="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
                            <div class="left-block">
                                <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['image'])&&$_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subTab']->value['title'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?>
                            </div>
                            <div class="right-block">
                                <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

                                <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title'])&&$_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                    <span class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</span>
                                <?php }?>
                            </div>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type']=='tabs-top') {?>
        <ul class="nav nav-tabs " role="tablist">
            <?php  $_smarty_tpl->tpl_vars['subTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subTabContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->key => $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->_loop = true;
?>
                <li class="nav-item <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['subTab']->value['css_class']) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                    <a href="#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-tab="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
                        <div class="left-block">
                            <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['image'])&&$_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subTab']->value['title'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?>
                        </div>
                        <div class="right-block">
                            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

                            <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title'])&&$_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                <span class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</span>
                            <?php }?>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <div class="clearfix border-title"></div>
        <div class="block_content">
            <div class="tab-content">
                <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

            </div>
        </div>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['tab_name']->value=='ApTab') {?>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tabID']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="tab-pane">
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

    </div>
<?php }?>
<?php }} ?>
