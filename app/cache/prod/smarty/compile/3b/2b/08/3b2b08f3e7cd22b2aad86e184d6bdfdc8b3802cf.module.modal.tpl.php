<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:13
         compiled from "module:leofeature/views/templates/front/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193475a6a0345b65781-06563338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b2b08f3e7cd22b2aad86e184d6bdfdc8b3802cf' => 
    array (
      0 => 'module:leofeature/views/templates/front/modal.tpl',
      1 => 1516894362,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '193475a6a0345b65781-06563338',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0345b9c234_47143758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0345b9c234_47143758')) {function content_5a6a0345b9c234_47143758($_smarty_tpl) {?>
<div class="modal leo-modal leo-modal-cart fade" tabindex="-1" role="dialog" aria-hidden="true">
	<!--
	<div class="vertical-alignment-helper">
	-->
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title h6 text-xs-center leo-warning leo-alert">
				<i class="material-icons">info_outline</i>				
				<?php echo smartyTranslate(array('s'=>'You must enter a quantity','mod'=>'leofeature'),$_smarty_tpl);?>
		
			</h4>
			
			<h4 class="modal-title h6 text-xs-center leo-info leo-alert">
				<i class="material-icons">info_outline</i>				
				<?php echo smartyTranslate(array('s'=>'The minimum purchase order quantity for the product is ','mod'=>'leofeature'),$_smarty_tpl);?>
<strong class="alert-min-qty"></strong>		
			</h4>	
			
			<h4 class="modal-title h6 text-xs-center leo-block leo-alert">				
				<i class="material-icons">block</i>				
				<?php echo smartyTranslate(array('s'=>'There are not enough products in stock','mod'=>'leofeature'),$_smarty_tpl);?>

			</h4>
		  </div>
		  <!--
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
			
		  </div>
		  -->
		</div>
	  </div>
	<!--
	</div>
	-->
</div><?php }} ?>
