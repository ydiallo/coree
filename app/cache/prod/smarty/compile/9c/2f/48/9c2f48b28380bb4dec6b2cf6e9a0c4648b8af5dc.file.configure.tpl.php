<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:54:15
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\appagebuilder\views\templates\admin\configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263445a6a0bb734d696-74126527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c2f48b28380bb4dec6b2cf6e9a0c4648b8af5dc' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\appagebuilder\\views\\templates\\admin\\configure.tpl',
      1 => 1516894360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263445a6a0bb734d696-74126527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'guide_box' => 0,
    'create_profile_link' => 0,
    'profile_link' => 0,
    'position_link' => 0,
    'product_link' => 0,
    'module_link' => 0,
    'back_up_file' => 0,
    'file' => 0,
    'backup_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0bb74a4763_19077835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0bb74a4763_19077835')) {function content_5a6a0bb74a4763_19077835($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\configure -->
<?php echo $_smarty_tpl->tpl_vars['guide_box']->value;?>

<div class="panel">
	<h3><i class="icon icon-book"></i> <?php echo smartyTranslate(array('s'=>'Documentation','mod'=>'appagebuilder'),$_smarty_tpl);?>
</h3>
	<p>
        &raquo; <?php echo smartyTranslate(array('s'=>'Before Start You can click here to read guide','mod'=>'appagebuilder'),$_smarty_tpl);?>
 :
        <ul>
            <li><a href="http://demothemes.info/prestashop/appagebuilder/guide/" target="_blank"><?php echo smartyTranslate(array('s'=>'Read Guide','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
        </ul>
		&raquo; <?php echo smartyTranslate(array('s'=>'You can start with Ap Page Builder following steps','mod'=>'appagebuilder'),$_smarty_tpl);?>
 :
		<ul>
			<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['create_profile_link']->value,'html','UTF-8');?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Create new Profile','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
		</ul>
		&raquo; <?php echo smartyTranslate(array('s'=>'Others management function:','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<ul>
			<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile_link']->value,'html','UTF-8');?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Manager Profile','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
				<span> - <?php echo smartyTranslate(array('s'=>'This function enables you to manage all profiles in the module. This function is useful when you\'re building plans before the home interface changes, the product page for the event discounts, holidays ... by changing the options Default profile','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
			</li>
			<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['position_link']->value,'html','UTF-8');?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Manager Position','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
				<span> - <?php echo smartyTranslate(array('s'=>'This function enables you to manage all of the position of all profiles. This function is useful when you have multiple profiles','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
			</li>
			<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product_link']->value,'html','UTF-8');?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Manager Product List Builder','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
				<span> - <?php echo smartyTranslate(array('s'=>'A function to help you design the details of the composition of the products displayed in the list of products on the website.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
			</li>
		</ul>
	</p>
</div>
<div class="panel">
	<h3>
        <i class="icon icon-credit-card"></i> <span class="open-content"><?php echo smartyTranslate(array('s'=>'Sample Data','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
        </h3>
        <div class="panel-content-builder">
            <p>
            <strong><?php echo smartyTranslate(array('s'=>'Here is my module page builder!','mod'=>'appagebuilder'),$_smarty_tpl);?>
</strong><br />
            <?php echo smartyTranslate(array('s'=>'Thanks to PrestaShop, now I have a great module.','mod'=>'appagebuilder'),$_smarty_tpl);?>
<br />
            <?php echo smartyTranslate(array('s'=>'You can configure it using the following configuration form.','mod'=>'appagebuilder'),$_smarty_tpl);?>

            </p>
            <div class="alert alert-info">
                <?php echo smartyTranslate(array('s'=>'You can click here to import demo data','mod'=>'appagebuilder'),$_smarty_tpl);?>

            </div>
            <a class="btn btn-default btn-primary" onclick="javascript:return confirm('<?php echo smartyTranslate(array('s'=>'Are you sure you want to install demo?','mod'=>'appagebuilder'),$_smarty_tpl);?>
')" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8');?>
&installdemo=1"><i class="icon-AdminTools"></i> <?php echo smartyTranslate(array('s'=>'Install Demo Data','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
            <br/><br/>
            <div class="alert alert-info">
                <?php echo smartyTranslate(array('s'=>'You can download demo image in','mod'=>'appagebuilder'),$_smarty_tpl);?>
<br/>
                <?php echo smartyTranslate(array('s'=>'Then you can unzip and copy folder appagebuilder to Root/themes/THEME_NAME/assets/img/modules','mod'=>'appagebuilder'),$_smarty_tpl);?>

            </div>
            <a class="btn btn-default btn-primary" href="http://demothemes.info/prestashop/appagebuilder/appagebuilder.zip"><i class="icon-AdminCatalog"></i> <?php echo smartyTranslate(array('s'=>'Demo Image','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a><br/>
						<br/><br/>
						
						
        </div>
</div>
<div class="panel">
	<h3>
        <i class="icon icon-credit-card"></i> <span class="open-content"><?php echo smartyTranslate(array('s'=>'Back-up and Update','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
        </h3>
        <div class="panel-content-builder">
            <div class="alert alert-info">
                <?php echo smartyTranslate(array('s'=>'Please click back-up button to back-up database','mod'=>'appagebuilder'),$_smarty_tpl);?>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn btn-default" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8');?>
&backup=1">
                        <i class="icon-AdminParentPreferences"></i> <?php echo smartyTranslate(array('s'=>'Back-up to PHP file','mod'=>'appagebuilder'),$_smarty_tpl);?>

                    </a>                
                </div>
                
            </div>
            <hr/><br/>
            <div class="alert alert-info">
                <?php echo smartyTranslate(array('s'=>'You can select a file by date backup to restore data','mod'=>'appagebuilder'),$_smarty_tpl);?>

            </div>
            <div class="row">
                <form class="defaultForm form-horizontal" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8');?>
" method="post" enctype="multipart/form-data" novalidate="">
                    <div class="col-sm-12">
                        <?php if ($_smarty_tpl->tpl_vars['back_up_file']->value) {?>
                            <select name="backupfile" style="width:50%">
                            <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['back_up_file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['file']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['file']->value,'html','UTF-8');?>
</option>
                            <?php } ?>
                            </select>
                        <?php } else { ?>
                            <i style="color:red"><?php echo smartyTranslate(array('s'=>'No file to select in : ','mod'=>'appagebuilder'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['backup_dir']->value;?>
</i>
                        <?php }?>
                        <br/>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-default" name="restore">
                        <?php echo smartyTranslate(array('s'=>'Restore from PHP file','mod'=>'appagebuilder'),$_smarty_tpl);?>

                        </button>
                    </div>
                </form>
            </div>
            <hr/><br/>
            <div class="alert alert-warning">
                <?php echo smartyTranslate(array('s'=>'Delete position do not use (fix error when create profile)','mod'=>'appagebuilder'),$_smarty_tpl);?>

            </div>
            <a class="btn btn-default" onclick="javascript:return confirm('<?php echo smartyTranslate(array('s'=>'Are you sure you want to Delete do not use position. Please back-up all thing before?','mod'=>'appagebuilder'),$_smarty_tpl);?>
')" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8');?>
&deleteposition=1">
                <i class="icon-AdminParentPreferences"></i> <?php echo smartyTranslate(array('s'=>'Delete do not use position','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
            <hr/><br/>
            <div class="alert alert-info">
                <?php echo smartyTranslate(array('s'=>'Please click on update and correct button to update module to latest version. Please backup database and file before process','mod'=>'appagebuilder'),$_smarty_tpl);?>

            </div>
            <a class="btn btn-default" onclick="javascript:return confirm('<?php echo smartyTranslate(array('s'=>'Are you sure you want to Update Database. Please back-up all things before?','mod'=>'appagebuilder'),$_smarty_tpl);?>
')" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8');?>
&submitUpdateModule=1">
                <i class="icon-AdminParentPreferences"></i> <?php echo smartyTranslate(array('s'=>'Update and Correct Module','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
						
        </div>
</div><?php }} ?>
