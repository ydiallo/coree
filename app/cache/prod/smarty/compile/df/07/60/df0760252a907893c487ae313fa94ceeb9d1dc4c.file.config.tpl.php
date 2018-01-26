<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:11
         compiled from "modules\appagebuilder\views\templates\hook\config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158795a6a03436806f0-93493037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df0760252a907893c487ae313fa94ceeb9d1dc4c' => 
    array (
      0 => 'modules\\appagebuilder\\views\\templates\\hook\\config.tpl',
      1 => 1516894360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158795a6a03436806f0-93493037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ap_cf' => 0,
    'ap_cfdata' => 0,
    'cfdata' => 0,
    'ap_controller' => 0,
    'ap_type' => 0,
    'ap_current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a034375f751_92556316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a034375f751_92556316')) {function content_5a6a034375f751_92556316($_smarty_tpl) {?>
<div class="group-input group-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_cf']->value, ENT_QUOTES, 'UTF-8');?>
 clearfix">
		<label class="col-sm-12 control-label">
				<i class="fa fa-tags"></i>
				<?php if ($_smarty_tpl->tpl_vars['ap_cf']->value=='profile') {?>
						<?php echo smartyTranslate(array('s'=>'Home version','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value=='header') {?>
						<?php echo smartyTranslate(array('s'=>'Header version','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value=='footer') {?>
						<?php echo smartyTranslate(array('s'=>'Footer version','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value=='product') {?>
						<?php echo smartyTranslate(array('s'=>'Product version','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value=='content') {?>
						<?php echo smartyTranslate(array('s'=>'Content Home','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value=='product_builder') {?>
						<?php echo smartyTranslate(array('s'=>'Product Builder','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php }?>
		</label>
		<div class="col-sm-12">
            <?php  $_smarty_tpl->tpl_vars['cfdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cfdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ap_cfdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cfdata']->key => $_smarty_tpl->tpl_vars['cfdata']->value) {
$_smarty_tpl->tpl_vars['cfdata']->_loop = true;
?>
                <?php if (isset($_smarty_tpl->tpl_vars['cfdata']->value['friendly_url'])&&$_smarty_tpl->tpl_vars['cfdata']->value['friendly_url']!=''&&($_smarty_tpl->tpl_vars['ap_controller']->value=='index'||$_smarty_tpl->tpl_vars['ap_controller']->value=='appagebuilderhome')) {?>
                    
                    <a class="apconfig apconfig-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_cf']->value, ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['cfdata']->value['active']) {?> active<?php }?>" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_type']->value, ENT_QUOTES, 'UTF-8');?>
" data-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['id'], ENT_QUOTES, 'UTF-8');?>
' data-enableJS="false" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_current_url']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['friendly_url'], ENT_QUOTES, 'UTF-8');?>
.html"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php } elseif (($_smarty_tpl->tpl_vars['ap_controller']->value=='index'&&$_smarty_tpl->tpl_vars['ap_cf']->value=='profile')) {?>
                    
                    <a class="apconfig apconfig-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_cf']->value, ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['cfdata']->value['active']) {?> active<?php }?>" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_type']->value, ENT_QUOTES, 'UTF-8');?>
" data-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['id'], ENT_QUOTES, 'UTF-8');?>
' data-enableJS="true" data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_current_url']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_current_url']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['friendly_url'], ENT_QUOTES, 'UTF-8');?>
.html"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php } else { ?>
                    <a class="apconfig apconfig-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_cf']->value, ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['cfdata']->value['active']) {?> active<?php }?>" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_type']->value, ENT_QUOTES, 'UTF-8');?>
" data-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['id'], ENT_QUOTES, 'UTF-8');?>
' data-enableJS="true" href="index.php?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_type']->value, ENT_QUOTES, 'UTF-8');?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cfdata']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php }?>
            <?php } ?>
		</div>
</div><?php }} ?>
