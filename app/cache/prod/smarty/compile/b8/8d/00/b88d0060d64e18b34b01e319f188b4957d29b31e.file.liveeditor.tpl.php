<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 17:26:25
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\leobootstrapmenu\views\templates\hook\liveeditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160915a6a1341202e62-68208202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b88d0060d64e18b34b01e319f188b4957d29b31e' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\leobootstrapmenu\\views\\templates\\hook\\liveeditor.tpl',
      1 => 1516894362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160915a6a1341202e62-68208202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'liveedit_action' => 0,
    'i' => 0,
    'widgets' => 0,
    'w' => 0,
    'group_title' => 0,
    'group_type' => 0,
    'link' => 0,
    'live_site_url' => 0,
    'action_backlink' => 0,
    'group_type_sub' => 0,
    'ajxgenmenu' => 0,
    'ajxmenuinfo' => 0,
    'action_widget' => 0,
    'action_loadwidget' => 0,
    'id_shop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a13413705e0_96539735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a13413705e0_96539735')) {function content_5a6a13413705e0_96539735($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\PRIVE\\UwAmp\\www\\coree\\vendor\\prestashop\\smarty\\plugins\\modifier.replace.php';
?>
<div id="page-content">
        <div id="menu-form" style="display: none; left: 340px; top: 15px; max-width:600px" class="popover top out form-setting">
            <div class="arrow"></div>
            <div style="display: block;" class="popover-title">
				<?php echo smartyTranslate(array('s'=>'Sub Menu Setting','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

                <span class="badge pull-right"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</span>
            </div>
            <div class="popover-content"> 
                <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['liveedit_action']->value;?>
" enctype="multipart/form-data" >
                    <div class="col-lg-12">	
                        <table class="table table-hover">
                            <tr>
                                <td><?php echo smartyTranslate(array('s'=>'Create Submenu','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</td>
                                <td>
                                    <select name="menu_submenu" class="menu_submenu">
                                        <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</option>
                                        <option value="1"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td><?php echo smartyTranslate(array('s'=>'Submenu Width','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</td>
                                <td>
                                    <input type="text" name="menu_subwidth" class="menu_subwidth"> 
                                </td>
                            </tr>
                            <tr class="group-submenu">
                                <td><?php echo smartyTranslate(array('s'=>'Group Submenu','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</td>
                                <td>
                                    <div id="submenu-form" >								
                                        <input type="hidden" name="submenu_id">
                                        <select name="submenu_group" class="submenu_group">
                                            <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</option>
                                            <option value="1"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</option>
                                        </select>	
                                    </div>
                                </td>
                            </tr>
                            <tr class="aligned-submenu">
                                <td><?php echo smartyTranslate(array('s'=>'Align Submenu','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</td>
                                <td>
                                    <div class="btn-group button-aligned">
                                        <button type="button" class="btn btn-default" data-option="aligned-left"><span class="icon icon-align-left"></span></button>
                                        <button type="button" class="btn btn-default" data-option="aligned-center"><span class="icon icon-align-center"></span></button>
                                        <button type="button" class="btn btn-default" data-option="aligned-right"><span class="icon icon-align-right"></span></button>
                                        <button type="button" class="btn btn-default" data-option="aligned-fullwidth"><span class="icon icon-align-justify"></span></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="button" class="add-row btn btn-success btn-sm"><?php echo smartyTranslate(array('s'=>'Add Row','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</button>
                                    <button type="button" class="remove-row btn btn-default  btn-sm"><?php echo smartyTranslate(array('s'=>'Remove Row','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</button>
                                    | <button type="button" class="add-col btn btn-success  btn-sm"><?php echo smartyTranslate(array('s'=>'Add Column','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</button>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="menu_id">
                    </div>
                </form>
            </div>
        </div>
        <div id="column-form" style="display: none; left: 340px; top: 45px;" class="popover top   form-setting">
            <div class="arrow"></div>
            <div style="display: block;" class="popover-title">
				<?php echo smartyTranslate(array('s'=>'Column Setting','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

                <span class="badge pull-right"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</span>
            </div>
            <div class="popover-content"> 
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['liveedit_action']->value;?>
"  enctype="multipart/form-data" >
                    <table class="table table-hover">
                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Addition Class','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</td>
                            <td>
                                <input type="text" name="colclass"> 
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Column Width','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</td>
                            <td>
                                <select class="colwidth" name="colwidth">                          
									<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
										<option value="<?php echo intval($_smarty_tpl->tpl_vars['i']->value);?>
"><?php echo intval($_smarty_tpl->tpl_vars['i']->value);?>
</option>
									<?php }} ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">	<button type="button" class="remove-col btn btn-default  btn-sm"><?php echo smartyTranslate(array('s'=>'Remove Column','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</button> </td>
                        </tr>	
                    </table>
                </form>
            </div>
        </div>

        <div id="widget-form" style="display: none; left: 340px; min-width:400px" class="popover bottom   form-setting">
            <div class="arrow"></div>
            <div style="display: block;" class="popover-title">
				<?php echo smartyTranslate(array('s'=>'Widget Setting','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

                <span class="badge pull-right"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</span>
            </div>
            <div class="popover-content">
				<?php if (!empty($_smarty_tpl->tpl_vars['widgets']->value)) {?>
					<select name="inject_widget" class="inject_widget"> 
                        <option value=""><?php echo smartyTranslate(array('s'=>'','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['w']->value['key_widget'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['w']->value['name'];?>

                            </option>
						<?php } ?>
					</select>
                    <button type="button" id="btn-inject-widget" class="btn btn-primary btn-sm"><?php echo smartyTranslate(array('s'=>'Insert','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</button>
				<?php } else { ?>
					<select style="display:none" name="inject_widget" class="inject_widget">
					</select>
					<button style="display:none" type="button" id="btn-inject-widget" class="btn btn-primary btn-sm"><?php echo smartyTranslate(array('s'=>'Insert','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</button>
				<?php }?>
				<button type="button" id="btn-create-widget" class="btn btn-primary btn-sm"><?php echo smartyTranslate(array('s'=>'Create New Widget','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</button>
            </div>
        </div>

        <div id="content-s">
            <div class="container">
                <div class="page-header">					
                    <h1><?php echo smartyTranslate(array('s'=>'Live Megamenu Editor: ','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['group_title']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['group_type']->value;?>
)</h1>
                </div>
                <div class="bs-example">
                    <div class="alert alert-danger fade in">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <strong><?php echo smartyTranslate(array('s'=>'By using this tool, allow to create sub menu having multiple rows and  multiple columns. You can inject widgets inside columns or group sub menus in same level of parent.Note: Some configurations as group, columns width setting will be overrided','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</strong>  
                    </div>
                </div>
            </div>
            <div id="pav-megamenu-liveedit">
                <div id="toolbar" class="container">
                    <div id="menu-toolbars">
                        <div>
                            <div class="pull-right">
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminLeoWidgets');?>
&widgets=1" class="leo-modal-action btn btn-modeal btn-info btn-action">
    <?php echo smartyTranslate(array('s'=>'List Widget','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</a>
                                -
                                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminLeoWidgets');?>
&addbtmegamenu_widgets&widgets=1" class="leo-modal-action btn btn-modeal btn-success btn-action">
    <?php echo smartyTranslate(array('s'=>'Create A Widget','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</a>
                                - 
                                <a href="<?php echo $_smarty_tpl->tpl_vars['live_site_url']->value;?>
" class="btn btn-modal btn-primary btn-sm btn-action" >
    <?php echo smartyTranslate(array('s'=>'Preview On Live Site','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</a> | 
                                <a id="unset-data-menu" href="#" class="btn btn-danger btn-action"><?php echo smartyTranslate(array('s'=>'Reset Configuration','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</a>
                                <button id="save-data-menu" class="btn btn-warning"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</button>
                            </div>
                            <a id="save-data-back" class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['action_backlink']->value;?>
">
    <?php echo smartyTranslate(array('s'=>'Back','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

                            </a>
                        </div>
                    </div>
                </div>

                <div class="container"><div class="megamenu-wrap">
                        <div class="progress" id="leo-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 00%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                        <div id="megamenu-content" class="<?php if (($_smarty_tpl->tpl_vars['group_type']->value=='vertical')) {?>vertical <?php echo $_smarty_tpl->tpl_vars['group_type_sub']->value;?>
<?php }?>">
                        </div></div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Preview On Live Site','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"></button>
            </div>
        </div> 
    </div> 
</div> 


<script type="text/javascript">
    $(".btn-modal").click(function() {
        $('#myModal .modal-dialog ').css('width', '100%');
        $('#myModal .modal-dialog ').css('height', '90%');
		
        var a = $('<span class="glyphicon glyphicon-refresh"></span><div class="cssload-container"><div class="cssload-speeding-wheel"></div></div><iframe src="' + $(this).attr('href') + '" style="width:100%;height:100%; display:none"/>');
        $('#myModal .modal-body').html(a);
		
        $('#myModal').modal();
        $('#myModal').attr('rel', $(this).attr('rel'));
        $(a).load(function() {

            $('#myModal .modal-body .glyphicon-refresh').hide();
			$('#myModal .modal-body .cssload-container').hide();
            $('#myModal .modal-body iframe').show();
			$('#myModal .modal-body').css('height', '85%');
			$('#myModal .modal-content ').css('height', '100%');
        });
        return false;
    });

    $('#myModal').on('hidden.bs.modal', function() {
        if ($(this).attr('rel') == 'refresh-page') {
            location.reload();
        }
    })

	var live_editor = true;
	var list_tab_live_editor = [];
    var _action = '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ajxgenmenu']->value,'&amp;','&');?>
';
    var _action_menu = '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ajxmenuinfo']->value,'&amp;','&');?>
';
    var _action_widget = '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['action_widget']->value,'&amp;','&');?>
';
	var _action_loadwidget = '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['action_loadwidget']->value,'&amp;','&');?>
';
    var _id_shop = '<?php echo $_smarty_tpl->tpl_vars['id_shop']->value;?>
';
    $("#megamenu-content").PavMegamenuEditor({
		"action": _action, 
		"action_menu": _action_menu, 
		"action_widget": _action_widget, 
		"id_shop": _id_shop,
	});

</script><?php }} ?>
