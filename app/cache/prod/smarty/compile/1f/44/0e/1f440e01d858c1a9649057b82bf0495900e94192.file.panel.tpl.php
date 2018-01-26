<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:54:28
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\appagebuilder\views\templates\admin\ap_page_builder_hook\panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230645a6a0bc470b729-09323390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f440e01d858c1a9649057b82bf0495900e94192' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_hook\\panel.tpl',
      1 => 1516894360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230645a6a0bc470b729-09323390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showed' => 0,
    'modules' => 0,
    'module' => 0,
    'moduleEditURL' => 0,
    'URI' => 0,
    'hookModules' => 0,
    'currentURL' => 0,
    'noModuleConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0bc4e7c6d7_76280448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0bc4e7c6d7_76280448')) {function content_5a6a0bc4e7c6d7_76280448($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['showed']->value==true) {?>
 
<div id="leo-page" class="clearfix">
	
	<div class="note">

		<p>+ <?php echo smartyTranslate(array('s'=>'Drop modules from hooks layouts to "<b>UnHook Modules</b>" Panel to unhook them','mod'=>'appagebuilder'),$_smarty_tpl);?>
. <?php echo smartyTranslate(array('s'=>'Drag and drop modules from hooks layouts to update theirs order and hook position','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
		<p>+  <?php echo smartyTranslate(array('s'=>'Override hook feature only applies for <b>HOOK_HEADERRIGHT, HOOK_SLIDESHOW, HOOK_TOPNAVIATION, HOOK_SLIDESHOW, HOOK_PROMOTETOP, HOOK_CONTENTBOTTOM, HOOK_BOTTOM</b>','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
		<p>+ <?php echo smartyTranslate(array('s'=>'Here only shows all of installed modules having hooks supportting for LeoTheme Layout.','mod'=>'appagebuilder'),$_smarty_tpl);?>

	</div>	
	<div class="leo-container holdposition" id="noposition">
		<div class="pos"><?php echo smartyTranslate(array('s'=>'UnHook Modules','mod'=>'appagebuilder'),$_smarty_tpl);?>
 </div>
		 <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
			<div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value->id,'html','UTF-8');?>
">
				<a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8');?>
"></a>
				<div class="leo-editmodule" rel="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value->author,'html','UTF-8');?>
">
				<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8');?>
/logo.png"/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8');?>

				</div>
			
			</div>
		 <?php } ?>
	</div>
    <div class="leotheme-layout">
        <div id="leo-header">
            <div id="leo-displaynav" class="leo-container overridehook" data-position="displayNav1"><div class="pos">HOOK_NAV1</div>
            <?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayNav1'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayNav1']['module_count']>0) {?>
            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayNav1']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?> 
            <?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
            <div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
                <a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

                </div>
            </div>
            <?php }?>
            <?php } ?>
            <?php }?>
            </div>
            
            
            <div id="leo-displaynav" class="leo-container overridehook" data-position="displayNav2"><div class="pos">HOOK_NAV2</div>
            <?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayNav2'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayNav2']['module_count']>0) {?>
            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayNav2']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?> 
            <?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
            <div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
                <a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

                </div>
            </div>
            <?php }?>
            <?php } ?>
            <?php }?>
            </div>
            
            
            <div id="leo-displaynav" class="leo-container overridehook" data-position="displayTop"><div class="pos">HOOK_TOP</div>
            <?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayTop'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayTop']['module_count']>0) {?>
            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayTop']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?> 
            <?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
            <div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
                <a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

                </div>
            </div>
            <?php }?>
            <?php } ?>
            <?php }?>
            </div>

            
            <div id="leo-displaynav" class="leo-container overridehook" data-position="displayNavFullWidth"><div class="pos">HOOK_NAV_FULLWIDTH</div>
            <?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayNavFullWidth'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayNavFullWidth']['module_count']>0) {?>
            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayNavFullWidth']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?> 
            <?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
            <div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
                <a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

                </div>
            </div>
            <?php }?>
            <?php } ?>
            <?php }?>
            </div>
		</div>
		
		
		<div id="leo-content" class="clearfix leo_top_25"  >
			<div id="leo-left" class="leo-container" data-position="displayLeftColumn"><div class="pos">HOOK_LEFT</div>
				<?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumn'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumn']['module_count']>0) {?>
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumn']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?> 
				<?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
				<div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
					<a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
					<div class="leo-editmodule">
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

					</div>
				</div>
				<?php }?>
				<?php } ?>
				<?php }?>
			</div>
            
            
			<div  id="leo-center" class="leo-container inner" data-position="displayHome" style="min-height:250px"><div class="pos">HOOK_HOME</div>
				<?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayHome'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayHome']['module_count']>0) {?>
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayHome']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
				<?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
				<div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
					<a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
					<div class="leo-editmodule">
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

					</div>
				</div>
				<?php }?>
				<?php } ?>
				<?php }?>
			</div>
			
			
			<div id="leo-right" class="leo-container" data-position="displayRightColumn"><div class="pos">HOOK_RIGHT</div>
				<?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumn'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumn']['module_count']>0) {?>
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumn']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
				<?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
				<div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
					<a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
					<div class="leo-editmodule">
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

					</div>
				</div>
				<?php }?>
				<?php } ?>
				<?php }?>
			</div>
		</div>
            
            
        <div id="leo-content" class="clearfix"  >
            <div id="leo-left" class="leo-container clearfix" data-position="displayLeftColumnProduct"><div class="pos">HOOK_PRODUCT_LEFT</div>
                <?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumnProduct'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumnProduct']['module_count']>0) {?>
                <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumnProduct']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?> 
                <?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
                <div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
                    <a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
                    <div class="leo-editmodule">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

                    </div>
                </div>
                <?php }?>
                <?php } ?>
                <?php }?>
            </div>
			<div id="leo-center"></div>
			<div id="leo-right" class="leo-container" data-position="displayRightColumnProduct"><div class="pos">HOOK_PRODUCT_RIGHT</div>
				<?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumnProduct'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumnProduct']['module_count']>0) {?>
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumnProduct']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
				<?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
				<div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
					<a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
					<div class="leo-editmodule">
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

					</div>
				</div>
				<?php }?>
				<?php } ?>
				<?php }?>
			</div>
        </div>


		<div id="leo-bottom" class="leo-container overridehook clearfix leo_top_25" data-position="displayFooterBefore">
            <div class="pos">HOOK_FOOTER_BEFORE</div>
            <?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayFooterBefore'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayFooterBefore']['module_count']>0) {?>
            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayFooterBefore']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
            <div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
                <a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

                </div>
            </div>
            <?php }?>
            <?php } ?>
            <?php }?>
		</div>

		<div id="leo-bottom" class="leo-container overridehook clearfix" data-position="displayFooter">
            <div class="pos">HOOK_FOOTER</div>
            <?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayFooter'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayFooter']['module_count']>0) {?>
            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayFooter']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
            <div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
                <a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

                </div>
            </div>
            <?php }?>
            <?php } ?>
            <?php }?>
		</div>

        
		<div id="leo-bottom" class="leo-container overridehook clearfix" data-position="displayFooterAfter">
            <div class="pos">HOOK_FOOTER_AFTER</div>
            <?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayFooterAfter'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayFooterAfter']['module_count']>0) {?>
            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayFooterAfter']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
            <div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
                <a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

                </div>
            </div>
            <?php }?>
            <?php } ?>
            <?php }?>
		</div>
        
        
		<div id="leo-bottom" class="leo-container overridehook clearfix" data-position="displayFooterProduct">
            <div class="pos">HOOK_FOOTER_PRODUCT</div>
            <?php if (isset($_smarty_tpl->tpl_vars['hookModules']->value['displayFooterProduct'])&&$_smarty_tpl->tpl_vars['hookModules']->value['displayFooterProduct']['module_count']>0) {?>
            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hookModules']->value['displayFooterProduct']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
            <div class="module-pos" id="module-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8');?>
" data-position="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8');?>
">
                <a class="editmod" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8');?>
&module_name=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
&configure=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
" data-mod="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8');?>
/logo.png"/>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8');?>

                </div>
            </div>
            <?php }?>
            <?php } ?>
            <?php }?>
		</div>
        
        

		
 
	
	
	<div class="clearfix"></div>
