<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 09:28:56
         compiled from "C:\PRIVE\UwAmp\www\coree\admin463nbjepp\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281155a69a358e07297-97447014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '871d1eddfdbc27027006f721c31cecd49a81f1bf' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\admin463nbjepp\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1516871934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281155a69a358e07297-97447014',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a69a358e12492_51920225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a69a358e12492_51920225')) {function content_5a69a358e12492_51920225($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