</div>
<div id="overidehook" style="display:none">
	<div id="oh-close">Close</div>
	<form action="<?php echo $_smarty_tpl->tpl_vars['currentURL']->value;?>
&action=overridehook" method="post">
	<p class="clearfix"><label><?php echo smartyTranslate(array('s'=>'Select override hook','mod'=>'appagebuilder'),$_smarty_tpl);?>
</lable><br>
	<select  name="name_hook">
		<option value="0"><?php echo smartyTranslate(array('s'=>'--- Use Self Hook ---','mod'=>'appagebuilder'),$_smarty_tpl);?>
</option>

	</select>
	
	
	<input type="hidden" name="hdidmodule" id="hdidmodule" value=""/>
        <input type="hidden" name="deshook" id="deshook" value=""/>
	<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'appagebuilder'),$_smarty_tpl);?>
" name="submit" />
	</p>
	</form>
</div>	
<script type="text/javascript">
$("#noposition").css("height",$(".leotheme-layout").height() );









// 2
$('#noposition.leo-container').sortable( {
    connectWith: ".leotheme-layout .leo-container",
    helper: function (e, li) {
        this.copyHelper = li.clone().insertAfter(li);
        $(this).data('copied', false);
        return li.clone();
    },
    stop: function () {
        var copied = $(this).data('copied');
        if (!copied) {
            this.copyHelper.remove();
        }
        this.copyHelper = null;
    }
});

$('.leotheme-layout .leo-container').sortable( {
    connectWith: "#noposition.leo-container, .leotheme-layout .leo-container",
    receive: function (e, ui) {
        ui.sender.data('copied', true);
    }
});


// 3




$(document).ready( function(){
	$('.adminappagebuilderhook').addClass('page-sidebar-closed');
//    $('#leohook_toolbar').hide();
	$("#desc-leohook-save, #page-header-desc-leohook-save").click( function(){
			//var string = 'rand='+Math.random();
			var string = '';
			var hook = '';
			$(".leotheme-layout .ui-sortable").each( function(){
				if( $(this).attr("data-position") && $(".module-pos",this).length>0) {
					string +="&position[]="+$(this).attr("data-position")+"|";
				 	hook += "&"+$(this).attr("data-position")+"=";
					$(".module-pos",this).each( function(){
						if( $(this).attr("id") != "" ){
							string += $(this).attr("id").replace("module-","")+",";
							hook += $(this).attr("data-position")+",";
						}				
					} );
					string = string.replace(/\,$/,"");
					hook = hook.replace(/\,$/,"");
				}	
			} );
			var unhook = '';
            var arr_unhook = [];
			$("#noposition .module-pos").each( function(){
                var id_position = $(this).attr("data-position");
                var id_module = $(this).attr("id").replace("module-","");
                
                if( arr_unhook[ id_module ] )
                {
                    // REMOVE MODULE AT MANY HOOK
                    arr_unhook[ id_module ] += ',' + id_position;
                }else
                {
                    arr_unhook[ id_module ] = id_position;
                }
                for( i=0; i < arr_unhook.length; i++)
                {
                    if(arr_unhook[i])
                    {
                      unhook += '&unhook['+i+']='+arr_unhook[i];
                    }
                }
			} );

			$.ajax({
			  type: 'POST',
			  url: $(this).attr("href"),
			  data: string+"&"+hook+unhook,
			  success: function(){
					window.location.reload(true);
			  }
			});
		return false; 
	} );
	
	$(".module-pos .edithook").bind("click", function(){
		var parent = $(this).parent(".module-pos");
	 
		$("#overidehook").css({
			"top":$(parent).offset().top-$("#overidehook").height()-$(parent).height(),
			"left":$(parent).offset().left 
		});
		var id = $(parent).attr("id").replace("module-","");
		$("#overidehook #hdidmodule").val( id );
                var leocontainer = $(this).closest("div.leo-container");
                $("#overidehook #deshook").val( leocontainer.data("position"));
	  	 $.ajax({ type:'POST',
				  url:'<?php echo $_smarty_tpl->tpl_vars['currentURL']->value;?>
&action=modulehook',
				  data:'id='+id,
				  success: function( data ){
					if( data.hooks ){
						var hooks = data.hooks.split("|");
						$("#overidehook select option").each( function(){
							if(  $(this).val() == 0 || $(this).val() == 1 ){}else{ $(this).remove(); }
						});
						for (i =0; i<hooks.length; i++){
						 $("#overidehook select").append('<option value="'+hooks[i]+'">'+hooks[i]+'</option>')
						}
					}
					if( !data.hasError) {
						$("#overidehook select option").each( function(){
							if( $(this).val() == data.hook ){ 
								$(this).attr("selected","selected" );
							}
						} );
					}
					$("#overidehook").show();
				  },
				  dataType:'json'
		 });
	} );
	$("#overidehook #oh-close").click( function() { $("#overidehook").hide(); } );
	$("#overidehook form").submit( function(){
		var string  =  $("#overidehook form").serialize();
		if( $("#overidehook #hdidmodule").val() ){
			$.ajax({ type:'POST',
					  url:$(this).attr("action"),
					  data:string,
					  success: function( data ){
						$("#overidehook").hide();
					  } 
			 });
		 }
		 return false; 
	});
} );	

$(".editmod").fancybox({
 	'type':'iframe',
 	'width':1024,
 	'height':500,
 	afterLoad:function()
    {
        if( $('body',$('.fancybox-iframe').contents()).find("#main").length  )
        {
            $('body',$('.fancybox-iframe').contents()).find("#header").hide();
            $('body',$('.fancybox-iframe').contents()).find("#footer").hide();
            $('body',$('.fancybox-iframe').contents()).find(".page-head, #nav-sidebar ").hide();
            $('body',$('.fancybox-iframe').contents()).find("#content.bootstrap").css( 'padding',0).css('margin',0);
        }else 
        { 
            $('body',$('.fancybox-iframe').contents()).find("#psException").html('<div class="alert error"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['noModuleConfig']->value,'html','UTF-8');?>
</div>');
        }
 	}
});
</script>
<?php }?><?php }} ?>
